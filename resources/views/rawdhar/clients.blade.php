@extends('layouts.rawdhar')
@section('content')
<!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg09">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Trucking - Clients</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>You are here:</li>
                                <li>
                                    <a href="{{url('/')}}//">Home</a>
                                </li>


                                <li>
                                    <a href="{{route('clients')}}">Clients</a>
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
                    @include('rawdhar.partials.aside')

                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="custom-heading">
                                    <h2>our clients</h2>
                                </div><!-- .custom-heading end -->

                                <p>
                                    A wonderful serenity has taken possession of my
                                    entire soul, like these sweet mornings of spring
                                    which I enjoy with my whole heart.
                                </p>

                                <p>
                                    But I must explain to you how all this mistaken
                                    idea of denouncing pleasure and praising pain
                                    was born and I will give you a complete account
                                    of the system, and expound the actual teachings
                                    of the great explorer of the truth, the master
                                    -builder of human happiness.
                                </p>
                            </div><!-- .col-md-7 end -->

                            <div class="col-md-5 clearfix">
                                <div class="carousel-container">
                                    <div id="testimonial-carousel" class="owl-carousel owl-carousel-navigation">
                                        <div class="owl-item">
                                            <div class="testimonial">
                                                <p>
                                                    Best customer support and
                                                    response time I have ever seen...
                                                    not to mention a kick ass theme!
                                                    Great feeling from this purchase.
                                                    Thank you Pixel Industry!
                                                </p>

                                                <div class="testimonial-author">
                                                    <p>
                                                        TRAVIS COPLAND, <br />
                                                        Transport & Logistics Solutions
                                                    </p>
                                                </div><!-- .testimonial-author end -->
                                            </div><!-- .testimonial end -->
                                        </div><!-- .owl-item end -->

                                        <div class="owl-item">
                                            <div class="testimonial">
                                                <p>
                                                    Thanks for developing
                                                    products to help many people
                                                    to work as I do. Thank you!
                                                    Success for all! I did not
                                                    need to use the support,
                                                    this never happened to me.
                                                    Pocket Theme bought today
                                                    for another client, very
                                                    good too! Hug!
                                                </p>

                                                <div class="testimonial-author">
                                                    <p>
                                                        ADRIANOSP, <br />
                                                        Themeforest member
                                                    </p>
                                                </div><!-- .testimonial-author end -->
                                            </div><!-- .testimonial end -->
                                        </div><!-- .owl-item end -->

                                        <div class="owl-item">
                                            <div class="testimonial">
                                                <p>
                                                    We have several sites now
                                                    built in Elvyre across
                                                    several servers and have had
                                                    almost zero issues. The
                                                    documentation is great and
                                                    the featureset is phenomenal.
                                                    It is the best looking
                                                    pro-level and fairly easy-to-implement
                                                    advanced theme we are currently
                                                    regularly using. The end product
                                                    is great and easy to use and
                                                    configure. Highly recommended...
                                                </p>

                                                <div class="testimonial-author">
                                                    <p>
                                                        DIGITALMARKETINGASSOCIATES, <br />
                                                        Themeforest member
                                                    </p>
                                                </div><!-- .testimonial-author end -->
                                            </div><!-- .testimonial end -->
                                        </div><!-- .owl-item end -->
                                    </div><!-- #testimonial-carousel end -->
                                </div><!-- .carousel-container end -->
                            </div><!-- .col-md-5 end -->
                        </div><!-- .row end -->

                        <div class="custom-heading">
                            <h2>trucking logistics partners</h2>
                        </div><!-- .custom-heading end -->

                        <ul class="clients-li clearfix">
                            <li><img src="img/pics/client01.png" alt=""/></li>
                            <li><img src="img/pics/client02.png" alt=""/></li>
                            <li><img src="img/pics/client03.png" alt=""/></li>
                            <li><img src="img/pics/client04.png" alt=""/></li>
                            <li><img src="img/pics/client05.png" alt=""/></li>
                            <li><img src="img/pics/client06.png" alt=""/></li>
                            <li><img src="img/pics/client02.png" alt=""/></li>
                            <li><img src="img/pics/client03.png" alt=""/></li>
                            <li><img src="img/pics/client04.png" alt=""/></li>
                            <li><img src="img/pics/client05.png" alt=""/></li>
                            <li><img src="img/pics/client01.png" alt=""/></li>
                            <li><img src="img/pics/client02.png" alt=""/></li>
                            <li><img src="img/pics/client06.png" alt=""/></li>
                            <li><img src="img/pics/client04.png" alt=""/></li>
                            <li><img src="img/pics/client05.png" alt=""/></li>
                            <li><img src="img/pics/client02.png" alt=""/></li>
                            <li><img src="img/pics/client03.png" alt=""/></li>
                            <li><img src="img/pics/client01.png" alt=""/></li>
                        </ul><!-- .clients-li end -->
                    </div><!-- .col-md-9 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->
 @endsection
