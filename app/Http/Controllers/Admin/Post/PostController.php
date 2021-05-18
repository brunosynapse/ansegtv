<?php

namespace App\Http\Controllers\Admin\Post;

use App\Enums\PostPositionType;
use App\Enums\PostStatusType;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Services\UploadService;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = PostStatusType::getInstances();
        $statusType = PostStatusType::$TYPES;
        $postsCount = new Post;
        $posts = Post::filter($request->all())->latest()->paginateFilter(15);

        return view(
            'admin.pages.posts.index',
            compact('posts', 'postsCount', 'type', 'statusType')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positionType = PostPositionType::$TYPES;
        $statusType = PostStatusType::$TYPES;
        $categories = Category::all('name', 'id');
        $edition = false;

        return view('admin.pages.posts.create-edit', compact('edition', 'categories', 'statusType', 'positionType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->all();

        if (isset($data['status'])) {
            if ($data['status'] == PostStatusType::PENDING && now() >= Carbon::parse($data['created_at'])) {
                $data['status'] = PostStatusType::DRAFT;
            }

        }

        if(now() < Carbon::parse($data['created_at']) && isset($data['status']) && $data['status'] != PostStatusType::DRAFT) {
            $data['status'] = PostStatusType::PENDING;

            Log::channel('post_save')->info('Uma notícia: foi agendada pelo usuário de id: '.Auth::id());


            if ($position = $request->highlight_position) {
                $data['highlight_position_scheduled'] = $position;

                Log::channel('post_save')->info('Uma notícia foi agendada com a posição de destaque: '. $position.' pelo usuário de id: '.Auth::id());
                $data['highlight_position'] = null;
            }
        } else {
            if ($position = $request->highlight_position) {
                $featuredPost = Post::highlight($position)->first();
                if ($featuredPost) {
                    $featuredPost->update(['highlight_position' => null]);
                }
            }
        };

        if ($request->hasFile('image')) {
            $upload = new UploadService();

            $originalImageName = $request->image->getClientOriginalName();

            $data['image'] = $upload
                ->setKey('image')
                ->setFolder('images/posts')
                ->single($request, $originalImageName)['path'];
        }

        $data['user_id'] = Auth::id();

        $data['path'] = Str::slug($data['title'], '-');

        Post::create($data);

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $positionType = PostPositionType::$TYPES;
        $statusType = PostStatusType::$TYPES;
        $categories = Category::all();
        $edition = true;

        return view('admin.pages.posts.create-edit', compact('post', 'edition', 'categories', 'statusType', 'positionType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostRequest $request
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->all();

        if(isset($data['status'])) {
            if ($data['status'] == PostStatusType::PENDING && now() >= Carbon::parse($data['created_at'])) {
                $data['status'] = PostStatusType::DRAFT;
            }
        }


        if(now() < Carbon::parse($data['created_at']) && isset($data['status']) && $data['status'] != PostStatusType::DRAFT) {
            $data['status'] = PostStatusType::PENDING;

            Log::channel('post_save')->info('A notícia de id: '.$post->id . ' foi agendada pelo usuário de id: '.Auth::id());

            if ($position = $request->highlight_position) {
                $data['highlight_position_scheduled'] = $position;

                Log::channel('post_save')->info('A notícia de id: '.$post->id . ' foi agendada com a posição de destaque: '. $position.' pelo usuário de id: '.Auth::id());
                $data['highlight_position'] = null;
            }
        }else {
            if ($position = $request->highlight_position) {
                $featuredPost = Post::highlight($position)->first();
                if ($featuredPost && $featuredPost->id != $post->id) {
                    $featuredPost->update(['highlight_position' => null]);
                }
            }
        }

        $data['created_at'] = Carbon::parse($data['created_at']);

        $data['path'] = Str::slug($data['title'], '-');

        if ($request->hasFile('image')) {
            $upload = new UploadService();

            $originalImageName = $request->image->getClientOriginalName();

            $upload
                ->removeFilePah($post->image);

            $data['image'] = $upload
                ->setKey('image')
                ->setFolder('images/posts')
                ->single($request, $originalImageName)['path'];
        }

        $post->update($data);

        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index');
    }

    public function imageUpload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/' . $fileName);
            $msg = 'Sua Imagem foi enviada!';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    public function deleteMainImage(int $id)
    {
        $upload = new UploadService;

        $post = Post::find($id);

        $upload->removeFilePah($post->image);

        $post->timestamps = false;
        $post->image = null;
        $post->save();

        return redirect()->back();
    }
}
