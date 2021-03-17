<?php

namespace App\Http\Controllers\Site\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $filteredPosts = Post::filter($request->all())->active()->latest()->paginateFilter(15);

        return view('site.pages.search.search', compact('filteredPosts'));
    }
}
