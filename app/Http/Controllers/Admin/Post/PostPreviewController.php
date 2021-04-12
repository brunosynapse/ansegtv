<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use App\Services\IncrementCounterViewPostService;
use App\Services\SeoToolsPostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostPreviewController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, String $slug)
    {
        $post = Post::findOrFailBySlug($slug);
        $relatedPosts = Post::where('category_id', $post->category_id)->where('id', '!=', $post->id)->take(4)->get();

        SeoToolsPostService::handle($post);
        IncrementCounterViewPostService::handle($post);

        return view('admin.pages.posts.preview', compact('post', 'relatedPosts'));
    }
}
