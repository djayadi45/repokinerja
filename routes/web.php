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
    return view('/auth/login');
});

Route::get('/beranda', 'BerandaController@index')->middleware('auth');

//route Login
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('logout', 'AuthController@logout');

Route::get('/float', function () {
    return view('float');
});

Route::get('/pegawai', function () {
    $nama = 'Halaman Pegawai';
    return view('pegawai', ['nama' => $nama]);
});



Route::delete('/deksplorasi/{id}', 'DeskplorasiController@destroy')->middleware('auth');
Route::delete('deksplorasi/{id}', 'DeskplorasiController@delete')->middleware('auth');
Route::get('/deksplorasi', 'DeskplorasiController@index')->middleware('auth');
Route::get('/deksplorasi/{{deksplorasi}}', 'DeskplorasiController@show')->middleware('auth');
Route::get('/deksplorasi/create', 'DeskplorasiController@create')->middleware('auth');
Route::post('/deksplorasi', 'DeskplorasiController@store')->middleware('auth');
Route::delete('/deksplorasi/{deksplorasi}', 'DeskplorasiController@destroy')->middleware('auth');
Route::get('/deksplorasi/{deksplorasi}/edit', 'DeskplorasiController@edit')->middleware('auth');
Route::patch('/deksplorasi/{deksplorasi}', 'DeskplorasiController@update')->middleware('auth');


Route::delete('/dlabbatubara/{id}', 'DlabbatubaraController@destroy')->middleware('auth');
Route::delete('dlabbatubara/{id}', 'DlabbatubaraController@delete')->middleware('auth');
Route::get('/dlabbatubara', 'DlabbatubaraController@index')->middleware('auth');
Route::get('/dlabbatubara/{{dlabbatubara}}', 'DlabbatubaraController@show')->middleware('auth');
Route::get('/dlabbatubara/create', 'DlabbatubaraController@create')->middleware('auth');
Route::post('/dlabbatubara', 'DlabbatubaraController@store')->middleware('auth');
Route::delete('/dlabbatubara/{dlabbatubara}', 'DlabbatubaraController@destroy')->middleware('auth');
Route::get('/dlabbatubara/{dlabbatubara}/edit', 'DlabbatubaraController@edit')->middleware('auth');
Route::patch('/dlabbatubara/{dlabbatubara}', 'DlabbatubaraController@update')->middleware('auth');

Route::delete('/faktorkompetensi/{id}', 'FaktorKompetensiController@destroy')->middleware('auth');
Route::delete('faktorkompetensi/{id}', 'FaktorKompetensiController@delete')->middleware('auth');
Route::get('/faktorkompetensi', 'FaktorKompetensiController@index')->middleware('auth');
Route::get('/faktorkompetensi/{{faktorKompetensi}}', 'FaktorKompetensiController@show')->middleware('auth');
Route::get('/faktorkompetensi/create', 'FaktorKompetensiController@create')->middleware('auth');
Route::post('/faktorkompetensi', 'FaktorKompetensiController@store')->middleware('auth');
Route::delete('/faktorkompetensi/{faktorkompetensi}', 'FaktorKompetensiController@destroy')->middleware('auth');
Route::get('/faktorkompetensi/{faktorKompetensi}/edit', 'FaktorKompetensiController@edit')->middleware('auth');
Route::patch('/faktorkompetensi/{faktorKompetensi}', 'FaktorKompetensiController@update')->middleware('auth');

Route::delete('/indikatorkompetensi/{id}', 'IndikatorKompetensiController@destroy')->middleware('auth');
Route::delete('indikatorkompetensi/{id}', 'IndikatorKompetensiController@delete')->middleware('auth');
Route::get('/indikatorkompetensi', 'IndikatorKompetensiController@index')->middleware('auth');
Route::get('/indikatorkompetensi/{{indikatorkompetensi}}', 'IndikatorKompetensiController@show')->middleware('auth');
Route::get('/indikatorkompetensi/create', 'IndikatorKompetensiController@create')->middleware('auth');
Route::post('/indikatorkompetensi', 'IndikatorKompetensiController@store')->middleware('auth');
Route::delete('/indikatorkompetensi/{indikatorkompetensi}', 'IndikatorKompetensiController@destroy')->middleware('auth');
Route::get('/indikatorkompetensi/{indikatorKompetensi}/edit', 'IndikatorKompetensiController@edit')->middleware('auth');
Route::patch('/indikatorkompetensi/{indikatorKompetensi}', 'IndikatorKompetensiController@update')->middleware('auth');


Route::get('/pendeksplorasi', 'PendeksplorasiController@index')->middleware('auth');


Route::get('/pendlabbatubara', 'PendlabbatubaraController@index')->middleware('auth');
Route::get('/pendlabbatubara/{dlabbatubara}/nilai', 'PendlabbatubaraController@nilai')->middleware('auth');
Route::post('/pendlabbatubara', 'PendlabbatubaraController@store')->middleware('auth');
Route::post('/pendlabbatubara/savePenilaian/', 'PendlabbatubaraController@savePenilaian')->middleware('auth');