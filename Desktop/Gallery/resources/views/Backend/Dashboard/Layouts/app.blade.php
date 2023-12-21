<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>@yield('main_page_title') | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('Backend') }}/assets/images/sm-logo.png" />

    <!-- jsvectormap css -->
    <link href="{{ asset('Backend') }}/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet"
        type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('Backend') }}/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('Backend') }}/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('Backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('Backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('Backend') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('Backend') }}/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    {{-- Toaster --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @stack('css')
</head>

<body>
    <div id="layout-wrapper">
        @include('Backend.Dashboard.Components.header')
        @include('Backend.Dashboard.Components.remove_notification')
        @include('Backend.Dashboard.Components.side_nav')
        <div class="vertical-overlay"></div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- your content goes here  -->

                @include('Backend.Dashboard.Components.model')
            </div>
            @include('Backend.Dashboard.Components.footer')
        </div>
    </div>

    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>

    {{-- @include('Backend.Components.preloader') --}}
    {{-- @include('Backend.Components.theme_setting') --}}

    <!-- JAVASCRIPT -->
    <script src="{{ asset('Backend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Backend') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('Backend') }}/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('Backend') }}/assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('Backend') }}/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('Backend') }}/assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="{{ asset('Backend') }}/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="{{ asset('Backend') }}/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="{{ asset('Backend') }}/assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('Backend') }}/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('Backend') }}/assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="{{ asset('Backend') }}/assets/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    @stack('js')
</body>

</html>
