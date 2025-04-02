<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ecommerce, market, shop, mart, cart, deal, multipurpose, marketplace">
    <meta name="description" content="Carrot - Multipurpose eCommerce HTML Template.">
    <meta name="author" content="ashishmaraviya">

    <title>Carrot - Multipurpose eCommerce HTML Template</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/client/img/logo/favicon.png') }}">

    <!-- Icon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/vendor/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/vendor/remixicon.css') }}">

    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/vendor/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/vendor/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/vendor/range-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/vendor/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/vendor/jquery.slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/vendor/slick-theme.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/style.css') }}">
</head>

<body class="body-bg-6">

    {{-- <!-- Loader -->
    <div id="cr-overlay">
        <span class="loader"></span>
    </div> --}}

    <!-- Header -->
    @include('client.components.header')

    <!-- Mobile menu -->
    @include('client.components.mobileMenu'))


    <!-- Hero slider -->
    @include('client.components.heroSlider')

    <!-- Categories -->
    @include('client.components.category')

    <!-- Popular product -->
    @include('client.components.popularProduct')

    <!-- Product banner -->
    @include('client.components.productBanner')

    <!-- Services -->
    @include('client.components.service')

    <!-- Deal -->
    @include('client.components.deal')

    <!-- Popular product -->
    @include('client.components.popularProduct1')

    <!-- Testimonial -->
    @include('client.components.testimonial')

    <!-- Blog -->
    @include('client.components.blog')

    <!-- Footer -->
    @include('admin.components.footer')

    <!-- Tab to top -->
    @include('client.components.tapToTop')

    <!-- Model -->
    @include('client.components.model')

    <!-- Cart -->
    @include('client.components.cart')

    <!-- Side-tool -->
    @include('client.components.slideTool')

    <!-- Vendor Custom -->
    <script src="{{ asset('assets/client/js/vendor/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/range-slider.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/aos.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/slick.min.js') }}"></script>

    <!-- Main Custom -->
    <script src="{{ asset('assets/client/js/main.js') }}"></script>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:08 GMT -->

</html>
