@extends('layouts.rawdhar')
@section('content')
  <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg13">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Services - Ocean freight</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>You are here:</li>
                                <li>
                                    <a href="{{url('/')}}//">Home</a>
                                </li>
                                <li>
                                    <a href="services02.html">Services</a>
                                </li>

                                <li>
                                    <a href="#">Consulting services</a>
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
                    @include('rawdhar.partials.services_aside')

                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="img/pics/img40.jpg" alt=""/>
                            </div><!-- .col-md-4 end -->

                            <div class="col-md-7">
                                <div class="custom-heading">
                                    <h2>consulting services</h2>
                                </div>

                                <p>
                                    On the other hand, we denounce with
                                    righteous indignation and dislike men who
                                    are so beguiled and demoralized by the
                                    charms of pleasure of the moment, so blinded
                                    by desire, that they cannot foresee the
                                    pain and trouble that are bound to ensue;
                                    and equal blame belongs to those who fail
                                    in their duty through weakness of will,
                                    which is the same as saying through
                                    shrinking from toil and pain.
                                </p>

                                <p>
                                    These cases are perfectly simple and easy to
                                    distinguish. In a free hour, when our power
                                    of choice is untrammelled and when nothing
                                    prevents our being able to do what we like
                                    best, every pleasure is to be welcomed and
                                    every pain avoided. But in certain
                                    circumstances and owing to the claims of
                                    duty or the obligations of business it will
                                    frequently occur that pleasures have to be
                                    repudiated and annoyances accepted. The wise
                                    man therefore always holds in these matters
                                    to this principle of selection: he rejects
                                    pleasures to secure other greater pleasures,
                                    or else he endures pains to avoid worse
                                    pains.
                                </p>
                            </div><!-- .col-md-5 end -->
                        </div><!-- .row end -->

                        <div class="row">
                            <div class="col-md-5">
                                <h3>Efficient supply chain</h3>

                                <p>
                                    A wonderful serenity has taken possession
                                    of my entire soul, like these sweet mornings
                                    of spring which I enjoy with my whole heart.
                                    "But I must explain to you how all this
                                    mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you
                                    a complete account of the system, and
                                    expound the actual teachings of the great
                                    explorer of the truth, the master-builder
                                    of human happiness.
                                </p>

                                <ul class="fa-ul">
                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Providing high quality transportation services to all of our clients
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Invest in our employees to provide better service and company growth
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Worry about enviroment according to latest industry standards
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Safety as top priority in assuring safe work procedures
                                    </li>
                                </ul><!-- .fa-ul end -->
                            </div><!-- .col-md-4 end -->

                            <div class="col-md-7 custom-bkg bkg-light-blue">
                                <div class="custom-heading">
                                    <h3>your benefits</h3>
                                </div><!-- .custom-heading end -->

                                <p>
                                    But in certain circumstances and owing to the
                                    claims of duty or the obligations of business it
                                    will frequently occur that pleasures have to be
                                    repudiated and annoyances accepted. The wise man
                                    therefore always holds in these matters to this
                                    principle of selection: he rejects pleasures to
                                    secure other greater pleasures, or else he endures
                                    pains to avoid worse pains.
                                </p>

                                <ul class="fa-ul">
                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Higher quality service by optimizing transport
                                        routes, means of transportation and reducing costs
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Strong optimized supply chain infrastructure
                                        that will make a competitive advantage to your business
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Synchronized demand and supply which will enable
                                        easier and more accurate predictions of your
                                        clients needs
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Effective quality measurement and monitoring
                                        will enable you to reduce costs and optimize your business.
                                    </li>
                                </ul><!-- .fa-ul end -->
                            </div><!-- .col-md-6 end -->
                        </div><!-- .row end -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="custom-heading">
                                    <h3>other services</h3>
                                </div><!-- .custom-heading end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->

                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="service-feature-box">
                                    <div class="service-media">
                                        <img src="img/pics/img01.jpg" alt="Trucking"/>

                                        <a href="{{route('ground')}}" class="read-more02">
                                            <span>
                                                Read more
                                                <i class="fa fa-chevron-right"></i>
                                            </span>
                                        </a>
                                    </div><!-- .service-media end -->

                                    <div class="service-body">
                                        <div class="custom-heading">
                                            <h4>GROUND SHIPPING</h4>
                                        </div><!-- .custom-heading end -->

                                        <p>
                                            We have a wide experience in overland
                                            industry specific logistic solutions like
                                            pharmaceutical logistics, retail and
                                            automotive logistics by train or road.
                                        </p>
                                    </div><!-- .service-body end -->
                                </div><!-- .service-feature-box-end -->
                            </div><!-- .col-md-4 end -->

                            <div class="col-md-4 col-sm-4">
                                <div class="service-feature-box">
                                    <div class="service-media">
                                        <img src="img/pics/img02.jpg" alt="Trucking"/>

                                        <a href="{{route('large_projects')}}" class="read-more02">
                                            <span>
                                                Read more
                                                <i class="fa fa-chevron-right"></i>
                                            </span>
                                        </a>
                                    </div><!-- .service-media end -->

                                    <div class="service-body">
                                        <div class="custom-heading">
                                            <h4>LARGE PROJECTS</h4>
                                        </div><!-- .custom-heading end -->

                                        <p>
                                            We bring your goods safely to worldwide
                                            destinations with our great sea fright
                                            services. We offer LLC and FLC shipments
                                            that are fast and effective with no delays.
                                        </p>
                                    </div><!-- .service-body end -->
                                </div><!-- .service-feature-box-end -->
                            </div><!-- .col-md-4 end -->

                            <div class="col-md-4 col-sm-4">
                                <div class="service-feature-box">
                                    <div class="service-media">
                                        <img src="img/pics/img14.jpg" alt="Trucking"/>

                                        <a href="{{route('warehousing')}}" class="read-more02">
                                            <span>
                                                Read more
                                                <i class="fa fa-chevron-right"></i>
                                            </span>
                                        </a>
                                    </div><!-- .service-media end -->

                                    <div class="service-body">
                                        <div class="custom-heading">
                                            <h4>WAREHOUSING</h4>
                                        </div><!-- .custom-heading end -->

                                        <p>
                                            We provide full supply chain management
                                            package including cost effective and fast
                                            sea freight. You can also combine this
                                            package with other means of transportation.
                                        </p>
                                    </div><!-- .service-body end -->
                                </div><!-- .service-feature-box-end -->
                            </div><!-- .col-md-4 end -->
                        </div><!-- .row end -->
                    </div><!-- .col-md-9 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

@endsection
