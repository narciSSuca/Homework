<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['namespace' => 'App\Http\Controllers'], function () {
      Route::get('news', 'NewsController@index'); //все новости
      Route::get('news/{id}', 'NewsController@show'); //одна новость
      Route::post('news', 'NewsController@store'); //создание новости
      Route::put('news/{id}', 'NewsController@update'); //создание апдейт
      Route::delete('news/{id}', 'NewsController@destroy'); //удаление
});
