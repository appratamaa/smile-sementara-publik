<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Chat dengan Pasien</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .typing-dots span {
            animation: blink 1.4s infinite;
        }
        .typing-dots span:nth-child(2) {
            animation-delay: 0.2s;
        }
        .typing-dots span:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes blink {
            0%, 80%, 100% { opacity: 0; }
            40% { opacity: 1; }
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="max-w-3xl mx-auto p-4">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-2xl font-bold">{{ $pasien->nama_lengkap }}</h2>
        </div>

        <div class="chat-messages border rounded p-4 mb-4 h-96 overflow-y-scroll bg-white shadow space-y-2">
            @foreach ($chats as $chat)
                @if ($chat->from_id == $dokter->id)
                    <!-- Dokter -->
                    <div class="flex justify-end">
                        <div class="bg-blue-500 text-white px-4 py-2 rounded-lg max-w-sm">
                            {{ $chat->message }}
                        </div>
                    </div>
                @else
                    <!-- Pasien -->
                    <div class="flex justify-start">
                        <div class="bg-gray-200 text-gray-800 px-4 py-2 rounded-lg max-w-sm">
                            {{ $chat->message }}
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <form action="{{ route('admin.chat.send', $pasien->id) }}" method="POST">
            @csrf
            <textarea name="message" class="w-full border p-3 rounded mb-3 resize-none focus:outline-none focus:ring-2 focus:ring-blue-400" rows="3" placeholder="Ketik pesan..." required></textarea>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Kirim</button>
        </form>
    </div>

   
    @vite('resources/js/app.js')

    <script>
        const userId = {{ $dokter->id }};
        const chatBox = document.querySelector('.chat-messages');

        window.Echo.private('chat.' + userId)
            .listen('ChatSent', (e) => {
                const bubble = document.createElement('div');
                bubble.classList = 'bg-gray-200 text-gray-800 px-4 py-2 rounded-lg max-w-sm mb-2';
                bubble.innerText = e.chat.message;
                chatBox.appendChild(bubble);
                chatBox.scrollTop = chatBox.scrollHeight;
            });
    </script>
</body>
</html>
