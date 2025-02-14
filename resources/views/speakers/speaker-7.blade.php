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
                        <img src="/images/speakers/updated/Dr. Militante new.png" alt="Dr. Militante.png" class="mx-auto w-full h-full mx-auto " style=" margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="w-full text-white">
                    <h1 class="text-xl md:text-4xl font-bold text-left">JOSE ANGELO MILITANTE, DMD</h1>
                    <div class='mt-5 text-sm text-justify'>
                        <p class='mt-5 text-xl'>"The Role of Oral Surgery in Enhancing Orthodontic Treatment Outcomes"</p>
                        <p class='mt-5'>Day 2, 8:00 AM - 10:00 AM</p>
                        <p class=''>Location: Clamshell 1</p>
                        <p class=''>Session 1</p>
                        <p class='mt-5'>Orthodontic treatments often require a multidisciplinary approach to achieve optimal dental and facial harmony. Oral surgery plays a pivotal role in addressing complex anatomical and developmental challenges that may impede orthodontic progress. This lecture delves into the key surgical interventions that support and complement orthodontic procedures, including extractions, exposure of impacted teeth, frenectomies, and surgically assisted rapid palatal expansion (SARPE).</p>
                        <p class='mt-5'>We will explore the indications, timing, and techniques for these interventions, as well as the critical collaboration between orthodontists and oral surgeons to tailor treatment plans to individual patient needs. By integrating surgical expertise, orthodontic treatment times can be reduced, patient comfort improved, and aesthetic outcomes enhanced. Case studies will be presented to illustrate the real-world impact of surgical-orthodontic synergy in achieving stable, functional, and esthetic results.</p>
                        <p class='mt-5'>Attendees will gain a comprehensive understanding of the protocols, patient selection criteria, and post-operative care necessary to ensure successful outcomes in cases requiring both orthodontic and surgical intervention.</p>
                    </div>
                </div>
            </div>
            <div class='text-justify text-white text-sm'>
                <p class='mb-5'>Unlock the full potential of orthodontic treatments with Dr. Jose Angelo G. Militante, a distinguished luminary in the field of Oral and Maxillofacial Surgery, as he elucidates the transformative role of oral surgery in harmonizing dental and facial aesthetics. With an illustrious career decorated with accolades such as the Outstanding PDA Chapter President and a certified specialist recognition from the Professional Regulation Commission, Dr. Militante embodies excellence.
                <p class='mb-5'>Stationed at the crossroads of innovation and expertise, he leads the vanguard in Oral Cancer Management, Head and Neck Reconstruction, and advanced dental surgical techniques. </p>
                <p class='mb-5'>Revolutionize your understanding and practice of orthodontic treatments under the tutelage of a master clinician as he lectures on, "The Role of Oral Surgery in Enhancing Orthodontic Treatment Outcomes". This promises to unveil the profound synergy between orthodontics and oral surgery. Delving deep into the dynamics of extractions, frenectomies, and surgically assisted rapid palatal expansion, Dr. Militante will showcase how these surgical interventions can dramatically elevate the efficacy and aesthetics of orthodontic care.</p></p>
            </div>
        </div>
    </div>
</section>



@endsection
