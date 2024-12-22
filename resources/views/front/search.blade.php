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

        <!-- RECENT PROPERTY -->
        <section id="agent-p-2" class="property-details bg_light padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 bottom40">
                        <h2 class="text-uppercase">Recent <span class="color_red">PROPERTY</span></h2>
                        <div class="line_1"></div>
                        <div class="line_2"></div>
                        <div class="line_3"></div>
                        <p class="margin-t-20">Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit,
                            elementum
                            sed varius at, adipiscing
                            <br>vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div id="property-2-slider" class="owl-carousel">
                            @foreach ($properties as $property)
                                @php
                                    $property_route = route('frontend.property.show', [$property->id, $property->slug]);
                                @endphp
                                <div class="item">
                                    <div class="property_item bottom40">
                                        <div class="image">
                                            <img src="{{ $property->image }}" alt="{{ $property->name }}"
                                                class="img-responsive">
                                            <div class="property_meta">
                                                <span><i class="fa fa-object-group"></i>{{ $property->size }} sq ft </span>
                                                <span><i class="fa fa-bed"></i>{{ $property->bedrooms }}</span>
                                                <span><i class="fa fa-bath"></i>{{ $property->bathrooms }} Bathroom</span>
                                            </div>
                                            <div class="price">
                                                <span class="tag">{{ $property->status }}</span>
                                            </div>
                                            <div class="overlay">
                                                <div class="centered">
                                                    <a class="link_arrow white_border" href="{{ $property_route }}">View
                                                        Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="proerty_content">
                                            <div class="proerty_text">
                                                <h3><a href="{{ $property_route }}">{{ $property->name }}</a>
                                                </h3>
                                                <span class="bottom10">{{ $property->location->name }}</span>
                                                <p><strong>₹{{ number_format($property->price, 2) }} Per Month</strong></p>
                                            </div>
                                            <div class="favroute clearfix">
                                                <p class="pull-left"><i class="icon-calendar2"></i>
                                                    {{ $property->created_at->diffForHumans() }}</p>
                                                <ul class="pull-right">
                                                    <li><a href="#."><i class="icon-video"></i></a></li>
                                                    <li><a href="#."><i class="icon-like"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #/RECENT PROPERTY -->


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
