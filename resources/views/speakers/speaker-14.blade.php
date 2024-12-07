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
                <img src="" alt="" class="mx-auto w-[350px]">
            </div>
        </div>
    </a>


    <div class="w-full md:w-1/2 text-left text-white">
        <h1 class="text-xl md:text-4xl font-bold">OSWALD PADILLA, <span class='text-md md:text-2xl'>RN, RMT, MAN</span></h1>
        <div class='mt-2 text-sm'>
            <!-- <p><span class="font-black">Occupation: </span>Dentist / Professor</p>
            <p><span class="font-black">Address:</span> 3-B Mariveles Street, Sta. Mesa Heights, Quezon City</p>
            <p><span class="font-black">Mobile Number:</span> +63918.5051180</p> -->
            <p class='mt-5 text-xl'>"CBCT: The Future of Dental Imaging"</p>
                <div class='text-justify'>
                    <p class='mt-5'>The Lecture will present various periodontal considerations for the success of Prosthodontics both in fixed and removable partial dentures.  The General Practitioner needs to observe and be guided properly on the protocol of analyzing and having a closer look at the periodontal status of the remaining dentition prior to any prosthodontics procedures. 
                    </p>
                </div>
            </div>
    </div>
</div>


        </div>
    </div>
    
</section>



@endsection
