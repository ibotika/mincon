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
                { data: 'PRC #' },
                { data: 'EMAIL' },
                { data: 'CONTACT #' },
                { data: 'CHAPTER/SCHOOL' }
            ]
        });
    </script>

@endsection

@section('content')

<link rel='stylesheet' type='text/css' href='https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css'>

<section class='py-20 md:py-30 bg-black'>
    <div class='m-10 justify-items-center'>
        <div class='mx-auto md:px-8 md:max-w-7xl'>
            <table id="registrants" class="display bg-black" style="width:20% md:width:100%">
                    <thead>
                        <tr>
                            <th>LAST NAME</th>
                            <th>MIDDLE NAME</th>
                            <th>FIRST NAME</th>
                            <th>PRC #</th>
                            <th>EMAIL</th>
                            <th>CONTACT #</th>
                            <th>CHAPTER/SCHOOL</th>
                        </tr>
                    </thead>
            </table>
        </div>
    </div>
</section>


@endsection

