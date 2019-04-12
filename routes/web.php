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

Route::get('home', 'JadwalController@index');

Route::get('/edit/edit/{id_jadwal}', 'JadwalController@edit');

Route::post('/datakategori/update','JadwalController@update');

Route::get('/hapus/destroy/{id_jadwal}', 'JadwalController@destroy');

Route::get('tambah', 'JadwalController@insert');

Route::post('/tambah/jadwal', 'JadwalController@jadwal');

Route::get('carijadwal', 'JadwalController@search');



Route::get('mobil', 'MobilController@index');

Route::get('/edit/mobil/{id_mobil}', 'MobilController@edit');

Route::post('/mobil/update','MobilController@update');

Route::get('/hapus/mobil/{id_mobil}', 'MobilController@destroy');

Route::get('tambahmobil', 'MobilController@insert');

Route::post('/tambah/mobil', 'MobilController@mobil');

Route::get('carimobil', 'MobilController@search');



Route::get('paket', 'PaketController@index');

Route::get('/edit/paket/{id_paket}', 'PaketController@edit');

Route::post('/paket/update','PaketController@update');

Route::get('/hapus/paket/{id_paket}', 'PaketController@destroy');

Route::get('tambahpaket', 'PaketController@insert');

Route::post('/tambah/paket', 'PaketController@paket');

Route::get('caripaket', 'PaketController@search');



Route::get('fasilitas', 'FasilitasController@index');

Route::get('/edit/fasilitas/{id_fasilitas}', 'FasilitasController@edit');

Route::post('/fasilitas/update','FasilitasController@update');

Route::get('/hapus/fasilitas/{id_fasilitas}', 'FasilitasController@destroy');

Route::get('tambahfasilitas', 'FasilitasController@insert');

Route::post('/tambah/fasilitas', 'FasilitasController@fasilitas');

Route::get('carifasilitas', 'FasilitasController@search');



Route::get('customer', 'CustomerController@index');

Route::get('/edit/customer/{id_customer}', 'CustomerController@edit');

Route::post('/customer/update','CustomerController@update');

Route::get('/hapus/customer/{id_customer}', 'CustomerController@destroy');

Route::get('tambahcustomer', 'CustomerController@insert');

Route::post('/tambah/customer', 'CustomerController@customer');

Route::get('caricustomer', 'CustomerController@search');



Route::get('pembimbing', 'PembimbingController@index');

Route::get('/edit/pembimbing/{id_pembimbing}', 'PembimbingController@edit');

Route::post('/pembimbing/update','PembimbingController@update');

Route::get('/hapus/pembimbing/{id_pembimbing}', 'PembimbingController@destroy');

Route::get('tambahpembimbing', 'PembimbingController@insert');

Route::post('/tambah/pembimbing', 'PembimbingController@pembimbing');

Route::get('caripembimbing', 'PembimbingController@search');



Route::get('Form', 'LoginController@index');

Route::post('/post/login', 'LoginController@loginpost');

Route::get('logout', 'LoginController@logout');
