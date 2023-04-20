@extends('master')

@section('customCSS')
    <link href="css/style.css" rel="stylesheet">
@endsection

@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100" data-aos="fade-up">
                <div class="col-md-8 col-lg-7 col-xl-6" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/img/intro3.png" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1" data-aos="zoom-out" data-aos-delay="200">
                    <form method="POST" action="{{ route('verifyToken') }}">
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
                            <input id="token" type="text" class="form-control @error('token') is-invalid @enderror" name="token" value="{{ old('token') }}" required autocomplete="token" autofocus>
                            <label class="form-label" for="token">Verification Code</label>
                            @error('token')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span>
                            Don't receive the code?
                        </span>

                        <button id="resend" class="btn btn-primary mx-2" disabled>
                            <span class="mx-2">
                                <span id="minutes">2</span>
                                <span>:</span>
                                <span id="seconds">00</span>
                            </span>
                            <a href="{{route('sendToken')}}">Resend</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('customJS')
    <script src="js/main.js"></script>
    <script>
        var interval;
        countdown()
        function countdown() {
            clearInterval(interval);
            interval = setInterval( function() {
                let minutes = $('#minutes').html();
                let seconds = $('#seconds').html();
                seconds -= 1;
                if (minutes < 0) return;
                else if (seconds < 0 && minutes !== 0) {
                    minutes -= 1;
                    seconds = 59;
                }
                else if (seconds < 10 && length.seconds !== 2) seconds = '0' + seconds;

                $('#minutes').html(minutes)
                $('#seconds').html(seconds)

                if (minutes == 0 && seconds == 0){
                    $('#resend').prop('disabled', false)
                    clearInterval(interval);
                }
            }, 1000);
        }

        $('#resend').click(function () {

            $('#minutes').html("2")
            $('#seconds').html("00")
            $('#resend').attr('disabled', true)
            countdown();
        });
    </script>
@endsection
