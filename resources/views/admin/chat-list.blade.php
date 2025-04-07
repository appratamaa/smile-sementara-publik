<!-- resources/views/admin/chat-list.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Chat Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  

    <!-- Main Content -->
    <div class="ml-64 px-6 py-8"> <!-- asumsi sidebar width-nya 64 (w-64) -->
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-extrabold text-blue-700 mb-6">📋 Daftar Chat Pasien</h1>

            <div class="bg-white rounded-lg shadow p-6">
                @if($pasiens->isEmpty())
                    <div class="text-center text-gray-500">Belum ada pesan dari pasien.</div>
                @else
                    <ul class="divide-y divide-gray-200">
                        @foreach ($pasiens as $pasien)
                            <li>
                                <a href="{{ route('admin.chat.detail', $pasien->id) }}"
                                   class="flex items-center justify-between px-4 py-4 hover:bg-blue-50 rounded-lg transition">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-10 h-10 bg-blue-100 text-blue-700 rounded-full flex items-center justify-center font-bold">
                                            {{ strtoupper(substr($pasien->nama ?? 'P', 0, 1)) }}
                                        </div>
                                        <div>
                                            <p class="text-lg font-semibold">
                                                {{ $pasien->nama ?? 'Pasien ' . $pasien->nama_lengkap }}
                                            </p>
                                            <p class="text-sm text-gray-500">Klik untuk membuka chat</p>
                                        </div>
                                    </div>
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
