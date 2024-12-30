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
                            <img src="/images/speakers/updated/Dr. Laurito.png" alt="Dr. Laurito.png" class="mx-auto w-full h-full mx-auto " style=" margin: 0 auto;">
                        </div>
                    </div>
                </a>
                <div class="w-full text-white">
                    <h1 class="text-xl md:text-4xl font-bold text-left">ARNOLD ACOSTA LAURITO, DMD</h1>
                    <div class='mt-5 text-sm text-justify'>
                        <p class='mt-5 text-xl'>"The Insights & Implications Connecting Periodontal and Urological Health"</p>
                        <p class='mt-5'>Day 1, 10:00 AM - 12:00 PM</p>
                        <p class=''>Location: Clamshell 1</p>
                        <p class='mt-5'>This lecture explores the innovative insights linking periodontal health with urological health markers, focusing on the scientific evidence underpinning the relationship between periodontal and urological health. Through a multidisciplinary approach, the presentation highlights the importance of coordinated care between dentistry and urology, offering a comprehensive understanding into how managing periodontal disease can significantly affect prostate health and improve overall patient well-being.</p>
                    </div>
                </div>
            </div>
            <div class='text-justify text-white text-sm'>
                <p class='mb-5'>Join us in welcoming Dr. Arnold Acosta Laurito at the 35th Mindanao Convention, a luminary in the field of Urology. Dr. Laurito stands out not only for his distinguished career in urology but also for his unwavering commitment to medical innovation and education. Dr. Laurito graduated cum laude with a degree in BS Zoology from MSU IIT and was among the top five graduates of the MSU-College of Medicine, where he also received the Best in Internal Medicine Clerkship award, demonstrating his pursuit of excellence.</p>
                <p class='mb-5'>Dr. Laurito has honed his expertise at the Vicente Sotto Memorial Medical Center, where he completed his residency training. Currently, he imparts his valuable knowledge as a Professor IV at MSU-College of Medicine, training future medical professionals. Beyond his surgical achievements, Dr. Laurito is an esteemed member of key medical societies, contributing significantly to the advancement of urological care and robotic surgery in the Philippines.</p>
                <p class=''>His participation as a lecturer highlights the caliber of discussions to be expected at our convention, as he presents his groundbreaking lecture on the intriguing link between periodontal health and urological health entitled: “PROSTEETH: The Insights & Implications Connecting Periodontal and Urological Health”.</p>
            </div>
        </div>
    </div>
</section>



@endsection
