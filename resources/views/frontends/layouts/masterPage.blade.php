<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Nest - Multipurpose eCommerce HTML Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset( 'frontends/assets/images/theme/favicon.svg' ) }}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset( 'frontends/assets/css/plugins/animate.min.css' ) }}" />
    <link rel="stylesheet" href="{{ asset( 'frontends/assets/css/main.css?v=5.3' ) }}" />
</head>

<body>
    <!-- Modal -->

    <!-- Quick view -->
        @include('frontends.layouts.quickView')
    <!--End quick view-->

    <!-- Header  -->
        @include('frontends.layouts.header')
    <!--End header-->

    @yield('pageContent')

    <!-- Footer  -->
    @include('frontends.layouts.footer')
    <!--End footer-->


    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{ asset( 'frontends/assets/images/theme/loading.gif' ) }}" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="{{ asset( 'frontends/assets/js/vendor/modernizr-3.6.0.min.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/vendor/jquery-3.6.0.min.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/vendor/jquery-migrate-3.3.0.min.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/vendor/bootstrap.bundle.min.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/plugins/slick.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/plugins/jquery.syotimer.min.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/plugins/waypoints.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/plugins/wow.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/plugins/perfect-scrollbar.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/plugins/magnific-popup.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/plugins/select2.min.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/plugins/counterup.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/plugins/jquery.countdown.min.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/plugins/images-loaded.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/plugins/isotope.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/plugins/scrollup.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/plugins/jquery.vticker-min.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/plugins/jquery.theia.sticky.js' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/plugins/jquery.elevatezoom.js' ) }}"></script>
    <!-- Template  JS -->
    <script src="{{ asset( 'frontends/assets/js/main.js' ) }}?v=5.3' ) }}"></script>
    <script src="{{ asset( 'frontends/assets/js/shop.js' ) }}?v=5.3' ) }}"></script>
</body>

</html>
