<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Gigi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="flex justify-between items-center p-4 bg-white shadow-md">
        <div class="text-xl font-bold">SMILE</div>
        <div class="space-x-6">
            <a href="#" class="text-gray-700">Beranda</a>
            <a href="tambah_layanan.html" class="text-gray-700">Tambah Layanan</a> <!-- Link menuju halaman tambah layanan -->
            <a href="#" class="text-gray-700">Artikel</a>
            <a href="#" class="text-gray-700">Chat Dokter</a>
            <a href="#" class="text-gray-700 font-semibold">Informasi</a>
            <a href="#" class="text-gray-700">Andre Putra Pratama</a>
        </div>
    </nav>
    
    <div class="max-w-6xl mx-auto mt-6 p-4">
        <!-- Layanan tersedia -->
        <h2 class="text-2xl font-bold mb-4">Layanan Tersedia</h2>
        <div id="layananContainer" class="grid grid-cols-5 gap-2 mb-8">
            <!-- Layanan yang ditambahkan akan muncul di sini -->
        </div>

        <!-- Jadwal Praktik -->
        <h2 class="text-2xl font-bold mb-4">Jadwal Praktik</h2>
        <p class="text-gray-600 mb-4">Klik salah satu jadwal untuk reservasi.</p>
        <div id="jadwalContainer" class="grid grid-cols-4 gap-4">
            <!-- Jadwal akan diisi secara dinamis -->
        </div>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Layanan Tersedia
            const layananContainer = document.getElementById("layananContainer");

            // Ambil layanan yang sudah ada di localStorage
            const layananTersedia = JSON.parse(localStorage.getItem("layanan")) || [];

            // Menampilkan layanan yang ada
            function tampilkanLayanan() {
            layananContainer.innerHTML = "";
            layananTersedia.forEach(layanan => {
                const divLayanan = document.createElement("div");
                divLayanan.classList.add("text-center", "p-4");

                const imgLayanan = document.createElement("img");
                imgLayanan.src = layanan.gambar;
                imgLayanan.alt = layanan.nama;
                imgLayanan.classList.add("w-32", "h-48", "mx-auto", "mb-4", "rounded-lg");  // Gambar persegi panjang dengan ujung melengkung

                const pLayanan = document.createElement("p");
                pLayanan.classList.add("font-semibold");
                pLayanan.textContent = layanan.nama;

                divLayanan.appendChild(imgLayanan);
                divLayanan.appendChild(pLayanan);
                layananContainer.appendChild(divLayanan);
            });
        }

            // Menampilkan layanan saat pertama kali halaman dibuka
            tampilkanLayanan();

            // Jadwal Praktik
            const jadwalContainer = document.getElementById("jadwalContainer");
            const jadwalTersedia = JSON.parse(localStorage.getItem("schedules")) || [];
    
            if (jadwalTersedia.length === 0) {
                jadwalContainer.innerHTML = "<p class='text-gray-500'>Belum ada jadwal tersedia.</p>";
            } else {
                jadwalTersedia.forEach((jadwal, index) => {
                    // Ubah format tanggal
                    const tanggalFormat = new Date(jadwal.tanggal).toLocaleDateString("id-ID", {
                        weekday: "long", // Hari dalam seminggu
                        year: "numeric", // Tahun
                        month: "long", // Bulan
                        day: "numeric" // Tanggal
                    });
    
                    const btn = document.createElement("button");
                    btn.classList.add("p-4", "bg-white", "shadow-md", "rounded-md", "hover:bg-blue-100");
                    btn.innerHTML = `${tanggalFormat} <br>Tersedia`;
                    btn.onclick = function() {
                        alert(`Anda memilih jadwal: ${jadwal.tanggal}`);
                    };
                    jadwalContainer.appendChild(btn);
                });
            }
        });
    </script>
</body>
</html>
