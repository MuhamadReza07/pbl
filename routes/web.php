<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MasterData\BarangController;
use App\Http\Controllers\Admin\MasterData\KategoriController;
use App\Http\Controllers\Admin\MasterData\SupplierController;
use App\Http\Controllers\Kasir\BerandaController; 
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\transaksi\PenjualanController;
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

Route::group(['middleware' => 'auth'], function() {
   
});


Route::get('/', [HomeController::class, 'index'])->middleware('auth');
Route::get('/', [HomeController::class, 'index'])->middleware('auth');
//admin
Route::prefix('admin')->group(function(){
    Route::resource('beranda', HomeController::class);
    Route::prefix('master-data')->group(function(){
        Route::resource('barang', BarangController::class);
        Route::resource('kategori', KategoriController::class);
        Route::resource('supplier', SupplierController::class);
    });
    Route::prefix('transaksi')->group(function(){
        Route::resource('penjualan', PenjualanController::class);});
});
//kasir
Route::prefix('kasir')->group(function(){
    Route::get('main', [BerandaController::class, 'showBeranda']);
});