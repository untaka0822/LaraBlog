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

// 送信方法($_GETか$_REQUEST)
// get
Route::get('articles', 'ArticlesController@index'); // 前がパス、後ろが書かれている場所
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');
Route::post('articles/index', 'ArticlesController@store'); 
Route::get('articles/{id}/edit', 'ArticlesController@edit');  // 追加
Route::patch('articles/{id}', 'ArticlesController@update');  // 追加