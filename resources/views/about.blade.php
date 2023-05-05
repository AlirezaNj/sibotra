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
                    <li><a class="nav-link" href="{{route('home')}}">Home</a></li>
                    <li><a class="nav-link active" href="{{route('about')}}">About</a></li>
                    <li><a class="nav-link " href="{{route('pricing')}}">Pricing</a></li>
                    <li><a class="nav-link " href="{{route('tutorial')}}">Tutorial </a></li>
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
    {{--<section id="hero" class="clearfix">
        <div class="container d-flex">
            <div class="row justify-content-center align-self-center" data-aos="fade-up">
                <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
                    <header class="section-header">
                        <h4>Welcome to Sibotra <br> The future of AI-powered cryptocurrency auto-trading!</h4>
                        <p>
                            At Sibotra, we believe in the transformative power of technology and the endless potential of cryptocurrency markets.
                            Our mission is to provide an intelligent and user-friendly trading platform that enables investors of all experience levels to thrive in the ever-evolving world of digital assets.
                        </p>
                    </header>
                </div>

                --}}{{--<div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/intro3.png" alt="" class="img-fluid">
                </div>--}}{{--
            </div>
        </div>
    </section>--}}

    <main id="main">
        <!-- ======= intro Section ======= -->
        <section id="services" class="services about-intro">
            <div class="container" data-aos="zoom-in">
                <header class="section-header mt-5">
                    <h4>Welcome to Sibotra <br> The future of AI-powered cryptocurrency auto-trading!</h4>
                    <p>
                        At Sibotra, we believe in the transformative power of technology and the endless potential of cryptocurrency markets.
                        Our mission is to provide an intelligent and user-friendly trading platform that enables investors of all experience levels to thrive in the ever-evolving world of digital assets.
                    </p>
                </header>
            </div>
        </section>
        <!-- End intro Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                            <h4>Our Journey</h4>
                            <p>
                                Founded in 2021 by a team of passionate and skilled professionals, Sibotra emerged from a shared vision to democratize access to cryptocurrency markets through the use of cutting-edge AI technology.
                                Our founders, with diverse backgrounds in finance, technology, and data science, recognized the untapped potential of AI-driven trading strategies in the rapidly growing world of cryptocurrencies.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6">
                        <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                            <img src="assets/img/our-journey.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-5 col-md-6">
                        <div class="about-img" data-aos="fade-left" data-aos-delay="100">
                            <img src="assets/img/the-sibotra-difference.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="about-content" data-aos="fade-right" data-aos-delay="100">
                            <h2>The Sibotra Difference</h2>
                            <p>
                                We pride ourselves on delivering a seamless and efficient trading experience,
                                supported by our advanced auto-trading algorithm.
                                Sibotra's proprietary AI system continuously analyzes market data and identifies profitable trading opportunities with unrivaled precision.
                                By leveraging machine learning and deep neural networks, our AI evolves with the market, ensuring that your investments are always optimized for maximum returns.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                            <h2>Security and Trust</h2>
                            <p>
                                The safety and security of your investments are our top priority.
                                Sibotra employs industry-leading encryption and security measures to protect your assets and personal information.
                                We are fully compliant with all relevant regulations and committed to maintaining the highest standards of transparency and accountability.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6">
                        <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                            <img src="assets/img/security-and-trust.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-5 col-md-6">
                        <div class="about-img" data-aos="fade-left" data-aos-delay="100">
                            <img src="assets/img/a-communty-of-success.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="about-content" data-aos="fade-right" data-aos-delay="100">
                            <h2>A Community of Success</h2>
                            <p>
                                Sibotra's success is built on the strength and dedication of our community.
                                We are proud to offer a supportive and inclusive platform where users can learn, grow, and share their experiences.
                                Our team of experts is always available to provide guidance, answer questions, and ensure your success in the world of cryptocurrency trading.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="zoom-out">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3 class="cta-title">Join the Revolution!</h3>
                        <p class="cta-text">
                            Embrace the future of investing with Sibotra,
                            and become a part of the cryptocurrency revolution today!
                            Whether you are a seasoned investor or just beginning your journey,
                            our AI-powered auto-trader is designed to help you achieve your financial goals.
                        </p>
                    </div>
                    <div class="col-lg-12 text-center">
                        @guest
                            <a class="cta-btn align-middle" href="{{route('login')}}">Get started</a>
                        @else
                            <a class="cta-btn align-middle" href="{{route('pricing')}}">Get started</a>
                        @endguest
                    </div>
                </div>

            </div>
        </section>

        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="about-content text-center" data-aos="zoom-in" data-aos-delay="100">
                            <h3>
                                Thank you for choosing Sibotra.
                                Together, we will redefine the possibilities of cryptocurrency trading and shape a more prosperous future for all.
                            </h3>
                            <h3>
                                Welcome aboard!
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('customJS')
    <script src="js/main.js"></script>
@endsection
