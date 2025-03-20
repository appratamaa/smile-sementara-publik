<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex">

    <!-- Sidebar -->
    <div class="w-64 bg-white shadow-md p-4 flex flex-col h-full">
        <h1 class="text-left mb-4">
            <img src="{{ asset('image/SMILE-LOGO.svg') }}" alt="Smile logo" class="h-10">
        </h1>
        <ul class="space-y-2 flex-grow">
            <li><a href="/adminArtikel" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Artikel</a></li>
            <li><a href="/admin/antrian" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Antrian</a></li>
            <li><a href="/admin/rekam-medis" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Rekam Medis</a></li>
            <li><a href="/adminPraktik" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Praktik</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Chat</a></li>
        </ul>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block w-full text-left px-4 py-2 text-red-600 font-bold hover:bg-red-100 rounded">Keluar</button>
        </form>
    </div>

    <!-- Main Content -->
    <div class="flex-grow p-6 flex flex-col">

        <div class="flex justify-between items-center bg-white p-4 shadow-md rounded-lg mb-4">
            <h2 class="text-2xl font-semibold">Reservasi</h2>

            <!-- Profile Section -->
            <div class="flex items-center space-x-4">
                <span class="text-gray-700 text-sm">{{ Auth::user()->email }}</span>
                <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                    <span class="text-white font-semibold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                </div>
            </div>
        </div>

        <div class="-">
            <h2 class="text-2xl font-bold mb-4">Tambah Layanan</h2>
            <form id="formLayanan" class="mb-6">
                <input type="text" id="namaLayanan" placeholder="Nama Layanan" class="border p-2 rounded-md w-1/3 mr-4" required>
                <input type="file" id="gambarLayanan" accept="image/*" class="border p-2 rounded-md w-1/3" required>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Tambah Layanan</button>
            </form>
        </div>

        <!-- Pengaturan Jadwal Praktik & Daftar Jadwal Praktik -->
        <div class="bg-white w-full p-6 mt-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Pengaturan Jadwal Praktik</h2>
            
            <!-- Form Pengaturan Jadwal Praktik -->
            <form id="scheduleForm" class="mb-6">
                <div class="mb-4">
                    <label for="tanggal" class="block text-gray-700">Tanggal Praktik</label>
                    <input type="date" id="tanggal" class="w-full p-2 border rounded mt-1">
                </div>
                <div class="mb-4">
                    <label for="jam" class="block text-gray-700">Jam Praktik</label>
                    <input type="time" id="jam" class="w-full p-2 border rounded mt-1">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Set Jadwal</button>
            </form>

            <!-- Daftar Jadwal Praktik -->
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Daftar Jadwal Praktik</h2>
            
            <!-- Grid untuk membagi daftar jadwal menjadi dua kolom -->
            <div id="scheduleList" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2 ">
                <!-- Daftar jadwal akan ditambahkan di sini -->
            </div>
        </div>

        <!-- Daftar Janji Temu -->
        <div class="bg-white w-full text-sm table-fixed border-collapse border border-gray-300 mt-5 ">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Daftar Janji Temu</h2>
            <div class="overflow-auto h-full">
                <table class="w-full border-collapse border border-white">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 p-2">No</th>
                            <th class="border border-gray-300 p-2">User</th>
                            <th class="border border-gray-300 p-2">Tujuan</th>
                            <th class="border border-gray-300 p-2">Tanggal</th>
                            <th class="border border-gray-300 p-2">Jam</th> <!-- Kolom baru untuk Jam -->
                            <th class="border border-gray-300 p-2">Status</th>
                            <th class="border border-gray-300 p-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="appointmentTable">
                        <!-- Data janji temu akan ditambahkan di sini -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script>
        function formatTanggal(tanggal) {
            const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
            const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            
            const date = new Date(tanggal);
            const dayName = days[date.getDay()];
            const day = date.getDate();
            const month = months[date.getMonth()];
            const year = date.getFullYear();
            
            return `${dayName}, ${day} ${month} ${year}`;
        }

        window.onload = function() {
            const schedules = JSON.parse(localStorage.getItem('schedules')) || [];
            const scheduleList = document.getElementById('scheduleList');

            // Menampilkan jadwal yang sudah ada
            schedules.forEach((schedule, index) => {
                const listItem = document.createElement('div');
                listItem.classList.add('p-2', 'border', 'border-gray-300', 'rounded-lg', 'flex', 'justify-between', 'items-center');
                listItem.innerHTML = `
                    <span>${formatTanggal(schedule.tanggal)}: ${schedule.jam}</span>
                    <button onclick="editSchedule(${index})" class="text-white px-4 py-2">
                    <img src="{{ asset('image/edit.png') }}" alt="Edit" class="w-6 h-6" />
                    </button>
                    <button onclick="deleteSchedule(${index})" class="text-white px-4 py-2">
                    <img src="{{ asset('image/hapus.png') }}" alt="Hapus" class="w-6 h-6" />
                    </button>
                `;
                scheduleList.appendChild(listItem);
            });

            const appointments = JSON.parse(localStorage.getItem('appointments')) || [];
            const appointmentTable = document.getElementById('appointmentTable');

            // Menampilkan daftar janji temu
            
        };

        function approveAppointment(index) {
            const appointments = JSON.parse(localStorage.getItem('appointments')) || [];
            appointments[index].status = 'SETUJU';
            localStorage.setItem('appointments', JSON.stringify(appointments));
            alert('Janji Temu Disetujui!');
            window.location.reload();
        }

        function rejectAppointment(index) {
            const appointments = JSON.parse(localStorage.getItem('appointments')) || [];
            appointments[index].status = 'TOLAK';
            localStorage.setItem('appointments', JSON.stringify(appointments));
            alert('Janji Temu Ditolak!');
            window.location.reload();
        }

        // Menyimpan jadwal baru
        document.getElementById('scheduleForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const tanggal = document.getElementById('tanggal').value;
            const jam = document.getElementById('jam').value;

            const schedule = { tanggal, jam };

            const schedules = JSON.parse(localStorage.getItem('schedules')) || [];
            schedules.push(schedule);

            localStorage.setItem('schedules', JSON.stringify(schedules));

            alert('Jadwal Praktik Berhasil Diset!');

            // Refresh halaman untuk menampilkan jadwal terbaru
            window.location.reload();
        });

        // Fungsi untuk menghapus jadwal
        function deleteSchedule(index) {
            const schedules = JSON.parse(localStorage.getItem('schedules')) || [];
            
            // Menghapus jadwal dari array
            schedules.splice(index, 1);
            
            // Menyimpan kembali ke localStorage setelah dihapus
            localStorage.setItem('schedules', JSON.stringify(schedules));
            
            alert('Jadwal berhasil dihapus!');
            
            // Refresh halaman untuk menampilkan jadwal yang telah diperbarui
            window.location.reload();
        }
        const formLayanan = document.getElementById("formLayanan");
            const namaLayanan = document.getElementById("namaLayanan");
            const gambarLayanan = document.getElementById("gambarLayanan");

            // Ambil layanan yang sudah ada di localStorage
            const layananTersedia = JSON.parse(localStorage.getItem("layanan")) || [];

            // Menambahkan layanan baru
            formLayanan.addEventListener("submit", function(event) {
                event.preventDefault();

                const file = gambarLayanan.files[0];
                if (!file) return alert("Pilih gambar untuk layanan");

                const reader = new FileReader();
                reader.onload = function(e) {
                    const newLayanan = {
                        nama: namaLayanan.value,
                        gambar: e.target.result
                    };

                    layananTersedia.push(newLayanan);
                    localStorage.setItem("layanan", JSON.stringify(layananTersedia));
                    alert("Layanan berhasil ditambahkan!");
                    namaLayanan.value = "";
                    gambarLayanan.value = "";
                };
                reader.readAsDataURL(file);
            });
    </script>

</body>
</html>
