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
                <img src="/images/speakers/updated/Dr. Jacob.png" alt="Dr. Laurito" class="mx-auto w-[350px]">
            </div>
        </div>
    </a>


    <div class="w-full md:w-1/2 text-left text-white">
        <h1 class="text-xl md:text-4xl font-bold">Romeo N. Jacob, Jr. <span class='text-lg md:text-2xl'>, DMD., Cert. Ortho., FADI, FPFA</span></h1>
        <div class='mt-2 text-sm'>
            <!-- <p><span class="font-black">Occupation: </span>Dentist / Professor</p>
            <p><span class="font-black">Address:</span> 3-B Mariveles Street, Sta. Mesa Heights, Quezon City</p>
            <p><span class="font-black">Mobile Number:</span> +63918.5051180</p> -->
            <p class='mt-5 text-xl'>"Orthodontics Management of Impacted Teeth: An Inter-disciplinary Perspective"</p>
                <div class='text-justify'>
                    <p class='mt-5'>Tooth erupts when half to three-quarters of the root length has developed. Impaction is usually diagnosed after this period and at times asymptomatic, the reason why patients seek treatment later. Tooth impaction is a common problem in daily orthodontic practice, and, in most cases, it is recognized by chance in a routine dental examination. Therefore, it is very important that dental practitioners are aware of this condition since early detection and intervention may help to prevent many harmful complications.</p>
                    <p class='mt-5'>The treatment of impacted teeth requires multidisciplinary cooperation between orthodontists, oral surgeons and sometimes periodontists. Orthodontic treatment and surgical exposure of impacted teeth are performed to bring the impacted tooth into the line of the arch. The treatment is long, more complicated, and challenging.</p>
                    <p class='mt-5'>The objective of the presentation is to provide an overview of the prevalence, etiology, diagnosis, treatment, and complications associated with the management of impacted teeth. Orthodontics as part of the inter-discipline can break the stereotype in impacted teeth by saving rather than sacrificing impacted teeth.</p>
                </div>
            </div>
    </div>
</div>


        </div>
    </div>
    
</section>



@endsection
