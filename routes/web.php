<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/table', function () {
    return view('app/table');
});

Route::group([
   'middleware'=> [],
   'prefix' => 'admin',
   'namespace' => 'Admin',
   'as' => 'admin.'
], function(){
    Route::get('/', function () {
        return view('app/dashboard');
    });
});
