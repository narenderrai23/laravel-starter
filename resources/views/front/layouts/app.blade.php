<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->currentLocale()) }}" dir="{{ language_direction() }}">

<head>
    <meta charset="utf-8" />
    <link href="{{ asset('img/favicon.png') }}" rel="apple-touch-icon" sizes="76x76" />
    <link type="image/png" href="{{ asset('img/favicon.png') }}" rel="icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="{{ setting('meta_description') }}" />
    <meta name="keyword" content="{{ setting('meta_keyword') }}" />
    @include('front.includes.meta')

    <!-- Shortcut Icon -->
    <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon" />
    <link type="image/ico" href="{{ asset('img/favicon.png') }}" rel="icon" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @livewireStyles
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/master.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/color/color-1.css') }}" id="color" />
    @stack('after-styles')

</head>

<body>
    <x-selected-theme />
    @include('front.includes.header_2')

    @yield('content')

    @include('front.includes.footer')

    <!--===== BACK TO TOP =====-->
    <div class="short-msg">
        <a href="#." class="back-to"><i class="icon-arrow-up2"></i></a>
    </div>
    <!--===== #/BACK TO TOP =====-->

    <body>

        <!--===== REQUIRED JS =====-->
        <script src="{{ URL('/assets/') }}/js/jquery-3.2.1.min.js"></script>
        <script src="{{ URL('/assets/') }}/js/bootstrap.min.js"></script>
        <script src="{{ URL('/assets/') }}/js/bootsnav.js"></script>

        <!--To View on scroll-->
        <script src="{{ URL('/assets/') }}/js/jquery.appear.js"></script>

        <!--Owl Slider-->
        <script src="{{ URL('/assets/') }}/js/owl.carousel.min.js"></script>

        <!--Parallax-->
        <script src="{{ URL('/assets/') }}/js/parallaxie.js"></script>

        <!--Fancybox-->
        <script src="{{ URL('/assets/') }}/js/jquery.fancybox.min.js"></script>

        <!--Cube Gallery-->
        <script src="{{ URL('/assets/') }}/js/cubeportfolio.min.js"></script>

        <!--Bootstrap Dropdown-->
        <script src="{{ URL('/assets/') }}/js/bootstrap-select.js"></script>

        <!--Video Popup-->
        <script src="{{ URL('/assets/') }}/js/videobox/video.js"></script>

        <!--Datepicker-->
        <script src="{{ URL('/assets/') }}/js/datepicker.js"></script>

        <!--Dropzone-->
        <script src="{{ URL('/assets/') }}/js/dropzone.min.js"></script>

        <!--Wow animation-->
        <script src="{{ URL('/assets/') }}/js/wow.min.js"></script>

        <!--Rang Slider-->
        <script src="{{ URL('/assets/') }}/js/range-Slider.min.js"></script>

        <!--Checkbox-->
        <script src="{{ URL('/assets/') }}/js/selectbox-0.2.min.js"></script>

        <!--Checkbox-->
        <script src="{{ URL('/assets/') }}/js/scrollreveal.min.js"></script>

        <!--Checkbox-->
        <script src="{{ URL('/assets/') }}/js/jquery-countTo.js"></script>

        <!--Checkbox-->
        <script src="{{ URL('/assets/') }}/js/jquery.typewriter.js"></script>

        <!--Checkbox-->
        <script src="{{ URL('/assets/') }}/js/death.min.js"></script>

        <!--Revolution Slider-->
        <script src="{{ URL('/assets/') }}/js/themepunch/jquery.themepunch.tools.min.js"></script>
        <script src="{{ URL('/assets/') }}/js/themepunch/jquery.themepunch.revolution.min.js"></script>
        <script src="{{ URL('/assets/') }}/js/themepunch/revolution.extension.layeranimation.min.js"></script>
        <script src="{{ URL('/assets/') }}/js/themepunch/revolution.extension.navigation.min.js"></script>
        <script src="{{ URL('/assets/') }}/js/themepunch/revolution.extension.parallax.min.js"></script>
        <script src="{{ URL('/assets/') }}/js/themepunch/revolution.extension.slideanims.min.js"></script>
        <script src="{{ URL('/assets/') }}/js/themepunch/revolution.extension.video.min.js"></script>

        <!--Custom Js -->
        <script src="{{ URL('/assets/') }}/js/functions.js"></script>

        <!--Maps & Markers-->
        {{-- <script src="{{ URL('/assets/') }}/js/form.js"></script>
    <script src="{{ URL('/assets/') }}/js/custom-map.js"></script>
    <script src="{{ URL('/assets/') }}/js/contact.js"></script>
    <!--===== #/REQUIRED JS =====--> --}}

    </body>

</html>
