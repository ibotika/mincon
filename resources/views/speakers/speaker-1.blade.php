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

            <div class='mt-12 flex flex-col md:flex-row justify-center'>

                <a href="https://www.google.com/">
                    <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                        <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                            <img src="/images/speakers/updated/Dr. Laxamana.png" :alt="" class="mx-auto m-10" style="width: 350px; margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="text-center text-white m-10">
                    <h1 class="text-xl font-bold">
                        Name 1
                    </h1>
                    <p class="mt-2 text-sm px-6">
                        description Lorem ipsum dolor sit amet, 
                    </p>    
                </div>

            </div>

        </div>
    </div>
    
</section>



@endsection
