@extends('layouts.rawdhar')
@section('content')
<!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg15">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Become a part of our team</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>You are here:</li>
                                <li>
                                    <a href="{{url('/')}}//">Home</a>
                                </li>
                                <li>
                                    <a href="{{route('driver')}}">Online driver application</a>
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
                    <aside class="col-md-3 aside aside-left">
                        <ul class="aside-widgets">
                            <li class="widget widget_nav_menu clearfix">
                                <div class="title">
                                    <h3>company</h3>
                                </div>

                                <ul class="menu">

                                    <li class="menu-item">
                                        <a href="{{route('about')}}">About us</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="company-history.html">Company history</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="events.html">Company Events</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="clients.html">Company clients</a>
                                    </li>

                                    <li class="menu-item current-menu-item">
                                        <a href="driver-application.html">Online driver application</a>
                                    </li>
                                </ul><!-- .menu end -->
                            </li><!-- .widget.widget_nav_menu end -->

                            <!-- .widget.widget-text start -->
                            <li class="widget widget-text">
                                <div class="title">
                                    <h3><a href="{{route('contact')}}"> contact us </a> </h3>
                                </div>

                                <img src="img/pics/locations.jpg" alt="contact us"/>

                                <br />

                                <p>
                                    Let us know what can we do for you. Contact
                                    us today!
                                </p>

                                <a href="contact-simple.html" class="read-more">
                                    <span>
                                        Contact us
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </li><!-- .widget-text end -->
                        </ul><!-- .aside-widgets end -->
                    </aside><!-- .aside.aside-left end -->

                    <div class="col-md-9">
                        <div class="custom-heading">
                            <h2>want to become our driver?</h2>
                        </div>

                        <img class="float-right" src="img/pics/img25.jpg" width="360" alt=""/>

                        <p>
                            I throw myself down among the tall grass by the
                            trickling stream; and, as I lie close to the earth,
                            a thousand unknown plants are noticed by me: when I
                            hear the buzz of the little world among the stalks,
                            and grow familiar with the countless indescribable
                            forms of the insects and flies, then I feel the
                            presence of the Almighty, who formed us in his own
                            image, and the breath.
                            On the other hand, we denounce with righteous
                            indignation and dislike men who are so beguiled and
                            demoralized by the charms of pleasure of the moment,
                            so blinded by desire, that they cannot foresee the
                            pain and trouble that are bound to ensue; and equal
                            blame belongs to those who fail in their duty.
                        </p>

                        <br />

                        <div class="custom-heading">
                            <h2>online driver application</h2>
                        </div><!-- .custom-heading end -->

                        <form class="wpcf7 driver-app-form clearfix">
                            <fieldset>
                                <label><span class="required">*</span> Driver first name:</label>

                                <input type="text" class="wpcf7-text" id="driver-name">
                            </fieldset>

                            <fieldset>
                                <label><span class="required">*</span> Driver middle name:</label>

                                <input type="text" class="wpcf7-text" id="driver-last-name">
                            </fieldset>

                            <fieldset>
                                <label><span class="required">*</span> Driver last name:</label>

                                <input type="text" class="wpcf7-text" id="driver-last-name">
                            </fieldset>

                            <fieldset>
                                <label><span class="required">*</span> Driver date of birth:</label>

                                <input type="text" class="wpcf7-text" id="driver-date-birth" placeholder="mm/dd/yy">
                            </fieldset>

                      <!--      <fieldset>
                                <label><span class="required">*</span> You are:</label>

                                <select class="wpcf7-select" id="driver-type">
                                    <option value="Owner">Owner</option>
                                    <option value="Company driver">Company driver</option>
                                </select>
                            </fieldset> -->

                            <fieldset>
                                <label><span class="required">*</span> Driver's license date issued:</label>

                                <input class="wpcf7-text" id="driver-licence-period">
                            </fieldset>

                            <fieldset>
                                <label><span class="required">*</span> Type of driver's licence:</label>

                                <input class="wpcf7-text" id="driver-licence-type">
                            </fieldset>

                            <fieldset>
                                <label><span class="required">*</span> Your phone number:</label>

                                <input class="wpcf7-text" id="driver-phone">
                            </fieldset>

                            <fieldset>
                                <label><span class="required">*</span> Your email address:</label>

                                <input class="wpcf7-text" id="driver-cell">
                            </fieldset>

                            <fieldset>
                                <label><span class="required">*</span> Years of experience:</label>

                                <input class="wpcf7-text" id="driver-experience" placeholder="Minimum 3...">
                            </fieldset>

                            <input type="submit" class="wpcf7-submit" value="apply now">
                        </form><!-- .wpcf7 end -->
                    </div><!-- .col-md-9 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

@endsection
