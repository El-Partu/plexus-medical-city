import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.getElementById("menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");
    const aboutToggle = document.querySelector('[data-toggle="about"]');
    const contactToggle = document.querySelector('[data-toggle="contact"]');
    const aboutSubmenu = document.getElementById("about-submenu");
    const contactSubmenu = document.getElementById("contact-submenu");
    const navbar = document.getElementById("navbar");

    // Toggle mobile menu
    menuToggle?.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });

    // Toggle About submenu
    aboutToggle?.addEventListener("click", () => {
        aboutSubmenu.classList.toggle("hidden");
    });

    // Toggle Contact submenu
    contactToggle?.addEventListener("click", () => {
        contactSubmenu.classList.toggle("hidden");
    });

    // Scroll color change
    window.addEventListener("scroll", () => {
        const scrollY = window.scrollY;
        const vh = window.innerHeight;
        console.log("View port height", vh)

        if (scrollY < vh * 1.5) {
            navbar.style.backgroundColor = "#0f0f2f";
            navbar.classList.remove("text-[#070716]");
            navbar.classList.add("text-white");
        } else if (scrollY < vh * 2.2) {
            navbar.style.backgroundColor = "#070716";
            navbar.classList.remove("text-[#070716]");
            navbar.classList.add("text-white");
        } else {
            navbar.style.backgroundColor = "#f8f8f8";
            navbar.style.borderBottom = "#fff";
            navbar.classList.remove("text-white");
            navbar.classList.add("text-[#070716]");
        }
    });
});

