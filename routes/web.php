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
    return view('index');
});

Route::get('/siswa', 'SiswaController@index');                 //<-- Route Halaman utama
Route::post('/siswa/create', 'SiswaController@create');        //<-- Route Membuat Sebuah Data
Route::get('/siswa/{id}/edit', 'SiswaController@edit');        //<-- Route Halaman Edit Data
Route::post('/siswa/{id}/update', 'SiswaController@update');   //<-- Route Edit Sebuah Data
Route::get('/siswa/{id}/delete', 'SiswaController@delete');    //<-- Route Delete Sebuah Data

// Author Mohammad Sahrullah
// Laravel 5