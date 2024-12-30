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
                <a href="" class="w-full p-10 flex items-center justify-center">
                    <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                        <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                        <img src="/images/speakers/updated/Dr. Bautista.png" alt="Dr. Bautista.png" class="mx-auto w-full h-full mx-auto " style=" margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="w-full text-white">
                    <h1 class="text-xl md:text-4xl font-bold">JOY BAUTISTA, DMD</h1>
                    <div class='mt-5 text-sm text-justify'>
                        <p class='mt-5 text-xl'>"Periodontal Considerations In Fixed And Partial Removable Prosthodontic Therapy"</p>
                        <p class='mt-5'>Day 1, 10:00 AM - 12:00 PM</p>
                        <p class=''>Location: Clamshell 2</p>
                        <p class='mt-5'>The advancement of dental implantology has seen significant innovations, particularly in the integration of digital technology into clinical practice. One of the key debates in modern implant placement is the comparison between freehand and digitally guided techniques. This presentation  aims to provide an overview of both approaches, highlighting their respective advantages, challenges, and clinical implications.</p>
                        <p class='mt-5'>Freehand implant placement, the traditional method, relies heavily on the clinician's skill, experience, and anatomical knowledge. While this technique offers flexibility and has been well-established over decades, it can be prone to errors in terms of implant positioning, angulation, and depth, which can ultimately affect the long-term success of the implant. However, it remains a viable option in situations where digital tools are not available or when a highly personalized approach is required.</p>
                        <p class='mt-5'>In contrast, digitally guided implant placement involves the use of advanced technologies such as 3D imaging, cone beam computed tomography (CBCT), and computer-aided design (CAD) to plan and execute precise implant positioning. Guided surgery allows for greater accuracy, predictability, and reduction in human error, particularly in complex cases. It can improve treatment outcomes, reduce surgical time, and enhance patient satisfaction. However, the technique requires significant investment in technology, training, and software integration.</p>
                    </div>
                </div>
            </div>
            <div class='text-justify text-white text-sm'>
                <p class='mb-5'>Be with us at the Mindanao Convention as we proudly feature Dr. Joy S. Bautista, a luminary in the field of dental implantology and orthodontics. With a rich background stemming from his extensive education and a multitude of key roles, including Assistant Professor at the University of the East College of Dentistry, Visiting Consultant at Perfect Teeth Dental Center, and a respected dentist and owner of Bhest Smile Dental Clinic,</p>
                <p class='mb-5'>Dr. Bautista is a globally recognized figure in dental health. An affiliate fellow, international fellow, and awarded educator, his specialization in dental implantology, orthodontics, and oral surgery underscores his profound competence and dedication to dental education.</p>
                <p class='mb-5'>Dr. Bautista's lecture, “Freehand vs. Digitally Guided Implant Placement: A Comparative Approach,” promises to delve into the significant innovations shaping the future of dental implantology. Balancing his deep clinical expertise with a keen insight into cutting-edge technologies, Dr. Bautista will explore the advantages, challenges, and the clinical implications of both traditional and digitally guided implant placement techniques. This engaging session aims to arm practitioners with the knowledge to optimize treatment planning and enhance implant outcomes, all while navigating the complexities presented by digital advancements in the field.</p>
                <p class='mb-5'>Do not miss the opportunity to gain valuable insights from one of the field's most esteemed innovators.</p>
            </div>
        </div>
    </div>
</section>



@endsection


