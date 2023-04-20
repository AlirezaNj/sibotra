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
                    <li><a class="nav-link active" href="{{route('pricing')}}">Pricing</a></li>
                    <li><a class="nav-link " href="{{route('tutorial')}}">Tutorial </a></li>
                    <li><a class="nav-link " href="{{route('home')}}">Contact</a></li>
                    @guest
                        <li><a class="nav-link " href="{{route('login')}}">Sign in / Sign up</a></li>
                    @else
                        <li class="dropdown"><a href="#"><span>{{auth()->user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                {{-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                     <ul>
                                         <li><a href="#">Deep Drop Down 1</a></li>
                                         <li><a href="#">Deep Drop Down 2</a></li>
                                         <li><a href="#">Deep Drop Down 3</a></li>
                                         <li><a href="#">Deep Drop Down 4</a></li>
                                         <li><a href="#">Deep Drop Down 5</a></li>
                                     </ul>
                                 </li>--}}
                                <li>
                                    <form action="{{route('logout')}}" method="POST" id="logoutForm">
                                        @csrf
                                        <a href="#" onclick="document.getElementById('logoutForm').submit()">logout</a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                    {{--                <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>--}}
                    {{--                <li><a class="nav-link scrollto" href="#team">Team</a></li>--}}
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
    <section id="hero" class="clearfix" style="background: #010080; height: auto; padding-bottom: 0">
        <div class="testimonials-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/s-1.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/s-2.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/s-3.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/s-4.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/s-5.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/s-6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <main id="main">
        <!-- ======= Pricing Section ======= -->
        <section>
            <div class="container-xxl service py-5">
                <div class="container">
                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" >
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Services</p>
                        <h1 class="display-5 mb-5">Awesome Services For Trading</h1>
                    </div>
                    <div class="row g-4 fadeInUp" data-wow-delay="0.3s">
                        <div class="col-lg-3">
                            <div class="nav nav-pills d-flex justify-content-between w-100 me-4">
                                <button class="nav-link w-100 d-flex align-items-center text-center border p-4 mb-4 active"
                                        data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                                    <h4 class="m-0"><i class="bi bi-info-circle text-primary me-3"></i>Signal Channel</h4>
                                </button>
                                <button class="nav-link w-100 d-flex align-items-center text-center border p-4 mb-4"
                                        data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                                    <h4 class="m-0"><i class="bi bi-info-circle text-primary me-3"></i>Auto Trade</h4>
                                </button>
                                <button class="nav-link w-100 d-flex align-items-center text-center border p-4"
                                        data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                                    <h4 class="m-0"><i class="bi bi-info-circle text-primary me-3"></i>Auto Trade Plus</h4>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content w-100">
                                <div class="tab-pane fade show active" id="tab-pane-1">
                                    <div class="row g-4">
                                        <div class="col-md-12">
                                            <div class="row" style="  display: flex; flex-wrap: wrap;">
                                                <div class="col-md-6">
                                                    <img class="rounded w-100" src="assets/img/chart_1_1.jpg"
                                                         style="object-fit: cover;" alt="">
                                                    <img class="rounded w-100" src="assets/img/chart_1_2.jpg"
                                                         style="object-fit: cover;" alt="">
                                                    <img class="rounded w-100" src="assets/img/chart_1_3.jpg"
                                                         style="object-fit: cover;" alt="">
                                                </div>
                                                <div class="col-md-6">
                                                    <img class="rounded w-100" src="assets/img/chart_1_4.jpg"
                                                         style="object-fit: cover;" alt="">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <h3 class="mb-4">1.	Signal Channel </h3>
                                            <p class="mb-4"></p>
                                            <p><i class="bi bi-check text-primary me-3"></i>High risk: piles of orders, rise in profits</p>
                                            <p><i class="bi bi-check text-primary me-3"></i>Middle risk: Reasonable  number of orders, acceptable profit</p>
                                            <p><i class="bi bi-check text-primary me-3"></i>Low risk: few orders , less profit , high win rate</p>
                                            {{--<a href="" class="btn btn-primary py-3 px-5 mt-3">Buy</a>
                                            <a href="" class="btn btn-outline-primary py-3 px-5 mt-3">Free Trial</a>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-pane-2">
                                    <div class="row g-4">
                                        <div class="col-md-12">
                                            <div class="row" style="  display: flex; flex-wrap: wrap;">
                                                <div class="col-md-6">
                                                    <img class="rounded w-100" src="assets/img/chart_2_1.jpg"
                                                         style="object-fit: cover;" alt="">
                                                    <img class="rounded w-100" src="assets/img/chart_2_2.jpg"
                                                         style="object-fit: cover;" alt="">
                                                    <img class="rounded w-100" src="assets/img/chart_2_3.jpg"
                                                         style="object-fit: cover;" alt="">
                                                </div>
                                                <div class="col-md-6">
                                                    <img class="rounded w-100" src="assets/img/chart_2_4.jpg"
                                                         style="object-fit: cover;" alt="">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <h3 class="mb-4">2.	Auto Trade </h3>
                                            <p class="mb-4">
                                                Automated investment management uses computer algorithms to create and manage investment portfolios for clients.
                                            </p>
                                            <p><i class="bi bi-check text-primary me-3"></i>
                                                It has been programmed to use stop loss and take profit orders.
                                            </p>
                                            <p><i class="bi bi-check text-primary me-3"></i>
                                                Real-time orders are executed immediately at the best available price in the market, based on the parameters set by the algorithm.
                                            </p>
                                            <p><i class="bi bi-check text-primary me-3"></i>
                                                The stop price "trails" the market price, moving up as the price of the asset rises, but staying fixed if the price falls.
                                                The idea behind a trailing stop order is to lock in profits and limit losses by automatically selling the asset if its price drops below a certain level.
                                            </p>
                                            {{--<a href="" class="btn btn-primary py-3 px-5 mt-3">Buy</a>
                                            <a href="" class="btn btn-outline-primary py-3 px-5 mt-3">Free Trial</a>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-pane-3">
                                    <div class="row g-4">
                                        <div class="col-md-12">
                                            <div class="row" style="  display: flex; flex-wrap: wrap;">
                                                <div class="col-md-6">
                                                    <img class="rounded w-100" src="assets/img/chart_3_1.jpg"
                                                         style="object-fit: cover;" alt="">
                                                    <img class="rounded w-100" src="assets/img/chart_3_2.jpg"
                                                         style="object-fit: cover;" alt="">
                                                    <img class="rounded w-100" src="assets/img/chart_3_3.jpg"
                                                         style="object-fit: cover;" alt="">
                                                </div>
                                                <div class="col-md-6">
                                                    <img class="rounded w-100" src="assets/img/chart_3_4.jpg"
                                                         style="object-fit: cover;" alt="">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <h3 class="mb-4">3.	Auto Trade Plus </h3>
                                            <p class="mb-4">
                                                All the features are as the same as the previous product but The advantage of having a user panel is that all traders can:
                                            </p>
                                            <p><i class="bi bi-check text-primary me-3"></i>Close the positions instantly</p>
                                            <p><i class="bi bi-check text-primary me-3"></i>Handle the process of investment management</p>
                                            <p><i class="bi bi-check text-primary me-3"></i>Set the intended leverage</p>
                                            <p><i class="bi bi-check text-primary me-3"></i>Set the risk degree</p>
                                            <p><i class="bi bi-check text-primary me-3"></i>Follow up and monitor its actions ,review the performance of their investment portfolios on a regular basis</p>
                                            {{--<a href="" class="btn btn-primary py-3 px-5 mt-3">Buy</a>
                                            <a href="" class="btn btn-outline-primary py-3 px-5 mt-3">Free Trial</a>--}}
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="tab-pane fade" id="tab-pane-2">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute rounded w-100 h-100" src="img/service-2.jpg"
                                                     style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                                diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                                clita duo justo erat amet.</p>
                                            <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                            <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                            <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                            <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-pane-3">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute rounded w-100 h-100" src="img/service-3.jpg"
                                                     style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                                diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                                clita duo justo erat amet.</p>
                                            <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                            <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                            <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                            <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-pane-4">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute rounded w-100 h-100" src="img/service-4.jpg"
                                                     style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                                diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                                clita duo justo erat amet.</p>
                                            <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                            <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                            <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                            <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                        </div>
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="pricing" class="pricing section-bg wow fadeInUp">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Products</h3>
                    {{--                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>--}}
                </header>

                <div class="row flex-items-xs-middle flex-items-xs-center">

                    <!-- Basic Plan  -->
                    <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-header">
                                <h3><span class="currency">USDT</span>10<span class="period">/month</span></h3>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    Signal Channel
                                </h4>
                                {{--<ul class="list-group">
                                    <li class="list-group-item">High risk:piles of orders,rise in profits</li>
                                    <li class="list-group-item">Middle risk:reasonable number of orders,acceptable profit</li>
                                    <li class="list-group-item">Low risk:few orders,less profit,high win rate</li>
                                </ul>--}}
                                <a href="#" class="btn">Buy now</a>
                                <a href="#" class="btn-outline">Free trial</a>
                            </div>
                        </div>
                    </div>

                    <!-- Regular Plan  -->
                    <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        {{--<div class="card">
                            <div class="card-header">
                                <h3><span class="currency">$</span>29<span class="period">/month</span></h3>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    Regular Plan
                                </h4>
                                <ul class="list-group">
                                    <li class="list-group-item">Odio animi voluptates</li>
                                    <li class="list-group-item">Inventore quisquam et</li>
                                    <li class="list-group-item">Et perspiciatis suscipit</li>
                                    <li class="list-group-item">24/7 Support System</li>
                                </ul>
                                <a href="#" class="btn">Choose Plan</a>
                            </div>
                        </div>--}}
                        <div class="card">
                            <div class="card-header">
                                <h3><span class="currency">USDT</span>20<span class="period">/month</span></h3>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    Auto Trade
                                </h4>
                                {{--<ul class="list-group">
                                    <li class="list-group-item">High risk:piles of orders,rise in profits</li>
                                    <li class="list-group-item">Middle risk:reasonable number of orders,acceptable profit</li>
                                    <li class="list-group-item">Low risk:few orders,less profit,high win rate</li>
                                </ul>--}}
                                <a href="#" class="btn">Buy now</a>
                                <a href="#" class="btn-outline">Free trial</a>
                            </div>
                        </div>
                    </div>

                    <!-- Premium Plan  -->
                    <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <div class="card-header">
                                <h3><span class="currency">USDT</span>30<span class="period">/month</span></h3>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    Auto Trade Plus
                                </h4>
                                {{--<ul class="list-group">
                                    <li class="list-group-item">High risk:piles of orders,rise in profits</li>
                                    <li class="list-group-item">Middle risk:reasonable number of orders,acceptable profit</li>
                                    <li class="list-group-item">Low risk:few orders,less profit,high win rate</li>
                                </ul>--}}
                                <a href="#" class="btn">Buy now</a>
                                <a href="#" class="btn-outline">Free trial</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- End Pricing Section -->

    </main>
@endsection

@section('customJS')
    <script src="js/main.js"></script>
@endsection
