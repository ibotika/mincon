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
        <div class="card w-full bg-black bg-opacity-30 border border-white border-opacity-30 rounded-2xl text-center p-5">
            <div class="image-container w-full relative overflow-visible mt-[-80px]">
                <img src="/images/speakers/updated/Dr. Uy.png" alt="Dr. Lantican" class="mx-auto w-[350px]">
            </div>
        </div>
    </a>


    <div class="w-full md:w-1/2 text-left text-white">
        <h1 class="text-xl md:text-4xl font-bold">DR. SAMANTHA NINA UY</h1>
        <div class='mt-2 text-sm'>
            <!-- <p><span class="font-black">Occupation: </span>Dentist / Professor</p>
            <p><span class="font-black">Address:</span> 3-B Mariveles Street, Sta. Mesa Heights, Quezon City</p>
            <p><span class="font-black">Mobile Number:</span> +63918.5051180</p> -->
            <p class='mt-5 text-xl'>"Oral Hygiene and Behavior Management: the Underdogs in Periodontal Care"</p>
                <div class='text-justify'>
                    <p class='mt-5'>This lecture sheds light on a critical yet often overlooked aspect of periodontal treatment—empowering patients to take control of their oral hygiene through personalized behavior management. While advanced therapies dominate discussions, it is the daily habits of patients that ultimately determine long-term periodontal health.</p>
                    <p class='mt-5'>This session explores practical, patient-centered approaches, including motivational interviewing, tailored oral hygiene tools, and reinforcement strategies that help bridge the gap between clinical treatments and lasting results. We will dive into the often underestimated role of self-performed plaque control, supported by the right techniques and tools such as interdental brushes, toothbrushes, and mouth rinses.</p>
                    <p class='mt-5'>Additionally, we will lightly touch on the challenges posed by smoking, diabetes, and other systemic factors, offering strategies to overcome these barriers. Attendees will explore ways on how to create behavior change that sticks, equipping patients with the knowledge and motivation to maintain their periodontal health for the long haul.</p>
                    <p class='mt-5'>By rethinking the importance of behavior management in periodontal care, this presentation aims to empower dental professionals to elevate their practice and improve patient outcomes in ways that go beyond the clinic chair. Join us as we explore how these 'underdogs' can lead to significant, sustained improvements in oral health.</p>
                </div>
            </div>
    </div>
</div>


        </div>
    </div>
    
</section>



@endsection
