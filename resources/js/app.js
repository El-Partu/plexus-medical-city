import "./bootstrap";
// import Swiper bundle with all modules installed
import Swiper from "swiper/bundle";

// import styles bundle
import "swiper/css/bundle";

const swiper = new Swiper(".swiper", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    autoplay:{
        delay: 5000
    },

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable:true
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper-scrollbar",
    },
    on: {
        init: () => {
            const pagination = document.querySelector(".swiper-pagination");
            pagination.classList.add(
                "absolute",
                "top-1/2",
                "left-[200px]",
                "-translate-y-1/2"
            );
        },
    },
});

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
        console.log("View port height", vh);

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
