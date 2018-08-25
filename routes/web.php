<?php

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

Route::get('/', 'IndexController@getIndex');
Route::post('/', 'IndexController@postIndex');


Route::get('/create', 'IndexController@getCreate');
Route::post('/create', 'IndexController@postCreate');


Route::get('/show', 'IndexController@getShow');

Route::get('/edit/{id}', 'IndexController@getEdit');
Route::post('/edit/{id}', 'IndexController@postEdit');

Route::get('/delete/{id}', 'IndexController@getDelete');

Route::get('/1T1', 'IndexController@get1T1');

