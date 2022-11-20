<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanController;

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

//Perusahaan
Route::middleware('guest')->group(function(){
    //landing page
    Route::get('', [PerusahaanController::class, 'index'])->name('index-tamu');
    //login
    Route::get('/login', function(){
        return view('perusahaan.loginperusahaan');
    })->name('login-perusahaan');
    //daftar
    Route::get('/daftar', function(){
        return view('perusahaan.daftarperusahaan');
    })->name('daftar-perusahaan');
});

//Admin
Route::prefix('dashboard')->group(function () {
    Route::get('', [AdminController::class, 'index'])->name('index');
});