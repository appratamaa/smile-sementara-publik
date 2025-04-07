@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white shadow p-4 rounded">
    <h2 class="text-xl font-bold mb-4">Chat dengan Dokter</h2>
    
    <div id="chat-box" class="h-64 overflow-y-auto border p-2 mb-4 bg-gray-50 rounded">
        @foreach ($chats as $chat)
            <div class="mb-2 text-sm {{ $chat->from_id == $user->id ? 'text-right' : 'text-left' }}">
                <span class="px-2 py-1 rounded {{ $chat->from_id == $user->id ? 'bg-blue-200' : 'bg-green-200' }}">
                    {{ $chat->message }}
                </span>
            </div>
        @endforeach
    </div>

    <form method="POST" action="/chatklinik/send">
        @csrf
        <div class="flex">
            <input name="message" required class="flex-1 border rounded-l px-3 py-2" placeholder="Tulis pesan...">
            <button type="submit" class="bg-blue-500 text-white px-4 rounded-r">Kirim</button>
        </div>
    </form>
</div>

<script>
    setInterval(() => {
        fetch('/chatklinik')
            .then(res => res.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const newChatBox = doc.querySelector('#chat-box');
                document.querySelector('#chat-box').innerHTML = newChatBox.innerHTML;
                document.querySelector('#chat-box').scrollTop = document.querySelector('#chat-box').scrollHeight;
            });
    }, 5000); // Refresh setiap 5 detik
</script>
@endsection
