@extends('master')

@section('customCSS')
    <link href="css/style.css" rel="stylesheet">
@endsection

@section('header')
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{route('home')}}">SIBOTRA</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link " href="{{route('home')}}">Home</a></li>
                    <li><a class="nav-link " href="{{route('home')}}">About</a></li>
                    <li><a class="nav-link " href="{{route('pricing')}}">Pricing</a></li>
                    <li><a class="nav-link active" href="{{route('tutorial')}}">Tutorial </a></li>
                    <li><a class="nav-link " href="{{route('home')}}">Contact</a></li>
                    @guest
                        <li><a class="nav-link " href="{{route('login')}}">Sign in / Sign up</a></li>
                    @else
                        <li class="dropdown"><a href="#"><span>{{auth()->user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li>
                                    <form action="{{route('logout')}}" method="POST" id="logoutForm">
                                        @csrf
                                        <a href="#" onclick="document.getElementById('logoutForm').submit()">logout</a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="facebook"><i class="bi bi-telegram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-youtube"></i></a>
            </div>

        </div>
    </header>
@endsection

@section('content')
    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services mt-5">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Know Our Automated Trading Bot SIBOTRA more</h3>
                    <p>
                        Just imagine the use of artificial intelligence to automatically execute trades in financial markets based on pre-defined rules and strategies.
                        It typically involves the use of mathematical models and statistical analysis to identify patterns and make trading decisions without human intervention.
                        basically no need to watch the market constantly and no need to even open a single position.
                    </p>
                </header>
                <div class="row g-5 d-flex justify-content-center">
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>Frequently Asked Questions</h3>
                    <p></p>
                </header>

                <ul class="faq-list" data-aso="fade-up" data-aos-delay="100">
                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- End F.A.Q Section -->
    </main>
@endsection

@section('customJS')
    <script src="js/main.js"></script>
@endsection
