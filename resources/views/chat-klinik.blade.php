<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Chat Dokter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg flex flex-col mt-6 h-[90vh]">
        <!-- Header -->
        <div class="bg-blue-600 text-white px-6 py-4 rounded-t-lg shadow">
            <h2 class="text-xl font-semibold">Chat dengan Dokter</h2>
        </div>

        <!-- Chat Area -->
        <div id="chat-container" class="flex-1 overflow-y-auto px-4 py-3 space-y-4" x-data x-init="$el.scrollTop = $el.scrollHeight">
            @foreach ($chats as $chat)
                @if ($chat->from_id == $user->id)
                    <!-- Pesan dari pasien (kanan) -->
                    <div class="flex justify-end">
                        <div class="bg-blue-500 text-white px-4 py-2 rounded-br-none rounded-2xl max-w-[70%] text-sm shadow">
                            {{ $chat->message }}
                        </div>
                    </div>
                @else
                    <!-- Pesan dari dokter (kiri) -->
                    <div class="flex justify-start">
                        <div class="bg-gray-200 text-gray-900 px-4 py-2 rounded-bl-none rounded-2xl max-w-[70%] text-sm shadow">
                            {{ $chat->message }}
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Input Chat -->
        <form method="POST" action="{{ route('chatklinik.kirim') }}" class="flex items-center gap-2 px-4 py-3 border-t bg-gray-50">
            @csrf
            <textarea name="message"
                      class="flex-1 resize-none border border-gray-300 rounded-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                      rows="1" placeholder="Ketik pesan..." required></textarea>
            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition duration-200">
                Kirim
            </button>
        </form>
    </div>

</body>
</html>
