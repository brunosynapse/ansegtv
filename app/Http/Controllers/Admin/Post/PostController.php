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
        $type =  PostStatusType::getInstances();
        $statusType = PostStatusType::$TYPES;
        $postsCount = new Post;
        $posts = Post::filter($request->all())->orderBy('created_at', 'DESC')->paginateFilter(15);

        return view(
            'admin/pages/posts/index',
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
        $categories = Category::all();
        $edition = false;

        return view('admin/pages/posts/create-edit', compact('edition','categories', 'statusType', 'positionType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        if($position = $request->highlight_position){
            Post::highlight($position)
                ->update(['highlight_position' => null]);
        }

        $data = $request->all();

        if($request->hasFile('image'))
        {
            $upload = new UploadService();

            $originalImageName = $request->image->getClientOriginalName();

            $data['image'] = $upload
                ->setKey('image')
                ->setFolder('images/posts')
                ->single($request, $originalImageName)['path'];
        }

        $data['path'] = Str::slug($data['title'], '-');

        Post::create($data);

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $positionType = PostPositionType::$TYPES;
        $statusType = PostStatusType::$TYPES;
        $categories = Category::all();
        $edition = true;

        return view('admin/pages/posts/create-edit', compact('post', 'edition', 'categories', 'statusType', 'positionType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostRequest $request
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        if($position = $request->highlight_position){
            $featuredPost = Post::highlight($position);
            if($featuredPost && $featuredPost->id =! $post->id){
                $featuredPost->update(['highlight_position' => null]);
            }
        }

        $data = $request->all();

        $data['path'] = Str::slug($data['title'], '-');

        if($request->hasFile('image'))
        {
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
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index');
    }

    public function imageUpload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName);
            $msg = 'Sua Imagem foi enviada!';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    public function deleteMainImage(int $id){
        Post::find($id)->update(['image' => null]);

        return redirect()->back();
    }
}
