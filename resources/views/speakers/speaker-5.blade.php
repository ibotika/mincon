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
            <div class="mt-12 mb-5 flex flex-col md:flex-row justify-center items-center">
                <a href="" class="w-full px-10 flex items-center justify-center">
                    <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                        <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                            <img src="/images/speakers/updated/Dr. Lantican latest.png" alt="Dr. Lantican.png" class="mx-auto w-full h-full mx-auto " style=" margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="w-full text-white">
                    <h1 class="text-xl md:text-4xl font-bold text-left">SHERYL ANNE ROSE LANTICAN, DMD</h1>
                    <div class='mt-5 text-sm text-justify'>
                        <p class='mt-5 text-xl'>"PDA: PROACTIVE in its Commitment to ORAL HEALTH"</p>
                        <p class='mt-5'>Day 1, 1:00 AM - 4:00 PM</p>
                        <p class=''>Location: Clamshell 1</p>
                        <p class=''>Session 2</p>
                        <p class='mt-5'>In the 74th World Health Assembly, the WHO urged member states to pursue Sustainable Development Goals (SDGs) and universal health care, recognizing oral health's integral role. With a significant global burden of oral diseases, the WHO emphasized shifting from curative to preventive, inclusive care. The subsequent Global Oral Health Status Report highlighted that 42% of the Western Pacific's population, including the Philippines, suffers from oral diseases. In response, the WHO introduced the Global Oral Health Action Plan (2023-2030), promoting public health approaches.</p>
                        <p class='mt-5'>The Philippines committed to this shift, aligning with Universal Health Care, emphasizing primary care, accessibility, and comprehensive services. The Philippine Dental Association, Inc. (PDA) supports this preventive focus, aiming to meet global health commitments through its projects. </p>
                        <p class='mt-5'>The “Oral Health Dapat Sapat” project components conceptualized by the PDA Public Health Committee aligns with the Global Oral Health Action Plan, ensuring sustainable progress. This reorientation prioritizes first-contact accessibility, continuity of care, and public involvement in health decisions. The PDA recognizes the Department of Health's role and aims to contribute to national and global health goals through continuous, sustainable efforts. This comprehensive, preventive approach is crucial for improving oral and overall health.</p>
                    </div>
                </div>
            </div>
            <div class='text-justify text-white text-sm'>
                <p class='mb-5'>It's our privilege to introduce Dr. Sheryl Anne Rose Lantican, DDS, PAED, as a highlighted speaker at this year's Mindanao Convention. Beginning her career at Centro Escolar University, she has further enhanced her skills with specializations in Pediatric Dentistry, Orthodontics, and TMJ and Orofacial Pain. 
                <p class='mb-5'>Her journey spans over two decades, featuring roles from Associate Dentist at Asian Hospital to proprietor of Sheryl Lantican Dental Clinic in Canlubang, Laguna.</p>
                <p class='mb-5'>In the past five years, Dr. Lantican has spearheaded numerous initiatives, significantly contributing to the enhancement of oral health education and services. Her esteemed positions within the Philippine Dental Association epitomize her influence on dental health policies.</p>
                <p class='mb-5'>Dr. Lantican's excellence garners recognition, including awards like "Most Outstanding Club President" and "Most Outstanding Chapter Officer" from PDA Laguna Chapter, Inc., celebrating her leadership and dedication to oral health.</p>
                <p class='mb-5'>In her presentation, “PDA: PROACTIVE in its Commitment to ORAL HEALTH,” Dr. Lantican will explore the Philippine Dental Association's alignment with WHO's Global Oral Health Action Plan. She will highlight the shift towards preventive care and detail the “Oral Health Dapat Sapat” project's initiatives aimed at achieving comprehensive health goals.</p></p>
            </div>
        </div>
    </div>
</section>


@endsection
