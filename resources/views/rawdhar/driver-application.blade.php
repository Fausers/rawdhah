@extends('layouts.rawdhar')
@section('content')
<!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg15">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="color: rgb(248,233,16)">Become a part of our team</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li style="color: rgb(248,233,16)">You are here:</li>
                                <li>
                                    <a href="{{url('/')}}" style="color: rgb(248,233,16)">Home</a>
                                </li>
                                <li>
                                    <a href="{{route('driver')}}" style="color: rgb(248,233,16)">Online driver application</a>
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
                        <div class="custom-heading">
                            <h2>want to become our driver?</h2>
                        </div>

                        <img class="float-right" src="img/pics/img25.jpg" width="360" alt=""/>

                        <p style="text-align: justify">
                            From the people who work in administrative staff,
                            to our expert drivers, we make it our mission to provide our employees with 
                            the best training possible.<br>

                            This benefits our employees’ career development,
                            our ability to provide the highest standard in trucking, and your business goals.<br>

                            At Rawdhar Haulages, we have some of the best and most experienced drivers in the industry. 
                            They have the knowledge, skill, and support they need to ensure that they get the job done right
                            every time.

                            Want to work with us apply now.
                        </p>

                        <br />

                        <div class="custom-heading">
                            <h2>online driver application</h2>
                        </div><!-- .custom-heading end -->

                        <form class="wpcf7 driver-app-form clearfix" method="post" enctype="multipart/form-data" action="{{route('driverapplication')}}">
                           @method('post')
                            @csrf
                            <fieldset>
                                <label><span class="required">*</span> Driver first name:</label>

                                <input type="text" class="wpcf7-text" id="driver-name" name="fname" required>
                            </fieldset>

                            <fieldset>
                                <label><span class="required">*</span> Driver middle name:</label>

                                <input type="text" class="wpcf7-text" id="driver-last-name" name="mname" required>
                            </fieldset>

                            <fieldset>
                                <label><span class="required">*</span> Driver last name:</label>

                                <input type="text" class="wpcf7-text" id="driver-last-name" name="lname" required>
                            </fieldset>


                            <fieldset>
                                <label><span class="required mb-5">*</span> Your phone number:</label>

                                <input class="wpcf7-text" id="driver-phone" name="phone_number" required>
                            </fieldset>

                            <fieldset>
                                <label><span class="required">*</span> Your email address:</label>

                                <input class="wpcf7-text" id="driver-cell" name="e_address" required>
                            </fieldset>

                            <fieldset>
                                <label><span class="required">*</span> Years of experience:</label>

                                <input class="wpcf7-text" id="driver-experience" placeholder="Minimum 3..." name="year_experience" required>
                            </fieldset>

                            <fieldset>
                                <label><span class="required">*</span> Passport:</label>

                                <input type="file" class="wpcf7-text" id="driver-date-birth" placeholder="mm/dd/yy" name="passport" required>
                            </fieldset> 
                            <fieldset>
                                <label><span class="required">*</span> NIDA:</label>

                                <input type="file" class="wpcf7-text" id="driver-date-birth" placeholder="mm/dd/yy" name="nida" required>
                            </fieldset> 
                            <fieldset>
                                <label><span class="required">*</span> Driver licence:</label>

                                <input type="file" class="wpcf7-text" id="driver-date-birth" placeholder="mm/dd/yy" name="licence" required>
                            </fieldset>


                             <fieldset>
                                <label><span class="required">*</span> Driver date of birth:</label>

                                <input type="date" class="wpcf7-text" id="driver-date-birth" placeholder="mm/dd/yy" name="dob" required>
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

                                <input type="date" class="wpcf7-text" id="driver-licence-period" name="license_date" required>
                            </fieldset>

                            <fieldset>
                                <label><span class="required">*</span> Type of driver's licence:</label>
                              <input type="text" list="classes" class="wpcf7-text" id="driver-licence-type" name="licence_type" required>

                                <datalist id="classes" name="licence_type">
                                    <option value="A">
                                    <option value="A1">
                                    <option value="A2">
                                    <option value="A3">
                                    <option value="B">
                                    <option value="C">
                                    <option value="C1">
                                    <option value="C2">
                                    <option value="C3">
                                    <option value="D">
                                    <option value="E">
                                    <option value="F">
                                    <option value="G">
                                </datalist>


                            </fieldset>
                            
                            <input type="submit" class="wpcf7-submit" value="apply now" style="background-color: rgb(248,233,16)">
                        </form><!-- .wpcf7 end -->
                    </div><!-- .col-md-9 end -->
                </div><!-- .row end -->

            </div><!-- .container end -->
        </div><!-- .page-content end -->

@endsection
