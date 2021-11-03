
@extends('layouts.rawdhar')
@section('content')



        <!-- .page-title start -->
           <div class="page-title-style01 page-title-negative-top pt-bkg02">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="color: yellow">Trucking - Global Logistics Solutions</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li style="color: yellow">You are here:</li>

                                <li>
                                    <a href="{{url('/')}}" style="color: yellow">Home</a>
                                </li>

                                <li>
                                    <a href="{{route('about')}}" style="color: yellow">About</a>
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
                            <h2>About Us</h2>
                        </div><!-- .custom-heading end -->

                        <p>
                        Rawdhar Haulages Limited is a recognized internationally as one
                        of the best freight logistics companies in Tanzania. We provide
                        multitude of services which meet several demands of your
                        business in Logistics department.
                        </p>

                        <p>
                        Out of all the Tanzania logistics companies, being in the business
                        for about ten years has given an extra edge to Freights. We have
                        an extensive client base in more than five countries across the
                        world. We perfectly understand every unique logistic need of
                        different clients and make sure that perfect service is delivered to
                        you.
                            
                        </p>
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6 animated triggerAnimation" data-animate="zoomIn">
                        <img src="img/pics/img1.jpg" alt=""/>
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div class="page-content parallax parallax04 dark mb-70">
            <!-- the parallax04 will be replaced with the actual photo of rawdhar haulage car -->
            <div class="container">
                <div class="row center">

                    <div class="col-md-12">
                        <div class="custom-heading centered">
                          <h2 style="color: yellow">our mission</h2>
                        </div><!-- .custom-heading end -->
                        <div class="col-md-push-12 text-center">
                            <p>
                            At Rawdhar Haulages Limited we deliver a positive, reliable
                            experience to our clients while offering exceptional value in the
                            marketplace and setting the standard for professionalism in the
                            logistic solutions we provide. In addition to operating our
                            business profitably, we strive to operate it responsibly both for
                            our clients and our employees.
                        </p>
                        </div>

                    </div><!-- .col-md-6 end -->


                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content.custom-bkg end -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="custom-heading02">
                        <h2>Our core values</h2>
                        <p>THE THING THAT MAKES US DIFFERENT</p>
                    </div>
                </div><!-- .row end -->

                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="service-icon-center">
                            <div class="icon-container">
                                <i class="fa fa-graduation-cap"></i>
                            </div>

                            <h4>Fast Movement</h4>

                            <p>
                                Cargo deliver at time with insured safety and security. 
                            </p>
                        </div><!-- .service-icon-center end -->
                    </div><!-- .col-md-3 end -->

                    <div class="col-md-3 col-sm-6">
                        <div class="service-icon-center">
                            <div class="icon-container">
                                <i class="fa fa-cogs"></i>
                            </div>

                            <h4>Latest Technology</h4>

                            <p>
                                You can keep track of your Cargo location at any time if you shp with us.
                            </p>
                        </div><!-- .service-icon-center end -->
                    </div><!-- .col-md-3 end -->

                    <div class="col-md-3 col-sm-6">
                        <div class="service-icon-center">
                            <div class="icon-container">
                                <i class="fa fa-cubes"></i>
                            </div>

                            <h4>Safety & Quality</h4>

                            <p>
                            We ensure safety to your Cargo through use of quality equipments and 
                                with skilled drivers.
                            </p>
                        </div><!-- .service-icon-center end -->
                    </div><!-- .col-md-3 end -->

                    <div class="col-md-3 col-sm-6">
                        <div class="service-icon-center">
                            <div class="icon-container">
                                <i class="fa fa-tree"></i>
                            </div>

                            <h4>Care for Environment</h4>

                            <p>
                          We care the enviroment through choosing routes that improve our eficiency.
                            </p>
                        </div><!-- .service-icon-center end -->
                    </div><!-- .col-md-3 end -->
                </div><!-- .row end -->


            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div class="page-content parallax parallax01 dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="call-to-action clearfix">
                            <div class="text">
                                <h2>Providing first class logistics services in East and Southern Africa.</h2>
                                <p>
                                    This is Trucking, powerful niche template
                                    dedicated to logistics and trucking
                                    companies. This is layout with Layered
                                    slider. As you can see there are a lot of
                                    design options. Simply choose the one that
                                    suits your needs.
                                </p>
                            </div><!-- .text end -->

                            <a href="{{url('/')}}" class="btn btn-big">
                                <span>get a quote</span>
                            </a>
                        </div><!-- .call-to-action end -->
                    </div><!-- .col-md-12 end -->
                    
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content.parallax end -->



    @include('rawdhar.partials.ourclients')
        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                function equalHeight() {
                    $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function () {
                        var maxHeight = $(this).outerHeight();
                        $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
                    });
                };

                $(document).ready(equalHeight);
                $(window).resize(equalHeight);



        </script>
    </body>

@endsection
