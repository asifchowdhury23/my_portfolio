<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iPortfolio Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('frontEndAsset')}}/img/favicon.png" rel="icon">
    <link href="{{asset('frontEndAsset')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('frontEndAsset')}}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('frontEndAsset')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('frontEndAsset')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('frontEndAsset')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('frontEndAsset')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('frontEndAsset')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('frontEndAsset')}}/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: iPortfolio - v3.10.0
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
@include('frontEnd.include.header')
<!-- End Header -->

<!-- ======= Hero Section ======= -->
@yield('hero')
<!-- End Hero -->

<!-- Start #main -->
<main id="main">
@yield('content')
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
@include('frontEnd.include.footer')
<!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('frontEndAsset')}}/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="{{asset('frontEndAsset')}}/vendor/aos/aos.js"></script>
<script src="{{asset('frontEndAsset')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontEndAsset')}}/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('frontEndAsset')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('frontEndAsset')}}/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('frontEndAsset')}}/vendor/typed.js/typed.min.js"></script>
<script src="{{asset('frontEndAsset')}}/vendor/waypoints/noframework.waypoints.js"></script>
<script src="{{asset('frontEndAsset')}}/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('frontEndAsset')}}/js/main.js"></script>

</body>

</html>
