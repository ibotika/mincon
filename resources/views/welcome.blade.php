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
        <div class="items-center grid-cols-2 md:grid mb-10">
            <div>
                <img src="{{  asset('/images/mincon-cutout-logo.png') }}" alt="MINCON logo" 
                class='md:rounded-2xl'>
            </div>
            <div>
                <div class='text-white'>
                    <h1 class='text-5xl font-extrabold md:text-6xl md:mt-0 bg-gradient-to-r from-[#A47BF4] to-[#ED4E8C] bg-clip-text text-transparent text-5xl md:text-6xl font-black'>
                        <span class='text-white'>
                            WELCOME TO
                        </span>  
                        MINCON 2025:</h1>
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
                                class="flex w-full col-span-2 gap-3 p-4 transition-all rounded-md cursor-pointer md:gap-2 bg-sky-500 hover:bg-sky-500/70">
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
                            class='relative block w-full px-10 py-4 font-bold text-center text-white rounded-md bg-purple-600 hover:bg-purple-600/80 md:w-auto'>
                            REGISTER NOW
                            <span class="absolute inline-flex w-3 h-3 rounded-full -top-1 -right-1 bg-sky-500 animate-ping"></span>
                        </a> 
                    </div>
                </div>
            </div>
        </div>
        <div class='wrapper rounded-lg'>
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F61564303471877%2Fvideos%2F531176213127524%2F&show_text=false&width=560&t=0" 
                style="border:none;overflow:hidden" 
                scrolling="no" 
                frameborder="0" 
                allowfullscreen="true" 
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" 
                allowFullScreen="true"
                class=''>
            </iframe>        
        </div>
    </div>
</section>

<!-- Iligan city -->
<section class='py-10 bg-black md:py-30'>
        <div class='px-8 justify-items-center max-w-6xl mx-auto'>
            <div class=' text-white md:max-w-xl text-center '>
                <!-- <h1 class='text-4xl font-bold text-center md:text-6xl'>
                    Welcome to  
                </h1> -->
                <h1 class='mb-5 bg-gradient-to-r from-[#A47BF4] to-[#ED4E8C] bg-clip-text text-transparent text-5xl md:text-6xl font-black'>
                    Iligan City
                </h1>
                <p class='text-center text-white md:text-xl'>
                     Iligan is a place unlike any other. It is a highly progressive city perfect for trips, socializing and adventures. A perfect mix of chill and excitement.
                </p>
            </div>
            <div class='max-w-6xl mx-auto py-10'>
                <div class='wrapper rounded-lg'>
                    <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F61564303471877%2Fvideos%2F1792807084852870%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                </div>
            </div>
            <body>
                <div class='swiper w-full max-w-6xl mx-auto py-10 px-4 relative '>
                    <div class='swiper-wrapper pb-20'>
                    
                            <div class="swiper-slide border border-gray-500 rounded-lg bg-gray-950">
                                <div class="px-6 py-3">
                                    <div class='flex justify-center'>
                                        <img src="{{  asset('/images/iligan/maria-cristina.jpg') }}" alt="" class='mt-5 object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                                    </div>
                                    <div class="mt-6">
                                        <p class='text-lg text-white'>
                                           Maria Cristina Falls
                                        </p>
                                        <p class='text-md text-gray-500'>
                                         Maria Cristina Falls is a waterfall of the Agus River in the Northern Mindanao region of the Philippines. It is sometimes called the "twin falls" as the flow is separated by a rock at the brink of the waterfall. 
                                        </p>
                                    </div>
                                </div>
                            </div>   

                            <div class="swiper-slide border border-gray-500 rounded-lg bg-gray-950">
                                <div class="px-6 py-3">
                                    <div class='flex justify-center'>
                                        <img src="{{  asset('/images/iligan/tinago-falls.jpg') }}" alt="" class='mt-5 object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                                    </div>
                                    <div class="mt-6">
                                        <p class='text-lg text-white'>
                                           Tinago Falls
                                        </p>
                                        <p class='text-md text-gray-500'>
                                        It is one of the main tourist attractions of Iligan, a city known as the City of Majestic Waterfalls.                                        </p>
                                    </div>
                                </div>
                            </div>  

                            <div class="swiper-slide border border-gray-500 rounded-lg bg-gray-950">
                                <div class="px-6 py-3">
                                    <div class='flex justify-center'>
                                        <img src="{{  asset('/images/iligan/paseo.webp') }}" alt="" class='mt-5 object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                                    </div>
                                    <div class="mt-6">
                                        <p class='text-lg text-white'>
                                            Paseo De Santiago                                        
                                        </p>
                                        <p class='text-md text-gray-500'>
                                         Paseo de Santiago in Iligan City, Philippines is a beautiful and historically significant park that offers visitors a chance to relax, explore, and learn about the city’s rich cultural heritage.                                        </p>
                                    </div>
                                </div>
                            </div>  

                            <div class="swiper-slide border border-gray-500 rounded-lg bg-gray-950">
                                <div class="px-6 py-3">
                                    <div class='flex justify-center'>
                                        <img src="{{  asset('/images/iligan/avoda.jpg') }}" alt="" class='mt-5 object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                                    </div>
                                    <div class="mt-6">
                                        <p class='text-lg text-white'>
                                           Avodah Kitchen
                                        </p>
                                        <p class='text-md text-gray-500'>
                                         Cravings for the curious                                       
                                         </p>
                                    </div>
                                </div>
                            </div>  
                    </div>

                    <div class="swiper-pagination"></div> 
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                </div>
            </body>
        </div>
