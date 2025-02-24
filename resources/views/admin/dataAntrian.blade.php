<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Antrian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">

    <div class="bg-white p-6 rounded shadow-md w-full max-w-lg">
        <h2 class="text-2xl font-semibold mb-4">Input Antrian</h2>
        <form id="formAntrian">
            <div class="mb-4">
                <label for="namaPasien" class="block text-gray-700">Nama Pasien</label>
                <input type="text" id="namaPasien" class="w-full p-2 border rounded mt-1" placeholder="Masukkan Nama Pasien" required>
            </div>
            <div class="mb-4">
                <label for="tujuan" class="block text-gray-700">Tujuan</label>
                <input type="text" id="tujuan" class="w-full p-2 border rounded mt-1" placeholder="Masukkan Tujuan" required>
            </div>
            <div class="mb-4">
                <label for="antrian" class="block text-gray-700">Antrian</label>
                <input type="text" id="antrian" class="w-full p-2 border rounded mt-1" placeholder="Nomor Antrian (otomatis)" disabled>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tambah Antrian</button>
        </form>
    </div>

    <script>
        // Fungsi untuk mendapatkan nomor antrian otomatis berdasarkan hari
        function getNomorAntrian() {
            let antrianData = JSON.parse(localStorage.getItem('antrianData')) || [];
            const lastResetDate = localStorage.getItem('lastResetDate');
            const currentDate = new Date().toLocaleDateString(); // Mendapatkan tanggal saat ini dalam format lokal

            // Cek apakah tanggal hari ini berbeda dengan tanggal terakhir reset
            if (lastResetDate !== currentDate) {
                // Reset antrian jika tanggal berbeda (hari baru)
                localStorage.setItem('antrianData', JSON.stringify([])); // Hapus semua data antrian
                localStorage.setItem('lastResetDate', currentDate); // Update tanggal reset
                return 1; // Mulai dari 1 lagi
            }

            // Jika tidak ada data sebelumnya, mulai dari 1
            return antrianData.length > 0 ? antrianData[antrianData.length - 1].antrian + 1 : 1;
        }

        // Menambahkan event listener untuk form submit
        document.getElementById('formAntrian').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form dari reload halaman

            // Ambil data dari input
            const namaPasien = document.getElementById('namaPasien').value;
            const tujuan = document.getElementById('tujuan').value;
            const antrian = getNomorAntrian(); // Dapatkan nomor antrian otomatis

            // Validasi input
            if (!namaPasien || !tujuan) {
                alert("Semua kolom harus diisi!");
                return;
            }

            // Simpan data antrian ke localStorage
            let antrianData = JSON.parse(localStorage.getItem('antrianData')) || [];
            antrianData.push({ namaPasien, tujuan, antrian });
            localStorage.setItem('antrianData', JSON.stringify(antrianData));

            // Reset form setelah submit
            document.getElementById('formAntrian').reset();
            document.getElementById('antrian').value = antrian; // Menampilkan nomor antrian yang baru
            alert("Antrian berhasil ditambahkan!");
        });
    </script>
</body>
</html>
