mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/swiper.js', 'public/js')  // Add this line
   .postCss('resources/css/app.css', 'public/css', [
       require('postcss-import'),
       require('tailwindcss'),
   ]);

   