</section>

<!-- about -->
<section class='py-10 bg-black md:py-30'>
    <div class='m-10 justify-items-center px-8 justify-items-center max-w-6xl mx-auto'>

        <div class='text-white md:max-w-xl'>
            <h1 class='mb-5 text-4xl font-bold text-center md:text-6xl'>
                Welcome to  
                <span class='mb-5 bg-gradient-to-r from-[#A47BF4] to-[#ED4E8C] bg-clip-text text-transparent text-5xl md:text-6xl font-black'>
                    MINCON 2025
                </span> 
            </h1>

               
            <p class='text-center text-white md:text-xl'>MINCON is more than just a convention; it's an eco-adventure where knowledge flows like the stunning waterfalls around us!
                This year, we're redefining the norm.
                Get ready to be motivated by innovative seminars.
                Network, learn, and unleash your potential…</p>
        </div>

        <body>
        <div class='swiper w-full px-4 relative '>
            <div class='swiper-wrapper py-10'>
            
                    <div class="swiper-slide border border-gray-500 rounded-lg bg-gray-950">
                        <header class="px-6 py-5 md:h-28">
                            <h1 class='text-lg font-semibold text-white'>
                                Fellowship Night
                                "RETRO REVAMP: Slayin' the 70's & 80's Vibe"
                            </h1>
                        </header>
                        <div class="px-6 py-3">
                            <div class='flex justify-center'>
                                <img src="{{  asset('/images/events/retrorevampprizes.jpg') }}" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                            </div>
                            <div class="mt-6">
                                <p class='text-sm text-white md:h-24'>
                                    Show us your best moves for a chance to win the grand prize 🏆
                                </p>
                            </div>
                        </div>
                        <div class="px-6 py-5">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLScG3xwA7mhxlV5fF8AEEqT_ZKRaRwePB3lhzCnc6pejTpBEow/viewform" 
                                class='block text-white w-full px-3 py-3 text-center bg-yellow-500 rounded-md hover:bg-yellow-600'>
                                Click to register
                            </a>
                        </div>
                    </div>   
                    
                    <div class="swiper-slide border border-gray-500 rounded-lg bg-gray-950">
                        <header class="px-6 py-5 md:h-28">
                            <h1 class='text-lg font-semibold text-white'>
                                List of recommended accommodations
                            </h1>
                        </header>
                        <div class="px-6 py-3">
                            <div class='flex justify-center'>
                                <img src="{{  asset('/images/events/crop-accommodation.jpg') }}" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
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

                    <div class="swiper-slide border border-gray-500 rounded-lg bg-gray-950">
                        <header class="px-6 py-5 md:h-28">
                            <h1 class='text-lg font-semibold text-white'>
                              Calling all dental trade exhibitors🦷✨
                            </h1>
                        </header>
                        <div class="px-6 py-3">
                            <div class='flex justify-center'>
                                <img src="{{  asset('/images/events/trader.jpg') }}" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                            </div>
                            <div class="mt-6">
                                <p class='text-sm text-white md:h-24'>
                                    Secure your booth now and showcase your products & services! 
                                    For more inquiries, you may contact 
                                    Dr. Cecille B. Sabayle our trade exhibit chairman.
                                 </p>
                            </div>
                        </div>
                        <div class="px-6 py-5">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSe9mNPT9dCU1SaUBSjc8cdNDCeM-xFTQGEWy-vmw1pzlFD_Mg/viewform" 
                                class='block text-white w-full px-3 py-3 text-center bg-yellow-500 rounded-md hover:bg-yellow-600'>
                                Click to register
                            </a>
                        </div>
                    </div> 

                    <!-- <div class="swiper-slide border border-gray-500 rounded-lg bg-gray-950">
                        <header class="px-6 py-5 md:h-28">
                            <h1 class='text-lg font-semibold text-white'>
                                Transportation
                            </h1>
                        </header>
                        <div class="px-6 py-3">
                            <div class='flex justify-center'>
                                <img src="{{  asset('/images/events/transportation.jpg') }}" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                            </div>
                            <div class="mt-6">
                                <p class='text-sm text-white md:h-24'>
                                    For booking and reservations, contact directly your chosen accommodation. TaraLet's sa MINCON 2025!
                                </p>
                            </div>
                        </div>
                        <div class="px-6 py-5">
                            <a href="" 
                                class='block text-white w-full px-3 py-3 text-center bg-yellow-500 rounded-md hover:bg-yellow-600'>
                                Click for more info
                            </a>
                        </div>
                    </div>  -->
                
            </div>

            <div class="swiper-pagination"></div> 

            </div>
        </body>

    </div>
