<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi; // ✅ ini harus ada
use App\Models\JadwalPraktik;

class SimpanInformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::all();
        $jadwalPraktik = JadwalPraktik::orderBy('tanggal', 'asc')->get();

        return view('informasi', compact('informasi', 'jadwalPraktik'));
    }
}