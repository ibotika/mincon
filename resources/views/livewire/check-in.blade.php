<div class="max-w-5xl px-8 mx-auto">

    @section('scripts')
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
        // handle the scanned code as you like, for example:
        console.log(`Code matched = ${decodedText}`, decodedResult);
        }

        function onScanFailure(error) {
        // handle scan failure, usually better to ignore and keep scanning.
        // for example:
        console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader",
        { fps: 10, qrbox: {width: 250, height: 250} },
        /* verbose= */ false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
    @endsection
    
    <div class="py-20">
        <h1 class="md:mt-0 bg-gradient-to-r from-[#A47BF4] to-[#ED4E8C] bg-clip-text text-transparent text-center text-5xl md:text-6xl font-black">
            <span class='text-gray-900'>
                WELCOME TO
            </span>  
            <span>MINCON 2025</span>
        </h1>

        <div class="mt-8">
            <div id="reader" class="mx-auto" style="width:400px">
                <h4 class="text-4xl font-bold text-gray-500 uppercase md:text-6xl">Scan here to Check In</h4>
            </div>
        </div>
        
        <div class="justify-between px-8 py-4 mt-8 text-center bg-green-300 border border-green-300 md:flex rounded-xl">
            <p class="text-lg md:text-2xl"><strong class="mr-2">Welcome!</strong> <span>Vahn Marty Cagalawan</span></p>
            <div class="flex items-center self-center justify-center gap-2 mt-4 text-sm md:mt-0 md:items-start">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

                <span>mm/dd/yyyy hh:mm</span>
            </div>
        </div>
    </div>
    
</div>
