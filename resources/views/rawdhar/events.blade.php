@extends('layouts.rawdhar')
@section('content')
  <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg09">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Trucking - Events</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>You are here:</li>
                                <li>
                                    <a href="{{url('/')}}//">Home</a>
                                </li>
                                <li>
                                    <a href="{{route('events')}}">Events</a>
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
                        <div class="nivo-wrapper">
                            <div id="slider-1" class="nivoSlider events-slider">
                                <img src="img/pics/img37.jpg" alt="image 1" title="#slider-caption-1"/>
                                <img src="img/pics/img27.jpg" alt="image 1" title="#slider-caption-1"/>
                                <img src="img/pics/history02.jpg" alt="image 1" title="#slider-caption-1"/>
                            </div><!-- #slider-1 end -->

                            <div id="slider-caption-1" class="nivo-caption">
                                <h4>New York Logistics summit <span class="text-base-color02"> MAY 05, 2015</span></h4>
                                <p>
                                    Join us on this years New York logistics
                                    summit that will be held for three days on
                                    Manhattan, the heart of the New York
                                    City. Learn about new trends in logistics.
                                </p>
                            </div><!-- .nivo-caption end -->
                        </div><!-- .nivo-wrapper end -->

                        <br />

                        <div class="custom-heading">
                            <h2>all events</h2>
                        </div><!-- .custom-heading end -->

                        <div class="table-responsive">
                            <table class="events-table">
                                <thead>
                                    <tr>
                                        <th>date</th>
                                        <th>event</th>
                                        <th>subject</th>
                                        <th>place</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="event-date">
                                            <p class="day">15</p>
                                            <p class="month">may</p>
                                        </td>

                                        <td>
                                            <h4>New York Logistics & Transportation Summit 2015</h4>
                                        </td>

                                        <td>
                                            <p>
                                                Intelligent Transportation Solution
                                            </p>

                                            <p>
                                                Overland transportation
                                            </p>
                                        </td>

                                        <td>
                                            5th Avenue, Manhattan, New York, USA
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="event-date">
                                            <p class="day">17</p>
                                            <p class="month">may</p>
                                        </td>

                                        <td>
                                            <h4>Florida Air Freight Annual Convention 2015</h4>
                                        </td>

                                        <td>
                                            <p>
                                                Intelligent Transportation Solution
                                            </p>

                                            <p>
                                                Air Freight
                                            </p>
                                        </td>

                                        <td>
                                            5th Avenue, Manhattan, New York, USA
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="event-date">
                                            <p class="day">21</p>
                                            <p class="month">may</p>
                                        </td>

                                        <td>
                                            <h4>Managing Supply Management Summit</h4>
                                        </td>

                                        <td>
                                            <p>
                                                Intelligent Transportation Solution
                                            </p>

                                            <p>
                                                Air Freight
                                            </p>
                                        </td>

                                        <td>
                                            5th Avenue, Manhattan, New York, USA
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="event-date">
                                            <p class="day">23</p>
                                            <p class="month">may</p>
                                        </td>

                                        <td>
                                            <h4>Europe Rail Logistics and Transport Solutions</h4>
                                        </td>

                                        <td>
                                            <p>
                                                Intelligent Transportation Solution
                                            </p>

                                            <p>
                                                Rail Logistics
                                            </p>
                                        </td>

                                        <td>
                                            Quebec, Montreal, Canada
                                        </td>
                                    </tr>
                                </tbody>
                            </table><!-- .events-table end -->
                        </div><!-- .table-responsive end -->
                    </div><!-- .col-md-9 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->
@endsection
