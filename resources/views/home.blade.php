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
                    <li><a class="nav-link  active" href="{{route('home')}}">Home</a></li>
                    <li><a class="nav-link " href="{{route('home')}}">About</a></li>
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
    <section id="hero" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center" data-aos="fade-up">
                <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
                    <h2>Automated Trading Bot <span>SIBOTRA!</span></h2>
                    <div>
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>

                <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/intro3.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-5 col-md-6">
                        <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                            <img src="assets/img/about.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                            <h2>Machine Learning and SIBOTRA</h2>
                            <p>
                                Machine learning is a type of artificial intelligence that allows a system to improve its performance on a task through experience, without being explicitly programmed.
                            </p>
                            <ul>
                                <li>
                                    <i class="bi bi-check-circle"></i>
                                    <strong>SIBOTRA</strong>
                                    as a bot uses machine learning, applies algorithms to analyze market data and makes trades based on predictions of future market trends. These kinds of bots can learn from past performance and market changes to continually improve their decision-making abilities. However, the accuracy of the predictions is dependent on the quality of the data and the algorithms used.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
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
                            <div class="icon" style="background: #fceef3;">
                                <i class="bi bi-speedometer2" style="color: #ff689b;"></i>
                            </div>
                            <h4 class="title"><a href="">Speed</a></h4>
                            <p class="description">
                                Automated trading systems execute trades much faster than human traders, taking advantage of market opportunities in real-time.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <div class="icon" style="background: #fff0da;">
                                <i class="bi bi-card-checklist" style="color: #e98e06;"></i>
                            </div>
                            <h4 class="title"><a href="">Consistency</a></h4>
                            <p class="description">
                                Automated trading eliminates the emotions and biases that can impact human trading decisions.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <div class="icon" style="background: #e6fdfc;"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Backtesting</a></h4>
                            <p class="description">
                                Machine learning algorithms can be tested and optimized on historical data before deploying them in live trading.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <div class="icon" style="background: #eafde7;"><i class="bi bi-clock" style="color:#41cf2e;"></i></div>
                            <h4 class="title"><a href="">24/7 Trading</a></h4>
                            <p class="description">
                                Automated trading systems can operate 24/7, maximizing opportunities in markets that are open at all hours.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class=" box">
                            <div class="icon" style="background: #e1eeff;"><i class="bi bi-graph-up-arrow" style="color: #2282ff;"></i></div>
                            <h4 class="title"><a href="">Scalability</a></h4>
                            <p class="description">
                                Automated trading systems can handle a large number of trades simultaneously, making it possible to scale up trading strategies.
                            </p>
                        </div>
                    </div>
                    {{--<div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <div class="icon" style="background: #ecebff;"><i class="bi bi-calendar4-week" style="color: #8660fe;"></i></div>
                            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                        </div>
                    </div>--}}

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="row feature-item">
                    <div class="col-lg-6 wow fadeInUp order-1 order-lg-2 text-center" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/works.jpg" class="img-fluid" alt="" style="width: 65%;">
                    </div>

                    <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="150">
                        <h4>How SIBOTRA works</h4>
                        <p>
                            SIBOTRA, our trading bot, works on 9 cryptocurrencies. However, Its extraordinary feature is that  although it does not trade on bitcoin, it has amazing signals on SOL, UNI, LTC, XRP, ETH, BNB, ADA and DOT.
                        </p>
                        <p>
                            In order to publish an accurate signal, Sibotra checks
                            Multi interval data,
                            the underlying cryptocurrencies’ and whole market charts simultaneously.
                            once it is able to predict the traders’ behaviour , it issues the signal
                        </p>
                        <h4>What differs SIBOTRA</h4>
                        <ul class="">
                            <li>
                                <i class="bi bi-check-circle"></i>
                                SIBOTRA checks the history of charts
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                SIBOTRA issues the time of closing the position not the price
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                SIBOTRA assigns the Stop-loss and Target Price
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="zoom-out">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3 class="cta-title">It’s time to trade intelligently!</h3>
                        <p class="cta-text">
                            No need to watch the market constantly and No need to even open a single position.
                        </p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        @guest
                            <a class="cta-btn align-middle" href="{{route('login')}}">Get started</a>
                        @else
                            <a class="cta-btn align-middle" href="{{route('pricing')}}">Get started</a>
                        @endguest
                    </div>
                </div>

            </div>
        </section><!--  End Call To Action Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container-fluid" data-aos="fade-up">

                <header class="section-header why-us-intro">
                    <h3>Features</h3>
                </header>

                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="why-us-img">
                            <img src="assets/img/bitcoin-business-as-part-economy.jpg" alt="" class="img-fluid">
                        </div>

                        <div class="container mt-5">
                            <div class="row counters" data-aos="fade-up" data-aos-delay="100">

                                <div class=" col-6 text-center">
                                    <span data-purecounter-start="0" data-purecounter-end="536" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Clients</p>
                                </div>

                                <div class=" col-6 text-center">
                                    <span data-purecounter-start="0" data-purecounter-end="10940" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Hours Of Support</p>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">

                        <div class="why-us-content">
                            <div class="features clearfix" data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-rocket-takeoff" style="color: #f058dc;"></i>
                                <h4>Trade in high Speed</h4>
                                <p>
                                    Markets such as cryptocurrency and Forex, are highly volatile and operate around the clock.
                                    What this means? there is a huge amount of data to wade through in order to identify trends, break-out points and find potential opportunities.
                                    A trading bot can collect, analyse and act on this data quickly. Because it’s beyond the control of a human trader alone.
                                </p>
                            </div>

                            <div class="features clearfix" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-stopwatch" style="color: #ffb774;"></i>
                                <h4>Trade around the clock</h4>
                                <p>
                                    High-Frequency Trading is a strategy that allows the bot to make hundreds and thousands of trades in a matter of seconds.
                                    A human trader needs downtime to sleep and enjoy the life outside the market but market never sleeps. Sibotra can remain on the job 24/7.
                                </p>
                            </div>

                            <div class="features clearfix" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-columns-gap" style="color: #589af1;"></i>
                                <h4>Remain disciplined</h4>
                                <p>
                                    An advantage that a trading robot can have over a human trader is remaining disciplined. Sibotra is 100% of the time.
                                </p>
                            </div>

                            <div class="features clearfix" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-magic" style="color: #41cf2e;"></i>
                                <h4>Open more positions</h4>
                                <p>
                                    In comparison to the the old fashioned way, traders who use robots can gain much more market exposure.
                                    Sibotra can open and close multiple positions simultaneously.
                                    To generate more signals it reads hours, days, even years of the previous price history in seconds.
                                </p>
                            </div>

                            <div class="features clearfix" data-aos="fade-up" data-aos-delay="500">
                                <i class="bi bi-emoji-sunglasses" style="color: #e98e06;"></i>
                                <h4>Trade without emotion</h4>
                                <p>
                                    When a market shows volatility or a position looks like it may turn against them,
                                    even the most disciplined and expert traders may make precipitous decisions.
                                    A trading robot isn’t troubled by emotion and can stick to the strategy at all times.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


        </section><!-- End Why Us Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing section-bg wow fadeInUp">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Products</h3>
                </header>

                <div class="row flex-items-xs-middle flex-items-xs-center">

                    <!-- Basic Plan  -->
                    <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-header">
                                <h3><span class="currency">USDT</span>0<span class="period">/month</span></h3>
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
                                <h3><span class="currency">USDT</span>0<span class="period">/month</span></h3>
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
                                <h3><span class="currency">USDT</span>0<span class="period">/month</span></h3>
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

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <ul class="faq-list" data-aso="fade-up" data-aos-delay="100">

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">
                            <h4>SIBOTRA for beginners</h4>
                            <i class="bi bi-chevron-down icon-show"></i>
                            <i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                It doesn't matter you've never trade ,never been to financial markets or if you're a seasoned investor.
                                Sibotra is designed to be quick and easy to understand without any in-depth knowledge.
                                so if you are really into experience a chance of making money sibotra is here.
                            </p>
                            <p>
                                Trading requires careful planning, strategy development, and continuous monitoring.
                                But to make money with robot trading, one needs to start by selecting a reliable trading platform, developing a sound trading strategy, and thoroughly backtesting the strategy to ensure it works under different market conditions.
                                Sibotra does all alone.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">
                            <h4>SIBOTRA for experts</h4>
                            <i class="bi bi-chevron-down icon-show"></i>
                            <i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Expert traders can use robot trading to automate their trading strategies and take advantage of opportunities in financial markets, while reducing the risk of human error.
                                Moreover, they can utilize our advanced suite of trading features including multiple entries, concurrent stop and take-profit orders, and trailing stop to maximize their profits.
                            </p>
                            <p>
                                Although experts know the financial markets well,but bots are better at trading than people.
                                no matter your condition, no matter the market condition, bot does its best continuously and On a regular basis.
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- End F.A.Q Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

                <header class="section-header">
                    <h3>What expert traders say about SIBOTRA</h3>
                </header>

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/avatar1.jpg" class="testimonial-img" alt="">
                                        <h3>John Doe</h3>
{{--                                        <h4>Ceo &amp; Founder</h4>--}}
                                        <p>
                                            <i class="bi bi-quote"></i>
                                            Sibotra changed the way I wanted to make passive income. No worries , no hustle 😊.
                                            Sibotra is equipped with every tool that makes automatic trading very consistent.
                                            A decision to use an automated trading bot like Sibotra was a smart one.
                                            No need to  pine over charts and indicators but improve the accuracy of trades.
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/avatar2.jpg" class="testimonial-img" alt="">
                                        <h3>Jane Doe</h3>
                                        {{--                                        <h4>Ceo &amp; Founder</h4>--}}
                                        <p>
                                            <i class="bi bi-quote"></i>
                                            I have been using Sibotra for over one year.
                                            Easy to use easy to set up also lots of tutorials available on setting up Sibotra.
                                            Using automation opens up new ways to make profits.
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/avatar3.jpg" class="testimonial-img" alt="">
                                        <h3>Matt Henderson</h3>
                                        {{--                                        <h4>Ceo &amp; Founder</h4>--}}
                                        <p>
                                            <i class="bi bi-quote"></i>
                                            There are many companies offering trading bots for cryptocurrency trading.
                                            I read their blogs and searched on the best crypto trading bots for more information.
                                            But few of them had online services and timely support.
                                            Great experience and cool support.
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/avatar4.jpg" class="testimonial-img" alt="">
                                        <h3>Sara Brandon</h3>
                                        {{--                                        <h4>Ceo &amp; Founder</h4>--}}
                                        <p>
                                            <i class="bi bi-quote"></i>
                                            The best feature and a great added value I have found in Sibotra is that it execute based on time I mean it issues its signals based on time.
                                            if you try, you would love how it works for you.
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

    </main>
@endsection

@section('customJS')
    <script src="js/main.js"></script>
@endsection
