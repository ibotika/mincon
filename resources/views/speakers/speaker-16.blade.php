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
            <div class="mt-12 flex flex-col md:flex-row justify-center items-center">
                <a href="" class="w-full p-10 flex items-center justify-center">
                    <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                        <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                        <img src="/images/speakers/updated/Dr. Alano.png" alt="Dr. Alano.png" class="mx-auto w-full h-full mx-auto " style="margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="w-full text-white"> 
                    <h1 class="text-xl md:text-4xl font-bold">HERTZ A. ALANO, DMD</h1>
                    <div class='mt-5 text-sm text-justify'>
                        <p class='mt-5 text-xl'>"Orthodontic Mini-implants (TADS): A Key to Orthodontic Treatment Efficiency"</p>
                        <p class='mt-5'>Day 2, 1:00 PM - 3:00 PM</p>
                        <p class=''>Location: Clamshell 2</p>
                        <p class='mt-5'>Temporary anchorage devices have been widely used in clinical orthodontics to have better control of
                            complex tooth movement through skeletal anchorage. This course will cover the biological foundations
                            and clinical applications of temporary anchorage devices in orthodontics. The different anatomical
                            placement sites and related biomechanics shall also be discussed to give practitioners an edge in the
                            treatment efficiency of cases.
                        </p>
                    </div>
                </div>
            </div>
            <div class='text-justify text-white text-sm'>
                <p class='mb-5'>Join us at the Mindanao Convention for a special presentation by Dr. Hertz A. Alano, a leading authority in Orthodontics known for his expertise in Temporary Anchorage Devices (TADs).</p>
                <p class='mb-5'>Dr. Alano, who has a strong academic background from Centro Escolar University and extensive global experience, is set to share his valuable knowledge and innovative methods. His lecture titled "Orthodontic Mini-implants (TADs): A Key to Orthodontic Treatment Efficiency" will explore the biological principles and advanced clinical uses of TADs, aiming to establish new standards for efficiency in orthodontic treatment.</p>
                <p class='mb-5'>As a highly regarded speaker with numerous accolades for his contributions to the field, and with a successful history of leading seminars both locally and internationally, Dr. Alano is ready to transform practitioners’ approaches to complex tooth movements using skeletal anchorage. His journey, from the lively streets of Manila to esteemed orthodontic conferences around the world, reflects his commitment to excellence and innovation in dental care.</p>
                <p class='mb-5'>Get ready to be inspired by strategies developed in the Philippines, as Dr. Alano discusses his groundbreaking techniques and personal insights on optimizing orthodontic treatment through the effective use of mini-implants. This session at the Mindanao Convention is truly a unique opportunity for both newcomers and seasoned professionals to enhance their practice with expertise from one of the foremost leaders in the field of Orthodontics today.</p>
            </div>
        </div>
    </div>
</section>


@endsection

