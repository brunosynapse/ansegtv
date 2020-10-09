<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site/pages/teste');
});

Route::get('/table', function () {
    return view('admin/pages/table');
});

Route::group([
   'middleware'=> [],
   'prefix' => 'admin',
   'namespace' => 'Admin',
   'as' => 'admin.'
], function(){
    Route::resource('/', 'Dashboard\DashboardController');
    Route::resource('/posts', 'Post\PostController');
    Route::resource('/tags', 'Tag\TagController');
    Route::resource('/comments', 'Comment\CommentController');
    Route::resource('/categories', 'Category\CategoryController');
});
