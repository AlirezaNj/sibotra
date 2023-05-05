@extends('master')

@section('customCSS')
    <link href="css/style.css" rel="stylesheet">
@endsection

@section('content')
    <section class="vh-100 mt-5">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center" data-aos="fade-up">
                <div class="col-md-8 col-lg-7 col-xl-6" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/img/Login and register.svg" class="img-fluid" alt="sign in">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 mt-2" data-aos="zoom-out" data-aos-delay="200">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label class="form-label" for="email">Email address</label>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <label class="form-label" for="password">Password</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <a class="my-2" href="#">Forgot password?</a>
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" name="remember" type="checkbox" value="" id="remember" checked />
                                <label class="form-check-label" for="remember"> Remember me </label>
                            </div>
                        </div>

                        <!-- Submit button -->

                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                        </div>

                        <a class="btn btn-danger btn-block" style="background-color: #ea4335" href="{{route('auth.google')}}"
                           role="button">
                            <i class="bi bi-google"></i>
                            <span>Continue with Google</span>
                        </a>

                    </form>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span>Don't have an account?</span>
                        <a class="mx-2" href="{{route('register')}}">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('customJS')
    <script src="js/main.js"></script>
@endsection
