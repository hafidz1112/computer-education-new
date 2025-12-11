import './bootstrap';

// 1. Impor Swiper dan semua modul yang Anda butuhkan
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';

// Menjalankan semua skrip setelah halaman HTML selesai dimuat
window.addEventListener('DOMContentLoaded', function () {
    
    // --- LOGIKA UNTUK HAMBURGER MENU ---
    const menuIcon = document.getElementById('menu-icon');
  const menuList = document.getElementById('menu-list');

  menuIcon.addEventListener('click', () => {
    const isOpen = menuList.classList.contains('opacity-100');

    if (isOpen) {
      // Tutup menu
      menuList.classList.remove('opacity-100', 'translate-y-0', 'pointer-events-auto');
      menuList.classList.add('opacity-0', '-translate-y-4', 'pointer-events-none');
    } else {
      // Buka menu (delay dikit biar smooth)
      menuList.classList.remove('opacity-0', '-translate-y-4', 'pointer-events-none');
      menuList.classList.add('opacity-100', 'translate-y-0', 'pointer-events-auto');
    }
  });

    // --- INISIALISASI SWIPER UTAMA (JIKA ADA) ---
    // Pastikan Anda punya elemen dengan kelas .swiper-utama di HTML
    const swiperUtama = new Swiper('.swiper-utama', {
        modules: [Navigation, Pagination],
        loop: true,
        grabCursor: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    // --- INISIALISASI SWIPER UNTUK BAGIAN "LEARNING" ---
    const learnSwiper = new Swiper('.learn-container', {
        modules: [Pagination],
        loop: true,
        grabCursor: true,
        spaceBetween: 20,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            320: { slidesPerView: 1.5, centeredSlides: true },
            768: { slidesPerView: 3, centeredSlides: false },
            1024: { slidesPerView: 4, centeredSlides: false }
        }
    });

    // --- INISIALISASI SWIPER UNTUK "PENGURUS" ---
// resources/js/app.js

// --- INISIALISASI SWIPER UNTUK "PENGURUS" ---
const pengurusSwiper = new Swiper('.pengurus-slider', {
    modules: [Pagination, Autoplay],
    loop: true,
    grabCursor: true,
    spaceBetween: 24,

    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    
    // Ganti seluruh bagian breakpoints ini
    breakpoints: {
        // Untuk layar HP (mulai dari 0px)
        0: {
            slidesPerView: 1,     // <-- SAMAKAN DENGAN SLIDER LEARN
            centeredSlides: true,   // <-- PASTIKAN INI ADA
            spaceBetween: 16      // <-- Beri sedikit jarak
        },
        // Jika layar 768px atau lebih (tablet)
        768: {
            slidesPerView: 2,
            centeredSlides: false
        },
        // Jika layar 1024px atau lebih (desktop)
        1024: {
            slidesPerView: 4,
            centeredSlides: false
        }
    }
});

});