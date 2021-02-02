<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group([
   'middleware'=> ['auth'],
   'prefix' => 'admin',
   'namespace' => 'Admin',
   'as' => 'admin.'
], function(){
    Route::resource('/posts', 'Post\PostController');
    Route::resource('/users', 'User\UserController');
    Route::post('/users-role/{id}', 'User\UserController@updateUserRole')
        ->name('users.role');
    Route::resource('/categories', 'Category\CategoryController');
    Route::post('/posts/ckeditor/upload', 'Post\PostController@imageUpload')
        ->name('ckeditor.image-upload');
    Route::post('/post/{id}/edit/delete-main-image', 'Post\PostController@deleteMainImage')
        ->name('posts.delete.main-image');
});

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

Route::group([
    'namespace' => 'Site',
    'as' => 'site.'
], function(){
    Route::resource('/', 'Home\HomeController');
    Route::get('/ansegtv', 'Statics\AboutController');
    Route::get('/estrutura', 'Statics\StructureController');
    Route::get('/parcerias', 'Statics\PartnershipsController');
    Route::get('/contato', 'Statics\ContactController');
    Route::resource('/noticias', 'Post\PostController');
});
