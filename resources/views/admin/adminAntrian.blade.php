<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex">

    <!-- Sidebar -->
    <div class="w-64 bg-white shadow-md p-4 flex flex-col h-full">
        <h1 class="text-left mb-4">
            <img src="{{ asset('image/SMILE LOGO.png') }}" alt="Smile logo" class="h-10">
        </h1>
        <ul class="space-y-2 flex-grow">
            <li>
                <a href="/admin" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded" id="adminArtikel">Artikel</a>
            </li>
            <li>
                <a href="/admin/antrian" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded" id="adminAntrian">Antrian</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded" id="jadwal-link">Jadwal Praktik</a>
            </li>
            <li>
                <a href="/admin/rekam medis" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded" id="rekamMedis-link">Rekam Medis</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded" id="reservasi-link">Reservasi</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded" id="chats-link">Chat</a>
            </li>
        </ul>
        <a href="#" class="block px-4 py-2 text-red-600 font-bold hover:bg-red-100 rounded" id="artikel-link">Keluar</a>
    </div>

    <!-- Main Content -->
    <div class="flex-1 bg-white p-6 rounded shadow-md">

        <!-- Input untuk jumlah antrian per hari dengan tombol submit di pinggirnya -->
        <div class="mb-6 flex items-center space-x-4">
            <label for="jumlahAntrian" class="text-lg font-medium text-gray-700">Jumlah Antrian per Hari</label>
            <div class="flex">
                <input type="number" id="jumlahAntrian" name="jumlahAntrian" class="w-32 px-4 py-2 border border-gray-300 rounded-l-md" placeholder="Jumlah" />
                <button id="submitAntrian" class="px-4 py-2 bg-blue-500 text-white rounded-r-md hover:bg-blue-600">Submit</button>
            </div>
        </div>

        <!-- Tabel Antrian -->
        <h2 class="text-2xl font-semibold mb-4">Data Antrian</h2>
        <table class="w-full text-sm table-fixed border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="py-2 px-4 border-b border-gray-300">NO</th>
                    <th class="py-2 px-4 border-b border-gray-300">Nama Pasien</th>
                    <th class="py-2 px-4 border-b border-gray-300">Tujuan</th>
                    <th class="py-2 px-4 border-b border-gray-300">Antrian</th>
                    <th class="py-2 px-4 border-b border-gray-300">Panggil</th>
                </tr>
            </thead>
            <tbody id="antrianTable">
                <!-- Data antrian akan muncul di sini -->
            </tbody>
        </table>
    </div>

    <script>
        // Memuat data antrian dari localStorage
        document.addEventListener('DOMContentLoaded', function() {
            let antrianData = JSON.parse(localStorage.getItem('antrianData')) || [];
            const tableBody = document.getElementById('antrianTable');

            // Menambahkan data ke tabel
            antrianData.forEach((data, index) => {
                const row = tableBody.insertRow();
                row.innerHTML = `
                    <td class="py-2 px-4 border-b border-gray-300">${index + 1}</td>
                    <td class="py-2 px-4 border-b border-gray-300">${data.namaPasien}</td>
                    <td class="py-2 px-4 border-b border-gray-300">${data.tujuan}</td>
                    <td class="py-2 px-4 border-b border-gray-300">${data.antrian}</td>
                    <td class="py-2 px-4 border-b border-gray-300">
                        <div class="h-4 w-4 rounded-full bg-green-500"></div>
                    </td>
                `;
            });
        });

        // Event listener untuk tombol Submit
        document.getElementById('submitAntrian').addEventListener('click', function() {
            const jumlahAntrian = document.getElementById('jumlahAntrian').value;

            // Validasi inputan
            if (!jumlahAntrian || jumlahAntrian <= 0) {
                alert("Masukkan jumlah antrian yang valid!");
                return;
            }

            console.log("Jumlah antrian per hari: ", jumlahAntrian);

            // Simpan data jumlah antrian ke localStorage atau lakukan pemrosesan lebih lanjut
            localStorage.setItem('jumlahAntrianPerHari', jumlahAntrian);

            // Reset input setelah submit
            document.getElementById('jumlahAntrian').value = '';
            alert("Jumlah antrian per hari telah disimpan.");
        });
    </script>
</body>
</html>
