<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Nomor Antrean</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            text-align: center; 
            padding: 20px; 
            background: #f3f4f6; 
        }
        .card { 
            background: white; 
            border-radius: 12px; 
            padding: 20px; 
            width: 320px; 
            margin: auto; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: relative; 
            text-align: left;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .header h2 { 
            font-size: 18px; 
            color: #333; 
            margin-bottom: 5px;
        }
        .number {
            font-size: 50px; 
            font-weight: bold; 
            text-align: center; 
            color: #263AA2;
            margin-bottom: 10px;
        }
        .info p { 
            font-size: 14px; 
            color: #555; 
            margin: 4px 0;
        }
        .info strong { 
            color: #333; 
        }
        .btn-container {
            display: flex; 
            justify-content: space-between; 
            margin-top: 15px;
        }
        .btn { 
            flex: 1;
            padding: 10px; 
            margin: 5px;
            border: none; 
            cursor: pointer; 
            font-size: 14px;
            font-weight: bold;
            border-radius: 5px;
            transition: 0.3s;
        }
        .btn.print { 
            background-color: #263AA2; 
            color: white;
        }
        .btn.print:hover { background-color: #1e2e80; }
        .btn.share { 
            background-color: #34a853; 
            color: white;
        }
        .btn.share:hover { background-color: #2b8b43; }
        .stamp { 
            width: 70px; 
            position: absolute; 
            bottom: 10px; 
            right: 10px; 
            opacity: 0.85;
        }
    </style>
</head>
<body>

    @if ($appointment)
        <div id="capture" class="card">
            <div class="header">
                <h2>Nomor Antrean</h2>
            </div>
            <div class="number">{{ $appointment->id }}</div>

            <div class="info">
                <p><strong>Nama:</strong> {{ $appointment->nama }}</p>
                <p><strong>Tanggal:</strong> {{ $appointment->tanggal }}</p>
                <p><strong>Tujuan:</strong> {{ $appointment->tujuan }}</p>
                <p><strong>Alamat:</strong> {{ $appointment->alamat }}</p>
            </div>

            <!-- Cap Klinik -->
            <img src="{{ asset('image/SMILE-LOGO-4.svg') }}" alt="Cap Klinik" class="stamp">

            <!-- Tombol Cetak & Bagikan -->
            <div class="btn-container">
                <button class="btn print" onclick="window.print()">Cetak</button>
                <button class="btn share" onclick="bagikanAntrean()">Bagikan</button>
            </div>
        </div>
    @else
        <h1>Data antrean tidak ditemukan!</h1>
    @endif

    <script>
        function bagikanAntrean() {
            const element = document.getElementById("capture");

            html2canvas(element).then(canvas => {
                canvas.toBlob(blob => {
                    const file = new File([blob], "antrean.png", { type: "image/png" });

                    const reader = new FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function() {
                        const base64data = reader.result;
                        const link = document.createElement('a');
                        link.href = base64data;
                        link.download = 'antrean.png';
                        link.click();
                    };
                });
            });
        }
    </script>

</body>
</html>
