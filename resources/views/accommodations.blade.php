@extends('layouts.guest')


@section('content')
<section class='py-20 bg-black md:py-30'>

    <div class='m-10 justify-items-center'>
        

        <div class='mx-auto md:px-8 md:max-w-6xl'>

            <button onclick="history.back()" class="text-white hover:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e8eaed" class="hover:fill-white/50">
                    <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/>
                </svg>
            </button>   

            <div class='flex items-center justify-center'>
                <div class='mb-10 text-white md:max-w-xl'>
                    <p class='text-center text-white md:text-xl'>
                    Recommended accommodations
                    </p>
                </div>
            </div>

            <div class="grid gap-8 md:grid-cols-3">

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5">
                        <h1 class='text-lg font-semibold text-white'>
                          Go Hotels Iligan
                        </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="https://lh3.googleusercontent.com/p/AF1QipOeCFOzszJllvCvZ9HEjLCsJu9neFUwrUjcrO-C=s1360-w1360-h1020" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                    </div>
                    <div class='px-6 text-sm'>
                        <p class='text-white text-left mb-2'>
                            <span class='text-gray-400'>Contact Number:</span> 224-9599
                        </p>
                        <p class='text-white text-left'>
                        <span class='text-gray-400'>Address:</span> Robinsons Place Iligan Complex, Iligan City, Philippines       
                        </p>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://www.facebook.com/@GoHotelsIligan/" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-blue-600 rounded-md hover:bg-blue-800'>
                                Facebook page
                            </a> 
                    </div>
                </div>

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5">
                        <h1 class='text-lg font-semibold text-white'>
                           The Loft Hotel
                        </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="/images/accomodations/loft-hotel.jpg" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                    </div>
                    <div class='px-6 text-sm'>
                        <p class='text-white text-left mb-2'>
                            <span class='text-gray-400'>Contact Number:</span> 0962 842 7621
                        </p>
                        <p class='text-white text-left'>
                        <span class='text-gray-400'>Address:</span> The Loft Hotel Iligan, Aguinaldo St, Iligan, Iligan City, Lanao del Norte       
                        </p>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://www.facebook.com/thelofthoteliligan" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-blue-600 rounded-md hover:bg-blue-800'>
                                Facebook page
                            </a> 
                        </a>
                    </div>
                </div>

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5">
                        <h1 class='text-lg font-semibold text-white'>
                         The Residence by Ivory
                        </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="/images/accomodations/The Residence by Ivory.jpg" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                    </div>
                    <div class='px-6 text-sm'>
                        <p class='text-white text-left mb-2'>
                            <span class='text-gray-400'>Contact Number:</span> 0917 112 8004
                        </p>
                        <p class='text-white text-left'>
                        <span class='text-gray-400'>Address:</span> Quezon Avenue Extension, Pala-o, Iligan City, Philippines    
                        </p>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://www.facebook.com/@TheResidencebyIvory" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-blue-600 rounded-md hover:bg-blue-800'>
                                Facebook page
                            </a> 
                        </a>
                    </div>
                </div>

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5">
                        <h1 class='text-lg font-semibold text-white'>
                            Fortune Suite
                        </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="/images/accomodations/Fortune Suite.jpg" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                    </div>
                    <div class='px-6 text-sm'>
                        <p class='text-white text-left mb-2'>
                            <span class='text-gray-400'>Contact Number:</span> 0917 117 3021
                        </p>
                        <p class='text-white text-left'>
                        <span class='text-gray-400'>Address:</span> Lot 12 Block 10 Purok 9, San Miguel, Barangay Pala-o, Iligan City, Philippines
                        </p>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://www.facebook.com/fortunesuiteiligancity" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-blue-600 rounded-md hover:bg-blue-800'>
                                Facebook page
                            </a> 
                        </a>
                    </div>
                </div>

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5">
                        <h1 class='text-lg font-semibold text-white'>
                             Namaste Homestay Iligan           
                       </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="/images/accomodations/Namaste Homestay Iligan.jpg" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                    </div>
                    <div class='px-6 text-sm'>
                        <p class='text-white text-left mb-2'>
                            <span class='text-gray-400'>Contact Number:</span> 0920 926 8721
                        </p>
                        <p class='text-white text-left'>
                        <span class='text-gray-400'>Address:</span> Zone 5, Del Carmen, Iligan City, Philippines
                        </p>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://www.facebook.com/profile.php?id=100093620817879" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-blue-600 rounded-md hover:bg-blue-800'>
                                Facebook page
                            </a> 
                        </a>
                    </div>
                </div>

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5">
                        <h1 class='text-lg font-semibold text-white'>
                         Alan Sr. Caprice Residences           
                       </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="/images/accomodations/Alan Sr. Caprice Residences.jpg" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                    </div>
                    <div class='px-6 text-sm'>
                        <p class='text-white text-left mb-2'>
                            <span class='text-gray-400'>Contact Number:</span> 223-0512
                        </p>
                        <p class='text-white text-left'>
                        <span class='text-gray-400'>Address:</span> Uranus-Saturn Street Rabago Subdivision Barangay Villaverde, Iligan City, Philippines
                        </p>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://www.facebook.com/alansrresidences/" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-blue-600 rounded-md hover:bg-blue-800'>
                                Facebook page
                            </a> 
                        </a>
                    </div>
                </div>

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5">
                        <h1 class='text-lg font-semibold text-white'>
                        Balay Sa Iligan Inn
                       </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="/images/accomodations/Balay Sa Iligan Inn.jpg" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                    </div>
                    <div class='px-6 text-sm'>
                        <p class='text-white text-left mb-2'>
                            <span class='text-gray-400'>Contact Number:</span> 0935 023 4989
                        </p>
                        <p class='text-white text-left'>
                        <span class='text-gray-400'>Address:</span> Macapagal Avenue, Iligan, Mindanao 9200 Philippines
                        </p>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://www.facebook.com/profile.php?id=100063857991092" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-blue-600 rounded-md hover:bg-blue-800'>
                                Facebook page
                            </a> 
                        </a>
                    </div>
                </div>
               
                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5">
                        <h1 class='text-lg font-semibold text-white'>
                            Kingsway Iligan Hotel 
                       </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="/images/accomodations/Kingsway Iligan Hotel.jpg" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                    </div>
                    <div class='px-6 text-sm'>
                        <p class='text-white text-left mb-2'>
                            <span class='text-gray-400'>Contact Number:</span> 0915 713 3862
                        </p>
                        <p class='text-white text-left'>
                        <span class='text-gray-400'>Address:</span> Bonifacio Highway, Tibanga, Iligan City, Philippines
                        </p>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://www.facebook.com/kingswayiliganhotel" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-blue-600 rounded-md hover:bg-blue-800'>
                                Facebook page
                            </a> 
                        </a>
                    </div>
                </div>

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5">
                        <h1 class='text-lg font-semibold text-white'>
                        Plaza Alemania Hotel           
                       </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="/images/accomodations/Plaza Alemania Hotel.jpg" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                    </div>
                    <div class='px-6 text-sm'>
                        <p class='text-white text-left mb-2'>
                            <span class='text-gray-400'>Contact Number:</span> 0917 716 1743
                        </p>
                        <p class='text-white text-left'>
                        <span class='text-gray-400'>Address:</span> Don Gregorio Lluch Avenue corner B.S. Ong Street, Pala-o, Iligan City, Philippines, 9200
                        </p>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://www.facebook.com/PAH.WeCater" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-blue-600 rounded-md hover:bg-blue-800'>
                                Facebook page
                            </a> 
                        </a>
                    </div>
                </div>

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5">
                        <h1 class='text-lg font-semibold text-white'>
                        Amar Residences           
                       </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="/images/accomodations/Amar Residences.jpg" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                    </div>
                    <div class='px-6 text-sm'>
                        <p class='text-white text-left mb-2'>
                            <span class='text-gray-400'>Contact Number:</span> 0916 399 6504
                        </p>
                        <p class='text-white text-left'>
                        <span class='text-gray-400'>Address:</span> Jorge Sheker Street, Iligan City, Philippines
                        </p>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://www.facebook.com/profile.php?id=61559879034886" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-blue-600 rounded-md hover:bg-blue-800'>
                                Facebook page
                            </a> 
                        </a>
                    </div>
                </div>

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5">
                        <h1 class='text-lg font-semibold text-white'>
                        Crystal Inn           
                       </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="/images/accomodations/Crystal Inn.jpg" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                    </div>
                    <div class='px-6 text-sm'>
                        <p class='text-white text-left mb-2'>
                            <span class='text-gray-400'>Contact Number:</span> 0968 357 7104
                        </p>
                        <p class='text-white text-left'>
                        <span class='text-gray-400'>Address:</span> Brgy San Miguel, Iligan City, Philippines
                        </p>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://www.facebook.com/CrystalInnInc" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-blue-600 rounded-md hover:bg-blue-800'>
                                Facebook page
                            </a> 
                        </a>
                    </div>
                </div>

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5">
                        <h1 class='text-lg font-semibold text-white'>
                        Maxim Inn           
                       </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="/images/accomodations/Maxim Inn.jpg" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                    </div>
                    <div class='px-6 text-sm'>
                        <p class='text-white text-left mb-2'>
                            <span class='text-gray-400'>Contact Number:</span> 221-5272
                        </p>
                        <p class='text-white text-left'>
                        <span class='text-gray-400'>Address:</span> Quezon Avenue, Iligan City, Philippines
                        </p>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://www.facebook.com/maximinniligan" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-blue-600 rounded-md hover:bg-blue-800'>
                                Facebook page
                            </a> 
                        </a>
                    </div>
                </div>

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5">
                        <h1 class='text-lg font-semibold text-white'>
                        Maria Cristina Hotel           
                       </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="https://scontent.fcgm1-1.fna.fbcdn.net/v/t1.6435-9/74604385_691431904681668_3285255316895170560_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHwLwDLCkUXAUZLk8bAV1uioyRigrchIZ2jJGKCtyEhncFulNogglkQXAH-P6rrT7k-dhtQD-Ik0ZW4T8s-2qRx&_nc_ohc=KBNxEXMTgToQ7kNvgFhelC9&_nc_zt=23&_nc_ht=scontent.fcgm1-1.fna&_nc_gid=AU1oPQ7jTd3Oj0sm7TJqAOG&oh=00_AYBOX4wI-4oxV0cNA5Qns9Huash1jotzLGOVDES3aGu8Iw&oe=6768AD1B" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                    </div>
                    <div class='px-6 text-sm'>
                        <p class='text-white text-left mb-2'>
                            <span class='text-gray-400'>Contact Number:</span> 221-3352
                        </p>
                        <p class='text-white text-left'>
                        <span class='text-gray-400'>Address:</span> General Aguinaldo Street, Brgy Poblacion, Iligan City, Philippines
                        </p>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://www.facebook.com/profile.php?id=100057594782321" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-blue-600 rounded-md hover:bg-blue-800'>
                                Facebook page
                            </a> 
                        </a>
                    </div>
                </div>

                <div class="border border-gray-500 rounded-lg bg-gray-950">
                    <header class="px-6 py-5">
                        <h1 class='text-lg font-semibold text-white'>
                        Jcg Hmestay           
                       </h1>
                    </header>
                    <div class="px-6 py-3">
                        <div class='flex justify-center'>
                            <img src="/images/accomodations/Jcg Hmestay.jpg" alt="" class='object-cover w-full h-40 rounded-lg md:rounded-2xl'>
                        </div>
                    </div>
                    <div class='px-6 text-sm'>
                        <p class='text-white text-left mb-2'>
                            <span class='text-gray-400'>Contact Number:</span> 0927 424 2549
                        </p>
                        <p class='text-white text-left'>
                        <span class='text-gray-400'>Address:</span> Barangay, Purok 2c Balete Drive, Iligan City, Lanao del Norte
                        </p>
                    </div>
                    <div class="px-6 py-5">
                            <a href="https://www.facebook.com/jcghomestayiligan" 
                                target="_blank"
                                class='block text-white w-full px-3 py-3 text-center bg-blue-600 rounded-md hover:bg-blue-800'>
                                Facebook page
                            </a> 
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection
