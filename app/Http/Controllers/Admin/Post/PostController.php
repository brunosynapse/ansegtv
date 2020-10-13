<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $publishedPostsCount = Post::where('status', 'Publicado')->get()->count();
        $draftPostsCount = Post::where('status', 'Rascunho')->get()->count();
        $peddingPostsCount = Post::where('status', 'Pendente')->get()->count();
        $postsCount = Post::all()->count();
        $posts = Post::paginate(15);

        return view(
            'admin/pages/posts/index',
            compact('posts', 'publishedPostsCount', 'draftPostsCount', 'peddingPostsCount', 'postsCount')
        );
        */
        $posts = Post::find(1);
        dd($posts->Tags);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edition = false;

        return view('admin/pages/posts/create-edit', compact('edition'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
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
    public function edit($id)
    {
        $edition = true;
        $post = Post::find($id);

        if(!$post)
            return abort(404);

        return view('admin/pages/posts/create-edit', compact('post', 'edition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datas = $request->all();
        $post = Post::find($id);

        if(!$post)
            return abort(404);

        $post->update($datas);

        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Category::find($id);

        if(!$post)
            abort(404);

        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
