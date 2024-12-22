@extends('front.layouts.app')

@section('content')
    <!--===== PAGE TITLE =====-->
    <div class="page-title page-main-section parallaxie">
        <div class="container padding-bottom-top-120 text-uppercase text-center">
            <div class="main-title">
                <h1>about us</h1>
                <h5>10 Years Of Experience!</h5>
                <div class="line_4"></div>
                <div class="line_5"></div>
                <div class="line_6"></div>
                <a href="/">home</a><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><a
                    href="about.html">about us</a>
            </div>
        </div>
    </div>
    <!--===== #/PAGE TITLE =====-->

    <!--===== ABOUT US =====-->
    <section id="about_us" class="about-us padding">
        <div class="container">
            <div class="row">
                <div class="history-section">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h2 class="text-uppercase">Company <span class="color_red">overview</span></h2>
                        <div class="line_1"></div>
                        <div class="line_2"></div>
                        <div class="line_3"></div>
                        <p class="top20 bottom40">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                            only five centuries, but also the leap into electronic typesetting, remaining essentially
                            unchanged.
                            <br><br>
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.

                        </p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="about_single" class="owl-carousel">
                            <div class="item">
                                <div class="content-right-md">
                                    <figure class="effect-layla">
                                        <img src="{{ URL('/assets/') }}/images/about-2.jpg" alt="img" />
                                        <figcaption> </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="item">
                                <div class="content-right-md">
                                    <figure class="effect-layla">
                                        <img src="{{ URL('/assets/') }}/images/about-1.jpg" alt="img" />
                                        <figcaption> </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="item">
                                <div class="content-right-md">
                                    <figure class="effect-layla">
                                        <img src="{{ URL('/assets/') }}/images/about-2.jpg" alt="img" />
                                        <figcaption> </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== #/ABOUT US =====-->

    <!--===== TEAM  =====-->
    <section class=" padding_bottom" id="teams">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-uppercase">Our <span class="color_red">experts</span></h2>
                    <div class="line_1"></div>
                    <div class="line_2"></div>
                    <div class="line_3"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
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
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-title top20 text-center">
                        <h3>Martin Smith</h3>
                        <span>Founder & CEO</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
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
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-title top20 text-center">
                        <h3>Franklin Harbet</h3>
                        <span>Civil Engineer</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
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
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
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
    <!--===== #/TEAM  =====-->

    <!--===== IMAGE WITH CONTENT =====-->
    <section class="info_section parallaxie">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-4"> </div>
                <div class="col-md-4 col-sm-4 right_box">
                    <div class="right_box_inner padding clearfix">
                        <div class="col-md-12 col-sm-12 white_content text-center top20 bottom30">
                            <i class="icon-library"></i>
                            <h3 class="bottom10 top20">Residential</h3>
                            <p>Duis autem vel eum iriure dolor in hend rerit in vulputate velit esse molestie vel illum
                                dolore nulla facilisis.</p>
                        </div>
                        <div class="col-md-12 col-sm-12 white_content text-center top20 bottom30">
                            <i class="icon-history"></i>
                            <h3 class="bottom10 top20">24 Hours Services</h3>
                            <p>Duis autem vel eum iriure dolor in hend rerit in vulputate velit esse molestie vel illum
                                dolore nulla facilisis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4"> </div>
            </div>
        </div>
    </section>
    <!--===== #/IMAGE WITH CONTENT =====-->

    <!--===== OUR PARTNER =====-->
    <div id="our-partner">
        <div class="container-fluid">
            <div id="partner_slider" class="owl-carousel">
                <div class="item"><img src="{{ URL('/assets/') }}/images/partner-1.png" alt="Our Partner"></div>
                <div class="item"><img src="{{ URL('/assets/') }}/images/partner-2.png" alt="Our Partner"></div>
                <div class="item"><img src="{{ URL('/assets/') }}/images/partner-3.png" alt="Our Partner"></div>
                <div class="item"><img src="{{ URL('/assets/') }}/images/partner-4.png" alt="Our Partner"></div>
                <div class="item"><img src="{{ URL('/assets/') }}/images/partner-5.png" alt="Our Partner"></div>
                <div class="item"><img src="{{ URL('/assets/') }}/images/partner-1.png" alt="Our Partner"></div>
                <div class="item"><img src="{{ URL('/assets/') }}/images/partner-2.png" alt="Our Partner"></div>
                <div class="item"><img src="{{ URL('/assets/') }}/images/partner-3.png" alt="Our Partner"></div>
                <div class="item"><img src="{{ URL('/assets/') }}/images/partner-4.png" alt="Our Partner"></div>
                <div class="item"><img src="{{ URL('/assets/') }}/images/partner-5.png" alt="Our Partner"></div>
            </div>
        </div>
    </div>
    <!--===== #/OUR PARTNER =====-->
@endsection
