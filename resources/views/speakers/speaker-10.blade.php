@extends('layouts.guest')


@section('content')

<section class='relative py-20 bg-black md:py-30'>
    <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('/images/bg/bg-6.webp'); opacity:0.6;"></div>
    <div class='mx-auto md:px-8 md:max-w-6xl'>
        <div class='relative z-10 m-10'>
            <button onclick="history.back()" class="text-white hover:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e8eaed" class="hover:fill-white/50">
                    <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/>
                </svg>
            </button>
            <div class="mt-12 flex flex-col md:flex-row justify-center items-center space-x-4">
                <a href="" class="w-full md:w-3/4 p-10 flex items-center justify-center">
                    <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                        <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                        <img src="/images/speakers/updated/Dr. Nunez.png" alt="Dr. Nunez.png" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="w-full text-white">
                <h1 class="text-xl md:text-4xl font-bold">ARVIN LESTER NUÑEZ, DMD</h1>                    
                <div class='mt-5 text-sm text-justify'>
                    <p class='mt-5 text-xl'>"Digital Prosthodontics: The Future of Dental Prosthodontics"</p>
                    <p class='mt-5'>Day 2, 1:00 PM - 3:00 PM</p>
                    <p class=''>Location: Clamshell 1</p>
                    <p class='mt-5'>Advancements in the evolution of dentistry have taken Dentistry to another level, Digital Era have begun, various dental procedures like digital impression ,3D Printing Dental Restorations such as Crown, Veneer, Bridge & Dentures . Three-dimensional (3D) printing  is a process where materials (resin) are added in layers & cured by blue light  in which a 3D object is formed. With the use of computer aided programs, dental restoration is possible to manufacture chairside w/accuracy w/ direct patient communication on how we can finish & deliver the treatment. 3D Printing Dental restoration is a game changer Single Visit Dentistry.</p>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
