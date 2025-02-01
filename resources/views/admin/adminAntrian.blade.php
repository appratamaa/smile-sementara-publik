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
            <img src="image/SMILE LOGO.png" alt="Smile logo" class="h-10">
        </h1>
        <ul class="space-y-2 flex-grow">
            <li>
                <a href="/admin" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded" id="adminArtikel">Artikel</a>
            </li>
            <li>
                <a href="/admin/antrian" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded" id="adminAntrian">Antrian</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded" id="chat-link">Chat</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded" id="rekamMedis-link">Rekam Medis</a>
            </li>
        </ul>
        <a href="#" class="block px-4 py-2 text-red-600 font-bold hover:bg-red-100 rounded" id="artikel-link">Keluar</a>
    </div>

    <script>
        document.querySelectorAll('.w-64 a').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.w-64 a').forEach(link => link.classList.remove('bg-black', 'text-white'));
                this.classList.add('bg-black', 'text-white');
            });
        });
    </script>
</body>
</html>
