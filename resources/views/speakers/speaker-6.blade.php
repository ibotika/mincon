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
            <div class="mt-12 mb-10 flex flex-col md:flex-row justify-center items-center space-x-4">
                <a href="" class="w-full md:w-3/4 p-10 flex items-center justify-center">
                    <div class="card" style="background-color: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 24px; text-align: center; padding: 16px;">
                        <div class="image-container" style="position: relative; overflow: visible; margin-top: -80px;">
                            <img src="/images/speakers/updated/Dr. Jacob.png" alt="Dr. Jacob.png" class="mx-auto w-full h-full mx-auto " style="width: 240px; margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="w-full text-white">
                    <h1 class="text-xl md:text-4xl font-bold text-left">ROMEO N. JACOB, Jr., DMD., Cert. Ortho., FADI, FPFA</h1>           
                    <div class='mt-5 text-sm text-justify'>
                        <p class='mt-5 text-xl'>"Orthodontics Management of Impacted Teeth: An Inter-disciplinary Perspective"</p>
                        <p class='mt-5'>Day 2, 9:00 AM - 11:00 AM</p>
                        <p class=''>Location: Clamshell 1</p>
                        <p class='mt-5'>Tooth erupts when half to three-quarters of the root length has developed. Impaction is usually diagnosed after this period and at times asymptomatic, the reason why patients seek treatment later. Tooth impaction is a common problem in daily orthodontic practice, and, in most cases, it is recognized by chance in a routine dental examination. Therefore, it is very important that dental practitioners are aware of this condition since early detection and intervention may help to prevent many harmful complications.</p>
                        <p class='mt-5'>The treatment of impacted teeth requires multidisciplinary cooperation between orthodontists, oral surgeons and sometimes periodontists. Orthodontic treatment and surgical exposure of impacted teeth are performed to bring the impacted tooth into the line of the arch. The treatment is long, more complicated, and challenging.</p>
                        <p class='mt-5'>The objective of the presentation is to provide an overview of the prevalence, etiology, diagnosis, treatment, and complications associated with the management of impacted teeth. Orthodontics as part of the inter-discipline can break the stereotype in impacted teeth by saving rather than sacrificing impacted teeth.</p>
                    </div>
                </div>
            </div>
            <div class='text-justify text-white text-sm'>
                <p class='mb-5'>We are honored to present Dr. Romeo N. Jacob, Jr., a luminary in Pediatric Dentistry and Orthodontics, as a distinguished speaker at our upcoming Mindanao Convention. With an illustrious track record peppered with global recognition, Dr. Jacob brings over three decades of unparalleled expertise and innovation to the forefront of dental practice. His enriching journey includes prestigious consultations and contributions across the Philippines, Hong Kong, Thailand, and Vietnam, underscoring his commitment to advancing dental health worldwide.
                <p class='mb-5'>Holding pivotal positions, from a Training Officer at the Philippine Children's Medical Center to a Consultant for several Asian Dental Associations, and as a decorated recipient of numerous dental accolades, Dr. Jacob’s contributions to the field are monumental. His ethos of saving over sacrificing is set to inspire a paradigm shift in the management of impacted teeth, making his presentation a transformative experience for all attendees.</p>
                <p class='mb-5'>Dr. Jacob's lecture, "Orthodontics Management of Impacted Teeth: An Inter-disciplinary Perspective," promises to be a cornerstone event. Unveiling the complexities of tooth impaction, his insights stem from a deep understanding of its prevalence, etiology, and the collaborative modalities of treatment that intertwine orthodontics, oral surgery, and periodontics. This session is meticulously designed to enlighten practitioners on the crucial role of early detection and the innovative orthodontic interventions that prioritize the preservation of impacted teeth.</p></p>
            </div>
        </div>
    </div>
</section>



@endsection
