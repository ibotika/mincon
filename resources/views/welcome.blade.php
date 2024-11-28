@extends('layouts.guest')

@section('scripts')
<script>
const words = ["Beyond an Event   ", "A legacy in the making   "];
let i = 0;
let j = 0;
let currentWord = "";
let isDeleting = false;

function type() {
  currentWord = words[i];
  if (isDeleting) {
    document.getElementById("typewriter").textContent = currentWord.substring(0, j-1);
    j--;
    if (j == 0) {
      isDeleting = false;
      i++;
      if (i == words.length) {
        i = 0;
      }
    }
  } else {
    document.getElementById("typewriter").textContent = currentWord.substring(0, j+1);
    j++;
    if (j == currentWord.length) {
      isDeleting = true;
    }
  }
  setTimeout(type, 100);
}

type();
</script>
@endsection

@section('content')


<!-- intro -->
<section class='flex items-center justify-center min-h-screen py-8 mt-8 overflow-hidden bg-black'>

    <div class="max-w-6xl px-8 mx-auto">
        <div class="items-center grid-cols-2 md:grid">
            <div>
                <img src="{{  asset('images/banner.png') }}" alt="MINCON logo" 
                class='md:rounded-2xl'>
            </div>
            <div>

                <div class='text-white'>
                    <h1 class='text-6xl font-extrabold md:text-6xl md:mt-0'>MINCON 2025: </h1>
                    <div class="h-12">
                        <h2 id="typewriter" class="mt-4 text-2xl font-bold md:text-4xl">Beyond an Event</h2>
                    </div>
                    <div class='mt-4'>
                        <p class='mb-5'>
                            Join us on an incredible journey to Iligan, the Majestic City of Waterfalls, on January 16-17, 2025.
                            MINCON is more than just a convention; it's an eco-adventure where knowledge flows like the stunning waterfalls around us!
                        </p>
                        <p>This year, we're redefining the norm. Get ready to be motivated by innovative seminars.
                        Network, learn, and unleash your potential…</p>
                    </div>

                     <div class='mt-5'>

                        <div class="grid-cols-3 gap-4 space-y-2 md:space-y-0 md:grid">

                            <a href="https://maps.app.goo.gl/sF4usXAQabCaqz3d7" 
                                target="_blank"
                                class="flex w-full col-span-2 gap-3 p-4 transition-all rounded-md cursor-pointer md:gap-2 bg-white/15 hover:bg-white/20">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                                    class="flex-shrink-0 md:mt-2 size-8 md:animate-bounce">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>

                                <div>
                                    <p class="text-xs">CLAM SHELL 1, KAUSWAGAN INTERNATIONAL ORGANIC CONVENTION CENTER, KAUSWAGAN, LANAO DEL NORTE</p>
                                </div>
                            </a>

                            <div class="flex items-center w-full col-span-1 gap-3 p-4 transition-all rounded-md cursor-pointer md:gap-2 md:item-start bg-white/15 hover:bg-white/20">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                                    class="flex-shrink-0 size-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                </svg>


                                <div>
                                    <p class="text-xs">JANUARY 16-17, 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8"> 
                        <a  href="#registration"
                            onclick="document.getElementById('registration-fees').scrollIntoView({ behavior: 'smooth' });"
                            class='relative block w-full px-10 py-4 font-bold text-center text-white rounded-md bg-violet-700 hover:bg-violet-700/80 md:w-auto'>
                            REGISTER NOW
                            <span class="absolute inline-flex w-3 h-3 rounded-full -top-1 -right-1 bg-sky-500 animate-ping"></span>
                        </a> 
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<!-- about -->
<section class='py-10 bg-black md:py-30'>
    <div class='m-10 justify-items-center'>
        <div class='mb-10 text-white md:max-w-xl'>
            <h1 class='mb-5 text-4xl font-bold text-center md:text-6xl'>
                Welcome to MINCON 2025 </h1>
            <p class='text-center text-white md:text-xl'>MINCON is more than just a convention; it's an eco-adventure where knowledge flows like the stunning waterfalls around us!
                This year, we're redefining the norm.
                Get ready to be motivated by innovative seminars.
                Network, learn, and unleash your potential…</p>
        </div>

        <div class='mx-auto md:px-8 md:max-w-6xl'>
            <div class="grid gap-8 md:grid-cols-3">

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5 md:h-28">
                        <h1 class='text-lg font-semibold text-white'>
                            Fellowship Night
                            "RETRO REVAMP: Slayin' the 70's & 80's Vibe"
                        </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="/images/events/retrorevampprizes.jpg" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                        <div class="mt-6">
                            <p class='text-sm text-white md:h-24'>
                                Show us your best moves for a chance to win the grand prize 🏆
                            </p>
                        </div>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLScG3xwA7mhxlV5fF8AEEqT_ZKRaRwePB3lhzCnc6pejTpBEow/viewform" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-yellow-500 rounded-md hover:bg-yellow-600'>
                                Click to register
                            </a> 
                        </a>
                    </div>
                </div>

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5 md:h-28">
                        <h1 class='text-lg font-semibold text-white'>
                            List of recommended accommodations
                        </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="{{  asset('/images/events/accomodations.jpg') }}" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                        <div class="mt-6">
                            <p class='text-sm text-white md:h-24'>
                                 For booking and reservations, contact directly your chosen accommodation. TaraLet's sa MINCON 2025!
                            </p>
                        </div>
                    </div>
                    <div class="px-6 py-5">
                        <a href="{{ route('accommodations') }}" 
                            class='block text-white w-full px-3 py-3 text-center bg-yellow-500 rounded-md hover:bg-yellow-600'>
                            Click for more info
                        </a>
                    </div>
                </div>  

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5 md:h-28">
                        <h1 class='text-lg font-semibold text-white'>
                            Calling all dental trade exhibitors🦷✨
                        </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="{{  asset('/images/events/trader.jpg') }}" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                        <div class="mt-6 text-sm text-white md:h-24">
                            <p> Secure your booth now and showcase your products & services! For more inquiries, you may contact Dr. Cecille B. Sabayle our trade exhibit chairman.</p>
                        </div>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSe9mNPT9dCU1SaUBSjc8cdNDCeM-xFTQGEWy-vmw1pzlFD_Mg/viewform" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-yellow-500 rounded-md hover:bg-yellow-600'>
                                 Click to register
                            </a> 
                        </a>
                    </div>
                </div>  

            </div>
        </div>
    </div>
