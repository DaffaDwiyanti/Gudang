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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('barangs', 'barangController');

Route::resource('barangKeluars', 'barangKeluarController');

Route::resource('keluarDetails', 'keluarDetailController');



Route::resource('masukDetails', 'masukDetailController');

Route::resource('orders', 'orderController');

Route::resource('supliers', 'suplierController');

Route::resource('targets', 'targetController');

Route::resource('barangMasuks', 'barangMasukController');

Route::resource('orders', 'orderController');

Route::resource('sales', 'salesController');

Route::resource('gudangs', 'gudangController');


Route::get('gudang', 'gudangController@index')->name('gudang');
Route::get('gudang/masuk', 'gudangController@masuk');
Route::get('gudang/bmasuk', 'gudangController@bmasuk');
Route::get('gudang/bmasuk/{id}', 'gudangController@bmasukKranjang');
Route::get('gudang/masukD/{id}', 'gudangController@masukDetail')->name('gudang/masukD/');
Route::post('gudang/bmasuk/checkout','gudangController@checkout')->name('gudang/bmasuk/checkout');
Route::get('gudang/keluarD/{id}', 'gudangController@keluarDetail')->name('gudang/keluarD/');


Route::get('gudang/keluar', 'gudangController@keluar');
Route::get('gudang/bkeluar', 'gudangController@bkeluar');

Route::get('gudang/barang', 'gudangController@barang');
Route::PATCH('gudang/update/{id}', 'gudangController@updateB')->name('gudang/updateB');
Route::post('gudang/barangEdit/{id}', 'gudangController@barangEdit')->name('gudang/barangEdit');
Route::DELETE('gudang/barangHapus/{id}', 'gudangController@barangHapus')->name('gudang/barangHapus');
Route::resource('SimpanB', 'gudangController');


Route::resource('sales', 'salesController');
Route::resource('order', 'ordersController');
Route::resource('target', 'targetsController');


Route::resource('jenisKeluars', 'JenisKeluarController');

Route::resource('jenisMasuks', 'JenisMasukController');