<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ArtikelUserController;
use Illuminate\Support\Facades\View;

// User Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/masuk', function () {
    return view('masuk'); // Gantilah 'masuk' dengan nama file Blade yang digunakan
})->name('masuk');

Route::post('/masuk', [MasukController::class, 'masuk'])->name('masuk');

// Route Logout

Route::post('/keluar', function () {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect()->route('masuk'); // Pastikan 'masuk' adalah nama route yang benar
})->name('keluar');

Route::get('/beranda', function () {
    $pengguna = session('pengguna'); // Ambil data pengguna dari sesi
    return view('beranda', compact('pengguna'));
})->name('beranda');

Route::get('/daftar', [PenggunaController::class, 'showForm'])->name('daftar');
Route::post('/daftar', [PenggunaController::class, 'daftar']);
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

Route::get('/rekammedis', function () {
    return view('rekammedis');
})->name('rekammedis');

// Route::get('/antrean', function () {
//     return view('antrean'); // Gantilah 'antrean' dengan nama file Blade yang digunakan
// })->name('antrean');

Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/antrean/{id}', [AppointmentController::class, 'show'])->name('antrean.show');

Route::get('/artikel', [ArtikelUserController::class, 'index'])->name('artikel.index');
Route::get('/artikel/cari', [ArtikelUserController::class, 'search'])->name('artikel.search');
Route::get('/artikel/{id}', [ArtikelUserController::class, 'show'])->name('artikel.show');




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
