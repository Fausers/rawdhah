@extends('layouts.rawdhar')
@section('content')

        <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg08">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact us</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>
                                    <a href="{{url('/')}}//">Home</a>
                                </li>
                                <li>
                                <a href="{{route('contact')}}//">Contacts</a>
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
                            Cozy sphinx waves quart jug of bad milk. A very bad 
                            quack might jinx zippy fowls. Few quips galvanized 
                            the mock jury box. Quick brown dogs jump over the 
                            lazy fox. The jay, pig, fox, zebra, and my wolves 
                            quack! Blowzy red vixens fight for a quick jump. 
                            Joaquin Phoenix was gazed by MTV for luck. A 
                            wizard’s job is to vex chumps quickly in fog. Watch 
                            "Jeopardy!", Alex Trebek's fun TV quiz game. 
                            Woven silk pyjamas exchanged for blue quartz. 
                            Brawny gods just.
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

                                <select class="wpcf7-form-control-wrap wpcf7-select" id="contact-inquiry">
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

                        <span class="text-big colored">
                            +255 623 696 105
                        </span>
                        <br />

                        <a href="mailto:">rawdharhaulages@gmail.com</a>
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                // GOOGLE MAPS START
                window.marker = null;

                function initialize() {
                    var map;

                    var nottingham = new google.maps.LatLng(52.934658, -1.131450);

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
                        zoom: 9,
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
                        title: 'Trucking Headquarters, Nothingham'
                    });
                }

                google.maps.event.addDomListener(window, 'load', initialize);

                // CONTACT FORM AJAX SUBMIT START
                $('.wpcf7 .wpcf7-submit').on('click', function (event) {
                    event.preventDefault();
                    var inquiry = $('#contact-inquiry option:selected').text();
                    var name = $('#contact-name').val();
                    var lastname = $('#contact-last-name').val();
                    var email = $('#contact-email').val();
                    var contact_message = $('#contact-message').val();
                    var form_data = new Array({'inquiry': inquiry, 'name': name, 'last_name': lastname, 'email': email, 'message': contact_message});
                    $.ajax({
                        type: 'POST',
                        url: "contact.php",
                        data: ({'action': 'contact', 'form_data': form_data})
                    }).done(function (data) {
                        alert(data);
                    });
                }); // CONTACT FORM AJAX SUBMIT END

            });
            /* ]]> */
        </script>
 @endsection