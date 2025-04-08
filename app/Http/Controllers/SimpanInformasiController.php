<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi; // ✅ ini harus ada

class SimpanInformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::all();
        return view('Informasi', compact('informasi')); // pastikan view file-nya benar
    }
}
