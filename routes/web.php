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

Route::get('admin', function () {
    return view('admin.dashboard-admin');
});

Route::get('user', function () {
    return view('user.dashboard-user');
});

Route::get('/data-admin', function () {
    return view('admin.pages.data-admin');
});

Route::get('/data_pasar', function () {
    return view('admin.pages.data_pasar');
});

Route::get('/data_penyewa', function () {
    return view('admin.pages.data_penyewa');
});

Route::get('/konten', function () {
    return view('admin.pages.konten.konten');
});

Route::get('/tambah_konten', function () {
    return view('admin.pages.konten.tambah_konten');
});
