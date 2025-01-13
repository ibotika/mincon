<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>35th PDA MINCON - Iligan City</title>

        <link rel="canonical" href="https://mincon.ibotika.com/" />
        <meta name="description" content="Join us on an incredible journey to Iligan, the Majestic City of Waterfalls, on January 16-17, 2025. MINCON is more than just a convention; it's an eco-adventure where knowledge flows like the stunning waterfalls around us!" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:site_name" content="MINCON 2025" />
        <meta property="og:title" content="MINCON 2025" />
        <meta property="og:description" content="Join us on an incredible journey to Iligan, the Majestic City of Waterfalls, on January 16-17, 2025. MINCON is more than just a convention; it's an eco-adventure where knowledge flows like the stunning waterfalls around us!" />
        <meta property="og:url" content="https://mincon.ibotika.com/" />
        <meta property="og:image" content="{{  url('images/banner.png') }}" />
        <meta property="og:image:width" content="2000" />
        <meta property="og:image:height" content="2000" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @yield('styles')
    </head>
    <body class="font-sans antialiased text-gray-900">
        @include('includes.header')

        @yield('content')

        @include('includes.footer')

        @yield('scripts')
    </body>
</html>
