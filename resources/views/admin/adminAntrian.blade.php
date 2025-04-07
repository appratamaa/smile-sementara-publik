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
            <img src="{{ asset('image/SMILE-LOGO.svg') }}" alt="Smile logo" class="h-10">
        </h1>
        <ul class="space-y-2 flex-grow">
            <li><a href="/adminArtikel"
                    class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Artikel</a></li>
            <li><a href="/adminAntrian"
                    class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Antrian</a></li>
            <li><a href="/adminInformasi"
                    class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Informasi</a></li>
            <li><a href="/adminPraktik"
                    class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Praktik</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Chat</a>
            </li>
        </ul>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="block w-full text-left px-4 py-2 text-red-600 font-bold hover:bg-red-100 rounded">Keluar</button>
        </form>
    </div>

    <!-- Main Content -->
    <div class="flex-1 bg-white p-6 rounded shadow-md">

        <div class="flex justify-between items-center bg-white p-4 shadow-md rounded-lg mb-4">
            <h2 class="text-2xl font-semibold">Antrian Admin</h2>

            <!-- Profile Section -->
            <div class="flex items-center space-x-4">
                <span class="text-gray-700 text-sm">{{ Auth::user()->email }}</span>
                <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                    <span class="text-white font-semibold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                </div>
            </div>
        </div>

        <!-- Input untuk jumlah antrian per hari dengan tombol submit di pinggirnya -->
        <div class="mb-6 flex items-center space-x-4">
            <label for="jumlahAntrian" class="text-lg font-medium text-gray-700">Jumlah Antrian per Hari</label>
            <div class="flex">
                <input type="number" id="jumlahAntrian" name="jumlahAntrian"
                    class="w-32 px-4 py-2 border border-gray-300 rounded-l-md" placeholder="Jumlah" />
                <button id="submitAntrian"
                    class="px-4 py-2 bg-blue-500 text-white rounded-r-md hover:bg-blue-600">Submit</button>
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
                <!-- Data akan dimuat dari AJAX -->
            </tbody>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    fetch('/adminAntrian/data')
                        .then(response => response.json())
                        .then(data => {
                            const tableBody = document.getElementById('antrianTable');
                            tableBody.innerHTML = ''; // Kosongkan dulu

                            data.forEach((item, index) => {
                                const row = `
                                    <tr class="border-b border-gray-300">
                                        <td class="py-2 px-4">${item.id}</td>
                                        <td class="py-2 px-4">${item.nama}</td>
                                        <td class="py-2 px-4">${item.tujuan}</td>
                                        <td class="py-2 px-4">A-${item.id}</td>
                                        <td class="py-2 px-4">
                                            <button 
                                                class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded panggil-btn"
                                                data-id="${item.id}"
                                                data-nama="${item.nama}">
                                                Panggil
                                            </button>
                                        </td>
                                    </tr>
                                `;
                                tableBody.insertAdjacentHTML('beforeend', row);
                            });

                            // Tambahkan event listener ke semua tombol panggil
                            document.querySelectorAll('.panggil-btn').forEach(button => {
                                button.addEventListener('click', function() {
                                    const id = this.dataset.id;
                                    const nama = this.dataset.nama;
                                    alert(`Memanggil pasien: ${nama} (A-${id})`);

                                    // TODO: Tambahkan request ke backend jika ingin update status
                                    // Contoh: fetch(`/api/panggil/${id}`, { method: 'POST' })
                                    fetch(`/api/antrian/panggil/${id}`, {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json',
                                                'X-CSRF-TOKEN': '{{ csrf_token() }}' // kalau lewat blade
                                            },
                                        })
                                        .then(res => res.json())
                                        .then(response => {
                                            alert(`Memanggil pasien: ${nama} (A-${id})`);
                                            // Optional: reload atau refresh data
                                        })
                                        .catch(error => {
                                            console.error('Gagal memanggil antrian:', error);
                                        });

                                });
                            });
                        })
                        .catch(error => {
                            console.error('Gagal mengambil data:', error);
                        });
                });
            </script>


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
