import "./bootstrap";
// import Swiper bundle with all modules installed
import Swiper from "swiper/bundle";


// import styles bundle
import "swiper/css/bundle";

const swiper = new Swiper(".hero-swiper", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    autoplay: {
        delay: 5000,
    },

    // If we need pagination
    pagination: {
        el: ".hero-swiper .swiper-pagination",
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: ".hero-swiper .swiper-button-next",
        prevEl: ".hero-swiper .swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper-scrollbar",
    },
});

//   const gallery = new Swiper('.gallery-swiper', {
//     modules: [EffectCoverflow, Navigation, Pagination, Autoplay],
//     effect: 'coverflow',
//     grabCursor: true,
//     centeredSlides: true,
//     loop: true,
//     slidesPerView: 'auto',     // <--- use 'auto' with fixed slide widths (recommended)
//     spaceBetween: 30,
//     autoplay: {
//       delay: 4000,
//       disableOnInteraction: false,
//     },
//     coverflowEffect: {
//       rotate: 0,
//       stretch: 0,
//       depth: 180,
//       modifier: 1.8,
//       slideShadows: false,
//     },
//     navigation: {
//       nextEl: '.gallery-swiper .swiper-button-next', // scoped selectors
//       prevEl: '.gallery-swiper .swiper-button-prev',
//     },
//     pagination: {
//       el: '.gallery-swiper .swiper-pagination',
//       clickable: true,
//     },
//     breakpoints: {
//       480: { spaceBetween: 16, coverflowEffect: { depth: 120 } },
//       768: { spaceBetween: 24, coverflowEffect: { depth: 140 } },
//       1024: { spaceBetween: 30, coverflowEffect: { depth: 180 } },
//     },
//   });

// If your slides are injected dynamically later, run:
// gallery.update();
