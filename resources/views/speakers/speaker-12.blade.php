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
                <img src="/images/speakers/updated/Dr. Bautista.png" alt="Dr. Bautista.png" class="mx-auto w-[350px]">
            </div>
        </div>
    </a>


    <div class="w-full md:w-1/2 text-left text-white">
        <h1 class="text-xl md:text-4xl font-bold">DR. JOY BAUTISTA</h1>
        <div class='mt-2 text-sm'>
            <!-- <p><span class="font-black">Occupation: </span>Dentist / Professor</p>
            <p><span class="font-black">Address:</span> 3-B Mariveles Street, Sta. Mesa Heights, Quezon City</p>
            <p><span class="font-black">Mobile Number:</span> +63918.5051180</p> -->
            <p class='mt-5 text-xl'>"Periodontal Considerations In Fixed And Partial Removable Prosthodontic Therapy"</p>
                <div class='text-justify'>
                    <p class='mt-5'>The advancement of dental implantology has seen significant innovations, particularly in the integration of digital technology into clinical practice. One of the key debates in modern implant placement is the comparison between freehand and digitally guided techniques. This presentation  aims to provide an overview of both approaches, highlighting their respective advantages, challenges, and clinical implications.</p>
                    <p class='mt-5'>Freehand implant placement, the traditional method, relies heavily on the clinician's skill, experience, and anatomical knowledge. While this technique offers flexibility and has been well-established over decades, it can be prone to errors in terms of implant positioning, angulation, and depth, which can ultimately affect the long-term success of the implant. However, it remains a viable option in situations where digital tools are not available or when a highly personalized approach is required.</p>
                    <p class='mt-5'>In contrast, digitally guided implant placement involves the use of advanced technologies such as 3D imaging, cone beam computed tomography (CBCT), and computer-aided design (CAD) to plan and execute precise implant positioning. Guided surgery allows for greater accuracy, predictability, and reduction in human error, particularly in complex cases. It can improve treatment outcomes, reduce surgical time, and enhance patient satisfaction. However, the technique requires significant investment in technology, training, and software integration.</p>
                </div>
            </div>
    </div>
</div>


        </div>
    </div>
    
</section>



@endsection
