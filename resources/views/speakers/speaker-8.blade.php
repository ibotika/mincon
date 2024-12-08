@extends('layouts.guest')


@section('content')

<section class='relative py-20 bg-black md:py-30'>

    <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('/images/bg/bg-6.webp'); opacity:0.6;"></div>

    <div class='mx-auto md:px-8 md:max-w-7xl'>
        <div class='relative z-10 m-10'>
            
            <button onclick="history.back()" class="text-white hover:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e8eaed" class="hover:fill-white/50">
                    <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/>
                </svg>
            </button>

            <div class="mt-12 flex flex-col md:flex-row justify-center items-center space-x-4">

    <a href="" class="w-full md:w-1/2 p-10">
        <div class="card w-full bg-black/30 border border-white border-opacity-30 rounded-2xl text-center p-5 mb-4">
            <div class="image-container w-full relative overflow-hidden mt-[-80px] p-4">
                <img src="/images/speakers/updated/Dr. De Castro.png" alt="Dr. Laurito" class="mx-auto w-[350px]">
            </div>
        </div>
    </a>


    <div class="w-full md:w-1/2 text-left text-white">
        <h1 class="text-xl md:text-4xl font-bold">DR. LEO GERALD DE CASTRO</h1>
        <div class='mt-2 text-sm'>
            <!-- <p><span class="font-black">Occupation: </span>Dentist / Professor</p>
            <p><span class="font-black">Address:</span> 3-B Mariveles Street, Sta. Mesa Heights, Quezon City</p>
            <p><span class="font-black">Mobile Number:</span> +63918.5051180</p> -->
            <p class='mt-5 text-xl'>"Ethical Excellence: The Key to Sustainable Success in Your Practice"</p>
                <div class='text-justify'>
                    <p class='mt-5'>Ethical practices are often seen as obstacles to success in competitive industries, but in reality, they form the foundation for long-term growth and sustainability. This article explores how ethics and success can coexist and even enhance each other. By building trust, avoiding legal pitfalls, fostering a positive work environment, and creating a competitive edge, professionals can achieve both integrity and profitability. Ethical decision-making not only strengthens client relationships and boosts employee satisfaction but also cultivates personal fulfillment, ensuring that success is meaningful and enduring.</p>
                </div>
            </div>
    </div>
</div>


        </div>
    </div>
    
</section>



@endsection