</section>


<!-- speakers -->
<section class='relative pt-5 pb-20 bg-black md:py-40'>
    <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('/images/bg/bg-6.webp'); opacity:0.6;"></div>

    <div class='relative z-10 '>
        <div class='mx-10 md:mx-auto md:max-w-xl'>
            <h1 class='mb-6 text-4xl font-bold text-center text-white md:text-6xl'>
                Featured Speakers
            </h1>
            <p class='mb-6 text-center text-white md:text-xl'>
            Get to know our lineup of prominent speakers who will be sharing their expertise at the MINCON 2025.
            </p>
        </div>
        
        <div x-data="{
            slides: [
                { title: 'DR. ALVIN M. LAXAMANA', description: 'DENTIST / PROFESSOR', image: '/images/speakers/DR._ALVIN_LAXAMANA.png' },
                { title: 'DR. ARNOLD LAURITO', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', image: '/images/speakers/DR._ARNOLD_LAURITO.png' },
                { title: 'DR. ROSA RIA HALILI SUGUITAN', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', image: '/images/speakers/DR._ROSA_RIA_HALILI-SUGUITAN.png' },
                { title: 'DR. SAMANTHA NINA UY', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', image: '/images/speakers/DR._SAMANTHA_NINA_UY.png' },
                { title: 'DR. SHERILYN LANTICAN ', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', image: '/images/speakers/DR._SHERILYN_LANTICAN.png' },
                { title: 'ATTY. FELYLOU FERNANDEZ', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', image: '/images/speakers/ATTY._FELYLOU_FERNANDEZ.png' },
                { title: 'DR. ANGELO MILITANTE', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', image: '/images/speakers/DR._ANGELO_MILITANTE.png' },
                { title: 'DR. ARVIN NUNEZ', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', image: '/images/speakers/DR._ARVIN_NUNEZ.png' },
                { title: 'DR. LEO GERALD DE CASTRO', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', image: '/images/speakers/DR._LEO_GERALD_DE_CASTRO.png' },
                { title: 'DR. ROMEO JACOB', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', image: '/images/speakers/DR._ROMEO_JACOB.png' },
                { title: 'DR. STEPHEN ALMONTE', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', image: '/images/speakers/DR._STEPHEN_ALMONTE.png' }
            ],
                currentSlide: 0,
                autoplay: null,
                autoplaySpeed: 3000,
                startX: 0,
                endX: 0,
                slideWidth: 0,
                mouseDown: false,
                init() {
                    this.updateSlideWidth();
                    window.addEventListener('resize', this.updateSlideWidth.bind(this));

                    // Start autoplay for all screen sizes
                    this.startAutoplay();

                    // Mouse events for desktop swipe functionality
                    const container = document.querySelector('.swiper-container');
                    container.addEventListener('mousedown', this.handleMouseDown.bind(this));
                    container.addEventListener('mouseup', this.handleMouseUp.bind(this));
                    container.addEventListener('mouseleave', this.handleMouseUp.bind(this));
                    container.addEventListener('mousemove', this.handleMouseMove.bind(this));
                },
                startAutoplay() {
                    this.autoplay = setInterval(() => {
                        this.goToNext();
                    }, this.autoplaySpeed);
                },
                stopAutoplay() {
                    clearInterval(this.autoplay);
                    this.autoplay = null;
                },
                goToNext() {
                    this.currentSlide = (this.currentSlide + 1) % this.slides.length;
                },
                goToPrev() {
                    this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
                },
                updateSlideWidth() {
                    const container = document.querySelector('.swiper-container');
                    const containerWidth = container.offsetWidth;
                    this.slideWidth = containerWidth >= 768 ? containerWidth / 3 : containerWidth * 0.8;
                },
                handleTouchStart(event) {
                    this.startX = event.touches[0].clientX;
                },
                handleTouchEnd(event) {
                    this.endX = event.changedTouches[0].clientX;

                    // Detect swipe direction based on X-axis movement
                    if (this.startX - this.endX > 50) {
                        // Swiped left, go to next slide
                        this.goToNext();
                    } else if (this.endX - this.startX > 50) {
                        // Swiped right, go to previous slide
                        this.goToPrev();
                    }
                },
                handleMouseDown(event) {
                    this.mouseDown = true;
                    this.startX = event.clientX;
                },
                handleMouseUp(event) {
                    if (!this.mouseDown) return;
                    this.mouseDown = false;
                    this.endX = event.clientX;

                    // Detect swipe direction based on X-axis movement
                    if (this.startX - this.endX > 50) {
                        // Swiped left, go to next slide
                        this.goToNext();
                    } else if (this.endX - this.startX > 50) {
                        // Swiped right, go to previous slide
                        this.goToPrev();
                    }
                },
                handleMouseMove(event) {
                    if (!this.mouseDown) return;
                    // This can be used to implement dragging functionality (optional)
                }
            }" class="swiper-container mx-auto overflow-hidden relative pt-20" style="width: 100%; max-width: 1200px;">
                <!-- Slides -->
                <div class="flex transition-transform ease-in-out duration-300" :style="{ transform: `translateX(-${currentSlide * slideWidth}px)` }"
                    @touchstart="handleTouchStart($event)" @touchend="handleTouchEnd($event)">
                    
                    <template x-for="(slide, index) in slides" :key="index">
                        <div class="swiper-slide flex-none px-2" :style="{ width: `${slideWidth}px` }">
                            <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                    <img :src="slide.image" :alt="slide.title" class="mx-auto" style="width: 240px; margin: 0 auto;">
                                </div>
                                <div class="text-content text-white mt-4">
                                    <h1 class="text-xl font-bold" x-text="slide.title"></h1>
                                    <p class="mt-2 text-sm px-6" x-text="slide.description"></p>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
    </div>
</section>
   

<!-- registration fees -->
<section id="registration-fees" class="relative py-10 bg-black md:py-40 ">
    <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('/images/bg/Maria-Christina-Falls.webp'); opacity: 0.5;"></div>

    <div class='relative z-10 m-10 justify-items-center'>
        <div class='mx-10 md:mx-auto md:max-w-xl'>
            <h1 class='mb-6 text-4xl font-bold text-center text-white md:text-6xl'>
                Registration Fees</h1>
            <!-- <p class='mb-10 text-center text-white md:text-xl'>
                with CPD Points
            </p> -->
        </div>

        <div class='flex flex-row flex-wrap justify-center'>
           
            <div class='w-full p-3 md:w-1/2 lg:w-1/3'>
                <div class='overflow-hidden border bg-black/60 border-white/30 rounded-2xl'>
                    <div class='py-3 text-2xl font-bold text-center text-white bg-red-600'>
                        Early Bird
                    </div>
                    <div class='mt-12 text-center text-white'>
                        <p class='mb-5 text-gray-500 w-15 '>(September 15, 2024-November 15, 2024)</p>
                        <p class='mb-5 text-lg'>Life Member - PHP 2,500</p>
                    </div>
                    <div class='flex justify-center mb-6'>
                        <button class='bg-gray-500 h-[50px] w-[260px] rounded-md'>
                            <p class='font-semibold text-white'>
                                PHP 3,500
                            </p>
                        </button> 
                    </div>
                </div>
            </div>

            <div class='w-full p-3 md:w-1/2 lg:w-1/3'>
                <div class='overflow-hidden border bg-black/60 border-white/30 rounded-2xl'>
                    <div class='text-center font-bold text-white text-2xl bg-[#9c0ad1] py-3'>
                    Pre-registration   
                    </div>
                    <div class='p-6 text-white text-start'>
                        <p class='mb-5 text-gray-400'>(November 16, 2024-January 5, 2025)</p>
                        <p class='mb-3'><span class='text-[#9c0ad1] text-md font-black'>P4,500</span> Dentist, Dental Technologist, and Dental Hygienist</p>
                        <p class='mb-3'><span class='text-[#9c0ad1] text-md font-black'>P3,500</span> Government Dentist</p>
                        <p class='mb-6'><span class='text-[#9c0ad1] text-md font-black'>P3,000</span> PDA Life Member & Dental Students</p>
                        <p class='text-gray-400'>Snacks, meals and free flowing coffee <span class='font-bold text-white'>INCLUDED</span></p>
                    </div>
                    <a href="https://docs.google.com/forms/d/1z5wkWCZOvqXtVmJ2xaIZHrSjaLsiBNoVKEtwXwxAHNA/viewform?edit_requested=true"
                        class='flex justify-center mb-6'>
                        <button class='bg-[#9c0ad1] hover:bg-[#9c0ad1]/80 h-[50px] w-[260px] rounded-md'>
                                <p class='font-semibold text-white'>
                                    Register Now
                                </p>
                        </button> 
                    </a>
                </div>
            </div>

            <div class='w-full p-3 md:w-1/2 lg:w-1/3'>
                <div class='overflow-hidden border bg-black/60 border-white/30 rounded-2xl'>
                    <div class='text-center font-bold text-white text-2xl bg-[#00BFFF] py-3'>
                            Onsite
                    </div>
                    <div class='p-6 text-white text-start'>
                        <p class='mb-3'><span class='text-[#00BFFF] text-md font-black'>P4,500</span> Dentist, Dental Technologist, and Dental Hygienist</p>
                        <p class='mb-6'><span class='text-[#00BFFF] text-md font-black'>P3,000</span> PDA Life Member & Dental Students</p>
                        <p class='text-gray-400'>Snacks, meals and free flowing coffee <span class='font-bold text-white'>NOT INCLUDED</span></p>
                    </div>
                    <div class='flex justify-center mb-6'>
                        <button class='bg-gray-500 h-[50px] w-[260px] rounded-md'>
                                <p class='font-semibold text-white'>
                                    January 6,2025 - onwards
                                </p>
                        </button> 
                    </div> 
                </div>
            </div>
    </div>
</section>

<!-- hosted by -->
 <section class='py-20 bg-white'>
    <div class='mb-20 text-black'>
        <div class='flex flex-col items-center justify-center '>
            <h1 class='mb-5 md:text-xl'>
                Hosted By:</h1>
            <p class='text-lg font-bold'>PDA ILIGAN CHAPTER</p>
        </div>

        <div class='grid grid-cols-1 gap-10 py-10 md:grid-cols-3 justify-items-center md:gap-5'>
            <a href="https://pda.com.ph/">
                <img src="/images/logo/pda.webp" alt="PDA logo" class='h-[90px] md:h-[150px]'>
            </a>

            <img src="/images/logo/pda-115.webp" alt="PDA logo" class='h-[90px] md:h-[150px]'>

            <a href="https://www.facebook.com/iligancitydentalsocietyinc">
                <img src="/images/logo/pda-iligan.webp" alt="PDA-Iligan logo" class='h-[90px] md:h-[150px]'>
            </a>
        </div>
    </div>
    <div class='flex flex-col items-center justify-center'>
        
        <h1 class='bg-gradient-to-r from-[#A47BF4] to-[#ED4E8C] bg-clip-text text-transparent text-5xl md:text-6xl font-black'
            onclick="document.getElementById('registration-fees').scrollIntoView({ behavior: 'smooth' });">
        Join Now!
        </h1>
        
        <img src="/images/mincon-logo.webp" alt="" class='md:max-w-2xl'>
        <button
            onclick="document.getElementById('registration-fees').scrollIntoView({ behavior: 'smooth' });"
            class='bg-[#9c0ad1] hover:bg-[#9c0ad1]/80 h-[50px] w-[345px] text-white font-bold rounded-md'>
            REGISTER NOW
        </button> 
    </div>
 </section>


 @endsection