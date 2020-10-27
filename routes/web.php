<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'middleware'=> [],
    'prefix' => '',
    'namespace' => 'Site',
    'as' => 'site.'
], function(){
    Route::resource('/', 'HomeController');
    Route::resource('/postagens', 'PostController');
    Route::resource('/participe', 'CasesController');
});

Route::get('/noticia-teste', function () {
    return view('site/pages/posts');
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
    Route::resource('/categories', 'Category\CategoryController');
    Route::resource('/cases', 'Cases\CasesController');
    Route::post('/cases-downloads', 'Cases\CasesController@downloadFile')->name('cases.downloads');
});

Route::group([
    'prefix' => 'laravel-filemanager',
    'middleware' => ['web']
],function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