</section>


<!-- speakers scientific  -->
<section class='relative pt-5 pb-20 bg-black md:py-40'>
    <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('/images/bg/bg-6.webp'); opacity:0.6;"></div>

    <div class='px-8 justify-items-center max-w-6xl mx-auto relative z-10 '>
        <div class='mx-10 md:mx-auto md:max-w-xl'>
            <h1 class='mb-6 text-4xl font-bold text-center text-white md:text-6xl'>
                Scientific Lecturers
            </h1>
            <!-- <p class='mb-6 text-center text-white md:text-xl'>
                Location: Clamshell 1
            </p> -->
            <p class='mb-6 text-center text-white md:text-xl'>
            Get to know our lineup of prominent speakers who will be sharing their expertise at the MINCON 2025.
            </p>
        </div>
        
        <body class="h-full bg-gray-100 font-sans text-sm text-black">  
            <div class="swiper w-full max-w-6xl mx-auto py-10 px-4 relative ">
                <div class="swiper-wrapper py-10">

                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-1') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Laxamana.png" alt="DR. ALVIN M. LAXAMANA" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-md font-bold mt-4">ALVIN M. LAXAMANA, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">1</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-2') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Laurito.png" alt="DR. ALVIN M. LAXAMANA" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">ARNOLD LAURITO, MD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">2</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-3') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Suguitan.png" alt="DR. ALVIN M. LAXAMANA" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">ROSA RIA HALILI SUGUITAN, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">3</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-4') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Uy.png" alt="DR. ALVIN M. LAXAMANA" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">SAMANTHA NIÑA UY, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">4</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-5') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Lantican.png" alt="DR. ALVIN M. LAXAMANA" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">SHERILYN LANTICAN, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">5</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-6') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Jacob.png" alt="DR. ALVIN M. LAXAMANA" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">Romeo N. Jacob, Jr., DMD., Cert. Ortho., FADI, FPFA</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">6</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        
                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-7') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Militante.png" alt="DR. ALVIN M. LAXAMANA" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">ANGELO MILITANTE, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">7</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-8') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. De Castro.png" alt="DR. ALVIN M. LAXAMANA" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">LEO GERALD DE CASTRO, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">8</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-9') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Fernandez.png" alt="DR. ALVIN M. LAXAMANA" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">FELYLOU FERNANDEZ, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">9</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-10') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Nunez.png" alt="DR. ALVIN M. LAXAMANA" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">ARVIN LESTER NUÑEZ, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">10</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-11') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Almonte.png" alt="DR. ALVIN M. LAXAMANA" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">STEPHEN ALMONTE, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">11</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="swiper-pagination"></div> 
                    
                </div>
        </body> 

        <div class='px-8 justify-items-center max-w-6xl mx-auto relative z-10 '>
        <div class='mx-10 md:mx-auto md:max-w-xl'>
            <h1 class='mb-6 text-4xl font-bold text-center text-white md:text-6xl'>
                Table Clinic Lecturers
            </h1>
            <!-- <p class='mb-6 text-center text-white md:text-xl'>
            Clamshell 2
            </p> -->
            <p class='mb-6 text-center text-white md:text-xl'>
             Get to know our lineup of prominent speakers who will be sharing their expertise at the MINCON 2025.
            </p>
        </div>
        
        <body class="h-full bg-gray-100 font-sans text-sm text-black">  
            <div class="swiper w-full max-w-6xl mx-auto py-10 px-4 relative ">
                <div class="swiper-wrapper py-10">

                        
                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-12') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Bautista.png" alt="Dr. Bautista.png" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">JOY BAUTISTA, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">12</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>     

                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-13') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Reguyal.png" alt="DR. ALVIN M. LAXAMANA" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">ALBERT REGUYAL, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">13</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>     

                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-14') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Padilla.png" alt="OSWALD PADILLA" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">OSWALD PADILLA, RN, RMT, MAN</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">14</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>     

                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-15') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. de Leon.png" alt="ART KEVIN DE LEON" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">ART KEVIN DE LEON, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">15</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>     

                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-16') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Alano.png" alt="DR. HERTZ A. ALANO" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">HERTZ A. ALANO, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">16</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>     

                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-17') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Manaloto.png" alt="DR. ALVIN M. LAXAMANA" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">ADRIAN CARLOS MANALOTO, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">17</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>     

                    </div>
                    
                    <div class="swiper-pagination"></div> 
                    
                </div>
        </body> 
    </div>
    </div>
