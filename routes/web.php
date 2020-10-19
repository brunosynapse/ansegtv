<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site/pages/teste');
});

Route::group([
   'middleware'=> [],
   'prefix' => 'admin',
   'namespace' => 'Admin',
   'as' => 'admin.'
], function(){
    Route::resource('/', 'Dashboard\DashboardController');
    Route::resource('/posts', 'Post\PostController');
    Route::post('/posts/ckeditor/upload', 'Post\PostController@imageUpload')
        ->name('ckeditor.image-upload');
    Route::resource('/tags', 'Tag\TagController');
    Route::resource('/comments', 'Comment\CommentController');
    Route::resource('/categories', 'Category\CategoryController');
    Route::resource('/cases', 'Cases\CasesController');
    Route::post('/cases-downloads', 'Cases\CasesController@downloadFile')->name('cases.downloads');
});
