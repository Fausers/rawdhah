@extends('layouts.rawdhar')
@section('content')

    <body>

        <div id="masterslider" class="master-slider ms-skin-default">
            <!-- first slide -->
            <div class="ms-slide" style="height: 798px">
                <!-- slide background -->
                <img src="{{url('/')}}/img/truck/imgtruck.jpeg" data-src="{{url('/')}}/img/truck/fronttruck1.jpeg" alt="Video slider"/>



                <video data-autopause="false" data-mute="false" data-loop="true" data-fill-mode="fill" class="ms-slide-bgvideo"
                       muted="muted" style="left: 0; top:0;">
                    <source src="{{url('/')}}/vid/truck.mp4" type="video/mp4">
                    {{--<source src="{{url('/')}}/http://www.pixel-industry.com/html/trucking/Truck_Driving_on_Country_Road.webm" type="video/webm">--}}
                    {{--<source src="{{url('/')}}/http://www.pixel-industry.com/html/trucking/Truck_Driving_on_Country_Road.ogg" type="video/ogg">--}}
                </video>

                <h2 class="ms-layer pi-caption01"
                    style="left: 58px; top: 420px; color:rgb(184,172,8);"
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
                   style="left: 395px; top: 500px; color:rgb(184,172,8);"
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
                     data-src="{{url('/')}}/img/truck/fronttruck1.jpeg" alt="Worldwide freight services" style="height: 100%"/>


                <h2 class="ms-layer pi-caption01"
                    style="left: 258px; top: 420px; color:rgb(184,172,8);"
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
                   style="left: 278px; top: 500px; color: rgb(184,172,8);"
                   data-type="text"
                   data-effect="top(short)"
                   data-duration="300"
                   data-hide-effect="fade"
                   data-delay="300"
                   >
                    We got it covered!
                </p>
            </div><!-- .ms-slide end -->

             <!-- slide start -->
             <div class="ms-slide">
                <!-- slide background -->
                <img src="{{url('/')}}/masterslider/blank.gif"
                     data-src="{{url('/')}}/img/truck/fronttruck2.jpeg" alt="Worldwide freight services" style="height: 100%"/>


                <h2 class="ms-layer pi-caption01"
                    style="left: 258px; top: 420px; color:rgb(184,172,8);"
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
                   style="left: 278px; top: 500px; color: rgb(184,172,8);"
                   data-type="text"
                   data-effect="top(short)"
                   data-duration="300"
                   data-hide-effect="fade"
                   data-delay="300"
                   >
                    We got it covered!
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
                                <a href="#">Retail</a>
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                <a href="#">Health care</a>
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                <a href="#">Automotive</a>
                            </li>



                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                <a href="#">Chemicals</a>
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
                                <a href="#">Consumer goods</a>
                            </li>

                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                <a href="#">Food and beverage</a>
                            </li>

                             <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                <a href="#">Industrial Equipment</a>
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
                            Rawdhar Haulages,covers East and Southeastern Africa countries.
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

                        <form class="wpcf7 shipping-quote clearfix" method="post" action="{{route('quoteinfo')}}">
                            @method('post')
                            @csrf
                            <fieldset>
                                <label>Loading point:</label>
                                <input type="text" id="tracking-origin" class="wpcf7-text" name="loading_point">
                            </fieldset>

                            <fieldset>
                                <label>Destination ZIP:</label>
                                <input type="text" id="tracking-destination" class="wpcf7-text" name="destination_zip">
                            </fieldset>

                            <fieldset>
                                <label>Sector:</label>
                                <input type="text" list="classes" id="tracking-weight" class="wpcf7-text" name="sector">

                                <datalist id="classes" name="sector">
                                    <option value="Automotive">
                                    <option value="Building materials">
                                    <option value="Chemicals">
                                    <option value="Consumer goods">
                                    <option value="Electronics">
                                    <option value="Food and beverage">
                                    <option value="Health care">
                                    <option value="Industrial Equipment">
                                    <option value="Metals & Coal">
                                    <option value="Retail">
                                </datalist>
                            </fieldset>

                            <fieldset>
                                <label>Company name</label>
                                <input type="text" id="tracking-weight" class="wpcf7-text" name="company_name">
                            </fieldset>

                            <fieldset>
                                <label>Total weight:</label>
                                <input type="text" id="tracking-weight" class="wpcf7-text" name="total_weight">
                            </fieldset>


                            <fieldset>
                                <label>Phone number</label>
                                <input type="text" id="tracking-packages" class="wpcf7-text" name="phone_number">
                            </fieldset>

                            <fieldset>
                                <label>Your email:</label>
                                <input type="email" id="tracking-email" class="wpcf7-text" name="email">
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
                                    <h3>Quality transportation</h3>

                                    <p>
                                        The moving freight proces can be delicate for your Cargo.
                                        We have quality equipments operators and skilled drivers
                                        to ensure your Cargo reach the destination in time with the same standard.

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

                                        We are now offering end-to-end solutions
                                        using ground transportation means from the loading point
                                        to the destination point through trusted routes.

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
                        <img src="img/pics/img34.jpg" alt="Trucking"/>
                    </div><!-- .col-md-7 end -->
                </div><!-- .row end -->


            </div><!-- .container end -->
        </div><!-- .page-content end -->


        <div class="page-content parallax parallax02 dark mb-70">
            <div class="container">
                <div class="row">
                    <div class="custom-heading02">
                        <h2>Our services</h2>
                        <p>
                            More than just a trucking
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
                                    covered. Fast, safe and accurate
                                    shipment provided in East and Southeastern Africa.
                                </p>
                            </div><!-- .service-details end -->
                        </div><!-- .service-icon-left end -->
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6">
                        <div class="service-icon-left">
                            <div class="icon-container triggerAnimation animated" data-animate="zoomIn">
                                <img src="img/svg/pi-truck-8.svg" alt="globe icon">
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h3>Land Transportation</h3>

                                <p>
                                Trucking company offers the best logistics
                                services using quality trucks. Use our
                                overland freight solution for
                                shipment of your goods.
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
                                <h3>Large Projects</h3>

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
                                    would be right for you? Please
                                    contact us. Our team of professionals will
                                    be happy to help.
                                </p>
                            </div><!-- .service-details end -->
                        </div><!-- .service-icon-left end -->
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content.parallax end -->
        @include('rawdhar.partials.ourclients')




    </body>


@endsection
