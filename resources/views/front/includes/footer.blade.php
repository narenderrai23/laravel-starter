<!-- FOOTER -->
<footer id="footer" class="footer divider layer-overlay overlay-dark-8">
    <div class="container pt-70">
        <div class="row border-bottom">
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <img class="mt-5 mb-20" alt="" src="{{ URL('/assets/') }}/images/logo.png" />
                    <p>138,139 FIRST FLOOR JMD GALLERIA ,SECTOR 48 GURGAON-122002</p>
                    <ul class="list-inline mt-5">
                        <li class="m-0 pl-10 pr-10">
                            <i class="fa fa-phone text-theme-color-2 mr-5"></i>
                            <a class="text-gray" href="tel:+911244206611">+91 124 4206611</a>,
                            <a class="text-gray" href="tel:9811396176">9811396176</a>
                        </li>
                        <li class="m-0 pl-10 pr-10">
                            <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i>
                            <a class="text-gray" href="mailto:{{ setting('email') }}">{{ setting('email') }}</a>
                        </li>
                    </ul>

                    <div class="widget dark">
                        <ul class="socials">
                            <li>
                                <a href="{{ setting("facebook_url") }}"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="{{ setting("twitter_url") }}"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{ setting("youtube_url") }}"><i class="fa fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="{{ setting("instagram_url") }}"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="{{ setting("website_url") }}"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h4 class="widget-title">Quick Links</h4>
                    <div class="small-title">
                        <div class="line1 background-color-white"></div>
                        <div class="line2 background-color-white"></div>
                        <div class="clearfix"></div>
                    </div>
                    <ul class="list angle-double-right list-border">

                        <ul class="list angle-double-right list-border">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                            <li><a href="{{ route('frontend.services') }}">Services</a></li>
                            <li><a href="{{ route('frontend.contact-us') }}">Contact Us</a></li>
                        </ul>

                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h4 class="widget-title">Use Full Links</h4>
                    <div class="small-title">
                        <div class="line1 background-color-white"></div>
                        <div class="line2 background-color-white"></div>
                        <div class="clearfix"></div>
                    </div>
                    <ul class="list list-border">
                        <li><a href="{{ route('frontend.career') }}">Careers</a></li>
                        <li><a href="{{ route('frontend.posts.index') }}">Blogs</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h4 class="widget-title">Opening Hours</h4>
                    <div class="small-title">
                        <div class="line1 background-color-white"></div>
                        <div class="line2 background-color-white"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="opening-hourse">
                        <ul class="list-border">
                            <li class="clearfix">
                                <span> Mon - Tues : </span>
                                <div class="value pull-right">6.00 am - 10.00 pm</div>
                            </li>
                            <li class="clearfix">
                                <span> Wednes - Thurs :</span>
                                <div class="value pull-right">8.00 am - 6.00 pm</div>
                            </li>
                            <li class="clearfix">
                                <span> Fri : </span>
                                <div class="value pull-right">3.00 pm - 8.00 pm</div>
                            </li>
                            <li class="clearfix">
                                <span> Sun : </span>
                                <div class="value pull-right">Closed</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-black-333">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-5">
                    <p class="font-11 text-black-777 m-0 copy-right">
                        Copyright: 2024
                        <a href="#."><span class="color_red">DFI REALTORS</span></a>. All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6 col-sm-7 text-right">
                    <div class="widget no-border m-0">
                        <ul class="list-inline sm-text-center mt-5 font-12">
                            <li><a href="#.">FAQ</a></li>
                            <li>|</li>
                            <li><a href="#.">Help Desk</a></li>
                            <li>|</li>
                            <li><a href="#.">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- #/FOOTER -->
