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
        <div class="card w-full bg-black/30 border border-white border-opacity-30 rounded-2xl text-center p-5">
            <div class="image-container w-full relative overflow-hidden mt-[-80px]">
                <img src="/images/speakers/updated/Dr. Militante.png" alt="Dr. Laurito" class="mx-auto w-[350px]">
            </div>
        </div>
    </a>


    <div class="w-full md:w-1/2 text-left text-white">
        <h1 class="text-xl md:text-4xl font-bold">DR. JOSE ANGELO MILITANTE</h1>
        <div class='mt-2 text-sm'>
            <!-- <p><span class="font-black">Occupation: </span>Dentist / Professor</p>
            <p><span class="font-black">Address:</span> 3-B Mariveles Street, Sta. Mesa Heights, Quezon City</p>
            <p><span class="font-black">Mobile Number:</span> +63918.5051180</p> -->
            <p class='mt-5 text-xl'>"The Role of Oral Surgery in Enhancing Orthodontic Treatment Outcomes"</p>
                <div class='text-justify'>
                    <p class='mt-5'>Orthodontic treatments often require a multidisciplinary approach to achieve optimal dental and facial harmony. Oral surgery plays a pivotal role in addressing complex anatomical and developmental challenges that may impede orthodontic progress. This lecture delves into the key surgical interventions that support and complement orthodontic procedures, including extractions, exposure of impacted teeth, frenectomies, and surgically assisted rapid palatal expansion (SARPE).</p>
                    <p class='mt-5'>We will explore the indications, timing, and techniques for these interventions, as well as the critical collaboration between orthodontists and oral surgeons to tailor treatment plans to individual patient needs. By integrating surgical expertise, orthodontic treatment times can be reduced, patient comfort improved, and aesthetic outcomes enhanced. Case studies will be presented to illustrate the real-world impact of surgical-orthodontic synergy in achieving stable, functional, and esthetic results.</p>
                    <p class='mt-5'>Attendees will gain a comprehensive understanding of the protocols, patient selection criteria, and post-operative care necessary to ensure successful outcomes in cases requiring both orthodontic and surgical intervention.</p>
                </div>
            </div>
    </div>
</div>


        </div>
    </div>
    
</section>



@endsection
