<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekam Medis Pasien Gigi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold text-gray-700 mb-4">Rekam Medis Pasien</h2>
        
        <!-- Data Pasien -->
        <div class="border-b pb-4 mb-4">
            <p class="text-lg font-semibold">Nama: <span class="font-normal">Budi Santoso</span></p>
            <p class="text-lg font-semibold">Usia: <span class="font-normal">35 Tahun</span></p>
            <p class="text-lg font-semibold">Jenis Kelamin: <span class="font-normal">Laki-laki</span></p>
            <p class="text-lg font-semibold">Nomor Rekam Medis: <span class="font-normal">RM-202403</span></p>
        </div>

        <!-- Riwayat Pemeriksaan -->
        <h3 class="text-xl font-semibold text-gray-700 mb-2">Riwayat Pemeriksaan</h3>
        <div class="space-y-3">
            <div class="bg-gray-50 p-3 rounded-lg shadow">
                <p class="text-sm text-gray-600"><strong>Tanggal:</strong> 10 Februari 2024</p>
                <p class="text-sm text-gray-600"><strong>Diagnosa:</strong> Karies Gigi</p>
                <p class="text-sm text-gray-600"><strong>Perawatan:</strong> Tambal Gigi</p>
            </div>
            <div class="bg-gray-50 p-3 rounded-lg shadow">
                <p class="text-sm text-gray-600"><strong>Tanggal:</strong> 20 Januari 2024</p>
                <p class="text-sm text-gray-600"><strong>Diagnosa:</strong> Infeksi Gusi</p>
                <p class="text-sm text-gray-600"><strong>Perawatan:</strong> Pembersihan Karang Gigi</p>
            </div>
        </div>

        <!-- Catatan Dokter -->
        <h3 class="text-xl font-semibold text-gray-700 mt-4 mb-2">Catatan Dokter</h3>
        <p class="text-gray-600 text-sm bg-gray-50 p-3 rounded-lg shadow">
            Pasien disarankan untuk rutin kontrol setiap 6 bulan dan menjaga kebersihan gigi dengan sikat gigi 2 kali sehari.
        </p>
    </div>
</body>
</html>
