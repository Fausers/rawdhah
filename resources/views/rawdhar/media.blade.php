@extends('layouts.rawdhar')
@section('content')


<style>
    #myImg {
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
    }
    
    #myImg:hover {opacity: 0.8;}
    
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
      animation-name: zoom;
      animation-duration: 0.6s;
    }
    
    @keyframes zoom {
      from {transform: scale(0.1)} 
      to {transform: scale(1)}
    }
    
    /* The Close Button */
    .close {
      position: absolute;
      top: 100px;
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

        <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg04">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="color: rgb(184,172,8);">Vehicle fleet</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li style="color: rgb(184,172,8);">You are here:</li>
                                <li>
                                <a href="{{url('/')}}" style="color: rgb(184,172,8);">Home</a>
                                </li>
                                <li>
                                <li><a href="{{route('media')}}" style="color: rgb(184,172,8);">Media</a></li>
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
                    <div class="col-md-12">
                        <div class="custom-heading02">
                            <h2>Vehicle fleet</h2>
                            <p>
                                PROVIDING WIDE RANGE OF TRANSPORT SERVICES AND MEANS OF TRANSPORT
                            </p>
                        </div><!-- .custom-heading02 end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div class="page-content">
            <div class="container-fluid">
                <div class="row mb-0">
                    <ul class="vehicle-gallery clearfix">
                        <li class="col-md-3">
                            <figure class="gallery-item-container">                               
                                <div class="gallery-item">
                                    <img class="myImages" id="myImg" src="img/pics/img46.jpg" alt=""/>

                                   <!-- The Modal -->
                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
  
                                </div><!-- .service-item end -->

                                <figcaption>
                                    <h3>MAN MEGA 13.6</h3>
                                </figcaption>
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .gallery-item end -->

                        <li class="col-md-3">
                            <figure class="gallery-item-container">                               
                                <div class="gallery-item">
                                    <img class="myImages" id="myImg" src="img/pics/img47.jpg" alt=""/>

                                    
                                    <!-- The Modal -->
                                        
                                    <div id="myModal" class="modal">
                                        <span class="close">&times;</span>
                                        <img class="modal-content" id="img01">
                                        <div id="caption"></div>
                                    </div>
                                    
                                </div><!-- .service-item end -->

                                <figcaption>
                                    <h3>MAN JUMBO 15.2</h3>
                                </figcaption>
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .gallery-item end -->

                        <li class="col-md-3">
                            <figure class="gallery-item-container">                               
                                <div class="gallery-item">
                                    <img class="myImages" id="myImg" src="img/pics/img501.jpg" alt=""/>

                                   <!-- The Modal -->
                                        
                                   <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                </div><!-- .service-item end -->

                                <figcaption>
                                    <h3>SCANIA MEGA 12.4</h3>
                                </figcaption>
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .gallery-item end -->

                        <li class="col-md-3">
                            <figure class="gallery-item-container">                               
                                <div class="gallery-item">
                                    <img class="myImages" id="myImg" src="img/pics/img49.jpg" alt=""/>

                                    <!-- The Modal -->
                                        
                                   <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div><!-- .service-item end -->

                                <figcaption>
                                    <h3>MAN MEGA 13.6</h3>
                                </figcaption>
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .gallery-item end -->

                        <li class="col-md-3">
                            <figure class="gallery-item-container">                               
                                <div class="gallery-item">
                                    <img class="myImages" id="myImg" src="img/pics/img52.jpg" alt=""/>

                                     <!-- The Modal -->
                                        
                                   <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div><!-- .service-item end -->

                                <figcaption>
                                    <h3>SCANIA JUMBO 16.7</h3>
                                </figcaption>
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .gallery-item end -->

                        <li class="col-md-3">
                            <figure class="gallery-item-container">                               
                                <div class="gallery-item">
                                    <img class="myImages" id="myImg" src="img/pics/img53.jpg" alt=""/>

                                     <!-- The Modal -->
                                        
                                   <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div><!-- .service-item end -->

                                <figcaption>
                                    <h3>SCANIA MEGA 12.3</h3>
                                </figcaption>
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .gallery-item end -->

                        <li class="col-md-3">
                            <figure class="gallery-item-container">                               
                                <div class="gallery-item">
                                    <img class="myImages" id="myImg" src="img/pics/img18.jpg" alt=""/>

                                     <!-- The Modal -->
                                        
                                   <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div><!-- .service-item end -->

                                <figcaption>
                                    <h3>MAN MEGA 12.8</h3>
                                </figcaption>
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .gallery-item end -->

                        <li class="col-md-3">
                            <figure class="gallery-item-container">                               
                                <div class="gallery-item">
                                    <img class="myImages" id="myImg" src="img/pics/img20.jpg" alt=""/>

                                     <!-- The Modal -->
                                        
                                   <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div><!-- .service-item end -->

                                <figcaption>
                                    <h3>SCANIA JUMBO 15.4</h3>
                                </figcaption>
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .gallery-item end -->

                        <li class="col-md-3">
                            <figure class="gallery-item-container">                               
                                <div class="gallery-item">
                                    <img class="myImages" id="myImg" src="img/pics/img21.jpg" alt=""/>

                                     <!-- The Modal -->
                                        
                                   <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div><!-- .service-item end -->

                                <figcaption>
                                    <h3>MAN MEGA 14.3</h3>
                                </figcaption>
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .gallery-item end -->

                        <li class="col-md-3">
                            <figure class="gallery-item-container">                               
                                <div class="gallery-item">
                                    <img class="myImages" id="myImg" src="img/pics/img42.jpg" alt=""/>

                                     <!-- The Modal -->
                                        
                                   <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div><!-- .service-item end -->

                                <figcaption>
                                    <h3>SCANIA MEGA 12.3</h3>
                                </figcaption>
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .gallery-item end -->

                        

                                              
                    </ul><!-- #vehicle-gallery end -->
                </div><!-- .row end -->
            </div><!-- .container-fluid end -->
        </div><!-- .page-content end -->

        <div class="page-content parallax parallax01 dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="call-to-action clearfix">
                            <div class="text">
                                <h2>Want to become our driver? Apply Online!</h2>
                                <p>
                                    This is Trucking, powerful niche template 
                                    dedicated to logistics and trucking 
                                    companies. This is layout with Layered 
                                    slider. As you can see there are a lot of 
                                    design options. Simply choose the one that 
                                    suits your needs.
                                </p>                              
                            </div><!-- .text end -->

                            <a href="driver-application.html" class="btn btn-big">
                                <span>apply now</span>
                            </a>
                        </div><!-- .call-to-action end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content.parallax end -->

        <script>
           // create references to the modal...
            var modal = document.getElementById('myModal');

            // to all images -- note I'm using a class!
            var images = document.getElementsByClassName('myImages');

            // the image in the modal
            var modalImg = document.getElementById("img01");

            // and the caption in the modal
            var captionText = document.getElementById("caption");

            // Go through all of the images with our custom class
            for (var i = 0; i < images.length; i++) {
            var img = images[i];
            // and attach our click listener for this image.
            img.onclick = function(evt) {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }
            }

            var span = document.getElementsByClassName("close")[0];

            span.onclick = function() {
            modal.style.display = "none";
            }
        </script>
            

        <script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
        <script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
        <script src="js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->  
        <script src="js/jquery.magnific-popup.min.js"></script><!-- used for image lightbox -->
        <script src="js/portfolio.js"></script><!-- for portfolio -->
        <script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
        <script src="style-switcher/styleSwitcher.js"></script><!-- styleswitcher script -->
        <script src="js/include.js"></script><!-- custom js functions -->
    
    @endsection