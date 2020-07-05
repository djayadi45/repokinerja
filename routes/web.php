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

Route::get('/', function () {
    $nama = 'BERANDA';
    return view('welcome', ['nama' => $nama]);
});

Route::get('/float', function () {
    return view('float');
});

Route::get('/pegawai', function () {
    $nama = 'Halaman Pegawai';
    return view('pegawai', ['nama' => $nama]);
});

Route::get('/penilaian', function () {
    $nama = 'Halaman Penilaian';
    return view('penilaian', ['nama' => $nama]);
});

// Route::get('/deksplorasi', function () {
//     $nama = 'Divisi Eksplorasi';
//     return view('deksplorasi', ['nama' => $nama]);
// });
Route::get('/deksplorasi', 'DeskplorasiController@index');

Route::get('/dlabbatubara', function () {
    $nama = 'Divisi/Lab Batubara';
    return view('dlabbatubara', ['nama' => $nama]);
});