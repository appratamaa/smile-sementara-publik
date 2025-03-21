<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
use Illuminate\Support\Facades\DB;

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::all()->map(function ($informasi) {
            return [
                'id' => $informasi->id,
                'judul' => $informasi->judul,
                'deskripsi' => $informasi->deskripsi,
                'gambar' => $informasi->gambar,
            ];
        });
    
        return view('admin.adminInformasi', compact('informasi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:40',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            DB::beginTransaction();

            $informasi = new Informasi();
            $informasi->judul = $request->input('judul');
            $informasi->deskripsi = $request->input('deskripsi');

            if ($request->hasFile('gambar')) {
                $request->file('gambar')->move('gambar_informasi/', $request->file('gambar')->getClientOriginalName());
                $informasi->gambar = $request->file('gambar')->getClientOriginalName();
            }

            $informasi->save();

            DB::commit();

            return redirect()->back()->with('success', 'Informasi berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan Informasi: ' . $e->getMessage());
        }
    }
}
