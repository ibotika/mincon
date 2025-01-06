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
                        <img src="/images/speakers/updated/Dr. Almonte.png" alt="Dr. Almonte.png" class="mx-auto w-full h-full mx-auto " style=" margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="w-full text-white">
                    <h1 class="text-xl md:text-4xl font-bold">STEPHEN B. ALMONTE, DMD</h1>
                    <div class='mt-5 text-sm text-justify'>
                        <p class='mt-5 text-xl'>"Periodontal Considerations In Fixed And Partial Removable Prosthodontic Therapy"</p>
                        <p class='mt-5'>Day 2, 1:00 PM - 3:00 PM</p>
                        <p class=''>Location: Clamshell 1</p>
                        <p class=''>Session 3</p>
                        <p class='mt-5'>The Lecture will present various periodontal considerations for the success of Prosthodontics both in fixed and removable partial dentures.  The General Practitioner needs to observe and be guided properly on the protocol of analyzing and having a closer look at the periodontal status of the remaining dentition prior to any prosthodontics procedures. 
                    </div>
                </div>
            </div>
            <div class='text-justify text-white text-sm'>
                <p class='mb-5'>We are excited to showcase Dr. Stephen Bermudez Almonte, an esteemed Filipino dentist with extensive expertise in Periodontics and Implant Dentistry. Dr. Almonte's journey began at the prestigious Centro Escolar University, leading to significant roles as a consultant and visiting practitioner across renowned clinics and corporations. He has held honored positions within the Philippine Dental Association, coming equipped with unparalleled expertise and a wealth of experience. His impressive track record, marked by significant contributions to dental science and his continuous endeavor to share knowledge through various seminars and conventions, makes this lecture a must-attend for dental professionals aiming to enhance their practice and deliver outstanding patient care.</p>
                <p class='mb-5'>Dive deep into the "Periodontal Considerations in Fixed and Partial Removable Prosthodontics Therapy" with Dr. Almonte. This lecture is thoughtfully crafted to equip General Practitioners by underscoring the vital importance of assessing periodontal health prior to any prosthodontics procedures. Recognizing the interconnectedness of periodontal health and prosthodontics is crucial for ensuring the durability and success of dental treatments, offering patients not just cosmetic enhancements but also improved functionality.</p>
            </div>
        </div>
    </div>
</section>



@endsection
