<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPraktik;
use App\Models\Informasi;

class JadwalPraktikController extends Controller
{
    public function index()
    {
        $jadwal = JadwalPraktik::with('informasi')->get();
        return view('admin.jadwal.index', compact('jadwal'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'informasi_id' => 'required|exists:informasi,id',
            'tanggal' => 'required|date',
            'waktu' => 'required',
        ]);

        JadwalPraktik::create([
            'informasi_id' => $request->informasi_id,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ]);

        return redirect()->route('admin.jadwal.index')->with('success', 'Jadwal berhasil ditambahkan');
    }
}
