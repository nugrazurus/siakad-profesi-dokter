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
    return view('landingpage');
});
Route::get('login/dosen', 'LoginController@showLoginDosen')->name('get.login-dosen');
Route::post('login/dosen', 'LoginController@loginDosen')->name('post.login-dosen');
Route::get('login/mahasiswa', 'LoginController@showLoginMahasiswa')->name('get.login-mahasiswa');
Route::post('login/mahasiswa', 'LoginController@loginMahasiswa')->name('post.login-mahasiswa');
Route::post('logout', 'LoginController@logout')->name('logout');


Route::prefix('dosen')->middleware('login.dosen')->name('dosen.')->group(function () {
    Route::get('/', 'DosenController@index')->name('dashboard');

    // Route Entri Nilai
    Route::get('/entri-nilai', 'DosenController@entriNilai')->name('entri-nilai');
    Route::get('/entri-nilai/{idjadwal}', 'DosenController@detailEntriNilai')->name('entri-nilai-detail');

    // Route Resource Nilai Stase
    Route::prefix('nilai-stase')->name('nilai-stase.')->group(function () {
        Route::get('/{id}', 'NilaiStaseController@show')->name('show');
        Route::post('/', 'NilaiStaseController@store')->name('store');
        Route::put('/{id}', 'NilaiStaseController@update')->name('update');
        Route::delete('/{id}', 'NilaiStaseController@destroy')->name('destroy');
    });
});
Route::prefix('mahasiswa')->middleware('login.mahasiswa')->name('mahasiswa')->group(function () {
});
