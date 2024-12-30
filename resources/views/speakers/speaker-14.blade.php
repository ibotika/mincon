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
                        <img src="/images/speakers/updated/Dr. Padilla.png" alt="Dr. Padilla.png" class="mx-auto w-full h-full mx-auto " style=" margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="w-full text-white"> 
                    <h1 class="text-xl md:text-4xl font-bold">OSWALD ESSEL CAHANAP PADILLA, RN, RMT, MAN</h1>
                    <div class='mt-5 text-sm text-justify'>
                        <p class='mt-5 text-xl'>"CBCT: The Future of Dental Imaging"</p>
                        <p class='mt-5'>Day 1, 3:00 PM - 5:00 PM</p>
                        <p class=''>Location: Clamshell 2</p>
                        <p class='mt-5'>The Lecture will present various periodontal considerations for the success of Prosthodontics both in fixed and removable partial dentures.  The General Practitioner needs to observe and be guided properly on the protocol of analyzing and having a closer look at the periodontal status of the remaining dentition prior to any prosthodontics procedures.</p>
                    </div>
                </div>
            </div>
            <div class='text-justify text-white text-sm'>
                <p class='mb-5'>Join us at the Mindanao Convention as we proudly feature Oswald Essel Cahanap Padilla, a luminous figure in the realms of healthcare and dental technology.  With an educational foundation that spans across a Bachelor of Science in Nursing from Dr. Carlos S. Lanting College, a Bachelor of Science in Medical Technology from Emilio Aguinaldo College, and culminating in a Master of Arts in Nursing, Oswald's pursuit of excellence is evident. Holding a valid license as a nurse under the Philippines Regulatory Commission, he embodies the spirit of lifelong learning and professional development.</p>
                <p class='mb-5'>Currently serving as the Country Manager for Dürr Dental in Germany, Oswald brings over two decades of experience in medical and dental technology to the forefront of discussion. His dedication is evident through his continuous engagement in advancing dental practices, particularly in Oral Radiology and Infection Control, across different continents. </p>
                <p class='mb-5'>In his lecture titled "CBCT: The Future of Dental Imaging," He will delve into the revolutionary Cone Beam Computed Tomography (CBCT) technology. This session promises to bridge the gap between clinical knowledge and the technical prowess required to harness the full potential of CBCT in enhancing dental practice. From oral surgery to orthodontics, attendees will gain invaluable insights into the application, manipulation, and benefits of CBCT, marking a leap towards the future of dental imaging.</p>
            </div>
        </div>
    </div> 
</section>




@endsection
