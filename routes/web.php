<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MasterData\BarangController;
use App\Http\Controllers\Admin\MasterData\KategoriController;
use App\Http\Controllers\Admin\MasterData\SupplierController;
use App\Http\Controllers\Kasir\BerandaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\transaksi\PembelianController;
use App\Http\Controllers\transaksi\PembelianDetailController;
use App\Http\Controllers\transaksi\PenjualanController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controller\transaksi\PenjualanDetailController;
use App\Http\Controller\transaksi;
use GuzzleHttp\Middleware;
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

// Route::get('/', function () {
//     return view('components.app');
// });




Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::resource('beranda', HomeController::class);
    });
    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::get('main', [BerandaController::class, 'showBeranda']);
    });
});

Route::group(['middleware' => 'auth'], function () {
});


Route::get('/', [HomeController::class, 'index'])->middleware('auth');
Route::get('/', [HomeController::class, 'index'])->middleware('auth');
//admin
Route::prefix('admin')->group(function () {
    //pengaturan
    Route::resource('setting', SettingController::class);
    Route::get('/setting', [SettingController::class, 'index']);
    Route::get('/setting/first', [SettingController::class, 'show']);
    Route::post('/setting', [SettingController::class, 'update']);
    //user
    Route::get('user/edit/{$id}', [UserController::class, 'edit']);
    Route::resource('user', UserController::class);
    //laporan
    Route::resource('laporan', LaporanController::class);

    Route::resource('beranda', HomeController::class);
    Route::prefix('master-data')->group(function () {
        Route::get('barang', [BarangController::class, 'index']);
        // Route::post('tambah-barang', [BarangController::class, 'store']);
        Route::resource('barang', BarangController::class);
        Route::resource('kategori', KategoriController::class);
        Route::resource('supplier', SupplierController::class);
    });
});

//kasir
Route::prefix('kasir')->group(function () {
    Route::get('main', [BerandaController::class, 'showBeranda']);
});

//transaksi
Route::prefix('transaksi')->group(function(){
    Route::get('penjualan/index', [PenjualanController::class, 'detail']);
    Route::get('/penjualan/index/{$id}', [PenjualanController::class, 'index']);
    Route::get('/penjualan/index/{$id}', [PenjualanController::class, 'store']);
    Route::post('/penjualan', [PenjualanController::class, 'storePenjualan']);
    Route::resource('pembelian', PembelianController::class);
});