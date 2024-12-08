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
                            <img src="/images/speakers/updated/Dr. Lantican latest.png" alt="Dr. Lantican.png" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="w-full text-white">
                    <h1 class="text-xl md:text-4xl font-bold text-left">SHERILYN LANTICAN, DMD</h1>
                    <div class='mt-5 text-sm text-justify'>
                        <p class='mt-5 text-xl'>"PDA: PROACTIVE in its Commitment to ORAL HEALTH"</p>
                        <p class='mt-5'>Day 1, 1:00 AM - 4:00 PM</p>
                        <p class=''>Location: Clamshell 1</p>
                        <p class='mt-5'>In the 74th World Health Assembly, the WHO urged member states to pursue Sustainable Development Goals (SDGs) and universal health care, recognizing oral health's integral role. With a significant global burden of oral diseases, the WHO emphasized shifting from curative to preventive, inclusive care. The subsequent Global Oral Health Status Report highlighted that 42% of the Western Pacific's population, including the Philippines, suffers from oral diseases. In response, the WHO introduced the Global Oral Health Action Plan (2023-2030), promoting public health approaches.</p>
                        <p class='mt-5'>The Philippines committed to this shift, aligning with Universal Health Care, emphasizing primary care, accessibility, and comprehensive services. The Philippine Dental Association, Inc. (PDA) supports this preventive focus, aiming to meet global health commitments through its projects. </p>
                        <p class='mt-5'>The “Oral Health Dapat Sapat” project components conceptualized by the PDA Public Health Committee aligns with the Global Oral Health Action Plan, ensuring sustainable progress. This reorientation prioritizes first-contact accessibility, continuity of care, and public involvement in health decisions. The PDA recognizes the Department of Health's role and aims to contribute to national and global health goals through continuous, sustainable efforts. This comprehensive, preventive approach is crucial for improving oral and overall health.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
