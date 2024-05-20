<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
  </head>
  <body class="bg-gray-100 flex flex-col items-center justify-center h-screen">
    <div class="mb-8">
      <img src="{{ asset('image/logo.jpeg') }}" alt="Logo" class="mb-4 w-24 md:w-32 mx-auto" />
      <h2 class="text-2xl">IPEEL Griya Mandala Permai</h2>
    </div>
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
      <h2 class="text-2xl font-semibold mb-4">Masuk</h2>
      <form>
        <div class="mb-4">
          <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
          <input type="text" id="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500" placeholder="Email" autocomplete="off" />
        </div>
        <div class="mb-4">
          <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
          <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500" placeholder="Password" />
        </div>
        <button type="submit" class="w-full bg-green-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-600">Masuk</button>
      </form>
      <div class="mt-4 text-center">
        <p>Belum punya akun? Ayo <a href="/register" class="text-green-500 font-bold">Daftar</a></p>
      </div>
    </div>
  </body>
</html>
