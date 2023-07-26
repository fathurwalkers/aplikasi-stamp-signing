<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    BackController,
    BulkstampController,
};

// Route untuk Halaman Login
Route::get('/login', [BackController::class, 'login'])->name('login');
// Route untuk Proses permintaan Login ke Dashboard
Route::post('/login/proses-login', [BackController::class, 'postlogin'])->name('post-login');

// Route untuk Halaman Register
Route::get('/register', [BackController::class, 'register'])->name('register');
// Route untuk Proses pembuatan Akun Baru (Register)
Route::post('/login/proses-register', [BackController::class, 'postregister'])->name('post-register');

// Route untuk Keluar dari sesi Halaman Dashboard dan Kembali ke Halaman Login
Route::post('/logout', [BackController::class, 'logout'])->name('logout');

Route::get('/', fn () => redirect()->route('dashboard'));

Route::group(['prefix' => '/dashboard', 'middleware' => 'ceklogin'], function () {

    // Dashboard Route
    Route::get('/', [BackController::class, 'index'])->name('dashboard');

    // Bulk Stamp Route
    Route::group(['prefix' => '/bulk-stamp'], function () {
        Route::get('/', [BulkstampController::class, 'index'])->name('bulk-stamp');
    });
});

