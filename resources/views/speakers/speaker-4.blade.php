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
                            <img src="/images/speakers/updated/Dr. Uy.png" alt="Dr. Uy.png" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="w-full text-white">
                    <h1 class="text-xl md:text-4xl font-bold text-left">SAMANTHA NIÑA UY, DMD</h1>  
                    <div class='mt-5 text-sm text-justify'>
                        <p class='mt-5 text-xl'>"Oral Hygiene and Behavior Management: the Underdogs in Periodontal Care"</p>
                        <p class='mt-5'>Day 1, 1:00 AM - 4:00 PM</p>
                        <p class=''>Location: Clamshell 1</p>
                        <p class='mt-5'>This lecture sheds light on a critical yet often overlooked aspect of periodontal treatment—empowering patients to take control of their oral hygiene through personalized behavior management. While advanced therapies dominate discussions, it is the daily habits of patients that ultimately determine long-term periodontal health.</p>
                        <p class='mt-5'>This session explores practical, patient-centered approaches, including motivational interviewing, tailored oral hygiene tools, and reinforcement strategies that help bridge the gap between clinical treatments and lasting results. We will dive into the often underestimated role of self-performed plaque control, supported by the right techniques and tools such as interdental brushes, toothbrushes, and mouth rinses.</p>
                        <p class='mt-5'>Additionally, we will lightly touch on the challenges posed by smoking, diabetes, and other systemic factors, offering strategies to overcome these barriers. Attendees will explore ways on how to create behavior change that sticks, equipping patients with the knowledge and motivation to maintain their periodontal health for the long haul.</p>
                        <p class='mt-5'>By rethinking the importance of behavior management in periodontal care, this presentation aims to empower dental professionals to elevate their practice and improve patient outcomes in ways that go beyond the clinic chair. Join us as we explore how these 'underdogs' can lead to significant, sustained improvements in oral health.</p> </div>
                    </div>
                </div>
                <div class='text-justify text-white text-sm'>
                    <p class='mb-5'>We are thrilled to announce Dr. Samantha Niña Marie Ramos Uy as our distinguished lecturer at the 35th Mindanao Convention. Dr. Uy, a respected periodontist and implant dentist, boasts an impressive academic background, including a Master of Dental Surgery in Periodontology with Distinction from the University of Hong Kong and a Doctor of Dental Medicine degree, which she earned Cum Laude from the University of the East College of Dentistry.</p>
                    <p class='mb-5'>Throughout her exemplary career, Dr. Uy has held prestigious roles at various dental clinics and enhanced her skills during her residency at the Prince Philip Dental Hospital in Hong Kong. Her dedication to advancing periodontal care is evident in her pivotal research, acknowledged by the European Federation of Periodontology, and active participation in numerous dental associations.</p>
                    <p class=''>At the convention, Dr. Uy will present "Oral Hygiene and Behavior Management: The Underdogs in Periodontal Care." This lecture promises to reveal essential, yet often underestimated, elements of periodontal treatment, focusing on empowering patients through personalized behavior management for long-term periodontal health.</p>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection




