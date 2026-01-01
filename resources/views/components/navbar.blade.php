<header
    class="fixed top-0 right-0 z-50 w-full bg-white border-b border-gray-100 shadow-md transition-all duration-300">
    <div class="container mx-auto px-6 md:px-12 py-3 flex items-center justify-between">

        <!-- Logo -->
        <a href="/" class="flex items-center gap-2 group">
            <img class="h-10 w-auto transition-transform duration-300 group-hover:scale-110" 
                 src="{{ asset('images/logo.png') }}" 
                 alt="Logo CE" />
        </a>

        <!-- Menu Icon Mobile -->
        <div id="menu-icon" class="md:hidden cursor-pointer p-2 rounded-lg hover:bg-green-50 text-green-600 transition-colors">
            <i class="ph ph-list text-3xl"></i>
        </div>

        <!-- Menu Tengah -->
        <ul id="menu-list" class="absolute md:static top-full left-0 w-full md:w-auto
                         bg-white/95 md:bg-transparent backdrop-blur-xl md:backdrop-blur-none
                         flex flex-col md:flex-row gap-6 md:gap-8 text-center
                         shadow-lg md:shadow-none
                         py-8 md:py-0
                         border-t border-gray-100 md:border-0
                         transition-all duration-300 ease-in-out origin-top
                         opacity-0 -translate-y-4 pointer-events-none md:opacity-100 md:translate-y-0 md:pointer-events-auto">
            
            <li>
                <a class="nav-link font-medium text-gray-700 hover:text-green-600 transition-colors relative" href="/">
                    Home
                </a>
            </li>
            <li>
                <a class="nav-link font-medium text-gray-700 hover:text-green-600 transition-colors relative" href="/#about">
                    About Us
                </a>
            </li>
            <li>
                <a class="nav-link font-medium text-gray-700 hover:text-green-600 transition-colors relative" href="/#learning">
                    Learning
                </a>
            </li>
            <li>
                <a class="nav-link font-medium text-gray-700 hover:text-green-600 transition-colors relative" href="/#pengurus">
                    Pengurus
                </a>
            </li>
            <li>
                <a class="nav-link font-medium text-gray-700 hover:text-green-600 transition-colors relative" href="/kegiatan">
                    Kegiatan
                </a>
            </li>

            <!-- Button Login khusus mobile -->
            <li class="md:hidden mt-4">
                <a href="/admin"
                    class="inline-block px-8 py-2.5 bg-gradient-to-r from-green-500 to-emerald-600 text-white rounded-full font-medium shadow-lg shadow-green-500/30 hover:shadow-green-500/50 transition-all transform hover:-translate-y-0.5">
                    Login Area
                </a>
            </li>
        </ul>

        <!-- Button Login Desktop -->
        <a href="/admin" class="hidden md:inline-flex items-center justify-center px-6 py-2 bg-gradient-to-r from-green-600 to-emerald-600 text-white rounded-full font-medium text-sm shadow-lg shadow-green-600/20 hover:shadow-green-600/40 hover:bg-green-700 transition-all duration-300 transform hover:-translate-y-0.5">
            Login
        </a>
    </div>
</header>

<script>
    // Toggle menu mobile
    const menuIcon = document.getElementById('menu-icon');
    const menuList = document.getElementById('menu-list');

    menuIcon.addEventListener('click', () => {
        // Toggle opacity and translation classes for animation
        if (menuList.classList.contains('opacity-0')) {
            menuList.classList.remove('opacity-0', '-translate-y-4', 'pointer-events-none');
        } else {
            menuList.classList.add('opacity-0', '-translate-y-4', 'pointer-events-none');
        }
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!menuIcon.contains(e.target) && !menuList.contains(e.target)) {
            menuList.classList.add('opacity-0', '-translate-y-4', 'pointer-events-none');
        }
    });
</script>

<style>
    /* Styling tambahan untuk indikator aktif/hover link */
    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -4px;
        left: 0;
        background-color: #10b981; /* emerald-500 */
        transition: width 0.3s ease;
    }
    .nav-link:hover::after {
        width: 100%;
    }
</style>