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
            <div class="mt-12 mb-10 flex flex-col md:flex-row justify-center items-center">
                <a href="" class="w-full md:w-3/4 p-10 flex items-center justify-center">
                    <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                        <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                        <img src="/images/speakers/updated/Dr. de Leon.png" alt="Dr. de Leon.png" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="w-full text-white"> 
                    <h1 class="text-xl md:text-4xl font-bold">ART KEVIN DE LEON, DMD</h1>
                    <div class='mt-5 text-sm text-justify'>
                        <p class='mt-5 text-xl'>"Functional yet Esthetic Posterior Restoration"</p>
                        <p class='mt-5'>Day 2, 10:00 AM - 12:00 PM</p>
                        <p class=''>Location: Clamshell 2</p>
                        <p class='mt-5'>Posterior tooth restoration’s esthetic and anatomic appearance is usually neglected due to that it is not seen in a patient’s smile. It is usually restored flat or concave without following the original anatomy of the tooth and this usually is also the reason why the restoration fails and causes tmj problems. With this lecture the participants will appreciate that while you are restoring the tooth with cusp per cusp technique they are also decreasing the polymerization stress at the same time making the tooth esthetically pleasing, functionally effective and amazingly strong.</p>
                    </div>
                </div>
            </div>
            <div class='text-justify text-white text-sm'>
                <p class='mb-5'>Join us for an enlightening journey in dentistry with Dr. Art Kevin de Leon, at the Mindanao Convention. Dr. Arkhe, a luminary in Prosthodontics, Esthetics, and Orthodontics, brings his innovative lecture "Functional yet Esthetic Posterior Restoration" to our platform. In an industry where the beauty of posterior tooth restoration is often overlooked, Dr. Arkhe challenges the norm by emphasizing the importance of aesthetic appeal alongside functional efficiency. His dedication to restoring teeth cusp by cusp not only enhances their appearance but significantly reduces polymerization stress, ensuring a blend of strength and beauty.</p>
                <p class='mb-5'>With a rich background marked by prestigious recognitions such as the Youtube Silver Play Button and numerous leadership awards from the Philippine Dental Association (PDA), Dr. Arkhe stands out as a beacon of innovation and excellence.</p>
                <p class='mb-5'>His involvement in significant seminars and his contributions as a knowledgeable educator further establish him as a leading figure in the dental community.</p>
                <p class='mb-5'>Prepare to be inspired by a session that promises to transform your approach to dental esthetics and function. Never miss out to this opportunity to learn from one of the best in the field.</p>
            </div> 
        </div>
    </div>
</section>

@endsection


