<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Desa Keramas | @yield('title')</title>
    <!-- Font Icons -->
    <link media="all" rel="stylesheet" href="/assets/web/css/fonts/icomoon/icomoon.css">
<!--     <link media="all" rel="stylesheet" href="css/fonts/roxine-font-icon/roxine-font.css"> -->
    <link media="all" rel="stylesheet" href="/assets/web/vendors/font-awesome/css/font-awesome.css">
    <!-- Vendors -->
    <link media="all" rel="stylesheet" href="/assets/web/vendors/owl-carousel/dist/assets/owl.carousel.min.css">
    <link media="all" rel="stylesheet" href="/assets/web/vendors/owl-carousel/dist/assets/owl.theme.default.min.css">
    <link media="all" rel="stylesheet" href="/assets/web/vendors/animate/animate.css">
    <link media="all" rel="stylesheet" href="/assets/web/vendors/rateyo/jquery.rateyo.css">
    <link media="all" rel="stylesheet" href="/assets/web/vendors/bootstrap-datepicker/css/bootstrap-datepicker.css">
    <link media="all" rel="stylesheet" href="/assets/web/vendors/fancyBox/source/jquery.fancybox.css">
    <link media="all" rel="stylesheet" href="/assets/web/vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.css">
    <!-- Bootstrap 4 -->
    <link media="all" rel="stylesheet" href="/assets/web/css/bootstrap.css">
    <!-- Rev Slider -->
    <link rel="stylesheet" type="text/css" href="/assets/web/vendors/rev-slider/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/assets/web/vendors/rev-slider/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/assets/web/vendors/rev-slider/revolution/css/navigation.css">
    <!-- Theme CSS -->
    <link media="all" rel="stylesheet" href="/assets/web/css/main.css">
    <!-- Custom CSS -->
    <link media="all" rel="stylesheet" href="/assets/web/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
</head>

<body class="white-overlay">
    <div class="preloader" id="pageLoad">
        <div class="holder">
            <div class="coffee_cup"></div>
        </div>
    </div>
    <!--Side panel-->
    @include('web.layout.sidebar')
    <!-- main wrapper -->
    <div id="wrapper" class="no-overflow-x">
        <div class="page-wrapper">
            <!-- header of the page -->
            @include('web.layout.navbar')
            <!--/header of the page -->
            <main>
                @yield('content')
            </main>
        </div>
        <!-- footer of the pagse -->
        <footer class="footer footer-v1">
            <div class="content-block footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-logo">
                                <img src="img/logo-dark.svg" alt="image-description">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-nav inline-nav text-center">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 text-right">
                            <ul class="social-network with-text">
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span> </a></li>
                                <li><a href="#"><span class="icon-google-plus"></span> </a></li>
                                <li><a href="#"><span class="icon-pinterest"></span> </a></li>
                                <li><a href="#"><span class="icon-dribbble"></span> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom text-center">
                <div class="container">
                    <p>Copyright 2016 - Roxine - Multi Purpose Theme by Waituk </p>
                </div>
            </div>
        </footer>
        <!--/footer of the page -->
    </div>
    <!-- open/close -->
    <div class="search-form-wrapper overlay overlay-hugeinc">
        <button type="button" class="overlay-close"><span class="custom-icon-plus"></span></button>
        <div class="search-form">
            <form action="#" method="post">
                <div class="form-group">
                    <input type="search" class="form-control" placeholder="Enter Your Search">
                    <button type="submit"><span class="icon-search"></span></button>
                </div>
            </form>
        </div>
    </div>
    <a href="#" class="section-scroll" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- jQuery Library -->
    <script src="/assets/web/vendors/jquery/jquery-2.1.4.min.js"></script>
    <!-- Vendor Scripts -->
    <script src="/assets/web/vendors/tether/dist/js/tether.min.js"></script>
    <script src="/assets/web/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/web/vendors/stellar/jquery.stellar.min.js"></script>
    <script src="/assets/web/vendors/isotope/javascripts/isotope.pkgd.min.js"></script>
    <script src="/assets/web/vendors/isotope/javascripts/packery-mode.pkgd.js"></script>
    <script src="/assets/web/vendors/owl-carousel/dist/owl.carousel.min.js"></script>
    <script src="/assets/web/vendors/waypoint/waypoints.min.js"></script>
    <script src="/assets/web/vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="/assets/web/vendors/fancyBox/source/jquery.fancybox.pack.js"></script>
    <script src="/assets/web/vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.js"></script>
    <script src="/assets/web/vendors/image-stretcher-master/image-stretcher.js"></script>
    <script src="/assets/web/vendors/wow/wow.min.js"></script>
    <script src="/assets/web/vendors/rateyo/jquery.rateyo.min.js"></script>
    <script src="/assets/web/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/assets/web/vendors/bootstrap-slider-master/src/js/bootstrap-slider.js"></script>
    <script src="/assets/web/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/mega-menu.js"></script>
    <script src="/assets/web/vendors/retina/retina.min.js"></script>
    <!-- Custom Script -->
    <script src="/assets/web/js/jquery.main.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="/assets/web/vendors/rev-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/assets/web/vendors/rev-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="/assets/web/vendors/rev-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="/assets/web/vendors/rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="/assets/web/vendors/rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="/assets/web/vendors/rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="/assets/web/vendors/rev-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="/assets/web/vendors/rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="/assets/web/vendors/rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="/assets/web/vendors/rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="/assets/web/vendors/rev-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!-- SNOW ADD ON -->
    <script type="text/javascript" src="/assets/web/vendors/rev-slider/revolution-addons/snow/revolution.addon.snow.min.js"></script>
    <!-- Revolution Slider Script -->
    <script src="/assets/web/js/revolution.js"></script>
    @stack('script')
</body>

</html>
