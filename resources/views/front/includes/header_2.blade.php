<header id="main_header">

    <!--===== HEADER TOP =====-->
    <div id="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <p class="p-font-15 p-white">We are Best in Town With 10 years of Experience.</p>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12 text-right">
                    <div class="header-top-links">
                        <ul>
                            <li><a href="#"><i class="icon-icons215"></i>My Property</a></li>
                            <li><a href="#" class="header-login"><i class="icon-icons179"></i>Login </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== #/HEADER TOP =====-->


    <!--===== HEADER BOTTOM =====-->
    <div id="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-2 hidden-xs hidden-sm"><a href="index.html"><img
                            src="{{ asset('assets/images/logo-white.png') }}" alt="logo" /></a></div>
                <div class="col-md-10 col-sm-12 col-xs-12">
                    <div class="get-tuch text-left top20">
                        <i class="icon-telephone114"></i>
                        <ul>
                            <li>
                                <h4>Whatsapp Number</h4>
                            </li>
                            <li>
                                <p>+91-9811396292</p>
                            </li>
                        </ul>
                    </div>
                    <div class="get-tech-line top20"><img src="{{ asset('assets/images/get-tuch-line.png') }}"
                            alt="line" /></div>

                    <div class="get-tech-line top20"><img src="{{ asset('assets/images/get-tuch-line.png') }}"
                            alt="line" /></div>
                    <div class="get-tuch text-left top20">
                        <i class="icon-icons142"></i>
                        <ul>
                            <li>
                                <h4>Email Address</h4>
                            </li>
                            <li>
                                <p><a href="#">dfigurgaon@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== #/HEADER BOTTOM =====-->
    <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="social-icons text-right">
                        <ul class="socials">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i></button>
                        <a class="navbar-brand sticky_logo" href="index.html"><img src="images/logo-white.png"
                                class="logo" alt=""></a>
                    </div>
                    <!-- End Header Navigation -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    @include('front.includes.menu')
                </div>
            </div>
        </div>
    </nav>
</header>
