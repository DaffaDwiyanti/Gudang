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
Route::get('gudang/keluar', 'gudangController@keluar');
Route::get('gudang/bkeluar', 'gudangController@bkeluar');

Route::get('gudang/barang', 'gudangController@barang');
Route::DELETE('gudang/barangHapus/{id}', 'gudangController@barangHapus')->name('gudang/barangHapus');
Route::resource('SimpanB', 'gudangController');


Route::get('sales', 'salesController@index');
Route::get('sales/masuk', 'salesController@masuk');
Route::get('sales/keluar', 'salesController@keluar');
Route::get('sales/bkeluar', 'salesController@bkeluar');
Route::get('sales/barang', 'salesController@barang');

Route::get('sales/bmasuk', 'salesController@bmasuk');
// Route::resource('sales/bmasuk/{id}', 'salesController@bmasukKranjang');

