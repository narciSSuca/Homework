<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace'=>'App\Http\Controllers'], function () {
      Route::get('posts', 'PostsController@GetPosts');
      Route::get('posts/{id}', 'PostsController@ViewPosts');
      Route::post('posts', 'PostsController@AddPosts');
      Route::post('posts/edit/{id}', 'PostsController@EditPost');
});




// Route::get('posts/{id}', 'App\Http\Controllers\PostsController@ViewPosts');
//
// Route::post('posts', 'App\Http\Controllers\PostsController@AddPosts');
//
// Route::post('posts/edit/{id}', 'App\Http\Controllers\PostsController@EditPost');
