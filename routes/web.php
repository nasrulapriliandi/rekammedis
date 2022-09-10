<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DiagnosaController;
use App\Http\Controllers\Admin\ObatController;
use App\Http\Controllers\Admin\PasienController as AdminPasienController;
use App\Http\Controllers\Admin\RekammedisController as AdminRekammedisController;
use App\Http\Controllers\Dokter\RekammedisController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('guest')->group(function() {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'store']);
});

Route::middleware(['auth', 'checkLevel:admin'])->group(function() {
    Route::resource('/admin/pasien', AdminPasienController::class);
    Route::resource('/admin/diagnosa', DiagnosaController::class);
    Route::resource('/admin/obat', ObatController::class);
    Route::get('/admin/rekammedis', [AdminRekammedisController::class, 'index'])->name('admin.rekammedis');
    Route::get('/admin/rekammedis/{id}', [AdminRekammedisController::class, 'show'])->name('admin.rekammedis.detail');

    Route::resource('/admin', DashboardController::class);
});

Route::middleware(['auth', 'checkLevel:dokter'])->group(function() {
    Route::resource('/dokter/rekammedis', RekammedisController::class);
    Route::resource('/dokter', RekammedisController::class);
});
