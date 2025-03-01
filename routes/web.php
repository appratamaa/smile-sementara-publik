<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
