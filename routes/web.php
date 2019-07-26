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

Route::get('/', 'HomeController@index');
Route::get('/loop', 'HomeController@loop');
Route::post('/save', 'ProductController@store');
Route::get('/delete', 'ProductController@destory');
Route::get('/update', 'ProductController@update');
Route::get('/json', 'HomeController@json')->name('json');
