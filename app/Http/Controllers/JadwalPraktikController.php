<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPraktik;

class JadwalPraktikController extends Controller
{
    // Menampilkan halaman dengan data jadwal praktik
    public function index()
    {
        $jadwal = JadwalPraktik::orderBy('tanggal', 'asc')->get(); // Menampilkan data berdasarkan tanggal terdekat
        return view('admin.adminPraktik', compact('jadwal'));
    }
    
    // Menyimpan jadwal praktik baru
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date|after_or_equal:today', // Tidak bisa memilih tanggal di masa lalu
            'waktu' => 'required|date_format:H:i',
            'status' => 'required|in:tersedia,tidak tersedia', // Status hanya bisa berisi salah satu dari tiga pilihan
        ]);

        JadwalPraktik::create([
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'status' => $request->status, // Menyimpan status
        ]);

        return redirect()->back()->with('success', 'Jadwal berhasil ditambahkan');
    }

    // Menghapus jadwal praktik berdasarkan ID
    public function destroy(JadwalPraktik $jadwal)
    {
        $jadwal->delete();
        return redirect()->back()->with('success', 'Jadwal berhasil dihapus');
    }
    public function update(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:tersedia,tidak tersedia',
    ]);

    $jadwal = JadwalPraktik::findOrFail($id);
    $jadwal->update([
        'status' => $request->status,
    ]);

    return redirect()->back()->with('success', 'Status berhasil diperbarui');
}
}
