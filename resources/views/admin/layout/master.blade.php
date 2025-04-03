<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="admin, dashboard, ecommerce, panel" />
    <meta name="description" content="Carrot - Admin.">
    <meta name="author" content="ashishmaraviya">

    <title>Carrot - Admin.</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/img/favicon/favicon.ico') }}">

    <!-- Icon CSS -->
    <link href="{{ asset('assets/admin/css/vendor/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/vendor/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/vendor/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="{{ asset('assets/admin/css/vendor/datatables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/vendor/responsive.datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/vendor/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/vendor/simplebar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/vendor/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/vendor/apexcharts.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link id="main-css" href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">


</head>

<body>
    <main class="wrapper sb-default ecom">
        {{-- <!-- Loader -->
        <div id="cr-overlay">
            <div class="loader"></div>
        </div> --}}

        @include('admin.components.header')
        @include('admin.components.sidebar')
        @include('admin.components.notify')

        <!-- Main content -->
        <div class="cr-main-content">
            <div class="container-fluid">
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

            </div>
        </div>

        @include('admin.components.featureTool')
        @include('admin.components.footer')
    </main>

    <!-- Vendor Custom -->
    <script src="{{ asset('assets/admin/js/vendor/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/owl.carousel.min.js') }}"></script>

    <!-- Data Tables -->
    <script src="{{ asset('assets/admin/js/vendor/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/datatables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/datatables.responsive.min.js') }}"></script>

    <!-- Calendar -->
    <script src="{{ asset('assets/admin/js/vendor/jquery.simple-calendar.js') }}"></script>

    <!-- Date Range Picker -->
    <script src="{{ asset('assets/admin/js/vendor/moment.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/date-range.js') }}"></script>

    <!-- Main Custom -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <script src="{{ asset('assets/admin/js/data/ecommerce-chart-data.js') }}"></script>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:34 GMT -->

</html>
