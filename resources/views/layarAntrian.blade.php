<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layar Antrian</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .big-text {
            font-size: 6rem;
            font-weight: bold;
        }
        .next-text {
            font-size: 3rem;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-blue-900 text-white h-screen flex flex-col justify-center items-center">

    <div class="text-center mb-16">
        <h1 class="text-4xl font-bold mb-4">ANTRIAN SEDANG DIPANGGIL</h1>
        <div id="currentAntrian" class="big-text text-yellow-400">A-01</div>
        <div class="text-2xl mt-4" id="currentNama">Nama Pasien</div>
    </div>

    <div class="text-center">
        <h2 class="text-3xl mb-2">BERIKUTNYA</h2>
        <div id="nextAntrian" class="next-text text-gray-300">A-02</div>
        <div class="text-xl mt-2" id="nextNama">Nama Pasien</div>
    </div>

    <script>
        function fetchAntrianDisplay() {
            fetch('/api/antrian/terkini')
                .then(response => response.json())
                .then(data => {
                    const current = data.current || { id: '00', nama: 'Belum Ada' };
                    const next = data.next || { id: '--', nama: '-' };
    
                    document.getElementById('currentAntrian').textContent = `A-${current.id}`;
                    document.getElementById('currentNama').textContent = current.nama;
    
                    document.getElementById('nextAntrian').textContent = `A-${next.id}`;
                    document.getElementById('nextNama').textContent = next.nama;
                })
                .catch(error => {
                    console.error('Gagal memuat data antrian:', error);
                });
        }
    
        // Jalankan pertama kali saat halaman dimuat
        fetchAntrianDisplay();
    
        // Update data setiap 5 detik
        setInterval(fetchAntrianDisplay, 5000);
    </script>
    
</body>
</html>
