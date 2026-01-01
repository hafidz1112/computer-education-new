<footer class="bg-gradient-to-br from-green-900 to-gray-900 text-white pt-20 pb-10 relative overflow-hidden">
    <!-- Abstract Background Shape (Optional) -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-green-500/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>

    <div class="container mx-auto px-6 md:px-12 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            
            <!-- Column 1: Brand Info -->
            <div class="space-y-6">
                <a href="/" class="flex items-center gap-3">
                    <img class="h-12 w-auto brightness-0 invert" src="{{ asset('images/logo.png') }}" alt="Logo CE" />
                </a>
                <p class="text-green-100/80 leading-relaxed text-sm">
                    Wadah mahasiswa untuk berkreasi, berinovasi, dan berkontribusi membangun kampus yang lebih baik melalui teknologi.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-green-500 hover:scale-110 transition-all duration-300">
                        <i class="fa-brands fa-instagram text-lg"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-green-500 hover:scale-110 transition-all duration-300">
                        <i class="fa-brands fa-youtube text-lg"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-green-500 hover:scale-110 transition-all duration-300">
                        <i class="fa-brands fa-tiktok text-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h3 class="text-lg font-bold mb-6 text-green-400">Jelajahi</h3>
                <ul class="space-y-4">
                    <li><a href="/" class="text-green-100/70 hover:text-white hover:pl-2 transition-all duration-300">Beranda</a></li>
                    <li><a href="/#about" class="text-green-100/70 hover:text-white hover:pl-2 transition-all duration-300">Tentang Kami</a></li>
                    <li><a href="/#learning" class="text-green-100/70 hover:text-white hover:pl-2 transition-all duration-300">Belajar</a></li>
                    <li><a href="/kegiatan" class="text-green-100/70 hover:text-white hover:pl-2 transition-all duration-300">Kegiatan</a></li>
                    <li><a href="/#pengurus" class="text-green-100/70 hover:text-white hover:pl-2 transition-all duration-300">Pengurus</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact Info -->
            <div>
                <h3 class="text-lg font-bold mb-6 text-green-400">Hubungi Kami</h3>
                <ul class="space-y-4 text-green-100/80">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-location-dot mt-1 text-green-500"></i>
                        <span>Jl. Fatahilla No. 10, Kabupaten Cirebon (Universitas Muhammadiyah Cirebon)</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope text-green-500"></i>
                        <span>computer_education@umc.ac.id</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-brands fa-whatsapp text-green-500"></i>
                        <span>+62 812-9130-0572</span>
                    </li>
                </ul>
            </div>

            <!-- Column 4: WhatsApp Action -->
            <div>
                <h3 class="text-lg font-bold mb-6 text-green-400">Tanya Admin</h3>
                <p class="text-green-100/70 text-sm mb-4">Punya pertanyaan seputar organisasi atau materi? Kirim pesan langsung.</p>
                <form onsubmit="kirimWA(event)" class="space-y-3">
                    <div class="relative">
                        <input id="pesan" type="text" required placeholder="Tulis pesan..." 
                            class="w-full bg-white/10 border border-green-500/30 rounded-lg px-4 py-3 focus:outline-none focus:border-green-500 text-white placeholder-green-100/30 transition-all">
                    </div>
                    <button type="submit" 
                        class="w-full py-3 bg-gradient-to-r from-green-600 to-green-500 rounded-lg font-semibold hover:from-green-500 hover:to-green-400 shadow-lg shadow-green-900/50 hover:shadow-green-500/30 transition-all duration-300 flex items-center justify-center gap-2">
                        <span>Kirim WhatsApp</span>
                        <i class="fa-brands fa-whatsapp"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-green-100/40 text-sm">
                &copy; {{ date('Y') }} Computer Education UMC. All rights reserved.
            </p>
            <div class="flex gap-6 text-sm text-green-100/40">
                <a href="#" class="hover:text-white transition">Privacy Policy</a>
                <a href="#" class="hover:text-white transition">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<!-- FontAwesome (Loaded if not in layout) -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script>
    function kirimWA(e) {
        e.preventDefault();
        const pesan = document.getElementById('pesan').value;
        const nomorWA = '6281291300572';
        const waText = `Halo Admin Computer Education, saya ingin bertanya: ${pesan}`;
        const url = `https://wa.me/${nomorWA}?text=${encodeURIComponent(waText)}`;
        window.open(url, '_blank');
    }
</script>