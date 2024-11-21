import './bootstrap';
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

const swiper = new Swiper('.swiper', {
  slidesPerView: 3,  // Display 3 slides at once
  spaceBetween: 30,  // Space between slides
  loop: true,  // Infinite loop
  centeredSlides: true,  // Center the active slide
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});