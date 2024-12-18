@extends('layouts.guest')


@section('content')

<section class='relative mt-10 py-20 bg-black md:py-30'>
    <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('/images/bg/bg-6.webp'); opacity:0.6;"></div>
        <div class='mx-auto md:px-8 md:max-w-6xl'>
            <div class='relative z-10 m-10'>

                <button onclick="history.back()" class="text-white hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e8eaed" class="hover:fill-white/50">
                        <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/>
                    </svg>
                </button>

                <div class="mt-12 mb-10 flex flex-col md:flex-row justify-center items-center">
                    <a href="" class="w-full md:w-3/4 p-10 flex items-center justify-center">
                        <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                            <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                <img src="/images/speakers/updated/Dr. Laxamana.png" alt="Dr. Laxamana.png" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                            </div>
                        </div>
                    </a>
                    <div class="w-full text-white">
                        <h1 class="text-xl md:text-4xl font-bold text-left">ALVIN M. LAXAMANA, DMD </h1>
                        <div class='mt-5 text-sm text-justify'>
                            <p class='mt-5 text-xl'>"From Mouth to Body: The Impact of the Oral Microbiome on Systemic Health"</p>
                            <p class='mt-5'>Day 1, 10:00 AM - 12:00 PM</p>
                            <p class=''>Location: Clamshell 1</p>
                            <p class='mt-5'>A complex ecology of bacteria, viruses, fungus, and other microorganisms that live in the oral cavity, the oral microbiome is essential to preserving general health. Its substantial impact extends beyond dental health, as recent studies have connected it to systemic diseases like diabetes, cardiovascular disease, respiratory infections, and unfavorable pregnancy outcomes.</p>
                            <p class='mt-5'>This lecture will focus on the mechanisms by which the oral microbiome impacts systemic health, emphasizing the bidirectional relationship between oral and systemic diseases. Understanding the oral microbiome's systemic implications underscores its importance in holistic healthcare and the need for integrated prevention strategies to enhance overall well-being.</p>
                        </div>
                    </div>
                </div>

                <div class=''>
                    <p class='text-justify text-white text-sm'>
                    MB  We are privileged to introduce Dr. Alvin M. Laxamana, a luminary in both the dental and public health realms. A proud alumnus of Centro Escolar University with a Doctorate in Dental Medicine. With Masters in Educational Management and Public Health, Dr. Laxamana stands at the convergence of clinical excellence and academic leadership. He serves as an Associate Professor and Chief of Clinics at the College of Dentistry, University of Perpetual Help Laguna, and leads as the Department Head of Periodontology, Oral Research, & Dental Public Health. Beyond his academic and clinical roles, Dr. Laxamana's dedication to advancing dental education shines through his leadership as the Chairman of the Commission for Dental Education, Asia Pacific Dental Federation, and his influential positions within the Philippine Dental Association, including past presidency and his current role as Editor-in-Chief of its journal. A respected authority on periodontology and the critical links between oral and systemic health, Dr. Laxamana will delve into 'From Mouth to Body: The Impact of the Oral Microbiome on Systemic Health,' offering an enlightening perspective on how oral health is integral to our overall well-being.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection
