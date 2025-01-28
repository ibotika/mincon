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
    <div class="max-w-6xl px-8 mx-auto mt-5">
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
        <div class='flex justify-center items-center'>
            <div class='w-full md:max-w-6xl mx-auto py-10'>
                <div class='wrapper'>
                    <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F61564303471877%2Fvideos%2F531176213127524%2F&show_text=false&width=560&t=0"
                        style="border:none;overflow:hidden" 
                        scrolling="no" 
                        frameborder="0" 
                        allowfullscreen="true" 
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" 
                        allowFullScreen="true"></iframe>
                </div>
            </div>
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
            <div class='w-full md:max-w-6xl mx-auto py-10'>
                <div class='wrapper'>
                    <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F61564303471877%2Fvideos%2F1792807084852870%2F&show_text=false&width=560&t=0"
                        style="border:none;overflow:hidden" 
                        scrolling="no" 
                        frameborder="0" 
                        allowfullscreen="true" 
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" 
                        allowFullScreen="true"></iframe>
                </div>
            </div>
            <div class='w-full md:max-w-6xl mx-auto mb-10'>
                <div class='wrapper'>
                    <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F61564303471877%2Fvideos%2F954205523292542%2F&show_text=false&width=560&t=0" 
                        style="border:none;overflow:hidden" 
                        scrolling="no" 
                        frameborder="0" 
                        allowfullscreen="true" 
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" 
                        allowFullScreen="true">
                    </iframe>
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
            <h1 class='mb-6 text-3xl font-bold text-center text-white md:text-6xl'>
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
                                        <img src="/images/speakers/updated/Dr. Laurito.png" alt="ARNOLD LAURITO" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
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
                                        <img src="/images/speakers/updated/Dr. Suguitan.png" alt="ROSA RIA HALILI SUGUITAN" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
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
                                        <img src="/images/speakers/updated/Dr. Uy.png" alt="SAMANTHA NIÑA UY" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
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
                                        <img src="/images/speakers/updated/Dr. Lantican latest.png" alt="SHERYL ANNE ROSE" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">SHERYL ANNE ROSE, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">5</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-6') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Jacob.png" alt="ROMEO N. JACOB" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">ROMEO N. JACOB, Jr., DMD., Cert. Ortho., FADI, FPFA</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">6</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-7') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Militante new.png" alt="JOSE ANGELO MILITANTE" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">JOSE ANGELO MILITANTE, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">7</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-8') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. De Castro.png" alt="LEO GERALD DE CASTRO" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
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
                                        <img src="/images/speakers/updated/Dr. Fernandez.png" alt="FELYLOU ALTURA FERNANDEZ" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                    </div>
                                    <div class="text-content text-white mt-4">
                                        <h1 class="text-xl font-bold mt-4">FELYLOU ALTURA FERNANDEZ, DMD</h1>
                                        <!-- <p class="mt-2 text-sm px-6 text-white">9</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                            <a href="{{ route('speaker-10') }}">
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                    <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                        <img src="/images/speakers/updated/Dr. Nunez.png" alt="ARVIN LESTER NUÑEZ" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
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
                                        <img src="/images/speakers/updated/Dr. Almonte.png" alt="STEPHEN ALMONTE" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
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
            <h1 class='mb-6 text-3xl font-bold text-center text-white md:text-6xl'>
                Table Clinic Lecturers
            </h1>

        </div>
        <body class="h-full bg-gray-100 font-sans text-sm text-black">  
            <div class="swiper w-full max-w-6xl mx-auto py-10 px-4 relative ">
                <div class="swiper-wrapper py-10">
                    <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                        <a href="{{ route('speaker-12') }}">
                            <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                    <img src="/images/speakers/updated/Dr. Manaloto.png" alt="ADRIAN CARLOS MANALOTO" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                </div>
                                <div class="text-content text-white mt-4">
                                    <h1 class="text-xl font-bold mt-4">ADRIAN CARLOS MANALOTO, DMD</h1>
                                    <!-- <p class="mt-2 text-sm px-6 text-white">12</p> -->
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class='swiper-slide flex flex-col items-center justify-center text-lg p-6'>
                        <a href="{{ route('speaker-13') }}">
                            <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                                <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                    <img src="/images/speakers/updated/Dr. Reguyal.png" alt="ALBERT REGUYAL" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                </div>
                                <div class="text-content text-white mt-4">
                                    <h1 class="text-xl font-bold mt-4">ALBERTO REGUYAL, DMD</h1>
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
                                    <h1 class="text-xl font-bold mt-4">OSWALD ESSEL CAHANAP PADILLA, RN, RMT, MAN</h1>
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
                                    <img src="/images/speakers/updated/Dr. Alano.png" alt="HERTZ A. ALANO" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
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
                                    <img src="/images/speakers/updated/Dr. Bautista.png" alt="JOY BAUTISTA" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                                </div>
                                <div class="text-content text-white mt-4">
                                    <h1 class="text-xl font-bold mt-4">JOY BAUTISTA, DMD</h1>
                                    <!-- <p class="mt-2 text-sm px-6 text-white">17</p> -->
                                </div>
                            </div>
                        </a>
                    </div>     
                </div>
                <div 
                    class="swiper-pagination">
                </div> 
            </div>
        </body> 
    </div>
       
    </div>
</section>

