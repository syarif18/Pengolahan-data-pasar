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
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\PalimananController;
use App\Http\Controllers\PasalaranController;
use App\Http\Controllers\PasarController;
use App\Http\Controllers\PedagangController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\SewaUserController;
use App\Http\Controllers\SumberController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\DataPedagangController;
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

Route::get('registrasi', [RegistrasiController::class, 'index'])->name('registrasi');
Route::post('registrasi', [RegistrasiController::class, 'store']);




Route::group(['middleware' => ['auth', 'ceklevel:admin,kabid']], function(){

    Route::get('admin', [DashboardAdminController::class, 'index']);

    Route::resource('calon_sewa', CalonSewaController::class);

    Route::resource('palimanan', PalimananController::class);
    Route::post('palimananpdf', [PalimananController::class, 'pedagangpdf'])->name('palimananpdf');
    Route::post('exportpalimanan', [PalimananController::class, 'pedagangExport'])->name('exportpalimanan');

    Route::resource('jamblang', JamblangController::class);
    Route::post('jamblangpdf', [JamblangController::class, 'pedagangpdf'])->name('jamblangpdf');
    Route::post('exportjamblang', [JamblangController::class, 'pedagangExport'])->name('exportjamblang');

    Route::resource('sumber', SumberController::class);
    Route::post('sumberpdf', [SumberController::class, 'pedagangpdf'])->name('sumberpdf');
    Route::post('exportSumber', [SumberController::class, 'pedagangExport'])->name('exportSumber');

    Route::resource('batik', BatikController::class);
    Route::post('batikpdf', [BatikController::class, 'pedagangpdf'])->name('batikpdf');
    Route::post('exportBatik', [BatikController::class, 'pedagangExport'])->name('exportBatik');

    Route::resource('kue', KueController::class);
    Route::post('kuepdf', [KueController::class, 'pedagangpdf'])->name('kuepdf');
    Route::post('exportKue', [KueController::class, 'pedagangExport'])->name('exportKue');

    Route::resource('pasalaran', PasalaranController::class);
    Route::post('pasalaranpdf', [PasalaranController::class, 'pedagangpdf'])->name('pasalaranpdf');
    Route::post('exportPasalaran', [PasalaranController::class, 'pedagangExport'])->name('exportPasalaran');

    Route::resource('babakan', BabakanController::class);
    Route::post('babakanpdf', [BabakanController::class, 'pedagangpdf'])->name('babakanpdf');
    Route::post('exportBabakan', [BabakanController::class, 'pedagangExport'])->name('exportBabakan');

    Route::resource('cipeujeuh', CipeujeuhController::class);
    Route::post('cipeujeuhpdf', [CipeujeuhController::class, 'pedagangpdf'])->name('cipeujeuhpdf');
    Route::post('exportCipeujeuh', [CipeujeuhController::class, 'pedagangExport'])->name('exportCipeujeuh');

    Route::resource('ciledug', CiledugController::class);
    Route::post('ciledugpdf', [CiledugController::class, 'pedagangpdf'])->name('ciledugpdf');
    Route::post('exportCiledug', [CiledugController::class, 'pedagangExport'])->name('exportCiledug');
});

// Route Untuk Halaman Admin
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function(){


    Route::resource('data_admin', DataAdminController::class);

    Route::resource('data_pasar', DataPasarController::class);
    // Route::get('data_pasar/create', [DataPasarController::class, 'create']);

    Route::resource('konten', KontenController::class);
    // Route::get('konten/checkSlug', [KontenController::class . 'checkSlug']);

    Route::get('tentang', [TentangController::class, 'adminindex'])->name('tentang');

    // Route::resource('data_pedagang', DataPedagangController::class);


});

// Route Untuk Admin Pasar
Route::group(['middleware' => ['auth', 'ceklevel:pengelola']], function () {
    Route::get('admin_pasar', [DashboardAdminPasarController::class, 'index']);

    Route::resource('pedagang', PedagangController::class);
    Route::post('exportpedagang', [PedagangController::class, 'pedagangExport'])->name('exportpedagang');
    Route::post('pedagangpdf', [PedagangController::class, 'pedagangpdf'])->name('pedagangpdf');

    Route::resource('lapak', LapakController::class);

    Route::resource('calon_pedagang', CalonPedagangController::class);

});


// Route Untuk User
Route::group(['middleware' => ['auth', 'ceklevel:user']], function(){
    Route::get('user', [DashboardUserController::class, 'index']);

    Route::resource('profile', ProfileUserController::class);

    Route::resource('sewa', SewaUserController::class);

    Route::resource('informasi', InformasiUserController::class);
    // Route::put('informasi/updatebukti/{id}', [InformasiUserController::class, 'updatebukti'])->name('informasi.update');


});

// Route Untuk Landing Page
Route::get('/', [BerandaController::class, 'index']);

Route::get('berita', [BeritaController::class, 'index'])->name('berita');
Route::get('detailberita/{id}', [BeritaController::class, 'detailberita'])->name('detailberita');

Route::get('pasar', [PasarController::class, 'index']);
Route::get('detailpasar', [PasarController::class, 'detailpasar'])->name('detailpasar');
Route::get('detailpasargambar/{jenis_tempat}', [PasarController::class, 'detailpasargambar'])->name('detailpasargambar');


Route::get('kontak', [KontakController::class, 'index']);

Route::get('about', [TentangController::class, 'index']);
