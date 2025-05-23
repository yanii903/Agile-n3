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

    <!-- Loader -->
    <div id="cr-overlay">
        <span class="loader"></span>
    </div>

    <!-- Header -->
    @include('client.components.header')

    <!-- Mobile menu -->
    @include('client.components.mobileMenu')

    @if (session('success'))
        <x-alert type="success">
            {{ session('success') }}
        </x-alert>
    @endif

    @if (session('error'))
        <x-alert type="danger">
            {{ session('error') }}
        </x-alert>
    @endif

    @yield('content')

    <!-- footer -->
    @include('client.components.footer')

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

    {{-- Quick View --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('.model-oraganic-product').on('click', function() {
                let productId = $(this).data('id');

                $.ajax({
                    url: '/client/quickview/' + productId,
                    method: 'GET',
                    success: function(product) {
                        // Gán dữ liệu vào modal
                        $('#modal-product-name').text(product.name);
                        $('#modal-product-description').text(product.description);
                        $('#modal-product-category').text(product.category?.name ||
                            'Không có danh mục');

                        // Format giá tiền (VD: 100000 => 100.000 VND)
                        let formattedPrice = new Intl.NumberFormat('vi-VN').format(product
                            .price) + ' VND';
                        $('#modal-product-price').text(formattedPrice);

                        $('#modal-product-image').attr('src', '/storage/' + product.image);
                    },
                    error: function() {
                        alert('Không thể tải thông tin sản phẩm!');
                    }
                });
            });
        });
    </script>

</body>

</html>
