<!DOCTYPE html>
<html>

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
