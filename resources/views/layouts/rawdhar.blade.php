<!DOCTYPE html>
<html>

<head>
        <title>{{config('app.name')}}</title>
        <meta name="description" content="Trucking is transportation and Logistics website template">
        <meta name="author" content="pixel-industry">
        <meta name="keywords" content="transportation, logistics, transportation template, logistics template, cargo, business">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{url('/')}}/css/bootstrap.css"/><!-- bootstrap grid -->
        <link rel="stylesheet" href="{{url('/')}}/css/animate.css"/><!-- used for animations -->
        <link rel='stylesheet' href='{{url('/')}}/owl-carousel/owl.carousel.css'/><!-- Client carousel -->
        <link rel="stylesheet" href="{{url('/')}}/masterslider/style/masterslider.css" /><!-- Master slider css -->
        <link rel="stylesheet" href="{{url('/')}}/masterslider/skins/default/style.css" /><!-- Master slider default skin -->
        <link rel="stylesheet" href="{{url('/')}}/css/style.css"/><!-- template styles -->
        <link rel="stylesheet" href="{{url('/')}}/css/color-default.css"/><!-- template main color -->
        <link rel="stylesheet" href="{{url('/')}}/css/retina.css"/><!-- retina ready styles -->
        <link rel="stylesheet" href="{{url('/')}}/css/responsive.css"/><!-- responsive styles -->

        <!-- Google Web fonts -->
        <link href='{{url('/')}}/http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
        <link href='{{url('/')}}/http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600' rel='stylesheet' type='text/css'>

        <!-- Font icons -->
        <link rel="stylesheet" href="{{url('/')}}/icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css"/><!-- Fontawesome icons css -->

        <link rel="stylesheet" href="{{url('/')}}/style-switcher/styleSwitcher.css"/><!-- styleswitcher -->
    </head>

        <div id="main_content">


        <!--=========================-->
        <!--=        Navbar         =-->
        <!--=========================-->
        @include('rawdhar.partials.header')

        @yield('content')

        <!--=========================-->
        <!--=        Footer         =-->
        <!--=========================-->
        @include('rawdhar.partials.footer')

        </div>


        <script src="{{url('/')}}/js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
        <script src="{{url('/')}}/js/bootstrap.min.js"></script><!-- .bootstrap script -->
        <script src="{{url('/')}}/js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
        <script src="{{url('/')}}/owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
        <script src="{{url('/')}}/masterslider/masterslider.min.js"></script><!-- Master slider main js -->
        <script src="{{url('/')}}/js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
        <script src="{{url('/')}}/style-switcher/styleSwitcher.js"></script><!-- styleswitcher script -->
        <script src="{{url('/')}}/js/include.js"></script><!-- custom js functions -->

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                // MASTER SLIDER START
                var slider = new MasterSlider();
                slider.setup('masterslider', {
                    width: 1140, // slider standard width
                    height: 854, // slider standard height
                    space: 0,
                    speed: 50,
                    layout: "fullwidth",
                    centerControls: false,
                    loop: true,
                    autoplay: true
                            // more slider options goes here...
                            // check slider options section in documentation for more options.
                });
                // adds Arrows navigation control to the slider.
                slider.control('arrows');

                $('#client-carousel').owlCarousel({
                    items: 6,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        600: {
                            items: 3,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        1000: {
                            items: 6,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true
                        }
                    }
                });
            });
            /* ]]> */
        </script>
    </body>

<!-- Mirrored from pixel-industry.com/html/trucking/index03.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Oct 2021 15:01:13 GMT -->
</html>