</section>

<!-- trade exhibit map -->
<!-- 
<section class="py-10 bg-black md:py-40">
    <div class="m-10 justify-items-center">
        <div class="mb-10 text-white md:max-w-xl text-center">
            <h1 class="text-4xl font-bold text-center md:text-6xl mb-5">
                Trade Exhibit Hall 
            </h1>
            <img src="/images/events/floorplan.png" alt="Floor Plan" class="rounded-xl overflow-hidden">
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            <div class="h-[64px] w-auto max-w-[150px]">
                <img src="/images/logo/logo-placeholder.png" alt="Logo 1" class="w-full h-auto object-contain">
            </div>
            <div class="h-[64px] w-auto max-w-[150px]">
                <img src="/images/logo/logo-placeholder.png" alt="Logo 2" class="w-full h-auto object-contain">
            </div>
            <div class="h-[64px] w-auto max-w-[150px]">
                <img src="/images/logo/logo-placeholder.png" alt="Logo 3" class="w-full h-auto object-contain">
            </div>
            <div class="h-[64px] w-auto max-w-[150px]">
                <img src="/images/logo/logo-placeholder.png" alt="Logo 1" class="w-full h-auto object-contain">
            </div>
            <div class="h-[64px] w-auto max-w-[150px]">
                <img src="/images/logo/logo-placeholder.png" alt="Logo 2" class="w-full h-auto object-contain">
            </div>
            <div class="h-[64px] w-auto max-w-[150px]">
                <img src="/images/logo/logo-placeholder.png" alt="Logo 3" class="w-full h-auto object-contain">
            </div>
        </div>
    </div>
