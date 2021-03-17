<?php

namespace App\Http\Controllers\Site\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\SeoToolsPostService;
use App\Services\IncrementCounterViewPostService;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $posts = new Post;
        $filteredPosts = Post::filter($request->all())->active()->latest()->paginateFilter(1);

        return view('site.pages.posts.index', compact('posts', 'filteredPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return Response
     */
    public function show(string $slug)
    {
        $post = Post::findOrFailBySlug($slug);
        $relatedPosts = Post::where('category_id', $post->category_id)->where('id', '!=', $post->id )->take(4)->get();

        SeoToolsPostService::handle($post);
        IncrementCounterViewPostService::handle($post);

        return view('site.pages.posts.show', compact('post', 'relatedPosts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
