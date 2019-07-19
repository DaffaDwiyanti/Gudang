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

Route::resource('gudang', 'gudangController');

