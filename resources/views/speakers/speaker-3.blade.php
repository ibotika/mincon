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
                <img src="/images/speakers/updated/Dr. Suguitan.png" alt="Dr. Suguitan" class="mx-auto w-[350px]">
            </div>
        </div>
    </a>


    <div class="w-full md:w-1/2 text-left text-white">
        <h1 class="text-xl md:text-4xl font-bold">DR. ROSA RIA HALILI-SUGUITAN</h1>
        <div class='mt-2 text-sm'>
            <!-- <p><span class="font-black">Occupation: </span>Dentist / Professor</p>
            <p><span class="font-black">Address:</span> 3-B Mariveles Street, Sta. Mesa Heights, Quezon City</p>
            <p><span class="font-black">Mobile Number:</span> +63918.5051180</p> -->
            <p class='mt-5 text-xl'>"Advancing Oral Health through Preventive and Minimally Invasive Dentistry"</p>
                <div class='text-justify'>
                    <p class='mt-5'>In modern dentistry, the focus is shifting towards proactive measures that preserve natural tooth structure while promoting long-term oral health. This lecture will explore the principles of oral health, preventive dentistry, and minimally invasive techniques, emphasizing their significance in clinical practice. The lecture aims to provide insight into scientifically supported strategies that prioritize prevention, early intervention, and the use of advanced materials to manage common dental conditions effectively.</p>
                    <p class='mt-5'>Through a combination of clinical case studies, scientific evidence, and practical tips, this lecture will illustrate how a preventive and minimally invasive approach not only improves patient outcomes but also enhances the overall dental experience and quality of life. Key focus areas will include the management of early caries, promoting oral health in dry mouth conditions, and addressing patient-specific needs with less invasive treatment treatment modalities. The discussion will also highlight the role of innovative materials and techniques that align with this modern approach to dentistry.</p>
                </div>

                <p class='mt-5 text-xl'>"Beyond the Drill: Hands-On Minimally Invasive Dentistry for Healthier Smiles"</p>
                <div class='text-justify'>
                    <p class='mt-5'>This lecture will explore the principles of oral health, preventive dentistry, and minimally invasive techniques, emphasizing their significance in clinical practice.</p>
                    <p class='mt-5'>The lecture aims to provide insight into scientifically supported strategies that prioritize prevention, early intervention, and the use of advanced materials to manage common dental conditions effectively. This will also include a demonstration on the use of these materials. 
                    </p>
                </div>
        </div>
    </div>
</div>


        </div>
    </div>
    
</section>



@endsection
