<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all()->map(function ($artikel) {
            return [
                'id_artikel' => $artikel->id_artikel,
                'judul_artikel' => $artikel->judul_artikel,
                'deskripsi_artikel' => $artikel->deskripsi_artikel,
                'gambar' => $artikel->gambar,
            ];
        });
    
        return view('admin.adminArtikel', compact('artikels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_artikel' => 'required|max:40',
            'deskripsi_artikel' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            DB::beginTransaction();

            $artikel = new Artikel();
            $artikel->judul_artikel = $request->input('judul_artikel');
            $artikel->deskripsi_artikel = $request->input('deskripsi_artikel');

            if ($request->hasFile('gambar')) {
                $request->file('gambar')->move('gambar_artikel/', $request->file('gambar')->getClientOriginalName());
                $artikel->gambar = $request->file('gambar')->getClientOriginalName();
            }

            $artikel->save();

            DB::commit();

            return redirect()->back()->with('success', 'Artikel berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan Artikel: ' . $e->getMessage());
        }
    }
}
