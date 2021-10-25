 @extends('layouts.rawdhar')
@section('content')
 <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg07">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Services - Project Logistics</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>You are here:</li>
                                <li>
                                    <a href="{{url('/')}}//">Home</a>
                                </li>
                                <li>
                                    <a href="{{route('services')}}">Services</a>
                                </li>

                                <li>
                                    <a href="{{route('large-projects')}}">Large Projects</a>
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
                            <div class="col-md-12">
                                <div class="custom-heading">
                                    <h3>project logistics</h3>
                                </div><!-- .custom-heading end -->

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
                                    These cases are perfectly simple and easy
                                    to distinguish. In a free hour, when our
                                    power of choice is untrammelled and when
                                    nothing prevents our being able to do what
                                    we like best, every pleasure is to be
                                    welcomed and every pain avoided. But in
                                    certain circumstances and owing to the
                                    claims of duty or the obligations of
                                    business it will frequently occur that
                                    pleasures have to be repudiated and
                                    annoyances accepted. The wise man therefore
                                    always holds in these matters to this
                                    principle of selection: he rejects pleasures
                                    to secure other greater pleasures, or else
                                    he endures pains to avoid worse pains.
                                </p>
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->

                        <div class="row">
                            <div class="col-md-5">
                                <img src="img/pics/img31.jpg" alt=""/>
                            </div><!-- .col-md-5 end -->

                            <div class="col-md-7">
                                <h3>Wherever you need it!</h3>

                                <p>
                                    A wonderful serenity has taken possession
                                    of my entire soul, like these sweet mornings
                                    of spring which I enjoy with my whole heart.
                                </p>

                                <p>
                                    "But I must explain to you how all this
                                    mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you
                                    a complete account of the system, and
                                    expound the actual teachings of the great
                                    explorer of the truth, the master-builder
                                    of human happiness.
                                </p>
                            </div><!-- .col-md-7 end -->
                        </div><!-- .row end -->

                        <div class="row">
                            <div class="col-md-8">
                                <h3>International Project Logistics</h3>

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
                            </div><!-- .col-md-8 end -->

                            <div class="col-md-4">
                                <img src="img/pics/img29.jpg" alt=""/>
                            </div><!-- .col-md-4 end -->
                        </div><!-- .row end -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="custom-heading">
                                    <h3>industries covered</h3>
                                </div><!-- .custom-heading end -->

                                <ul class="service-list-big-icons">
                                    <li>
                                        <div class="icon-container">
                                            <img src="img/svg/pi-cargo-retail.svg" alt="retail svg icon"/>
                                        </div>

                                        <h4>Textile Logistics</h4>
                                    </li>

                                    <li>
                                        <div class="icon-container">
                                            <img src="img/svg/pi-food-beverage.svg" alt="food and beverage svg icon"/>
                                        </div>

                                        <h4>Retail Logistics</h4>
                                    </li>

                                    <li>
                                        <div class="icon-container">
                                            <img src="img/svg/pi-mark-energy.svg" alt="retail svg icon"/>
                                        </div>

                                        <h4>Oil & Gas Logistics</h4>
                                    </li>
                                </ul><!-- .service-list-big-icons end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .col-md-9 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->
@endsection
