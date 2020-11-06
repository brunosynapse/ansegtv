<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Site',
    'as' => 'site.'
], function(){
    Route::resource('/', 'HomeController');
    Route::resource('/postagens', 'PostController');
    Route::resource('/participe', 'CasesController');
});

Route::group([
   'middleware'=> ['auth'],
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
    'middleware' => ['auth']
],function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['prefix' => 'admin'], function () {
    Auth::routes(['register' => false]);
});
