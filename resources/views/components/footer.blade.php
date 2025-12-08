<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Footer</title>
    @vite('resources/css/app.css')
</head>
<body>
    
<footer class="backdrop-blur-xl bg-white/10 border-lg border-white/20 shadow-x text-gray-700 py-14 px-6 border-t border-gray-200">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">
        
        <!-- Logo & Deskripsi -->
        <div>
            <h2 class="text-2xl font-bold text-gray-900 mb-3">Computer Education</h2>
            <p class="text-sm leading-relaxed text-gray-500">
                Wadah mahasiswa untuk berkreasi, berinovasi, dan berkontribusi membangun kampus yang lebih baik.
            </p>

            <div class="flex space-x-4 mt-5">
                <a href="#" class="text-gray-400 hover:text-green-500 transition"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="text-gray-400 hover:text-green-500 transition"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="text-gray-400 hover:text-green-500 transition"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#" class="text-gray-400 hover:text-green-500 transition"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>

        <!-- Navigasi -->
        <div>
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Navigasi</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="text-gray-600 hover:text-green-600 transition">Beranda</a></li>
                <li><a href="#" class="text-gray-600 hover:text-green-600 transition">Tentang Kami</a></li>
                <li><a href="#" class="text-gray-600 hover:text-green-600 transition">Kegiatan</a></li>
                <li><a href="#" class="text-gray-600 hover:text-green-600 transition">Galeri</a></li>
                <li><a href="#" class="text-gray-600 hover:text-green-600 transition">Kontak</a></li>
            </ul>
        </div>

        <!-- Kontak -->
        <div>
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Kontak Kami</h3>
            <ul class="space-y-2 text-sm text-gray-600">
                <li><i class="fa-solid fa-location-dot mr-2 text-green-500"></i>Jl. Kampus No. 10, Kota Edukasi</li>
                <li><i class="fa-solid fa-phone mr-2 text-green-500"></i>+62 812-3456-7890</li>
                <li><i class="fa-solid fa-envelope mr-2 text-green-500"></i>info@organisasikampus.ac.id</li>
            </ul>
        </div>

        <!-- Newsletter -->
        <div>
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Langganan Berita</h3>
            <p class="text-sm mb-3 text-gray-500">Dapatkan info terbaru kegiatan kami langsung ke emailmu.</p>

            <form action="#" method="POST" class="flex flex-col sm:flex-row gap-2">
                <input type="email" placeholder="Email kamu"
                    class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 text-gray-700">
                
                <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded-md transition">
                    Kirim
                </button>
            </form>
        </div>
    </div>

    <!-- Line & Copyright -->
    <div class="border-t border-gray-200 mt-12 pt-6 text-center text-sm text-gray-500">
        <p>&copy; {{ date('Y') }} Organisasi Kampus. Semua hak dilindungi.</p>
    </div>
</footer>

<!-- FontAwesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
