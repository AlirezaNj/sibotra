@extends('master')

@section('customCSS')
    <link href="css/style.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
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
                    <li><a class="nav-link " href="{{route('about')}}">About</a></li>
                    <li><a class="nav-link " href="{{route('pricing')}}">Pricing</a></li>
                    <li><a class="nav-link " href="{{route('tutorial')}}">Tutorial </a></li>
                    <li><a class="nav-link " href="{{route('home')}}">Contact</a></li>
                    @guest
                        <li><a class="nav-link " href="{{route('login')}}">Sign in / Sign up</a></li>
                    @else
                        <li class="dropdown active"><a href="#"><span>{{auth()->user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">Dashboard</a></li>
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
        <section id="about" class="mt-5">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Your profile</h4>
                                <p class="card-description"></p>
                                <form action="{{route('user.update', auth()->user()->id)}}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-group row my-2">
                                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ auth()->user()->name }}" required autocomplete="name">
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email }}" required autocomplete="email">
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="telegram_id" class="col-sm-2 col-form-label">Telegram ID</label>
                                        <div class="col-sm-10">
                                            <input id="telegram_id" type="text" class="form-control @error('telegram_id') is-invalid @enderror" name="telegram_id" value="{{ auth()->user()->telegram_id }}" required autocomplete="telegram_id">
                                            @if(auth()->user()->telegram_verified_at)
                                                <span class="valid-feedback" style="display: block">
                                                <strong>Your telegram account verified at {{\Carbon\Carbon::parse(auth()->user()->telegram_verified_at)->format('Y-m-d')}}</strong>
                                            </span>
                                            @else
                                                <span class="invalid-feedback" style="display: block">
                                                <strong>Your telegram account hasn't verified yet.</strong>
                                            </span>
                                            @endif
                                            @error('telegram_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-group row mt-4">
                                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="password-confirm" class="col-sm-2 col-form-label">Password confirm</label>
                                        <div class="col-sm-10">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password confirm">
                                        </div>
                                    </div>

                                    <div class="form-group row my-2">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Your orders</h4>
                                <p class="card-description">
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
