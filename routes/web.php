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
    return view('index0215');
});

Route::get('/peminjam', function () {
    return view('peminjam');
});
Route::get('/databuku', 'App\Http\Controllers\BukuController@index');
Route::get('/dataanggota', 'App\Http\Controllers\BukuController@index');