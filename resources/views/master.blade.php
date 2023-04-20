<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SIBOTRA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/aos/aos.css" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Main CSS File -->
    @yield('customCSS')
</head>

<body>

<!-- Header -->
@yield('header')
<!-- End Header -->

<!-- Content -->
@yield('content')
<!-- End Content -->

<!-- Footer -->
<footer id="footer" class="section-bg">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Factcoins</strong>. All Rights Reserved
        </div>
        <div class="credits">
            {{--            Designed by <a href="">AlirezaNejati</a>--}}
        </div>
    </div>
</footer>
{{--@yield('footer')--}}
<!-- End  Footer -->
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/purecounter/purecounter_vanilla.js"></script>
<script src="assets/aos/aos.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/glightbox/js/glightbox.min.js"></script>
<script src="assets/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/swiper/swiper-bundle.min.js"></script>
<script src="assets/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
@yield('customJS')

</body>

</html>
