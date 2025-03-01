<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<meta name="theme-color" content="#06c1db">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
@vite('resources/css/app.css')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<title>SMILE</title>
</head>

<body class="h-full">
    <div class="min-h-full">
       <x-navbar>
       </x-navbar>

        <header class="bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900 ">Artikel Kesehatan Gigi</h1>
                <p class="mt-4 text-base text-gray-600">Carilah artikel kesehatan gigi yang sesuai untukmu!</p>
            </div>
        </header>
        <main class="bg-white min-h-screen">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div >
                    <input type="text" placeholder="Cari artikel..." class="w-full rounded-md bg-white px-4 py-2 text-gray-900 border-2 border-gray-300 focus:border-blue-500 focus:outline-none">
                </div>
                <div class="mt-6 grid gap-4 lg:grid-cols-4">
                    <!-- Card 1 -->
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <img src="image/GIGI.png" alt="Artikel 1" class="w-full h-40 object-cover rounded-t-lg">
                        <div class="mt-4">
                            <h3 class="text-lg font-bold">Judul Artikel 1</h3>
                            <p class="mt-2 text-gray-600">Deskripsi singkat tentang artikel 1...</p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <img src="image/artikel2.png" alt="Artikel 2" class="w-full h-40 object-cover rounded-t-lg">
                        <div class="mt-4">
                            <h3 class="text-lg font-bold">Judul Artikel 2</h3>
                            <p class="mt-2 text-gray-600">Deskripsi singkat tentang artikel 2...</p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <img src="image/artikel3.png" alt="Artikel 3" class="w-full h-40 object-cover rounded-t-lg">
                        <div class="mt-4">
                            <h3 class="text-lg font-bold">Judul Artikel 3</h3>
                            <p class="mt-2 text-gray-600">Deskripsi singkat tentang artikel 3...</p>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <img src="image/artikel4.png" alt="Artikel 4" class="w-full h-40 object-cover rounded-t-lg">
                        <div class="mt-4">
                            <h3 class="text-lg font-bold">Judul Artikel 4</h3>
                            <p class="mt-2 text-gray-600">Deskripsi singkat tentang artikel 4...</p>
                        </div>
                    </div>
                </div>
            </div>        
        </main>                                      
    </div>
    <x-footer>
    </x-footer>

</body>

</html>
