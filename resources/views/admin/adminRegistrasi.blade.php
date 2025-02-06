<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img src="{{ asset('image/SMILE LOGO.png') }}" alt="Smile logo" class="mx-auto h-10 w-auto mt-5">
      <h2 class="mt-5 text-center text-2xl/9 font-bold tracking-tight text-gray-900">DAFTAR</h2>
    </div>
  
    <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm border border-gray-300 rounded-lg shadow-md p-6 bg-white">
      <form class="space-y-6" action="#" method="POST">
        <div>
          <label for="name" class="block text-sm/6 font-medium text-gray-900">Nama Lengkap</label>
          <div class="mt-2">
            <input type="text" name="name" id="name" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div>
          <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
          <div class="mt-2">
            <input type="email" name="email" id="email" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>
  
        <div>
          <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
          <div class="mt-2">
            <input type="password" name="password" id="password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div>
          <label for="confirm-password" class="block text-sm/6 font-medium text-gray-900">Konfirmasi Password</label>
          <div class="mt-2">
            <input type="password" name="confirm-password" id="confirm-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-black px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Daftar</button>
        </div>
      </form>
  
      <p class="mt-4 text-center text-sm text-gray-600">Sudah punya akun? <a href="/admin/login" class="font-semibold text-red-600 hover:text-indigo-500">Masuk</a></p>
    </div>
  </div>
  
</body>
</html>