<!-- flipbook -->

    <section class='py-20 bg-black md:py-30'>
        <div class='mx-10 md:mx-auto md:max-w-xl mb-10'>
            <h1 class='text-center mb-5 bg-gradient-to-r from-[#A47BF4] to-[#ED4E8C] bg-clip-text text-transparent text-5xl md:text-6xl font-black'>
                Souvenir Magazine
            </h1>
        </div>  
        <!-- <iframe 
            frameborder="0" 
            allowtransparency="true" 
            allowFullscreen="true" 
            style="width: 100%; height: 620px; border: none;" 
            src="https://online.visual-paradigm.com/share/book/iligan-city-dental-society-program-20v9mht4li?p=1">
        </iframe>  -->
        <div class='flex justify-center'>
            <a id="c56d3d68-df35-4410-b244-833c569aa109" style="cursor:pointer;position:relative;display:inline-block" href="https://online.visual-paradigm.com/share/book/iligan-city-dental-society-program-20v9mht4li?p=1" target="_blank"><img style="max-width: 100%; max-height: 100%;background-color: white;vertical-align:bottom" src="https://online.visual-paradigm.com/community/book-thumbnail/iligan-city-dental-society-program-20v9mht4li?dummy=1736433429676?p=1" onError="this.onerror=null;this.src='https://online.visual-paradigm.com/images/vp-book-error.png';this.style.backgroundColor='transparent';"></img><img src="https://online.visual-paradigm.com/images/vp-flipbook-flipping_effect.gif" style="height: 50%;position:absolute;bottom:0px;right:0px"></img><img src="https://online.visual-paradigm.com/images/vp-flipbook-embed-icon_4.png" style="position: absolute; left:50%; top:50%; transform: translate(-50%,-50%); max-height:40%; opacity:0.7"></img></a><script type="text/javascript">(function(d,eid,url){var sns=d.getElementsByTagName('script');var st=window.vfbkembbs||sns[sns.length-1];var e=d.createElement('script');e.type='text/javascript';e.src='https://cdn-v17-2.visual-paradigm.com/diagrams/js/embed.js';e.onload=function(){VFBKEMBW2(eid,url);};e.onreadystatechange=function(){if (this.readyState==='complete'){VFBKEMBW2(eid,url);}};st.parentNode.insertBefore(e,st);})(document,'c56d3d68-df35-4410-b244-833c569aa109','https://online.visual-paradigm.com/share/book/iligan-city-dental-society-program-20v9mht4li?p=1')</script>
        </div>
        <!-- <div class='mt-8 flex justify-center'>
            <button class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white">
                <a
                href="/files/Iligan-City-Dental-Society_Program.pdf"
                download="Iligan-City-Dental-Society_Program.pdf"
                class="relative px-5 py-2.5 rounded-md"
                >
                  Download it Here
                </a>

            </button>
        </div> -->
    </section>

<!-- registration fees -->
<section id="registration-fees" class="relative py-10 bg-black md:py-40 ">
        <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('/images/bg/Maria-Christina-Falls.webp'); opacity: 0.5;"></div>

        <div class='relative z-10 m-10 justify-items-center px-8 justify-items-center max-w-6xl mx-auto'>
            <div class='mx-10 md:mx-auto md:max-w-xl'>
                <h1 class='mb-6 text-4xl font-bold text-center text-white md:text-6xl'>
                    Registration Fees
                </h1>
            </div>

            <div class='flex flex-row flex-wrap justify-center'>
            
                <div class='w-full p-3 md:w-1/2 lg:w-1/3'>
                    <div class='overflow-hidden border bg-black/60 border-white/30 rounded-2xl'>
                        <div class='py-3 text-2xl font-bold text-center text-white bg-red-600'>
                            Early Bird
                        </div>
                        <div class='p-6 text-left text-white'>
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
                            <p class='mb-5 text-gray-400'>(November 16, 2024-January 10, 2025)</p>
                            <p class='mb-3'><span class='text-purple-600 text-md font-black'>P4,500</span> Dentist, Dental Technologist, and Dental Hygienist</p>
                            <p class='mb-3'><span class='text-purple-600 text-md font-black'>P3,500</span> Government Dentist</p>
                            <p class='mb-6'><span class='text-purple-600 text-md font-black'>P3,000</span> PDA Life Member & Dental Students</p>
                            <p class='text-gray-400'>With snacks, meals and free flowing coffee</p>
                        </div>
                        <div class='flex justify-center mb-6'>
                            <button class='bg-gray-500 h-[50px] w-[260px] rounded-md'>
                                    <p class='font-semibold text-white'>
                                        Closed
                                    </p>
                            </button> 
                        </div>
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
                            <!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSeReowZEnVNVm6pfWFhNoNysQ3hS5S2LZ2TY3Vsv84-D3QcnQ/viewform"> -->
                                <button class='bg-gray-500 h-[50px] w-[260px] rounded-md'>
                                    <p class='font-semibold text-white'>
                                        Closed
                                    </p>
                                </button> 
                            

                            <!-- <div class="px-6 py-5">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLScG3xwA7mhxlV5fF8AEEqT_ZKRaRwePB3lhzCnc6pejTpBEow/viewform" 
                                    class='block text-white w-full h-[50px] w-[260px] rounded-md text-center bg-sky-500 rounded-md hover:bg-sky-600'>
                                    Click to register
                                </a>
                            </div> -->

                        </div> 
                    </div>
                </div>
        </div>
    </section>

    <!-- attendees -->

    <section class='py-20 bg-black md:py-30'>
        <div class='mx-10 md:mx-auto md:max-w-xl mb-10'>
            <h1 class='text-center mb-5 bg-gradient-to-r from-[#A47BF4] to-[#ED4E8C] bg-clip-text text-transparent text-5xl md:text-6xl font-black'>
                Attendees
            </h1>
        </div>  
        <a href="{{ route('registrants') }}">
            <div class="flex justify-center">
                <div class="text-content text-white mt-4">
                    <h1 class="text-xl font-bold mt-4">Show all</h1>
                    <!-- <p class="mt-2 text-sm px-6 text-white">12</p> -->
                </div>
            </div>
        </a>
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