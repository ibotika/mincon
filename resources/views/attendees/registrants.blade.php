@extends('layouts.guest')

@section('scripts')

    <script type='text/javascript' src='https://code.jquery.com/jquery-3.7.1.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js'></script>
    <script type='text/javascript' src='https://cdn.datatables.net/2.2.1/js/dataTables.js'></script>
    <script>
        new DataTable('#registrants', {
            ajax: 'https://script.google.com/macros/s/AKfycbxLUMpZ-HCIzXb_6IjNb1VMKAWpoaCg27pKKet08TVDr50uaBR4hWBrZZZY0-_1JIJYGw/exec',
            columns: [
                { data: 'LAST NAME' },
                { data: 'MIDDLE NAME' },
                { data: 'FIRST NAME' },
                // { data: 'PRC #' },
                // { data: 'EMAIL' },
                // { data: 'CONTACT #' },
                // { data: 'CHAPTER/SCHOOL' }
            ]
        });
    </script>

@endsection

@section('content')

<link rel='stylesheet' type='text/css' href='https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css'>

<section class='py-20 md:py-30 bg-white'>
    <div class='m-10 justify-items-center'>
        <div class='mx-auto md:px-8 md:max-w-6xl'>
            <div>
                <button onclick="history.back()" class="text-white hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="black" class="hover:fill-black/50">
                        <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/>
                    </svg>
                </button>
                <span class='flex justify-center gap-5'>
                    <a href="{{ route('registrants') }}">
                        <div class="flex justify-center">
                            <div class="text-content text-white mt-4 px-6 py-3 bg-sky-500 ring-2 ring-sky-500 rounded-lg hover:bg-sky-500/80">
                                <h1 class="text-xl font-bold">Registrants</h1>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('attendees') }}">
                        <div class="flex justify-center">
                            <div class="text-content text-sky-500 mt-4 px-6 py-3 rounded-lg ring-2 ring-sky-500 hover:bg-sky-500 hover:text-white">
                                <h1 class="text-xl font-bold">Attendees</h1>
                            </div>
                        </div>
                    </a>
                </span>
                <div class='text-black text-center p-10 font-black text-2xl'>
                    All Registrants
                </div>
            </div>  
            <table id="registrants" class="display bg-white" style="width:20% md:width:100%">
                    <thead>
                        <tr>
                            <th>LAST NAME</th>
                            <th>MIDDLE NAME</th>
                            <th>FIRST NAME</th>
                            <!-- <th>PRC #</th>
                            <th>EMAIL</th>
                            <th>CONTACT #</th>
                            <th>CHAPTER/SCHOOL</th> -->
                        </tr>
                    </thead>
            </table>
        </div>
    </div>
</section>


@endsection

