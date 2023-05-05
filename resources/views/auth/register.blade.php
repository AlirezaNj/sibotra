@extends('master')

@section('customCSS')
    <link href="css/style.css" rel="stylesheet">
@endsection

@section('content')
    <section class="vh-100 mt-5">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center " data-aos="fade-up">
                <div class="col-md-8 col-lg-7 col-xl-6 " data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/img/Login and register-1.svg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 mt-2" data-aos="zoom-out" data-aos-delay="200">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$name ?? old('name')}}" required autocomplete="name" autofocus>
                            <label class="form-label" for="name">Name</label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$email ?? old('email') }}" required autocomplete="email">
                            <label class="form-label" for="email">Email address</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <!-- telegram_id input -->
                        <div class="form-outline mb-4">
                            <input id="telegram_id" type="text" class="form-control @error('telegram_id') is-invalid @enderror" name="telegram_id" value="{{ old('telegram_id') }}" required autocomplete="telegram_id">

                            <label class="form-label" for="telegram_id">Telegram ID (!get your telegram ID by using @myidbot)</label>
                            @error('telegram_id')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <label class="form-label" for="password">Password</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <label class="form-label" for="password-confirm">Password confirm</label>
                        </div>

                        <!-- Submit button -->

                        <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                    </form>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span>Already have an account?</span>
                        <a class="mx-2" href="{{route('login')}}">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('customJS')
    <script src="js/main.js"></script>
@endsection
