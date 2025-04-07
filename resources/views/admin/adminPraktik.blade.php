<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Praktik</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex">

    <!-- Sidebar -->
    <div class="w-64 bg-white shadow-md p-4 flex flex-col h-full">
        <h1 class="text-left mb-4">
            <img src="{{ asset('image/SMILE-LOGO.svg') }}" alt="Smile logo" class="h-10">
        </h1>
        <x-sidebar-admin>
        </x-sidebar-admin>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block w-full text-left px-4 py-2 text-red-600 font-bold hover:bg-red-100 rounded">Keluar</button>
        </form>
    </div>

    <!-- Konten Utama -->
    <div class="flex-1 p-6 space-y-6">
        
        <!-- Form Tambah Jadwal -->
        <div class="bg-white shadow-md p-6 rounded">
            <h2 class="text-xl font-semibold mb-4">Tambah Jadwal Praktik</h2>
            <form id="addScheduleForm" action="{{ route('jadwal.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium">Tanggal</label>
                        <input type="date" name="tanggal" class="mt-1 p-2 w-full border rounded" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Waktu</label>
                        <input type="time" name="waktu" class="mt-1 p-2 w-full border rounded" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Status</label>
                        <select name="status" class="mt-1 p-2 w-full border rounded" required>
                            <option value="tersedia">Tersedia</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Tambah Jadwal</button>
            </form>
        </div>

        <!-- Tabel Data Jadwal Praktik -->
<div class="bg-white shadow-md p-6 rounded w-full">
    <h2 class="text-xl font-semibold mb-4">Jadwal Praktik</h2>
    <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-2">No</th>
                <th class="p-2">Tanggal</th>
                <th class="p-2">Waktu</th>
                <th class="p-2">Status</th>
                <th class="p-2">Aksi</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($jadwal as $index => $data)
            <tr>
                <td class="p-2">{{ $index + 1 }}</td>
                <td class="p-2">{{ \Carbon\Carbon::parse($data->tanggal)->format('d M Y') }}</td>
                <td class="p-2">{{ \Carbon\Carbon::parse($data->waktu)->format('H:i') }}</td>
                <td class="p-2">
                    <form action="{{ route('jadwal.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <select name="status" class="p-1 border rounded" onchange="this.form.submit()">
                            <option value="tersedia" {{ $data->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                            <option value="tidak tersedia" {{ $data->status == 'tidak tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                        </select>
                    </form>
                </td>
                <td class="p-2">
                    <form action="{{ route('jadwal.destroy', $data->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


        <!-- Tabel Data Pasien -->
        <div class="bg-white shadow-md p-6 rounded w-full">
            <h2 class="text-xl font-semibold mb-4">Data Pasien</h2>
            <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-2">No</th>
                        <th class="p-2">Nama</th>
                        <th class="p-2">Usia</th>
                        <th class="p-2">Jenis Kelamin</th>
                        <th class="p-2">Tanggal</th>
                        <th class="p-2">Waktu</th>
                        <th class="p-2">Tujuan</th>
                    </tr>
                </thead>
                {{-- <tbody class="text-center">
                    @foreach($pasien as $index => $data)
                    <tr>
                        <td class="p-2">{{ $index + 1 }}</td>
                        <td class="p-2">{{ $data->nama }}</td>
                        <td class="p-2">{{ $data->usia }}</td>
                        <td class="p-2">{{ $data->jenis_kelamin }}</td>
                        <td class="p-2">{{ \Carbon\Carbon::parse($data->tanggal)->format('d M Y') }}</td>
                        <td class="p-2">{{ \Carbon\Carbon::parse($data->waktu)->format('H:i') }}</td>
                        <td class="p-2">{{ $data->tujuan }}</td>
                    </tr>
                    @endforeach
                </tbody> --}}
            </table>
        </div>

    </div>

    <script>
        // Menandai menu yang aktif di sidebar
        document.querySelectorAll('.w-64 a').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.w-64 a').forEach(link => link.classList.remove('bg-black', 'text-white'));
                this.classList.add('bg-black', 'text-white');
            });
        });
    </script>

</body>
</html>
