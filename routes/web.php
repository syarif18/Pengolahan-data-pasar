<?php

use App\Http\Controllers\BabakanController;
use App\Http\Controllers\BatikController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CalonPedagangController;
use App\Http\Controllers\CalonSewaController;
use App\Http\Controllers\CiledugController;
use App\Http\Controllers\CipeujeuhController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardAdminPasarController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DataPasarController;
use App\Http\Controllers\InformasiUserController;
use App\Http\Controllers\JamblangController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\KueController;
use App\Http\Controllers\LapakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PalimananController;
use App\Http\Controllers\PasalaranController;
use App\Http\Controllers\PasarController;
use App\Http\Controllers\PedagangController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\SewaUserController;
use App\Http\Controllers\SumberController;
use App\Http\Controllers\TentangController;
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

// Route Untuk Login
Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');




// Route Untuk Halaman Admin
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function(){

    Route::get('admin', [DashboardAdminController::class, 'index']);

    Route::resource('data_admin', DataAdminController::class);

    Route::resource('data_pasar', DataPasarController::class);
    // Route::get('data_pasar/create', [DataPasarController::class, 'create']);

    Route::resource('konten', KontenController::class);
    // Route::get('konten/checkSlug', [KontenController::class . 'checkSlug']);

    Route::resource('calon_sewa', CalonSewaController::class);

    Route::resource('palimanan', PalimananController::class);

    Route::resource('jamblang', JamblangController::class);

    Route::resource('sumber', SumberController::class);

    Route::resource('batik', BatikController::class);

    Route::resource('kue', KueController::class);

    Route::resource('pasalaran', PasalaranController::class);

    Route::resource('babakan', BabakanController::class);

    Route::resource('cipeujeuh', CipeujeuhController::class);

    Route::resource('ciledug', CiledugController::class);

});

// Route Untuk Admin Pasar
Route::group(['middleware' => ['auth', 'ceklevel:pengelola']], function () {
    Route::get('admin_pasar', [DashboardAdminPasarController::class, 'index']);

    Route::resource('pedagang', PedagangController::class);

    Route::resource('lapak', LapakController::class);

    Route::resource('calon_pedagang', CalonPedagangController::class);

    Route::resource('sewa', SewaUserController::class);

    Route::resource('informasi', InformasiUserController::class);

});


// Route Untuk User
Route::group(['middleware' => ['auth', 'ceklevel:user']], function(){
    Route::get('user', [DashboardUserController::class, 'index']);

    Route::resource('profile', ProfileUserController::class);


});

// Route Untuk Landing Page
Route::get('/', [BerandaController::class, 'index']);

Route::get('berita', [BeritaController::class, 'index']);

Route::get('pasar', [PasarController::class, 'index']);

Route::get('kontak', [KontakController::class, 'index']);

Route::get('about', [TentangController::class, 'index']);
