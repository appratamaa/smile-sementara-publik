<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    // Tampilkan beranda dengan riwayat kunjungan dan informasi antrian
    public function index()
    {
        $pengguna = Auth::user();

        // 1. Riwayat kunjungan pengguna
        $riwayatKunjungan = Appointment::where('nomor_hp', $pengguna->nomor_hp)->get();

        // 2. Total seluruh pasien
        $totalPasien = Appointment::count();

        // 3. Ambil antrian terakhir pengguna
        $antrianTerakhir = Appointment::where('nomor_hp', $pengguna->nomor_hp)
            ->latest('id')
            ->first();

        $antrianId = $antrianTerakhir ? $antrianTerakhir->id : null;

        // 4. Hitung sisa antrian
        $sisaAntrian = $antrianId
            ? Appointment::where('id', '<', $antrianId)->count()
            : 0;

        return view('beranda', compact(
            'pengguna',
            'riwayatKunjungan',
            'totalPasien',
            'antrianId',
            'sisaAntrian'
        ));
    }

    // Tampilkan form janji temu dengan nomor HP pengguna
    public function create()
    {
        $user = Auth::user();
        $pengguna = Pengguna::where('email', $user->email)->first();

        return view('form-janji-temu', ['nomor_hp' => $pengguna->nomor_hp]);
    }

    // Simpan data janji temu ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nomor_hp' => 'required|numeric|digits_between:10,15',
            'usia' => 'required|integer|min:0',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'tujuan' => 'required|string|max:255',
        ]);

        $appointment = Appointment::create([
            'nama' => $request->nama,
            'nomor_hp' => $request->nomor_hp,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tanggal' => $request->tanggal,
            'tujuan' => $request->tujuan,
        ]);

        return response()->json([
            'id' => $appointment->id,
            'message' => 'Janji temu berhasil dibuat!'
        ], 201);
    }

    // Tampilkan detail janji temu tertentu
    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('antrean', compact('appointment'));
    }
}
