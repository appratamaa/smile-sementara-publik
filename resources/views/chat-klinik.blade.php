<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Chat Dokter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        @include('components.nav-prof', ['pengguna' => $user])

        <!-- Dashboard Container -->
<div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-white text-black p-4">
        <!-- Sidebar content -->
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-bold">Dashboard</h2>

            <!-- Button Notifikasi -->
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" type="button"
                    class="relative rounded-full  p-1.5 text-black hover:text-blue-500 focus:ring-2 focus:ring-blue-500 focus:ring-offset-black">
                    <span class="sr-only">Lihat Notifikasi</span>
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                </button>

                <!-- Dropdown Notifikasi -->
                <div x-show="open" @click.away="open = false"
                    class="absolute left-full top-0 ml-2 w-64 bg-white rounded-md shadow-lg z-50">
                    <div class="py-2 px-4 border-b text-black font-semibold">Notifikasi</div>
                    <div class="max-h-60 overflow-y-auto">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                            Notifikasi 1
                            <span class="block text-xs text-gray-500">1 jam yang lalu</span>
                        </a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                            Notifikasi 2
                            <span class="block text-xs text-gray-500">2 jam yang lalu</span>
                        </a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                            Notifikasi 3
                            <span class="block text-xs text-gray-500">3 jam yang lalu</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <x-side-bar></x-side-bar>
    </aside>

    <!-- Chat Area -->
    <div class="flex-1 w-full bg-white shadow-lg rounded-lg flex flex-col mt-6 mx-4 md:mx-8 h-[90vh]">
        <!-- Header -->
        <div class="bg-blue-600 text-white px-6 py-4 rounded-t-lg shadow">
            <h2 class="text-xl font-semibold">Chat dengan Dokter</h2>
        </div>

        <!-- Chat Messages -->
        <div id="chat-container" class="flex-1 overflow-y-auto px-4 py-3 space-y-4" x-data
            x-init="$el.scrollTop = $el.scrollHeight">
            @foreach ($chats as $chat)
                @if ($chat->from_id == $user->id)
                    <!-- Pesan dari pasien (kanan) -->
                    <div class="flex justify-end">
                        <div
                            class="bg-blue-500 text-white px-4 py-2 rounded-br-none rounded-2xl max-w-[70%] text-sm shadow">
                            {{ $chat->message }}
                        </div>
                    </div>
                @else
                    <!-- Pesan dari dokter (kiri) -->
                    <div class="flex justify-start">
                        <div
                            class="bg-gray-200 text-gray-900 px-4 py-2 rounded-bl-none rounded-2xl max-w-[70%] text-sm shadow">
                            {{ $chat->message }}
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Form Input -->
        <form method="POST" action="{{ route('chatklinik.kirim') }}"
            class="flex items-center gap-2 px-4 py-3 border-t bg-gray-50">
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
</div>

        <x-footer>
        </x-footer>

</body>

</html>
