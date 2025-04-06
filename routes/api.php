<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAntrian;

Route::get('/antrian/terkini', [AdminAntrian::class, 'getCurrentAndNext']);
Route::post('/antrian', [AdminAntrian::class, 'store']);
Route::post('/antrian/panggil/{id}', [AdminAntrian::class, 'panggil']);
