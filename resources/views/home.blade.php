<x-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Computer Education</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-green-100 via-white to-green-200">

  <!-- Hero Section -->
  <section class="h-screen pb-20 text-center">
    <!-- Background pattern -->
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/hexellence.png')] opacity-20"></div>

    <div class="z-10 flex justify-between items-center">
    <div class="w-full">
        <h1 class="text-5xl font-extrabold text-green-600 mb-4">WELCOME TO COMPUTER EDUCATION</h1>
        <p class="text-lg text-gray-700 mb-10">Salam Teknologi</p>
    </div>
    

      <div class="flex justify-center items-center mt-8 w-full">
        <img src="{{ asset('images/Maskot_CE-removebg-preview.png') }}" alt="Maskot" class="w-[500px] h-auto animate-bounce-slow">
        <img src="{{ asset('images/coding.png') }}" alt="Code Icon" class="h-16 animate-pulse absolute">
      </div>
    </div>
  </section>

  <!-- Tentang CE -->
  <section id="about" class="bg-green-500 text-white py-16 px-10">
    <div class="container mx-auto grid md:grid-cols-2 gap-10 items-center">
      <div class="overflow-hidden rounded-2xl shadow-lg">
        <img src="{{ asset('images/about.jpg') }}" alt="Tentang CE" class="w-full h-full">
      </div>

      <div>
        <h2 class="text-3xl font-bold mb-4">TENTANG CE</h2>
        <p class="text-lg leading-relaxed">
          Computer Education adalah platform pembelajaran berbasis teknologi yang berfokus pada peningkatan keterampilan digital dan pengembangan sumber daya manusia di bidang IT. 
          Kami hadir dengan semangat inovasi dan kolaborasi untuk menciptakan lingkungan belajar yang kreatif, modern, dan berdaya guna.
        </p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 py-6 text-center">
    <p>&copy; 2025 Computer Education. All rights reserved.</p>
  </footer>

  <style>
    @keyframes bounce-slow {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
    .animate-bounce-slow {
      animation: bounce-slow 3s infinite;
    }
  </style>

</body>
</html>


</x-layout>