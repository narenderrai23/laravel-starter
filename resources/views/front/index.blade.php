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
    @include('front.includes.header')

    @include('front.home.banner')

    <!-- WELCOME -->
    <section id="wellcome" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-1 col-md-2"></div>
                <div class="col-xs-12 col-sm-10 col-md-8 text-center">
                    <h2 class="text-uppercase">Welcome to <span class="color_red">DFI REALTORS</span></h2>
                    <div class="line_1-1"></div>
                    <div class="line_2-2"></div>
                    <div class="line_3-3"></div>
                    <p class="heading_space">Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit,
                        elementum
                        sed varius at, adipiscing
                        vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
                    </p>
                </div>
                <div class="col-sm-1 col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                    <div class="welcome top40">
                        <img src="{{ URL('/assets/') }}/images/wellcome_1.png" alt="image">
                        <h4> 24/7 Emergency Available</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                    <div class="welcome top40">
                        <img src="{{ URL('/assets/') }}/images/wellcome_2.png" alt="image">
                        <h4>Expert and Professional</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                    <div class="welcome top40">
                        <img src="{{ URL('/assets/') }}/images/wellcome_3.png" alt="image">
                        <h4>Satisfaction Guarantee</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                    <div class="welcome top40">
                        <img src="{{ URL('/assets/') }}/images/wellcome_4.png" alt="image">
                        <h4>Free Inspection</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #/WELCOME -->

    @include('front.home.query')

    {{-- @dd($properties['data']); --}}

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
                                            <span class="bottom10">{{ $property->location->name ?? null }}</span>
                                            <p><strong>₹{{ number_format($property->price, 2) }}</strong></p>
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


    <!-- Image & Text-->
    <section id="image-text" class="padding-bottom-top-120 parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="image-text-heading top30 bottom30">
                        <h2 class="bottom40">We Don't Just Find<br><span>Great Deals</span> We Create Them</h2>
                        <a href="listing_1.html" class="link_arrow white_border top10">View All Listing</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image & Text End-->


    <!-- BEST DEALS -->
    <section id="property-listing" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 bottom40">
                    <h2 class="text-uppercase">Best Deal <span class="color_red">Properties</span></h2>
                    <div class="line_1"></div>
                    <div class="line_2"></div>
                    <div class="line_3"></div>
                    <p>We have Properties in these Areas View a list of Featured Properties.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div id="listing_slider" class="owl-carousel">
                        @foreach ($properties as $property)
                            @php
                                $property_route = route('frontend.property.show', [$property->id, $property->slug]);
                            @endphp
                            <div class="item clearfix">
                                <div class="project1 clearfix">
                                    <div class="col-md-12 col-sm-12 col-xs-12 padding-left-0 project-images">
                                        <div class="gri">
                                            <figure class="effect-layla">
                                                <img src="{{ $property->image ? asset($property->image) : URL('/assets/images/default-property.jpg') }}"
                                                    alt="{{ $property->name }}" />
                                                <figcaption></figcaption>
                                            </figure>
                                        </div>
                                        <div
                                            class="col-md-3 col-sm-3 col-xs-12 project-owl-slidee padding-left-0 project-owl-slideee">
                                            <div class="item background-color-white">
                                                <h4>{{ $property->name }}</h4>
                                                <div class="small-title">
                                                    <div class="line1"></div>
                                                    <div class="line2"></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="client-loc">
                                                    <p><span>Location:</span> {{ $property->address ?: 'N/A' }}</p>
                                                    <p><span>Value:</span> ${{ number_format($property->price, 2) }}
                                                    </p>
                                                </div>
                                                <a href="{{ $property_route }}" class="link_arrow">read more</a>
                                            </div>
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
    <!-- BEST DEALS -->


    <!-- OUR TEAM -->
    <section id="ourteam" class="padding bg_light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 bottom20">
                    <h2 class="text-uppercase">Our <span class="color_red">experts</span></h2>
                    <div class="line_1"></div>
                    <div class="line_2"></div>
                    <div class="line_3"></div>
                    <p>Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at,
                        adipiscing
                        <br>vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-member top40 text-center">
                        <div class="team-img">
                            <img src="{{ URL('/assets/') }}/images/t-s-1.jpg" alt="">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h4 class="bottom10">I love to desing</h4>
                                <p>I love to introduce myself as a hardcore Web Designer.</p>
                            </div>
                            <div class="s-link">
                                <a href="#."><i class="fa fa-facebook"></i></a>
                                <a href="#."><i class="fa fa-twitter"></i></a>
                                <a href="#."><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-title top20 text-center">
                        <h3>Martin Smith</h3>
                        <span>Founder & CEO</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member top40 text-center">
                        <div class="team-img">
                            <img src="{{ URL('/assets/') }}/images/t-s-2.jpg" alt="">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h4 class="bottom10">I love to desing</h4>
                                <p>I love to introduce myself as a hardcore Web Designer.</p>
                            </div>
                            <div class="s-link">
                                <a href="#."><i class="fa fa-facebook"></i></a>
                                <a href="#."><i class="fa fa-twitter"></i></a>
                                <a href="#."><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-title top20 text-center">
                        <h3>Franklin Harbet</h3>
                        <span>Civil Engineer</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member top40 text-center">
                        <div class="team-img">
                            <img src="{{ URL('/assets/') }}/images/t-s-3.jpg" alt="">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h4 class="bottom10">I love to desing</h4>
                                <p>I love to introduce myself as a hardcore Web Designer.</p>
                            </div>
                            <div class="s-link">
                                <a href="#."><i class="fa fa-facebook"></i></a>
                                <a href="#."><i class="fa fa-twitter"></i></a>
                                <a href="#."><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-title top20 text-center">
                        <h3>Linda Anderson</h3>
                        <span>Marketing Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 3/OUR TEAM -->


    <!-- NEWS -->
    <section id="news-section-1" class="news-section-details  padding_top bottom30">
        <div class="container">
            <div class="row">
                <div class="col-md-12 bottom40">
                    <h2 class="text-uppercase">From <span class="color_red">News</span></h2>
                    <div class="line_1"></div>
                    <div class="line_2"></div>
                    <div class="line_3"></div>
                    <p>We have Properties in these Areas View a list of Featured Properties.</p>
                </div>


                @foreach ($$module_name as $$module_name_singular)
                    @php
                        $details_url = route("frontend.$module_name.show", [
                            $$module_name_singular->id,
                            $$module_name_singular->slug,
                        ]);
                    @endphp

                    <x-frontend.card :url="$details_url" :name="$$module_name_singular->name" :image="$$module_name_singular->image">
                        <p class="bottom10">
                            <span>By:</span> Admin <span>|</span>
                            <span>Date:</span> {{ $$module_name_singular->created_at }}
                        </p>

                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $$module_name_singular->intro }}
                        </p>
                    </x-frontend.card>
                @endforeach
            </div>
        </div>
    </section>
    <!-- NEWS -->


    <!-- OUR PARTNERS -->
    <section id="our-partner" class="padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="partner_slider" class="owl-carousel">
                        <div class="item"><img src="{{ URL('/assets/') }}/images/partner-1.png" alt="Our Partner">
                        </div>
                        <div class="item"><img src="{{ URL('/assets/') }}/images/partner-2.png" alt="Our Partner">
                        </div>
                        <div class="item"><img src="{{ URL('/assets/') }}/images/partner-3.png" alt="Our Partner">
                        </div>
                        <div class="item"><img src="{{ URL('/assets/') }}/images/partner-4.png" alt="Our Partner">
                        </div>
                        <div class="item"><img src="{{ URL('/assets/') }}/images/partner-5.png" alt="Our Partner">
                        </div>
                        <div class="item"><img src="{{ URL('/assets/') }}/images/partner-1.png" alt="Our Partner">
                        </div>
                        <div class="item"><img src="{{ URL('/assets/') }}/images/partner-2.png" alt="Our Partner">
                        </div>
                        <div class="item"><img src="{{ URL('/assets/') }}/images/partner-3.png" alt="Our Partner">
                        </div>
                        <div class="item"><img src="{{ URL('/assets/') }}/images/partner-4.png" alt="Our Partner">
                        </div>
                        <div class="item"><img src="{{ URL('/assets/') }}/images/partner-5.png" alt="Our Partner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #/OUR PARTNERS -->




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
        <!-- Success message handling -->
        @if (session('success'))
            <script type="text/javascript">
                // Display success message in an alert box
                alert('{{ session('success') }}');
            </script>
        @endif
        <!--Maps & Markers-->
        {{-- <script src="{{ URL('/assets/') }}/js/form.js"></script>
    <script src="{{ URL('/assets/') }}/js/custom-map.js"></script>
    <script src="{{ URL('/assets/') }}/js/contact.js"></script>
    <!--===== #/REQUIRED JS =====--> --}}

    </body>

</html>
