<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;

// User Routes
Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/masuk', function () {
    return view('masuk');
})->name('masuk');
Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');
Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');
Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi');
Route::get('/chatdokter', function () {
    return view('chatdokter');
})->name('chatdokter');

Route::get('/lainnya', function () {
    return view('lainnya');
})->name('lainnya');



=======
// Admin Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/adminArtikel', [ArtikelController::class, 'index'])->name('adminArtikel');
    Route::post('/adminArtikel', [ArtikelController::class, 'store'])->name('artikel.store');
    Route::view('/admin/antrian', 'admin.adminAntrian');
    Route::view('/admin/rekam-medis', 'admin.adminRemed');
    Route::view('/adminPraktik', 'admin.adminPraktik');
    Route::view('/dataantrian', 'admin.dataAntrian');
    Route::view('/tes', 'admin.tesData');
    Route::view('/praktik', 'admin.jadwalPraktik');
});

// Authentication Routes
Route::get('/adminLogin', [AdminController::class, 'showLogin'])->name('adminLogin');
Route::post('/adminLogin', [AdminController::class, 'adminLogin']);

Route::get('/registrasiAdmin', [AdminController::class, 'showRegistrasi'])->name('registrasiAdmin');
Route::post('/registrasiAdmin', [AdminController::class, 'registrasiAdmin']);

// Dashboard Redirect
>>>>>>> origin/admin
Route::get('/dashboard', function () {
    return redirect()->route('adminArtikel');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
