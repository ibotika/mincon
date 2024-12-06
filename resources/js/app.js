import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// Import Swiper styles and necessary modules
import Swiper, { Pagination } from 'swiper';
import 'swiper/css';
import 'swiper/css/pagination';

// Initialize Swiper
const swiper = new Swiper('.swiper', {
    slidesPerView: 1, // Default for small screens
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    modules: [Pagination],
    breakpoints: {
        768: { // For medium screens and above
            slidesPerView: 3, // Show 3 slides
        },
    },
});
