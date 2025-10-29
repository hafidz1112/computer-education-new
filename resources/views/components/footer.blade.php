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
    
<footer class="bg-gradient-to-b from-green-700 via-green-800 to-green-900 text-green-100 py-12 px-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">
        
        <!-- Logo dan Deskripsi -->
        <div>
            <h2 class="text-2xl font-bold text-white mb-3">Organisasi Kampus</h2>
            <p class="text-sm leading-relaxed text-green-100/90">
                Wadah mahasiswa untuk berkreasi, berinovasi, dan berkontribusi membangun kampus yang lebih baik.
            </p>
            <div class="flex space-x-4 mt-4">
                <a href="#" class="hover:text-white transition-colors"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="hover:text-white transition-colors"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="hover:text-white transition-colors"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#" class="hover:text-white transition-colors"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>

        <!-- Navigasi -->
        <div>
            <h3 class="text-lg font-semibold text-white mb-4">Navigasi</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-green-300 transition-colors">Beranda</a></li>
                <li><a href="#" class="hover:text-green-300 transition-colors">Tentang Kami</a></li>
                <li><a href="#" class="hover:text-green-300 transition-colors">Program</a></li>
                <li><a href="#" class="hover:text-green-300 transition-colors">Galeri</a></li>
                <li><a href="#" class="hover:text-green-300 transition-colors">Kontak</a></li>
            </ul>
        </div>

        <!-- Kontak -->
        <div>
            <h3 class="text-lg font-semibold text-white mb-4">Kontak Kami</h3>
            <ul class="space-y-2 text-sm">
                <li><i class="fa-solid fa-location-dot mr-2 text-green-400"></i>Jl. Kampus No. 10, Kota Edukasi</li>
                <li><i class="fa-solid fa-phone mr-2 text-green-400"></i>+62 812-3456-7890</li>
                <li><i class="fa-solid fa-envelope mr-2 text-green-400"></i>info@organisasikampus.ac.id</li>
            </ul>
        </div>

        <!-- Newsletter -->
        <div>
            <h3 class="text-lg font-semibold text-white mb-4">Langganan Berita</h3>
            <p class="text-sm mb-3 text-green-100/90">Dapatkan info terbaru kegiatan kami langsung ke emailmu.</p>
            <form action="#" method="POST" class="flex flex-col sm:flex-row gap-2">
                <input type="email" placeholder="Email kamu"
                    class="w-full px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400 text-gray-900">
                <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-2 rounded-md transition">
                    Kirim
                </button>
            </form>
        </div>
    </div>

    <!-- Garis pemisah -->
    <div class="border-t border-green-700 mt-10 pt-6 text-center text-sm text-green-200/80">
        <p>&copy; {{ date('Y') }} Organisasi Kampus. Semua hak dilindungi.</p>
    </div>
</footer>

<!-- Tambahkan fontawesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
