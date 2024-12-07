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
        <div class="card w-full bg-black bg-opacity-30 border border-white border-opacity-30 rounded-2xl text-center p-5">
            <div class="image-container w-full relative overflow-visible mt-[-80px]">
                <img src="/images/speakers/updated/Dr. Reguyal.png" alt="Dr. Reguyal.png" class="mx-auto w-[350px]">
            </div>
        </div>
    </a>


    <div class="w-full md:w-1/2 text-left text-white">
        <h1 class="text-xl md:text-4xl font-bold">DR. ALBERT REGUYAL</h1>
        <div class='mt-2 text-sm'>
            <!-- <p><span class="font-black">Occupation: </span>Dentist / Professor</p>
            <p><span class="font-black">Address:</span> 3-B Mariveles Street, Sta. Mesa Heights, Quezon City</p>
            <p><span class="font-black">Mobile Number:</span> +63918.5051180</p> -->
            <p class='mt-5 text-xl'>"Demystifying Rubberdamology"</p>   
                <div class='text-justify'>
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
</div>


        </div>
    </div>
    
</section>



@endsection
