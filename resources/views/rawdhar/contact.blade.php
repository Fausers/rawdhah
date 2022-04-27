@extends('layouts.rawdhar')
@section('content')

        <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg08">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="color: rgb(184,172,8);">Contact us</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>
                                    <a href="{{url('/')}}//" style="color: rgb(184,172,8);">Home</a>
                                </li>
                                <li>
                                <a href="{{route('contact')}}//" style="color: rgb(184,172,8);">Contacts</a>
                                </li>
                            </ul><!-- .breadcrumb end -->
                        </div><!-- .breadcrumb-container end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-title-style01.page-title-negative-top end -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-heading">
                            <h3>your inquiry</h3>
                        </div><!-- .custom-heading.left end -->

                        <p>
                            Do you want to improve your overland transport operations? Contact us and we will find the perfect solutions to your overland transport needs!
                            Want t work with us and know the price of our services.
                            Please fill the form below for more information.
                            We work 24/7 in a week.

                        </p>

                        <br />

                        <!-- .contact form start -->
                        <form class="wpcf7 clearfix" method="post" action="{{route('contactinfo')}}">
                            @method('post')
                            @csrf
                            <fieldset>
                                <label>
                                    <span class="required">*</span> Your request:
                                </label>

                                <select class="wpcf7-form-control-wrap wpcf7-select" id="contact-inquiry" name="inquiry">
                                    <option value="I need an offer for contract logistics">I need an offer for contract logistics</option>
                                    <option value="I need an offer for air freight">I need an offer for air freight</option>
                                    <option value="I want to become your partner">I want to become your partner</option>
                                    <option value="I have some other request">I have some other request</option>
                                </select>
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> First Name:
                                </label>

                                <input type="text" class="wpcf7-text" id="contact-name" name="first_name">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Last Name:
                                </label>

                                <input type="text" class="wpcf7-text" id="contact-last-name" name="last_name">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Email:
                                </label>

                                <input type="text" class="wpcf7-text" id="contact-email" name="email">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Message:
                                </label>

                                <textarea rows="8" class="wpcf7-textarea" id="contact-message" name="message"></textarea>
                            </fieldset>

                            <input type="submit" class="wpcf7-submit" value="send" />
                        </form><!-- .wpcf7 end -->
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6">
                        <div class="custom-heading">
                            <h3>Trucking headquarters</h3>
                        </div><!-- .custom-heading end -->

                        <div id="map"></div>


                        <div class="custom-heading">
                            <h4>company information</h4>
                        </div><!-- .custom-heading end -->

                        <address>
                            NHC HOUSE SAMORA AVENUE,<br/>
                            P.O.BOX 4872,<br/>
                            Dar es Salaam, Tanzania
                        </address>

                        <span >
                            <a class="text-big colored" href="tel: +255763926891">+255 763 926 891</a>
                        </span>
                        <br />

                        <a href="mailto:">rawdharhaulages@gmail.com</a>
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <script src="{{url('/')}}/js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
        <script src="{{url('/')}}/js/bootstrap.min.js"></script><!-- .bootstrap script -->
        <script src="{{url('/')}}/js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&key=AIzaSyAmyi8IIAUbw83uJbivHtqtf29cASvkpq4"></script> <!-- google maps -->
        <script src="{{url('/')}}/js/jquery.ui.map.full.min.js"></script><!-- google maps -->
        <script src="{{url('/')}}/js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
        <script src="{{url('/')}}/style-switcher/styleSwitcher.js"></script><!-- styleswitcher script -->
        <script src="{{url('/')}}/js/include.js"></script><!-- custom js functions -->


        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                // GOOGLE MAPS START
                window.marker = null;

                function initialize() {
                    var map;

                    var nottingham = new google.maps.LatLng(-6.818687, 39.287025);

                    var style = [
                        {"featureType": "road",
                            "elementType":
                                    "labels.icon",
                            "stylers": [
                                {"saturation": 1},
                                {"gamma": 1},
                                {"visibility": "on"},
                                {"hue": "#e6ff00"}
                            ]
                        },
                        {"elementType": "geometry", "stylers": [
                                {"saturation": -85}
                            ]
                        }
                    ];

                    var mapOptions = {
                        // SET THE CENTER
                        center: nottingham,
                        // SET THE MAP STYLE & ZOOM LEVEL
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        zoom: 15,
                        // SET THE BACKGROUND COLOUR
                        backgroundColor: "#eeeeee",
                        // REMOVE ALL THE CONTROLS EXCEPT ZOOM
                        panControl: true,
                        zoomControl: true,
                        mapTypeControl: true,
                        scaleControl: true,
                        streetViewControl: true,
                        overviewMapControl: true,
                        scrollwheel: false,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.SMALL
                        }

                    };
                    map = new google.maps.Map(document.getElementById('map'), mapOptions);

                    // SET THE MAP TYPE
                    var mapType = new google.maps.StyledMapType(style, {name: "Grayscale"});
                    map.mapTypes.set('grey', mapType);
                    map.setMapTypeId('grey');

                    //CREATE A CUSTOM PIN ICON
                    var marker_image = 'img/pin.png';
                    var pinIcon = new google.maps.MarkerImage(marker_image, null, null, null, new google.maps.Size(21, 34));

                    marker = new google.maps.Marker({
                        position: nottingham,
                        map: map,
                        icon: pinIcon,
                        title: 'Rawdhar Haulages'
                    });
                }

                google.maps.event.addDomListener(window, 'load', initialize);


            });
            /* ]]> */
        </script>
 @endsection
