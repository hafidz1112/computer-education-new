<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman coba-coba</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="bg-white shadow-md">
  <div class="container mx-auto flex justify-between items-center py-4 px-8">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto">
    </div>

    <!-- Menu -->
    <nav class="space-x-8 text-lg font-medium text-gray-800">
      <a href="#" class="hover:text-green-600 transition duration-300">HOME</a>
      <a href="#" class="hover:text-green-600 transition duration-300">ABOUT US</a>
      <a href="#" class="hover:text-green-600 transition duration-300">LEARNING</a>
      <a href="#" class="hover:text-green-600 transition duration-300">PENGURUS</a>
    </nav>

    <!-- Login Button -->
    <div>
      <a href="#" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-300">
        Login
      </a>
    </div>
  </div>
</header>

    
</body>
</html>