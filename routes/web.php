<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DaftarController\destroy;

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

Route::get('base', function () {
    return view('template/base');
});

// Halaman Utama
Route::get('home', function () {
    return view('home');
});

// Halaman Daftar
Route::get('/daftar', 'App\Http\Controllers\daftarController@index');

// Halaman Tambah
Route::get('daftar/tambah', "App\Http\Controllers\DaftarController@create");
Route::post('/daftar/store', 'App\Http\Controllers\DaftarController@store');

// Halaman Edit
Route::get('/daftar/edit/{id}', 'App\Http\Controllers\DaftarController@edit');
Route::post('daftar/update', 'App\Http\Controllers\DaftarController@update');

// cara kedua
// Route::get('daftar-test/edit/{id}', [DaftarController::class, 'edit']);

// Rote deleted
Route::get('/daftar/destroy/{id}', [DaftarController::class, 'destroy']);
// Route::get('/daftar/delete/{id}', 'App\Http\Controllers\DaftarController@destroy');
