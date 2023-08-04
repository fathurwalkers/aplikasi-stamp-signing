<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    BackController,
    BulkstampController,
};

// Route untuk Halaman Login
Route::get('/login', [BackController::class, 'login'])->name('login');
// Route untuk Proses permintaan Login ke Dashboard
Route::post('/login/proses-login', [BackController::class, 'new_postlogin'])->name('new-post-login');

// Route untuk Keluar dari sesi Halaman Dashboard dan Kembali ke Halaman Login
Route::post('/logout', [BackController::class, 'logout'])->name('logout');

Route::get('/', fn () => redirect()->route('dashboard'));

Route::group(['prefix' => '/dashboard', 'middleware' => 'ceklogin'], function () {

    // Dashboard Route
    Route::get('/', [BackController::class, 'index'])->name('dashboard');

    // Bulk Stamp Route
    Route::group(['prefix' => '/bulk-stamp'], function () {
        Route::get('/upload-csv', [BulkstampController::class, 'upload_csv'])->name('upload-csv');
        Route::get('/generate-snqr', [BulkstampController::class, 'generate_snqr'])->name('generate-snqr');
        Route::get('/stamping', [BulkstampController::class, 'stamping'])->name('stamping');
    });
});

