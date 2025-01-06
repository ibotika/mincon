@extends('layouts.guest')


@section('content')

<section class='relative py-20 bg-black md:py-30'>\
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
                        <img src="/images/speakers/updated/Dr. De Castro.png" alt="Dr. De Castro.png" class="mx-auto w-full h-full mx-auto " style=" margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="w-full text-white">
                    <h1 class="text-xl md:text-4xl font-bold text-left">LEO GERALD DE CASTRO, DMD</h1> 
                    <div class='mt-5 text-sm text-justify'>
                        <p class='mt-5 text-xl'>"ETHICAL EXCELLENCE: The Key to Sustainable Success in Your Practice"</p>
                        <p class='mt-5'>Day 2, 10:00 AM - 12:00 PM</p>
                        <p class=''>Location: Clamshell 1</p>
                        <p class=''>Session 2</p>
                        <p class='mt-5'>Orthodontic treatments often require a multidisciplinary approach to achieve optimal dental and facial harmony. Oral surgery plays a pivotal role in addressing complex anatomical and developmental challenges that may impede orthodontic progress. This lecture delves into the key surgical interventions that support and complement orthodontic procedures, including extractions, exposure of impacted teeth, frenectomies, and surgically assisted rapid palatal expansion (SARPE).</p>
                        <p class='mt-5'>Ethical practices are often seen as obstacles to success in competitive industries, but in reality, they form the foundation for long-term growth and sustainability. This article explores how ethics and success can coexist and even enhance each other. By building trust, avoiding legal pitfalls, fostering a positive work environment, and creating a competitive edge, professionals can achieve both integrity and profitability. Ethical decision-making not only strengthens client relationships and boosts employee satisfaction but also cultivates personal fulfillment, ensuring that success is meaningful and enduring.</p>
                    </div>
                </div>
            </div>
            <div class='text-justify text-white text-sm'>
                <p class='mb-5'>We are thrilled to feature Dr. Leo Gerald de Castro, a visionary in the realm of Dentistry, specializing in Oral Surgery and Dental Implantology. As a former president of the PDA Makati and a celebrated authority recognized by his peers, Dr. de Castro embodies the fusion of professional accomplishment and ethical prowess. 
                <p class='mb-5'>With a practice rooted in over two decades of dedicated service and innovation, Dr. de Castro brings to the Mindanao Convention a wealth of experience from his private practice at ACDS and an enriching educational background from Centro Escolar University, Manila, and a pivotal residency at NYU, New York, USA.</p>
                <p class='mb-5'>Join us in discovering how your practice can achieve both remarkable integrity and profitability, ensuring a legacy of excellence and sustainability as Dr. de Castro's lectures on "Ethical Excellence: The Key to Sustainable Success in Your Practice".  His lecture promises a groundbreaking exploration of how principled practices can be the cornerstone of lasting achievement in the competitive field of dentistry. He will delve into the symbiotic relationship between ethics and success, articulating how integrity, trust-building, and a commitment to ethical decision-making are not just moral choices but strategic imperatives that drive patient satisfaction, employee loyalty, and practice growth.</p></p>
            </div>
        </div>
    </div>
</section>



@endsection
