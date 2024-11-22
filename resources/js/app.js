import './bootstrap';
import Swiper from 'swiper';

document.addEventListener("DOMContentLoaded", function() {
  var swiper = new Swiper('.swiper', {
    loop: true, // Enable infinite loop
    autoplay: {
      delay: 1000, // Auto slide every 1 second
      disableOnInteraction: false, // Continue autoplay after user interaction
    },
    slidesPerView: 2, // Show 5 slides by default
    spaceBetween: 6, // Space between slides
    centeredSlides: true, // Center the active slide
    slideToClickedSlide: true, // Enable clicking on slides to navigate

    // Responsive breakpoints
    breakpoints: {
      // When the screen width is 640px or smaller
      640: {
        slidesPerView: 2, // Show 1 slide at a time
        spaceBetween: 10, // Add some space between slides
      },
      // When the screen width is 768px or larger
      768: {
        slidesPerView: 3, // Show 3 slides at a time
        spaceBetween: 10, // Space between slides
      },
      // When the screen width is 1024px or larger
      1024: {
        slidesPerView: 5, // Show 5 slides at a time
        spaceBetween: 6, // Space between slides
      }
    },
  });
});

