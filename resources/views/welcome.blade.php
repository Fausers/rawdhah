<!DOCTYPE html>
<html>

<!-- Mirrored from pixel-industry.com/html/trucking/index03.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Oct 2021 15:01:06 GMT -->
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

    <body>

        <div class="header-wrapper header-transparent">
            <!-- .header.header-style01 start -->
            <header id="header"  class="header-style01">
                <!-- .container start -->
                <div class="container">
                    <!-- .main-nav start -->
                    <div class="main-nav">
                        <!-- .row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default nav-left" role="navigation">

                                    <!-- .navbar-header start -->
                                    <div class="navbar-header">
                                        <div class="logo">
                                            <a href="{{url('/')}}/index.html">
                                                <img style="height: 50px" src="{{url('/')}}/img/LOGO RAMIZ.png" alt="Trucking Transportation and Logistics HTML Template"/>
                                            </a>
                                        </div><!-- .logo end -->
                                    </div><!-- .navbar-header start -->

                                    <!-- MAIN NAVIGATION -->
                                    <div class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="dropdown current-menu-item">
                                                <a href="{{url('/')}}//" class="dropdown-toggle">Home</a>
                                            </li><!-- .dropdown end -->

                                            <li><a href="{{url('/')}}//">About</a></li>
                                            <li><a href="{{url('/')}}//">Services</a></li>
                                            <li><a href="{{url('/')}}//">Media</a></li>
                                            <li><a href="{{url('/')}}//">Contacts</a></li>

                                        </ul><!-- .nav.navbar-nav end -->

                                        <!-- RESPONSIVE MENU -->
                                        <div id="dl-menu" class="dl-menuwrapper">
                                            <button class="dl-trigger">Open Menu</button>

                                            <ul class="dl-menu">
                                                <li>
                                                    <a href="{{url('/')}}">Home</a>
                                                </li>
                                                <li><a href="{{url('/')}}//">About</a></li>
                                                <li><a href="{{url('/')}}//">Services</a></li>
                                                <li><a href="{{url('/')}}//">Media</a></li>
                                                <li><a href="{{url('/')}}//">Contacts</a></li>

                                            </ul><!-- .dl-menu end -->
                                        </div><!-- #dl-menu end -->

                                        <!-- #search start -->
                                        <div id="search">
                                            <form action="#" method="get">
                                                <input class="search-submit" type="submit" />
                                                <input id="m_search" name="s" type="text" placeholder="Type and hit enter..." />
                                            </form>
                                        </div><!-- #search end -->
                                    </div><!-- MAIN NAVIGATION END -->
                                </nav><!-- .navbar.navbar-default end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .main-nav end -->
                </div><!-- .container end -->
            </header><!-- .header.header-style01 -->
        </div><!-- .header-wrapper.header-transparent end -->

        <div id="masterslider" class="master-slider ms-skin-default">
            <!-- first slide -->
            <div class="ms-slide">
                <!-- slide background -->
                <img src="{{url('/')}}/img/truck/truck (3).jpeg" data-src="{{url('/')}}/img/truck/truck (3).jpeg" alt="Video slider"/>

                <video data-autopause="false" data-mute="false" data-loop="true" data-fill-mode="fill" class="ms-slide-bgvideo"
                       muted="muted" style="left: 0; top:0;">
                    <source src="{{url('/')}}/vid/truck.mp4" type="video/mp4">
{{--                    <source src="{{url('/')}}/http://www.pixel-industry.com/html/trucking/Truck_Driving_on_Country_Road.webm" type="video/webm">--}}
{{--                    <source src="{{url('/')}}/http://www.pixel-industry.com/html/trucking/Truck_Driving_on_Country_Road.ogg" type="video/ogg">--}}
                </video>

                <h2 class="ms-layer pi-caption01"
                    style="left: 58px; top: 420px;"
                    data-type="text"
                    data-effect="top(short)"
                    data-duration="300"
                    data-hide-effect="fade"
                    data-delay="0"
                    >
                    Welcome {{config('app.name')}}
                </h2>

                <img class="ms-layer" src="{{url('/')}}/masterslider/blank.gif"
                     data-src="{{url('/')}}/img/accordion-closed.png" alt=""
                     style="left: 540px; top: 480px;"
                     data-type="image"
                     data-effect="bottom(short)"
                     data-duration="300"
                     data-hide-effect="fade"
                     data-delay="0"
                     />

                <p class="ms-layer pi-text"
                   style="left: 395px; top: 500px;"
                   data-type="text"
                   data-effect="top(short)"
                   data-duration="300"
                   data-hide-effect="fade"
                   data-delay="500"
                   >
                    Grab your truck
                </p>
            </div><!-- .ms-slide end -->

            <!-- slide start -->
            <div class="ms-slide">
                <!-- slide background -->
                <img src="{{url('/')}}/masterslider/blank.gif"
                     data-src="{{url('/')}}/img/truck/truck (3).jpeg" alt="Worldwide freight services"/>

                <h2 class="ms-layer pi-caption01"
                    style="left: 258px; top: 420px;"
                    data-type="text"
                    data-effect="top(short)"
                    data-duration="300"
                    data-hide-effect="fade"
                    data-delay="0"
                    >
                    Freight services
                </h2>

                <img class="ms-layer" src="{{url('/')}}/masterslider/blank.gif" data-src="{{url('/')}}/img/accordion-closed.png" alt=""
                     style="left: 540px; top: 480px;"
                     data-type="image"
                     data-effect="bottom(short)"
                     data-duration="300"
                     data-hide-effect="fade"
                     data-delay="100"
                     />

                <p class="ms-layer pi-text"
                   style="left: 278px; top: 500px;"
                   data-type="text"
                   data-effect="top(short)"
                   data-duration="300"
                   data-hide-effect="fade"
                   data-delay="300"
                   >
                    Road, air, train or overseas. We got it covered!
                </p>
            </div><!-- .ms-slide end -->
        </div><!-- #masterslider end -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="custom-heading">
                            <h3>your sector</h3>
                        </div><!-- .custom-heading end -->

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                <a href="#">Healtcare</a>
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                <a href="#">Automotive</a>
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                <a href="#">Food and beverage</a>
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                <a href="#">Electronics</a>
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                <a href="#">Metals & Coal</a>
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                <a href="#">Building Materials</a>
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                <a href="#">Retail</a>
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                <a href="#">Consumer goods</a>
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                <a href="#">Chemicals</a>
                            </li>
                        </ul><!-- .fa-ul end -->
                    </div><!-- .col-md-4 end -->

                    <div class="col-md-4 col-sm-6 clearfix">
                        <div class="custom-heading">
                            <h3>our locations</h3>
                        </div><!-- .custom-heading end -->

                        <img src="img/pics/locations.jpg" alt=""/>

                        <br />

                        <p>
                            Trucking Co. covers over 150 locations all over the
                            globe plus numerous logistic partner companies from
                            different areas of supply chain.
                        </p>

                        <a class="read-more" href="locations.html">
                            <span>
                                view all locations
                                <i class="fa fa-map-marker"></i>
                            </span>
                        </a>
                    </div><!-- .col-md-4 end -->

                    <div class="col-md-4 col-sm-12">
                        <div class="custom-heading">
                            <h3>quick quote</h3>
                        </div><!-- .custom-heading end -->

                        <form class="wpcf7 shipping-quote clearfix">
                            <fieldset>
                                <label>Origin ZIP:</label>
                                <input type="text" id="tracking-origin" class="wpcf7-text">
                            </fieldset>

                            <fieldset>
                                <label>Destination ZIP:</label>
                                <input type="text" id="tracking-destination" class="wpcf7-text">
                            </fieldset>

                            <fieldset>
                                <label>Total weight:</label>
                                <input type="text" id="tracking-weight" class="wpcf7-text">
                            </fieldset>

                            <fieldset>
                                <label>No. of packages:</label>
                                <input type="text" id="tracking-packages" class="wpcf7-text">
                            </fieldset>

                            <fieldset>
                                <label>Your email:</label>
                                <input type="email" id="tracking-email" class="wpcf7-text">
                            </fieldset>

                            <input type="submit" value="get rate quote" class="submit">
                        </form>
                    </div><!-- .col-md-4 end -->
                </div><!-- .row end -->

                <div class="row">
                    <div class="col-md-5">
                        <div class="custom-heading">
                            <h2>WHY CHOOSE TRUCKING</h2>
                        </div><!-- .custom-heading end -->

                        <ul class="fa-ul large-icons">
                            <li>
                                <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                    <i class="fa fa-check-circle"></i>
                                </div>

                                <div class="li-content">
                                    <h3>Fast Worldwide delivery</h3>

                                    <p>
                                        From Europe to Asutralia, by air or sea?
                                        We offer fast, reliable and accurate
                                        worldwide delivery directly to your doors,
                                        factory and warehouses.
                                    </p>
                                </div><!-- .li-content end -->
                            </li>

                            <li>
                                <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                    <i class="fa fa-check-circle"></i>
                                </div>

                                <div class="li-content">
                                    <h3>End-to-end solution available</h3>

                                    <p>
                                        From 2015 Trucking offers new service -
                                        we are now offering end-to-end solutions
                                        using multiple transportation means and
                                        covering all supply chain from the origin
                                        to the destination.
                                    </p>
                                </div><!-- .li-content end -->
                            </li>

                            <li>
                                <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                    <i class="fa fa-check-circle"></i>
                                </div>

                                <div class="li-content">
                                    <h3>Safety & Compliance</h3>

                                    <p>
                                        Safety of your cargo is one of our top
                                        priorities. Every package is handled with
                                        most care by our trained and high skilled
                                        personnel. You can be sure that your cargo
                                        will travel and arrive safely.
                                    </p>
                                </div><!-- .li-content end -->
                            </li>
                        </ul><!-- .fa-ul .fa-ul-large end -->
                    </div><!-- .col-md-5 end -->

                    <div class="col-md-7 triggerAnimation animated" data-animate="fadeInRight">
                        <img src="img/pics/img34.jpg" alt="trucking"/>
                    </div><!-- .col-md-7 end -->
                </div><!-- .row end -->

                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="service-icon-center-boxed">
                            <div class="service-title">
                                <div class="icon-container">
                                    <img src="img/svg/pi-checklist-2.svg" alt=""/>
                                </div><!-- .icon-container end -->

                                <h4>Contract logistics</h4>
                            </div><!-- .service-title end -->

                            <p>
                                Need custom logistic service? We got it covered.
                                From overland, air, rail and sea transportation.
                                Fast, safe and accurate shipment provided all
                                over the globe.
                            </p>
                        </div><!-- .service-icon-center-boxed end -->

                    </div><!-- .col-md-4 end -->

                    <div class="col-md-4 col-sm-4">
                        <div class="service-icon-center-boxed">
                            <div class="service-title">
                                <div class="icon-container">
                                    <img src="img/svg/pi-globe-5.svg" alt=""/>
                                </div><!-- .icon-container end -->

                                <h4>Worldwide freight</h4>
                            </div><!-- .service-title end -->

                            <p>
                                trucking company offers the best logistics
                                services using all mens of supply chain. Use our
                                overland, ocean and air freight solutions for
                                shipment of your goods.
                            </p>
                        </div><!-- .service-icon-center-boxed end -->
                    </div><!-- .col-md-4 end -->

                    <div class="col-md-4 col-sm-4">
                        <div class="service-icon-center-boxed">
                            <div class="service-title">
                                <div class="icon-container">
                                    <img src="img/svg/pi-forklift-truck-4.svg" alt=""/>
                                </div><!-- .icon-container end -->

                                <h4>Warehousing</h4>
                            </div><!-- .service-title end -->

                            <p>
                                Trucking offers intelligent warehouse solution.
                                Lower your storage and good maintenance by using
                                our modern and intelligent warehouses. You can
                                see all locations on location page.
                            </p>
                        </div><!-- .service-icon-center-boxed end -->
                    </div><!-- .col-md-4 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->


        <div class="page-content parallax parallax01 dark mb-70">
            <div class="container">
                <div class="row">
                    <div class="custom-heading02">
                        <h2>Our services</h2>
                        <p>
                            More than just a trucking template
                        </p>
                    </div><!-- .custom-heading02 end -->
                </div><!-- .row end -->

                <div class="row mb-30">
                    <div class="col-md-6">
                        <div class="service-icon-left">
                            <div class="icon-container triggerAnimation animated" data-animate="zoomIn">
                                <img src="{{url('/')}}/img/svg/pi-checklist-2.svg" alt="checklist icon">
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h3>Contract logistics</h3>

                                <p>
                                    Need custom logistic service? We got it
                                    covered. From overland, air, rail and sea
                                    transportation. Fast, safe and accurate
                                    shipment provided all over the globe.
                                </p>
                            </div><!-- .service-details end -->
                        </div><!-- .service-icon-left end -->
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6">
                        <div class="service-icon-left">
                            <div class="icon-container triggerAnimation animated" data-animate="zoomIn">
                                <img src="{{url('/')}}/img/svg/pi-globe-5.svg" alt="globe icon">
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h3>Overland, Ocean and Air Freight</h3>

                                <p>
                                    trucking company offers the best logistics
                                    services using all mens of supply chain.
                                    Use our overland, ocean and air freight
                                    solutions for shipment of your goods.
                                </p>
                            </div><!-- .service-details end -->
                        </div><!-- .service-icon-left end -->
                    </div><!-- .col-md-6 end -->
                </div><!-- .row.mb-30 end -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="service-icon-left">
                            <div class="icon-container triggerAnimation animated" data-animate="zoomIn">
                                <img src="{{url('/')}}/img/svg/pi-forklift-truck-5.svg" alt="forklift truck icon">
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h3>Warehousing and Storage</h3>

                                <p>
                                    Trucking offers intelligent warehouse
                                    solution. Lower your storage and good
                                    maintenance by using our modern and
                                    intelligent warehouses. You can see all
                                    locations on location page.
                                </p>
                            </div><!-- .service-details end -->
                        </div><!-- .service-icon-left end -->
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6">
                        <div class="service-icon-left">
                            <div class="icon-container triggerAnimation animated" data-animate="zoomIn">
                                <img src="{{url('/')}}/img/svg/pi-touch-desktop.svg" alt="touch icon">
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h3>Consulting Services</h3>

                                <p>
                                    Don't know what mean of transportation
                                    would be right for you, or you need someone
                                    for full supply chain management? Please
                                    contact us. Our team of professionals will
                                    be happy to help.
                                </p>
                            </div><!-- .service-details end -->
                        </div><!-- .service-icon-left end -->
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content.parallax end -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="custom-heading">
                            <h2>board of directors</h2>
                        </div><!-- .custom-heading end -->

                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="team-member">
                                    <img src="{{url('/')}}/img/pics/team01.jpg" alt=""/>
                                    <div class="team-details">
                                        <h5>martha parker</h5>
                                        <p class="position">
                                            Company founder
                                        </p>
                                    </div><!-- .team-details end -->
                                </div><!-- .member end -->
                            </div><!-- .col-md-4 end -->

                            <div class="col-md-4 col-sm-4">
                                <div class="team-member">
                                    <img src="{{url('/')}}/img/pics/team02.jpg" alt=""/>
                                    <div class="team-details">
                                        <h5>jonathan blum</h5>
                                        <p class="position">
                                            Chief Technical Officer
                                        </p>
                                    </div><!-- .team-details end -->
                                </div><!-- .member end -->
                            </div><!-- .col-md-4 end -->

                            <div class="col-md-4 col-sm-4">
                                <div class="team-member">
                                    <img src="{{url('/')}}/img/pics/team03.jpg" alt=""/>
                                    <div class="team-details">
                                        <h5>tom beck</h5>
                                        <p class="position">
                                            Chief Operations Officer
                                        </p>
                                    </div><!-- .team-details end -->
                                </div><!-- .member end -->
                            </div><!-- .col-md-4 end -->
                        </div><!-- .row end -->
                    </div><!-- .col-md-9 end -->

                    <div class="col-md-3">
                        <div class="custom-heading">
                            <h2>join our team</h2>
                        </div><!-- .custom-heading end -->

                        <div class="promo-box promo-bkg01">
                            <h4>Drivers needed</h4>
                            <p>
                                We are hiring drivers and have 2 opened
                                positions. See what we offer and what we need
                                and apply today!
                            </p>

                            <a href="{{url('/')}}/driver-application.html" class="btn btn-medium btn-yellow">
                                <span>apply now</span>
                            </a>
                        </div><!-- .promo-box end -->
                    </div><!-- .col-md-3 end -->
                </div><!-- .row end -->
            </div><!-- .contaienr end -->
        </div><!-- .page-content end -->

        <div class="page-content custom-bkg bkg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-heading02 simple">
                            <h2>Clients & Awards</h2>
                        </div>
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel-container">
                            <div id="client-carousel" class="owl-carousel owl-carousel-navigation">
                                <div class="owl-item"><img src="{{url('/')}}/img/pics/client01.png" alt=""/></div>
                                <div class="owl-item"><img src="{{url('/')}}/img/pics/client02.png" alt=""/></div>
                                <div class="owl-item"><img src="{{url('/')}}/img/pics/client03.png" alt=""/></div>
                                <div class="owl-item"><img src="{{url('/')}}/img/pics/client04.png" alt=""/></div>
                                <div class="owl-item"><img src="{{url('/')}}/img/pics/client05.png" alt=""/></div>
                                <div class="owl-item"><img src="{{url('/')}}/img/pics/client06.png" alt=""/></div>
                            </div><!-- .owl-carousel.owl-carousel-navigation end -->
                        </div><!-- .carousel-container end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div id="footer-wrapper" class="footer-dark">
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <ul class="col-md-3 col-sm-6 footer-widget-container clearfix">
                            <!-- .widget.widget_text -->
                            <li class="widget widget_newsletterwidget">
                                <div class="title">
                                    <h3>newsletter subscribe</h3>
                                </div>

                                <p>
                                    Subscribe to our newsletter and we will
                                    inform you about newest projects and promotions.
                                </p>

                                <br />

                                <form class="newsletter">
                                    <input class="email" type="email" placeholder="Your email...">
                                    <input type="submit" class="submit" value="">
                                </form>
                            </li><!-- .widget.widget_newsletterwidget end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>quick links</h3>
                                </div>

                                <ul>
                                    <li><a href="{{url('/')}}/about01.html">About us</a></li>
                                    <li><a href="{{url('/')}}/company-history.html">Company history</a></li>
                                    <li><a href="{{url('/')}}/events.html">Company Events</a></li>
                                    <li><a href="{{url('/')}}/supply-chain-management.html">Supply chain management</a></li>
                                    <li><a href="{{url('/')}}/warehousing.html">Warehousing</a></li>
                                    <li><a href="{{url('/')}}/news-standard.html">Company news</a></li>
                                    <li><a href="{{url('/')}}/driver-application.html">Online driver application</a></li>
                                </ul>
                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>Industry solutions</h3>
                                </div>

                                <ul>
                                    <li><a href="{{url('/')}}/overland-transportation.html">Overland transportation</a></li>
                                    <li><a href="{{url('/')}}/air-freight.html">Air freight</a></li>
                                    <li><a href="{{url('/')}}/ocean-freight.html">Ocean freight</a></li>
                                    <li><a href="{{url('/')}}/large-projects.html">Large projects</a></li>
                                    <li><a href="{{url('/')}}/rail-transportation.html">Rail international shipping</a></li>
                                    <li><a href="{{url('/')}}/contract-logistics.html">Contract logistics</a></li>
                                    <li><a href="{{url('/')}}/packaging-options.html">Packaging options</a></li>
                                </ul>
                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <li class="widget widget-text">
                                <div class="title">
                                    <h3>contact us</h3>
                                </div>

                                <address>
                                    123 Second Street Fifth Avenue, <br />
                                    Manhattan, New York
                                </address>

                                <span class="text-big">
                                    +00 41 258 489 6587
                                </span>
                                <br />

                                <a href="{{url('/')}}/mailto:">info@trucking.com</a>
                                <br />
                                <ul class="footer-social-icons">
                                    <li><a href="{{url('/')}}/#" class="fa fa-facebook"></a></li>
                                    <li><a href="{{url('/')}}/#" class="fa fa-twitter"></a></li>
                                    <li><a href="{{url('/')}}/#" class="fa fa-google-plus"></a></li>
                                </ul><!-- .footer-social-icons end -->
                            </li><!-- .widget.widget-text end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </footer><!-- #footer end -->

            <div class="copyright-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>TRUCKING 2015. All RIGHTS RESERVED.</p>
                        </div><!-- .col-md-6 end -->

                        <div class="col-md-6">
                            <p class="align-right">DESIGNED AND DEVELOPED BY <a href="{{url('/')}}/www.pixel-industry.html">PIXEL INDUSTRY.</a> ELITE AUTHOR.</p>
                        </div><!-- .col-md-6 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div><!-- .copyright-container end -->

            <a href="{{url('/')}}/#" class="scroll-up">Scroll</a>
        </div><!-- #footer-wrapper end -->

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
