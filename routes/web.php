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
Route::get('/home', function () {
    return view('dashboard');
});
Route::get('/stok','HomeController@barang')->name('r-Barang');
Route::post('/inputBarang','HomeController@saveBarang')->name('i-Barang');
Route::get('/editBarang/{id}', 'HomeController@editStok')->name('e-Stok');
Route::post('/updateBarang', 'HomeController@updateStok')->name('u-Stok');
Route::get('/deleteBarang/{id}', 'HomeController@deleteStok')->name('d-Stok');

Route::get('/transaksiPenjualan','HomeController@transaksi')->name('t-Barang');
Route::post('/saveTransaksi','HomeController@saveTransaksi')->name('t-Barang');

Route::get('/transaksiPembelian','HomeController@pembelian')->name('t-pembelian');
Route::post('/savePembelian','HomeController@savePembelian')->name('t-pembelian');


Route::get('/cetakLaporan','HomeController@cetakLaporan')->name('c-laporan');
Route::get('/cetakTransaksi','HomeController@cetakTransaksi')->name('c-transaksi');
Route::get('/cetakPemasukan','HomeController@cetakPemasukan')->name('c-pemasukan');

Route::get('/formKatalog','HomeController@katalog')->name('katalog');
Route::post('/insertKatalog', 'HomeController@insertKatalog')->name('i-katalog');

Auth::routes();

Route::get('/tes', 'HomeController@index')->name('home');