@extends('layouts.lp')
@section('page_css')

@endsection

@section('content')

<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    
    #myImg {
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
    }
    
    #myImg:hover {opacity: 0.7;}
    
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 300px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }
    
    /* Modal Content (image) */
    .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
    }
    
    /* Caption of Modal Image */
    #caption {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
      text-align: center;
      color: #ccc;
      padding: 10px 0;
      height: 150px;
    }
    
    /* Add Animation */
    .modal-content, #caption {  
      -webkit-animation-name: zoom;
      -webkit-animation-duration: 0.6s;
      animation-name: zoom;
      animation-duration: 0.6s;
    }
    
    @-webkit-keyframes zoom {
      from {-webkit-transform:scale(0)} 
      to {-webkit-transform:scale(1)}
    }
    
    @keyframes zoom {
      from {transform:scale(0)} 
      to {transform:scale(1)}
    }
    
    /* The Close Button */
    .close {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
    }
    
    .close:hover,
    .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
    }
    
    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
      .modal-content {
        width: 100%;
      }
    }
    </style>

    <!--begin::Container-->
    <div class="container">
        <!--begin::Page Layout-->
        <div class="d-flex flex-row">
            <!--begin::Layout-->
            <div class="flex-row-fluid ml-lg-8">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-body p-0">
                        <!-- begin: Invoice-->
                        <!-- begin: Invoice header-->
                        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                            <div class="col-md-10">
                                <div class="border-bottom w-100"> <h1 class="display-4 font-weight-boldest mb-10">{{$driver->fname}}'s APPLICATION DETAILS</h1></strong></div>
                                <div class="d-flex justify-content-between pt-6">
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">FIRST NAME</span>
                                        <span class="opacity-70">{{ $driver->fname}}</span>
                                    </div>
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">MIDDLE NAME</span>
                                        <span class="opacity-70">{{$driver->mname}}</span>
                                    </div>
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">LAST NAME</span>
                                        <span class="opacity-70">{{$driver->lname}}</span>
                                    </div>
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">DATE OF BIRTH</span>
                                        <span class="opacity-70">{{date('d M Y',strtotime($driver->dob))}}</span>
                                            </span>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                            <div class="col-md-10">
                                <div class="border-bottom w-100"></div>
                                <div class="d-flex justify-content-between pt-6">
                                
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">LICENSE ISSUED</span>
                                        <span class="opacity-70">{{date('d M Y',strtotime($driver->license_date))}}</span>
                                            </span>
                                    </div>
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">LICENSE TYPE</span>
                                            <span class="opacity-70">{{$driver->licence_type}}</span>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">EXPERIENCE YEARS</span>
                                        <span class="opacity-70">{{$driver->year_experience}}</span>
                                        </span>
                                    </div>

                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">PHONE NUMBER</span>
                                        <span class="opacity-70">{{$driver->phone_number}}</span>
                                            </span>
                                    </div>

                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">EMAIL</span>
                                        <span class="opacity-70">{{$driver->e_address}}</span>
                                            </span>
                                    </div>

                                </div>
                        </div>




                        <div class="row  py-8 px-8 py-md-10 px-md-0">
                            <div class="col-md-10">
                                <div class="border-bottom w-100"></div>
                                <div class="d-flex justify-content-between pt-6">
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">DRIVER's NIDA</span>
                                        <iframe src="{{url(Storage::url($driver->licence))}}" frameborder="0" height="440"></iframe>
                                       
                                       <!--  Modal --> 
                                       <div id="myModal" class="modal">
                                        <span class="close">&times;</span>
                                        <img class="modal-content" id="img01">
                                        <div id="caption"></div>
                                      </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="border-bottom w-100"></div>
                                <div class="d-flex justify-content-between pt-6">
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">DRIVER's NIDA</span>
                                        <iframe src="{{url(Storage::url($driver->licence))}}" frameborder="0" height="440"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="border-bottom w-100"></div>
                                <div class="d-flex justify-content-between pt-6">
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">DRIVER's NIDA</span>
                                       <iframe src="{{url(Storage::url($driver->licence))}}" frameborder="0" height="440"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        <!-- end: Invoice footer-->
                        <!-- begin: Invoice action-->
                        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                            <div class="col-md-10">
                                <div class="d-flex justify-content-between">
                                    <a href="mailto:{{$driver->e_address}}" type="button" class="btn btn-primary font-weight-bold" >Accept Driver</a>
                                    <button type="button" class="btn btn-success font-weight-bold" onclick="window.print();">Confirm Delivery</button>
                                    <a href="" type="button" class="btn btn-light-primary font-weight-bold">Complete Order</a>
                                </div>
                            </div>
                        </div>
                        <!-- end: Invoice action-->
                        <!-- end: Invoice-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Page Layout-->
    </div>
    <!--end::Container-->

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
        }
        </script>

@endsection

@section('page_js')

@endsection
