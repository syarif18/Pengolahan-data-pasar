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

// Route Untuk Halaman Admin

// Route::get('/', function () {
//     return view('admin.dashboard_admin');
// });

Route::get('admin', function () {
    return view('admin.dashboard-admin');
});


// Route Untuk Admin Pasar
Route::get('admin_pasar', function () {
    return view('admin_pasar.adashboard_pasar');
});


// Route Untuk User
Route::get('user', function () {
    return view('user.dashboard-user');
});


// Route Untuk Landing Page
Route::get('/', function () {
    return view('landing.landing_page');
});

Route::get('berita', function () {
    return view('landing.pages.berita');
});

Route::get('pasar', function () {
    return view('landing.pages.pasar');
});

Route::get('kontak', function () {
    return view('landing.pages.kontak');
});

Route::get('about', function () {
    return view('landing.pages.about');
});

// Route Untuk Landing Page
