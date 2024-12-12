<header id="header-top_2">
    <div class="container">
        <div class="row">
            <div class="header_set">
                <div class="col-md-12 text-right">
                    <div class="get-tuch text-left">
                        <i class="icon-telephone114"></i>
                        <ul class="list-unstyled m-0">
                            <li>
                                <h4 class="m-0">Whatsapp Number</h4>
                                <a href="tel:+919811396292" class="text-decoration-none">
                                    <p class="p_14 m-0">+91-9811396292</p>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="get-tuch text-left">
                        <i class=" icon-icons142"></i>
                        <ul class="list-unstyled m-0">
                            <li>
                                <h4 class="p-font-17 m-0">Email Address</h4>
                                <a href="mailto:dfigurgaon@gmail.com" class="text-decoration-none">
                                    <p class="p-font-15 m-0">dfigurgaon@gmail.com</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default navbar-fixed no-background navbar-sticky dark bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ URL('/assets/') }}/images/logo.png" class="logo logo-display" alt="">
                    <img src="{{ URL('/assets/') }}/images/logo-white_2.png" class="logo logo-scrolled" alt="">
                </a>
            </div><!-- End Header Navigation -->
            @include('front.includes.menu')
        </div>

    </nav>
</header>
