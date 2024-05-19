<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\ViewController;
use  App\Http\Controllers\PoliController;
use  App\Http\Controllers\PasienController;
use  App\Http\Controllers\AntrianController;
use  App\Http\Controllers\KunjunganController;
use  App\Http\Controllers\PendaftaranController;
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
    return view('layout');
});




Route::get('/registrasi', [App\Http\Controllers\RegController::class, 'registrasi']);
Route::post('registrasi', [App\Http\Controllers\RegController::class, 'do_registrasi']); // klo mau submit form registrasi

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/', function () {
    return redirect()->to('/login');
});


Route::get('login', function () {
    return view('login');
})->middleware('guest');

Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    });

    Route::resource('pasien', PasienController::class);
    Route::resource('kunjungan', KunjunganController::class);
    Route::resource('poli', PoliController::class);
    Route::resource('pendaftaran', PendaftaranController::class);
    Route::resource('antrian', AntrianController::class);
});

Route::get('cetak-antrian', [AntrianController::class, 'cetak'])->name('cetak_antrian');
Route::post('next-antrian', [AntrianController::class, 'next_antrian'])->name('next_antrian');
Route::post('reset-antrian', [AntrianController::class, 'reset_antrian'])->name('reset_antrian');


Route::get('/report-Pasien', [App\Http\Controllers\PasienController::class, 'report']);
Route::get('/report-Poli', [App\Http\Controllers\PoliController::class, 'report']);
Route::get('/report-Kunjungan', [App\Http\Controllers\KunjunganController::class, 'report']);
Route::get('/report-Laporan', [App\Http\Controllers\LaporanController::class, 'report']);

// Route::get('registrasi', [App\Http\Controllers\AuthController::class, 'daftar']);  //klo mau buka halaman registrasi
Route::post('login', [UserController::class, 'authenticate'])->name('auth');
Route::get('logout', [UserController::class, 'logout']);

Route::get('/welcome', [App\Http\Controllers\BerandaController::class, 'index']);

// Route::resource('v-pasien', ViewController::class);
Route::get('v-pasien/cetak/{id}', [ViewController::class, 'cetak_antrian'])->name('v_pasien_cetak');
Route::get('v-pasien/{id}', [ViewController::class, 'show'])->name('v_pasien.show');
Route::get('laporan', [ViewController::class, 'index']);
