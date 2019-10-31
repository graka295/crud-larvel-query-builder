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

Route::get('/', 'UserController@index');
Route::get('/user', 'UserController@index');
Route::get('/user/create', 'UserController@create');
Route::post('/user/post/{id}', 'UserController@post');
Route::post('/user/post', 'UserController@post');
Route::get('/user/update/{id}', 'UserController@update');
Route::get('/user/delete/{id}', 'UserController@delete');