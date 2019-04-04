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

Route::get('/', function () {
    return view('welcome');
});

Route::get('category', 'CategoryController@index');

Route::get('/edit/edit/', 'CategoryController@edit');

Route::post('/datakategori/update','CategoryController@update');

Route::get('/hapus/destroy/', 'CategoryController@destroy');
