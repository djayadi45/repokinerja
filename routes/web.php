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


Route::delete('/deksplorasi/{id}', 'DeskplorasiController@destroy');
Route::delete('deksplorasi/{id}', 'DeskplorasiController@delete');
Route::get('/deksplorasi', 'DeskplorasiController@index');
Route::get('/deksplorasi/{{deksplorasi}}', 'DeskplorasiController@show');
Route::get('/deksplorasi/create', 'DeskplorasiController@create');
Route::post('/deksplorasi', 'DeskplorasiController@store');
Route::delete('/deksplorasi/{deksplorasi}', 'DeskplorasiController@destroy');
Route::get('/deksplorasi/{deksplorasi}/edit', 'DeskplorasiController@edit');
Route::patch('/deksplorasi/{deksplorasi}', 'DeskplorasiController@update');


Route::delete('/dlabbatubara/{id}', 'DlabbatubaraController@destroy');
Route::delete('dlabbatubara/{id}', 'DlabbatubaraController@delete');
Route::get('/dlabbatubara', 'DlabbatubaraController@index');
Route::get('/dlabbatubara/{{dlabbatubara}}', 'DlabbatubaraController@show');
Route::get('/dlabbatubara/create', 'DlabbatubaraController@create');
Route::post('/dlabbatubara', 'DlabbatubaraController@store');
Route::delete('/dlabbatubara/{dlabbatubara}', 'DlabbatubaraController@destroy');
Route::get('/dlabbatubara/{dlabbatubara}/edit', 'DlabbatubaraController@edit');
Route::patch('/dlabbatubara/{dlabbatubara}', 'DlabbatubaraController@update');

Route::delete('/faktorkompetensi/{id}', 'FaktorKompetensiController@destroy');
Route::delete('faktorkompetensi/{id}', 'FaktorKompetensiController@delete');
Route::get('/faktorkompetensi', 'FaktorKompetensiController@index');
Route::get('/faktorkompetensi/{{faktorKompetensi}}', 'FaktorKompetensiController@show');
Route::get('/faktorkompetensi/create', 'FaktorKompetensiController@create');
Route::post('/faktorkompetensi', 'FaktorKompetensiController@store');
Route::delete('/faktorkompetensi/{faktorkompetensi}', 'FaktorKompetensiController@destroy');
Route::get('/faktorkompetensi/{faktorKompetensi}/edit', 'FaktorKompetensiController@edit');
Route::patch('/faktorkompetensi/{faktorKompetensi}', 'FaktorKompetensiController@update');
