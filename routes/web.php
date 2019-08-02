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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });


Route::resource('dashboard', 'dashboardController');

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

Route::resource('orders', 'orderController');

Route::resource('orders', 'orderController');

Route::resource('orders', 'orderController');

Route::get('bkeluar', 'barangKeluarController@blanja');
Route::get('blistk', 'barangKeluarController@blistk');
Route::get('bmasuk', 'barangMasukController@bmasuk');
