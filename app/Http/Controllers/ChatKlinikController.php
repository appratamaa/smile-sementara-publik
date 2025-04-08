<?php

// app/Http/Controllers/ChatKlinikController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatMessage;
use App\Models\Masuk;
use App\Models\User;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;
use App\Events\ChatSent;


class ChatKlinikController extends Controller
{
    public function index()
    {
        $user = session('pengguna'); // dari tabel pengguna (pasien)
        $dokter = User::where('role', 'dokter')->first();

        if (!$user || !$dokter) {
            return redirect('masuk')->with('error', 'Data pengguna atau dokter tidak ditemukan.');
        }

        $chats = ChatMessage::where(function ($query) use ($user, $dokter) {
            $query->where('from_id', $user->id)->where('to_id', $dokter->id);
        })->orWhere(function ($query) use ($user, $dokter) {
            $query->where('from_id', $dokter->id)->where('to_id', $user->id);
        })->get();

        return view('chat-klinik', compact('chats', 'user', 'dokter'));
    }


    public function send(Request $request)
    {
        $user = session('pengguna');
        $dokter = User::first();

        if (!$user || !$dokter) {
            return redirect('/')->with('error', 'Data pengguna atau dokter tidak ditemukan.');
        }

        $chat = ChatMessage::create([
            'from_id' => $user->id,
            'to_id' => $dokter->id,
            'message' => $request->message,
        ]);

        // 🔥 Trigger event realtime
        broadcast(new ChatSent($chat))->toOthers();

        return redirect()->back();
    }

    public function adminIndex()
    {
        // Ambil semua pasien yang pernah mengirim pesan
        $pasienIds = ChatMessage::whereNotNull('from_id')
            ->pluck('from_id')
            ->unique();

        $pasiens = Pengguna::whereIn('id', $pasienIds)->get();

        return view('admin.chat-list', compact('pasiens'));
    }

    public function adminChatDetail($id)
    {
        $dokter = Auth::user();

        if (!$dokter) {
            return redirect('/adminLogin')->with('error', 'Silakan login terlebih dahulu.');
        }

        $pasien = Pengguna::findOrFail($id);

        $chats = ChatMessage::where(function ($query) use ($pasien, $dokter) {
            $query->where('from_id', $pasien->id)->where('to_id', $dokter->id);
        })->orWhere(function ($query) use ($pasien, $dokter) {
            $query->where('from_id', $dokter->id)->where('to_id', $pasien->id);
        })->get();

        return view('admin.chat-detail', compact('chats', 'pasien', 'dokter'));
    }



    public function adminSendMessage(Request $request, $id)
    {
        $dokter = Auth::user();

        if (!$dokter) {
            return redirect('/')->with('error', 'Dokter belum login');
        }

        $pasien = Pengguna::findOrFail($id);

        $chat = ChatMessage::create([
            'from_id' => $dokter->id,
            'to_id' => $pasien->id,
            'message' => $request->message,
        ]);

        // 🔥 Trigger event realtime
        broadcast(new ChatSent($chat))->toOthers();

        return redirect()->route('admin.chat.detail', $pasien->id);
    }
}
