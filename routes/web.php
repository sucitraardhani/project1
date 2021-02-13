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
    return view('dashboards.index');
});

Route::get('/login', '\App\Http\Controllers\AuthController@login');
Route::post('/postlogin', '\App\Http\Controllers\AuthController@postlogin');
Route::get('/logout', '\App\Http\Controllers\AuthController@logout');

Route::get('/dashboard','\App\Http\Controllers\DashboardController@index');
Route::get('/anggota','\App\Http\Controllers\AnggotaController@index');
Route::post('/anggota/create', '\App\Http\Controllers\AnggotaController@create');
Route::get('/anggota/{id}/edit', '\App\Http\Controllers\AnggotaController@edit');
Route::post('/anggota/{id}/update', '\App\Http\Controllers\AnggotaController@update');
Route::get('/anggota/{id}/delete', '\App\Http\Controllers\AnggotaController@delete');

Route::get('/periode', '\App\Http\Controllers\PeriodeController@index');
Route::post('/periode/create', '\App\Http\Controllers\PeriodeController@create');
Route::post('/periode/create', '\App\Http\Controllers\PeriodeController@create');
Route::get('/periode/{id}/edit', '\App\Http\Controllers\PeriodeController@edit');
Route::post('/periode/{id}/update', '\App\Http\Controllers\PeriodeController@update');
Route::get('/periode/{id}/delete', '\App\Http\Controllers\PeriodeController@delete');

Route::get('/jenistrx', '\App\Http\Controllers\JenistrxController@index');
Route::post('/jenistrx/create', '\App\Http\Controllers\JenistrxController@create');
Route::get('/jenistrx/{id}/edit', '\App\Http\Controllers\JenistrxController@edit');
Route::post('/jenistrx/{id}/update', '\App\Http\Controllers\JenistrxController@update');
Route::get('/jenistrx/{id}/delete', '\App\Http\Controllers\JenistrxController@delete');

Route::get('/simpanan', '\App\Http\Controllers\SimpananController@index');
Route::post('/simpanan/create', '\App\Http\Controllers\SimpananController@store');
Route::get('/simpanan/create', '\App\Http\Controllers\SimpananController@create');
Route::get('/simpanan/{id}/edit', '\App\Http\Controllers\SimpananController@edit');
Route::post('/simpanan/{id}/update', '\App\Http\Controllers\SimpananController@update');
Route::get('/simpanan/{id}/delete', '\App\Http\Controllers\SimpananController@delete');
Route::get('/simpanbunga', '\App\Http\Controllers\BungaController@index');
Route::get('/simpanbunga/hitung', '\App\Http\Controllers\BungaController@hitung');


Route::get('/mutasitransaksi', '\App\Http\Controllers\MutasiController@index');
Route::post('/mutasitransaksi/hasilmutasi', '\App\Http\Controllers\MutasiController@hasilmutasi');
// Route::post('/mutasitransaksi/hasilmutasi', '\App\Http\Controllers\MutasiController@store');
Route::post('/mutasitransaksi/create', '\App\Http\Controllers\MutasiController@create');





