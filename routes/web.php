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
    return view('dashboard');
});
Route::get('/stok', function () {
    return view('Stock.stockForm');
});
Route::get('/transaksiPenjualan', function () {
    return view('Transaksi.transaksiPenjualan');
});
Route::get('/transaksiPembelian', function () {
    return view('Transaksi.transaksiPembelian');
});

Auth::routes();

Route::get('/tes', 'HomeController@index')->name('home');