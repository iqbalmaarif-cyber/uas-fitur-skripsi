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
    return view('welcome');
});

Route::get('mahasiswa','mahasiswaController@index'); 
Route::post('mahasiswa/create','mahasiswaController@create');
Route::get('mahasiswa/{id}/edit','mahasiswaController@edit');
Route::post('mahasiswa/{id}/update','mahasiswaController@update');
Route::get('mahasiswa/{id}/delete','mahasiswaController@delete');


Route::get('skripsi','skripsiController@yandex');
Route::post('skripsi/create','skripsiController@create');
Route::get('skripsi/{id}/edit','skripsiController@edit');
Route::post('skripsi/{id}/update','skripsiController@update');
Route::get('skripsi/{id}/delete','skripsiController@delete');
