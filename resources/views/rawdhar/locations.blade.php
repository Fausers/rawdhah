@extends('layouts.rawdhar')
@section('content')

<div id="map" style="height: 1467px"></div>

<script src="{{url('/')}}/js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="{{url('/')}}/js/bootstrap.min.js"></script><!-- .bootstrap script -->
<script src="{{url('/')}}/js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->  
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> <!-- google maps -->
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
            //var map;

        var center = {lat: 41.8781, lng: -87.6298};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: center
        });


           var nottingham = new google.maps.LatLng(-6.818361, 39.286936);

            var locations = [
                ['Rawdhar Haulages', -6.825225, 39.231341],
                ['Rawdhar Haulages', -6.818361, 39.286936],
                
            ];


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
            var infowindow =  new google.maps.InfoWindow({});
            var marker, count;
            for (count = 0; count < locations.length; count++) {
                marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[count][1], locations[count][2]),
                map: map,
                title: locations[count][0]
                });
            google.maps.event.addListener(marker, 'click', (function (marker, count) {
                return function () {
                    infowindow.setContent(locations[count][0]);
                    infowindow.open(map, marker);
                }
                })(marker, count));
            }

           
        }

        google.maps.event.addDomListener(window, 'load', initialize);

        
    });
    /* ]]> */
</script>

@endsection