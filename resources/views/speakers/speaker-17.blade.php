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
                <a href="" class="w-full p-10 flex items-center justify-center">
                    <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                        <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                        <img src="/images/speakers/updated/Dr. Manaloto.png" alt="Dr. Manaloto.png" class="mx-auto w-full h-full mx-auto " style=" margin: 0 auto;">
                        <!-- width: 240px; -->
                        </div>
                    </div>
                </a>
                <div class="w-full text-white"> 
                    <h1 class="text-xl md:text-4xl font-bold">ADRIAN CARLOS MANALOTO, DMD</h1>
                    <div class='mt-5 text-sm text-justify'>
                        <p class='mt-5 text-xl'>"Chairside FPD Temporization techniques"</p>
                        <p class='mt-5'>Day 2, 3:00 PM - 5:00 PM</p>
                        <p class=''>Location: Clamshell 2</p>
                        <p class='mt-5'>Dental Practice in the Philippines is in full gear these days. The demand for prosthetic rehabilitation of our patients is now possible. Knowing how to do chairside temporization may optimize our practice, so we can render quicker responses to the fast trends of patient treatment today.</p>
                </div>
                </div>
            </div>
            <div class='text-justify text-white text-sm'>
                <p class='mb-5'>We are thrilled to feature Dr. Adrian Carlos F. Manaloto, a vanguard in the realm of Prosthodontics and Implantology, as one of our distinguished speakers at this year's Mindanao Convention. With a profound educational background, Dr. Manaloto brings a wealth of knowledge from his Master of Science degree in Prosthodontics from Korea University and illustrious career marked by notable contributions to the field. As a dedicated prosthodontist serving in esteemed institutions such as Cornerstone Dental Office, Let’s Talk Teeth, and Landayan Dental Clinic, Dr. Manaloto's clinical brilliance is unparalleled.</p>
                <p class='mb-5'>Dr. Manaloto has earned recognition for his exemplary skills, marked by participation in the International College of Prosthodontists' Young Prosthodontic Educator Summit and accolades such as the 2nd place Oral Presentation at the 8th Asian Academy of Osseointegration. His involvement in the Philippine Dental Association and the Philippine Prosthodontic Society as a Fellow underlines his commitment to advancing dental practice in the Philippines.</p>
                <p class='mb-5'>In his presentation, “Chairside FPD Temporization Techniques,” Dr. Manaloto will unveil innovative strategies for prosthetic rehabilitation, enabling dental practitioners to offer timely, efficient patient care in today’s fast-paced clinical settings. This session promises to equip attendees with the necessary toolkit to thrive in the evolving landscape of dental practice, ensuring they stay at the forefront of patient treatment trends.</p>
            </div>
        </div>
    </div>
</section>

@endsection
