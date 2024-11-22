@extends('layouts.guest')


@section('content')
<section class='py-10 bg-black md:py-30'>
    <div class='m-10 justify-items-center'>
        <div class='mb-10 text-white md:max-w-xl'>
            <h1 class='mb-5 text-4xl font-black text-center md:text-6xl'>
                Welcome to MINCON 2025 </h1>
            <p class='text-center text-white md:text-xl'>MINCON is more than just a convention; it's an eco-adventure where knowledge flows like the stunning waterfalls around us!
                This year, we're redefining the norm.
                Get ready to be motivated by innovative seminars.
                Network, learn, and unleash your potential…</p>
        </div>

        <div class='md:max-w-6xl'>
    
            <div class='flex flex-row flex-wrap justify-center'>
                <div class='w-full p-3 md:w-1/2 lg:w-1/3'>
                    <a href="{{ route('accommodations') }}"
                        class='block overflow-hidden transition-all border rounded-lg bg-white/10 border-white/30 md:rounded-2xl group hover:shadow-lg hover:scale-105 break-inside-avoid'>
                        <div class='flex flex-col'>
                            <h1 class='py-5 pl-6 mb-5 text-lg text-white'>
                                List of recommended accommodations</h1>
                            <div class='flex justify-center px-6'>
                                <img src="/images/events/accomodations.jpg" alt="" class='w-full h-auto rounded-lg md:rounded-2xl'>
                            </div> 
                            <div>
                                <p class='p-6 text-white text-md sm:text-md'>
                                    For booking and reservations, contact directly your chosen accommodation.
                                    TaraLet's sa MINCON 2025!
                                </p>
                            </div>
                        </div>  
                    </a>
                </div>

                <div class='w-full p-3 md:w-1/2 lg:w-1/3'>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScG3xwA7mhxlV5fF8AEEqT_ZKRaRwePB3lhzCnc6pejTpBEow/viewform"
                        class='block overflow-hidden transition-all border rounded-lg bg-white/10 border-white/30 md:rounded-2xl group hover:shadow-lg hover:scale-105 break-inside-avoid'>
                        <div class='flex flex-col'>
                            <h1 class='py-5 pl-6 mb-5 text-lg text-white'>
                                ✨Fellowship Night✨
                                "RETRO REVAMP: Slayin' the 70's & 80's Vibe"
                            </h1>
                            <div class='flex justify-center px-6'>
                                <img src="/images/events/retrorevampprizes.jpg" alt="" class='w-full h-auto rounded-lg md:rounded-2xl'>
                            </div>
                            <div>
                                <p class='p-6 text-white text-md sm:text-md'>
                                    Show us your best moves for a chance to win the grand prize 🏆
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class='w-full p-3 md:w-1/2 lg:w-1/3'>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScG3xwA7mhxlV5fF8AEEqT_ZKRaRwePB3lhzCnc6pejTpBEow/viewform"
                        class='block overflow-hidden transition-all border rounded-lg bg-white/10 border-white/30 md:rounded-2xl group hover:shadow-lg hover:scale-105 break-inside-avoid'>
                        <div class='flex flex-col'>
                            <h1 class='py-5 pl-6 text-lg text-white'>
                                Calling all dental trade exhibitors🦷✨
                            </h1>
                            <div class='flex justify-center px-6'>
                                <img src="/images/events/trader.jpg" alt="" class='w-full h-auto rounded-lg md:rounded-2xl'>
                            </div>
                            <div class='text-white text-md sm:text-md'>
                                <p class='px-6 pt-6'>
                                    Secure your booth now and showcase your products & services!
                                </p>
                                <p class='p-6'>
                                    For more inquiries, you may contact Dr. Cecille B. Sabayle our trade exhibit chairman.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>  
    </div>
</section>

@endsection
