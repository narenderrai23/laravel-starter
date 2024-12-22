@extends('front.layouts.app')

@section('content')
    <!--===== PAGE TITLE =====-->
    <div class="page-title page-main-section parallaxie"
        style="background-image: url({{ URL('/assets/') }}/images/titlebg-1.jpg);">
        <div class="container padding-bottom-top-120 text-uppercase text-center">
            <div class="main-title">
                <h1>Contact us</h1>
                <h5>10 Years Of Experience!</h5>
                <div class="line_4"></div>
                <div class="line_5"></div>
                <div class="line_6"></div>
                <a href="/">home</a><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><a
                    href="contact-us.html">Contact us</a>
            </div>
        </div>
    </div>
    <!--===== #/PAGE TITLE =====-->


    <!--===== CONTACT US =====-->
    <section id="contact-us">
        <div class="container">
            <div class="row padding">

                <div class="col-md-8">
                    <div class="bottom40">
                        <h2 class="text-uppercase">Send us<span class="color_red"> a message </span></h2>
                        <div class="line_1"></div>
                        <div class="line_2"></div>
                        <div class="line_3"></div>
                    </div>
                    <div class="agent-p-form p-t-30">

                        <div class="row">
                            {{-- <form class="callus padding-bottom" id="contact-form" onSubmit="return false">

                                <div class="form-group">
                                    <div id="result">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="single-query">
                                        <input type="text" class ="keyword-input" placeholder="Name" name="name"
                                            id="name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-query">
                                        <input type="text" class ="keyword-input" placeholder="Phone" name="phone"
                                            id="phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-query">
                                        <input type="email" class ="keyword-input" placeholder="E - mail" name="email"
                                            id="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-query">
                                        <textarea name="message" placeholder="Message" id="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn_fill" id="btn_submit"
                                        name="btn_submit">Submit</button>
                                </div>
                            </form> --}}
                            <form class="callus padding-bottom" id="contact-form" method="POST" action="{{ route('contact.submit') }}">
                                @csrf <!-- Protects the form from CSRF attacks -->

                                <div class="form-group">
                                    <div id="result"></div>
                                </div>

                                <div class="col-md-12">
                                    <div class="single-query">
                                        <input type="text" class="keyword-input" placeholder="Name" name="name" id="name" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="single-query">
                                        <input type="text" class="keyword-input" placeholder="Phone" name="phone" id="phone" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="single-query">
                                        <input type="email" class="keyword-input" placeholder="E - mail" name="email" id="email" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="single-query">
                                        <textarea name="message" placeholder="Message" id="message" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn_fill" id="btn_submit" name="btn_submit">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="bottom40">
                        <h2 class="text-uppercase">get in<span class="color_red"> touch</span></h2>
                        <div class="line_1"></div>
                        <div class="line_2"></div>
                        <div class="line_3"></div>
                    </div>

                    <div class="agent-p-contact p-t-30">
                        <div class="agetn-contact-2">
                            <p><i class="icon-telephone114"></i> +911244206611 , 9811396176</p>
                            <a href="#.">
                                <p><i class=" icon-icons142"></i> dfigurgaon@gmail.com</p>
                            </a>
                            <a href="#.">
                                <p><i class="icon-browser2"></i>www.dfirealtors.com</p>
                            </a>
                            <p><i class="icon-icons74"></i> 138,139 FIRST FLOOR JMD GALLERIA ,SECTOR 48 GURGAON-122002</p>
                        </div>
                        <ul class="socials">
                            <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#."><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#."><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="contact">
            <div><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.9503477956323!2d77.03375237344858!3d28.420755040160657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d229e71ef44dd%3A0xedff1588e311a86c!2sJmd%20Galleria%20Mall%2C%20Badshahpur%20Sohna%20Rd%20Hwy%2C%20Sector%2047%2C%20Sector%2072%2C%20Gurugram%2C%20Haryana%20122001!5e0!3m2!1sen!2sin!4v1733206381102!5m2!1sen!2sin"
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
    </section>
    <!--===== #/CONTACT US =====-->
@endsection