</section> -->




<!-- registration fees -->
<section id="registration-fees" class="relative py-10 bg-black md:py-40 ">
        <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('/images/bg/Maria-Christina-Falls.webp'); opacity: 0.5;"></div>

        <div class='relative z-10 m-10 justify-items-center px-8 justify-items-center max-w-6xl mx-auto'>
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
                        <div class='mt-5 p-6 text-center text-white'>
                            <p class='mb-5 text-gray-500 w-15 '>(September 15, 2024-November 15, 2024)</p>
                            <p class='mb-3'><span class='text-red-600 text-md font-black'>P4,500</span> Dentist, Dental Technologist, Dental Hygienist, and Government Dentist</p>
                            <p class='mb-6'><span class='text-red-600 text-md font-black'>P2,500</span> PDA Life Member & Dental Students</p>
                            <p class='text-gray-400'>With snacks, meals and free flowing coffee</p>
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
                        <div class='text-center font-bold text-white text-2xl bg-purple-600 py-3'>
                        Pre-registration   
                        </div>
                        <div class='p-6 text-white text-start'>
                            <p class='mb-5 text-gray-400'>(November 16, 2024-January 5, 2025)</p>
                            <p class='mb-3'><span class='text-purple-600 text-md font-black'>P4,500</span> Dentist, Dental Technologist, and Dental Hygienist</p>
                            <p class='mb-3'><span class='text-purple-600 text-md font-black'>P3,500</span> Government Dentist</p>
                            <p class='mb-6'><span class='text-purple-600 text-md font-black'>P3,000</span> PDA Life Member & Dental Students</p>
                            <p class='text-gray-400'>With snacks, meals and free flowing coffee</p>
                        </div>
                        <a href="https://docs.google.com/forms/d/1z5wkWCZOvqXtVmJ2xaIZHrSjaLsiBNoVKEtwXwxAHNA/viewform?edit_requested=true"
                            class='flex justify-center mb-6'>
                            <button class='bg-purple-600 hover:bg-purple-600/80 h-[50px] w-[260px] rounded-md'>
                                    <p class='font-semibold text-white'>
                                        Register Now
                                    </p>
                            </button> 
                        </a>
                    </div>
                </div>

                <div class='w-full p-3 md:w-1/2 lg:w-1/3'>
                    <div class='overflow-hidden border bg-black/60 border-white/30 rounded-2xl'>
                        <div class='text-center font-bold text-white text-2xl bg-sky-500 py-3'>
                                Onsite
                        </div>
                        <div class='p-6 text-white text-start'>
                            <p class='mb-3'><span class='text-sky-500 text-md font-black'>P6,000</span> Dentist, Dental Technologist, Dental Hygienist, and Government Dentist</p>
                            <p class='mb-6'><span class='text-sky-500 text-md font-black'>P3,500</span> PDA Life Member & Dental Students</p>
                            <p class='text-gray-400'>With snacks, meals and free flowing coffee</p>
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
        <div class='mb-20 text-black px-8 justify-items-center max-w-6xl mx-auto'>
            <div class='flex flex-col items-center justify-center '>
                <h1 class='mb-5 md:text-xl'>
                    Hosted By:</h1>
                <p class='text-lg font-bold'>PDA ILIGAN CITY CHAPTER</p>
            </div>

            <div class='grid grid-cols-1 gap-10 py-10 md:grid-cols-3 justify-items-center md:gap-20'>
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
                class='bg-purple-600 hover:bg-purple-600/80 h-[50px] w-[345px] text-white font-bold rounded-md'>
                REGISTER NOW
            </button> 
        </div>
    </section>


 @endsection