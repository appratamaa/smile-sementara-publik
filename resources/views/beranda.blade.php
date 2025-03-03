<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="theme-color" content="#06c1db">
@vite('resources/css/app.css')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<title>Beranda</title>
</head>

<body class="h-full">
    <div class="min-h-full">
      @include('components.nav-prof', ['pengguna' => $pengguna])

        <x-header>
          Informasi Rekam Medis
      </x-header>
        <main class="bg-white min-h-screen">
          
          </main>
    </div>
</body>

<x-footer>
</x-footer>