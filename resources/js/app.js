import './bootstrap';

const menuIcon = document.getElementById("menu-icon");
const menuList = document.getElementById("menu-list");

// Pastikan elemennya ada sebelum menambahkan event listener
if (menuIcon && menuList) {
    menuIcon.addEventListener("click", () => {
        menuList.classList.toggle("hidden");
    });
}