<?php

namespace App\Http\Controllers\Admin\Post;
use App\Enums\PostStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Services\UploadService;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $postsCount = Post::count();

        $publishedPosts = Post::where('status', 'Publicado' )->count();

        $peddingPosts = Post::where('status', 'Pendente')->count();
        $draftPosts = Post::where('status', 'Rascunho')->count();
        $posts = Post::filter($request->all())->paginateFilter(15);

        return view(
            'admin/pages/posts/index',
            compact('posts', 'postsCount', 'publishedPosts', 'peddingPosts', 'draftPosts')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        $edition = false;

        return view('admin/pages/posts/create-edit', compact('edition','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $upload = new UploadService();

        $data = $request->all();

        if($request->hasFile('image'))
        {
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $edition = true;

        return view('admin/pages/posts/create-edit', compact('post', 'edition', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
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
     * @param  int  $id
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
            $extension = $request->file('upload')->getClientOriginalExtenorar();
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
}
