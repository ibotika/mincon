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
                        <img src="/images/speakers/updated/Dr. Reguyal.png" alt="Dr. Reguyal.png" class="mx-auto w-full h-full mx-auto " style=" margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="w-full text-white">
                    <h1 class="text-xl md:text-4xl font-bold">ALBERTO REGUYAL, DMD</h1>
                    <div class='mt-5 text-sm text-justify'>
                        <p class='mt-5 text-xl'>"Demystifying Rubberdamology"</p>
                        <p class='mt-5'>Day 1, 1:00 PM - 3:00 PM</p>
                        <p class=''>Location: Clamshell 2</p>
                        <p class=''>Session 2</p>
                        <p class='mt-5'>The use of a rubber dam is an established method of isolation for optimal
                            dentistry. Despite it’s well known advantages, usage remains low amongst
                            dental practitioners. Mandatory in endodontics, a rubber dam is an effective
                            barrier against contamination from saliva and accidental swallowing of root
                            canal instruments and medicaments. Another area where where rubber dam
                            is effective is restorative dentistry procedures especially when the carious
                            process is equigingival or worst, subgingivally located. With the added cost
                            however and perceived difficulty in placement, clinicians often stay away
                            and choose cotton rolls and other isolation techniques as their first choice.
                            This lecture aims to demystify, assist and encourage dentists in it’s use not
                            just in endodontics but also in restorative dentistry.
                        </p>
                    </div>
                </div>
            </div>
            <div class='text-justify text-white text-sm'>
                <p class='mb-5'>Experience the latest advancements in dental practices at the Mindanao Convention, featuring Dr. Alberto "Abet" C. Reguyal, a leader in Restorative Dentistry and Dental Photography. With a career that spans several decades, Dr. Reguyal offers a wealth of knowledge and experience.</p>
                <p class='mb-5'>Graduating from Centro Escolar University with a Doctorate in Dental Medicine, Dr. Reguyal has dedicated his career to not only practicing but also educating others through seminars and training programs nationwide. His expertise in Dental Photography and Restorative Dentistry makes him a valuable contributor to our convention.</p>
                <p class='mb-5'>This year, Dr. Reguyal will shed light on the often overlooked yet vital practice of Rubberdamology in his presentation titled "Demystifying Rubberdamology." Discover the essential role of the rubber dam in promoting patient safety and procedural effectiveness in both endodontic and restorative dentistry. Although the rubber dam has many advantages, its use is often limited due to misunderstandings regarding its complexity and cost. Dr. Reguyal aims to clarify these misconceptions, offering practical advice and motivation to integrate this critical tool into everyday dental practice.</p>
                <p class='mb-5'>Get ready to be inspired as Dr. Reguyal not only shares his expertise in effective Rubberdamology but also fosters a passion for achieving higher standards in dental care. Your path to excellence in dentistry can begin with this enlightening lecture. Don’t miss this opportunity at the Mindanao Convention.</p>
            </div>
        </div>
    </div>
</section>


@endsection
