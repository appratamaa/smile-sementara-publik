<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// User
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.adminartikel');
});

Route::get('/admin/antrian', function () {
    return view('admin.adminAntrian');
});

Route::get('/admin/rekam medis', function () {
    return view('admin.adminRemed');
});

Route::get('/admin/login', function () {
    return view('admin.adminLogin');
});

Route::get('/admin/registrasi', function () {
    return view('admin.adminRegistrasi');
});

Route::get('/dataantrian', function () {
    return view('admin.dataAntrian');
});


Route::get('/dashboard', function () {
    return view('dashboard');


})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
