<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Nomor Antrean</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 20px; }
        .card { 
            border: 2px solid black; padding: 20px; width: 300px; 
            margin: auto; border-radius: 10px; background: white; 
            position: relative; 
        }
        .btn { margin-top: 10px; padding: 10px 15px; background-color: black; color: white; border: none; cursor: pointer; }
        .btn:hover { background-color: gray; }
        .share-btn { margin-top: 10px; padding: 10px 15px; background-color: green; color: white; border: none; cursor: pointer; }
        .share-btn:hover { background-color: darkgreen; }
        .stamp { position: absolute; bottom: 10px; right: 10px; width: 80px; opacity: 0.8; }
    </style>
</head>
<body>

    @if ($appointment)
        <div id="capture" class="card">
            <h2>Nomor Antrean</h2>
            <h1 style="font-size: 50px;">{{ $appointment->id }}</h1>
            <p><strong>Nama:</strong> {{ $appointment->nama }}</p>
            <p><strong>Tanggal:</strong> {{ $appointment->tanggal }}</p>
            <p><strong>Tujuan:</strong> {{ $appointment->tujuan }}</p>

            <!-- Cap Klinik -->
            <img src="{{ asset('image/LOGO_SMILE.png') }}" alt="Cap Klinik" class="stamp">

            <button class="btn" onclick="window.print()">Cetak</button>
            <button class="share-btn" onclick="bagikanAntrean()">Bagikan</button>
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
                    const data = new FormData();
                    data.append("file", file);

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
