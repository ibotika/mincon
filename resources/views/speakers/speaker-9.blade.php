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
                <a href="" class="w-full md:w-3/4 p-10 flex items-center justify-center">
                    <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                        <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                        <img src="/images/speakers/updated/Dr. Fernandez.png" alt="Dr. Fernandez.png" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="w-full text-white">
                    <h1 class="text-xl md:text-4xl font-bold">FELYLOU FERNANDEZ, DMD</h1>
                    <div class='mt-5 text-sm text-justify'>
                        <p class='mt-5 text-xl'>"The Code of Ethics for Dentists and Social Media: The impact of Digital evolution and social media to dental practice and the culture of dental profession"</p>
                        <p class='mt-5'>Day 2, 1:00 PM - 3:00 PM</p>
                        <p class=''>Location: Clamshell 1</p>
                        <p class='mt-5'>The impact of the digital evolution, technology, and social media have
                            begun to make serious effects in the practice of dentistry. With the
                            evolution of the health care profession, many issues arise:
                            commercialism of the dental profession, patients relying on the internet
                            to choose a dentist for their dental needs, and dentists promoting their
                            practice through social media. It cannot be denied that digital and social
                            media offer tremendous opportunities for both the dentists and the
                            patients. Instructing the dentists to refrain from joining the digital
                            evolution seems fruitless and difficult for the dental profession. The
                            lecture will focus on the importance of revisiting the Code of Ethics for
                            Dentists, Dental Hygienist and Dental Technologists. The important
                            questions that will be addressed: Is dentistry a business or a profession?
                            Can social media be used in promoting your practice? Is there a need to
                            adhere to the provisions of the Code of Ethics to maintain the prestige of
                            the profession?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
