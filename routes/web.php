<?php

use App\Http\Controllers\Admin\PasienController as AdminPasienController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'checkLevel:admin'])->group(function(){
    Route::resource('/admin/pasien', AdminPasienController::class);

});
Route::middleware(['auth', 'checkLevel:dokter'])->group(function(){

});
