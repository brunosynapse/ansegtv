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
});

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});
