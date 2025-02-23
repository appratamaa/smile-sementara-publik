<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janji Temu Dokter</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto p-6">
        <!-- Form Janji Temu -->
        <div class="bg-white p-6 mt-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Buat Janji Temu</h2>
            <form id="appointmentForm">
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700">Nama Lengkap</label>
                    <input type="text" id="nama" class="w-full p-2 border rounded mt-1" placeholder="Masukkan nama Anda">
                </div>
                <div class="mb-4">
                    <label for="tanggal" class="block text-gray-700">Tanggal</label>
                    <input type="date" id="tanggal" class="w-full p-2 border rounded mt-1">
                </div>
                <div class="mb-4">
                    <label for="waktu" class="block text-gray-700">Waktu</label>
                    <div id="waktu" class="grid grid-cols-2 gap-4">
                        <!-- Jam yang tersedia akan dimasukkan di sini -->
                    </div>
                </div>
                <div class="mb-4">
                    <label for="dokter" class="block text-gray-700">Tujuan</label>
                    <select id="dokter" class="w-full p-2 border rounded mt-1">
                        <option>Pemeriksaan Rutin</option>
                        <option>Cabut Gigi</option>
                        <option>Pasang Behel</option>
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Buat Janji</button>
            </form>
        </div>
    </div>

    <script>
        window.onload = function() {
            const schedules = JSON.parse(localStorage.getItem('schedules')) || [];
            const waktuContainer = document.getElementById('waktu');
            const tanggalInput = document.getElementById('tanggal');
    
            // Mengambil tanggal yang sudah diatur di jadwal praktik
            const availableDates = new Set();
    
            schedules.forEach(schedule => {
                // Menambahkan tanggal yang tersedia
                availableDates.add(schedule.tanggal);
            });
    
            // Menampilkan tanggal yang tersedia pada input
            const today = new Date();
            const minDate = today.toISOString().split('T')[0]; // Set tanggal minimum ke hari ini
            tanggalInput.setAttribute('min', minDate);
    
            // Menambahkan tanggal yang bisa dipilih ke input
            const availableDateArray = [...availableDates];
            availableDateArray.forEach(date => {
                const option = document.createElement('option');
                option.value = date;
                option.textContent = date;
                tanggalInput.appendChild(option);
            });
    
            // Mengisi kotak waktu dengan jam yang tersedia sesuai hari yang dipilih
            tanggalInput.addEventListener('change', function() {
                const selectedDate = new Date(tanggalInput.value);
                const day = selectedDate.toLocaleString('en-us', { weekday: 'long' });
    
                // Menghapus pilihan waktu sebelumnya
                waktuContainer.innerHTML = ''; // Reset pilihan waktu
    
                // Menambahkan waktu yang sesuai dengan hari
                let hasAvailableTime = false; // Flag untuk mengecek apakah ada waktu yang tersedia
                schedules.forEach(schedule => {
                    if (schedule.tanggal === tanggalInput.value) {
                        const radioButton = document.createElement('div');
                        radioButton.classList.add('flex', 'items-center');
                        
                        const input = document.createElement('input');
                        input.type = 'radio';
                        input.id = schedule.jam;
                        input.name = 'waktu';
                        input.value = schedule.jam;
    
                        const label = document.createElement('label');
                        label.setAttribute('for', schedule.jam);
                        label.classList.add('ml-2', 'text-gray-700');
                        label.textContent = schedule.jam;
    
                        radioButton.appendChild(input);
                        radioButton.appendChild(label);
                        waktuContainer.appendChild(radioButton);
                        hasAvailableTime = true;
                    }
                });
    
                if (!hasAvailableTime) {
                    const message = document.createElement('p');
                    message.textContent = 'Tidak ada jadwal tersedia';
                    message.classList.add('text-red-500', 'mt-2');
                    waktuContainer.appendChild(message);
                }
            });
        };
    
        document.getElementById('appointmentForm').addEventListener('submit', function(e) {
            e.preventDefault();
    
            const nama = document.getElementById('nama').value;
            const tanggal = document.getElementById('tanggal').value;
            const waktu = document.querySelector('input[name="waktu"]:checked')?.value;
            const dokter = document.getElementById('dokter').value;
    
            if (!waktu) {
                alert('Silakan pilih waktu yang tersedia terlebih dahulu');
                return;
            }
    
            const appointment = {
                nama: nama,
                tanggal: tanggal,
                waktu: waktu,
                dokter: dokter,
                status: 'Pending'
            };
    
            // Mengambil data janji temu yang sudah ada di Local Storage, jika ada
            const appointments = JSON.parse(localStorage.getItem('appointments')) || [];
    
            // Menambahkan janji temu baru ke array
            appointments.push(appointment);
    
            // Menyimpan kembali ke Local Storage
            localStorage.setItem('appointments', JSON.stringify(appointments));
    
            alert('Janji Temu Berhasil Dibuat!');
            document.getElementById('appointmentForm').reset();
        });
    </script>
    
</body>
</html>
