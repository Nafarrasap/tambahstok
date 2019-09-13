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
    // return view('welcome');
    echo "Selamat Datang Nafarras";
});
Route::get('/satu', function () {
    // return view('welcome');
    echo "one";
});
Route::get('/dua', function () {
    // return view('welcome');
    echo "two";
});
Route::get('/tiga', function () {
    // return view('welcome');
    echo "three";
});
Route::get('/empat', function () {
    // return view('welcome');
    echo "four";
});
Route::get('/lima', function () {
    // return view('welcome');
    echo "five";
});
Route::get('/enam', function () {
    // return view('welcome');
    echo "six";
});
Route::get('/tujuh', function () {
    // return view('welcome');
    echo "seven";
});
Route::get('/delapan', function () {
    // return view('welcome');
    echo "eight";
});
Route::get('/sembilan', function () {
    // return view('welcome');
    echo "nine";
});

// 1 echo langsung nested
Route::get('/sepuluh', function () {
    // return view('welcome');
    echo "ten";
});

// 2.manggil view
Route::get('/nemplate',function(){
  return view('template');
  // lokasiview
});

// 3.ManggilController
Route::get('/usang', 'usang@index');
/* file controllernya namanya UsangController
nama url Usang
index nama functionnya
*/
Route::get('/jeruk','usang@rebus');

Route::resource('kontak', 'Kontak');
Route::get('/',function(){
  return view('index');
});

Route::get('/CleaningService', 'CleanerController@index');

Route::get('login','Login@index');
Route::post('login/cek','Login@index');
Route::get('/','Dashboard@index');
Route::get('/logout','login@logout');
Route::resource('/satpam', 'Satpam');
Route::resource('/kabupaten', 'kabupaten');
Route::resource('/penjualan', 'penjualan');
Route::resource('/barang','barang');
Route::resource('/pembelian','pembelian');
