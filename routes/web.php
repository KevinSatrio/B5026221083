<?php

use Illuminate\Support\Facades\Route;

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
//Profile
Route::get('/', function () {
    return view('Profile/welcome');
});
Route::get('hello', function () {
	return view('Profile/hello');
});
Route::get('js1', function () {
	return view('Profile/js1');
});
Route::get('js2', function () {
	return view('Profile/js2');
});
Route::get('link', function () {
	return view('Profile/link');
});
Route::get('responsive', function () {
	return view('Profile/responsive');
});
Route::get('style', function () {
	return view('Profile/style');
});
Route::get('validasi', function () {
	return view('Profile/validasi');
});


//Tutorials
Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('/halo2', function () {
    return "<h1>HALO APA KABAR</h1>";
});
Route::get('blog', function () {
	return view('blog');
});
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');


//CRUD Pegawai
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');


//CRUD Nilai Kuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilaikuliah/tambahdata','App\Http\Controllers\NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');


//CRUD Tas
Route::get('/tasindex','App\Http\Controllers\TasController@index');
Route::get('/tasindex/tambahdatatas','App\Http\Controllers\TasController@tambah');
Route::post('/tasindex/store','App\Http\Controllers\TasController@store');
Route::get('/tasindex/edit/{kodetas}','App\Http\Controllers\TasController@edit');
Route::post('/tasindex/update','App\Http\Controllers\TasController@update');
Route::get('/tasindex/hapus/{kodetas}','App\Http\Controllers\TasController@hapus');
Route::get('/tasindex/view/{kodetas}','App\Http\Controllers\TasController@view');
Route::get('/tasindex/cari','App\Http\Controllers\TasController@cari');


//CRUD Keranjang
Route::get('/keranjangindex','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangindex/tambahkeranjang','App\Http\Controllers\KeranjangController@tambah');
Route::post('/keranjangindex/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangindex/hapus/{ID}','App\Http\Controllers\KeranjangController@hapus');
