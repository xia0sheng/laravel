<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ArticleController@index');
Route::get('live', 'LiveController@index');
Route::get('bootstrap', 'BootstrapController@index');
Route::get('articles/create', 'ArticleController@create');
Route::post('articles/store', 'ArticleController@store');
Route::get('articles/{id}', 'ArticleController@show');

//Route::get('/', function () {
//    return view('welcome');
//});

