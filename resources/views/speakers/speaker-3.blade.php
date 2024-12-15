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
                    <a href="" class="w-full md:w-3/4 p-10 flex justify-center">
                        <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                            <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                                <img src="/images/speakers/updated/Dr. Suguitan.png" alt="Dr. Suguitan.png" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                            </div>
                        </div>
                    </a>
                    <div class="w-full text-white">
                            <h1 class="text-xl md:text-4xl font-bold text-left">ROSA RIA HALILI-SUGUITAN, DMD</h1>
                            <div class='mt-5 text-sm text-justify'>
                            <p class='mt-5 text-xl'>"PRESERVING SMILES : Advancing Oral Health through Preventive and Minimally Invasive Dentistry"</p>
                            <p class='mt-5'>Day 1, 1:00 PM - 4:00 PM</p>
                            <p class=''>Location: Clamshell 1</p>
                            <p class='mt-5'>In modern dentistry, the focus is shifting towards proactive measures that preserve natural tooth structure while promoting long-term oral health. This lecture will explore the principles of oral health, preventive dentistry, and minimally invasive techniques, emphasizing their significance in clinical practice. The lecture aims to provide insight into scientifically supported strategies that prioritize prevention, early intervention, and the use of advanced materials to manage common dental conditions effectively.</p>
                            <p class='mt-5'>Through a combination of clinical case studies, scientific evidence, and practical tips, this lecture will illustrate how a preventive and minimally invasive approach not only improves patient outcomes but also enhances the overall dental experience and quality of life. Key focus areas will include the management of early caries, promoting oral health in dry mouth conditions, and addressing patient-specific needs with less invasive treatment treatment modalities. The discussion will also highlight the role of innovative materials and techniques that align with this modern approach to dentistry.</p>
                            <div class='mt-5'>
                            <p class='mt-5 text-xl'>"Beyond the Drill: Hands-On Minimally Invasive Dentistry for Healthier Smiles"</p>
                            <p class='mt-5'>Day 1, 4:00 PM - 5:00 PM</p>
                            <p class=''>Location: Clamshell 1</p>
                            <p class='mt-5'>This lecture will explore the principles of oral health, preventive dentistry, and minimally invasive techniques, emphasizing their significance in clinical practice.</p>
                            <p class='mt-5'>The lecture aims to provide insight into scientifically supported strategies that prioritize prevention, early intervention, and the use of advanced materials to manage common dental conditions effectively. This will also include a demonstration on the use of these materials. </p>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
