<!-- Mirrored from pixel-industry.com/html/trucking/index03.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Oct 2021 15:01:06 GMT -->
<div class="header-wrapper header-transparent">

            <!-- .header.header-style01 start -->
            <header id="header"  class="header-style01">
                <!-- .container start -->
                <div class="container">
                    <!-- .main-nav start -->
                    <div class="main-nav">
                        <!-- .row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default nav-left" role="navigation">

                                    <!-- .navbar-header start -->
                                    <div class="navbar-header">
                                        <div class="logo">
                                            <a href="{{url('/')}}">
                                                <img style="height: 50px" src="{{url('/')}}/img/LOGO RAMIZ.png" alt="Trucking Transportation and Logistics HTML Template"/>
                                            </a>
                                        </div><!-- .logo end -->
                                    </div><!-- .navbar-header start -->

                                    <!-- MAIN NAVIGATION -->
                                    <div class="collapse navbar-collapse" id="myDIV">
                                        <ul class="nav navbar-nav" onclick="myFunction(event)" id="navList">
                                            <li class="dropdown current-menu-item">
                                                <a href="{{url('/')}}" class="dropdown-toggle">Home</a>
                                            </li>

                                            <li><a href="{{route('about')}}">About</a></li>
                                            <li><a href="{{route('services')}}">Services</a></li>
                                            <li><a href="{{route('media')}}">Media</a></li>
                                            <li><a href="{{route('contact')}}">Contacts</a></li>

                                        </ul><!-- .nav.navbar-nav end -->

                                        <!-- RESPONSIVE MENU -->
                                        <div id="dl-menu" class="dl-menuwrapper">
                                            <button class="dl-trigger">Open Menu</button>

                                            <ul class="dl-menu">
                                                <li>
                                                    <a href="{{url('/')}}">Home</a>
                                                </li>
                                                <li><a href="{{route('about')}}/">About</a></li>
                                                <li><a href="{{route('services')}}">Services</a></li>
                                                <li><a href="{{route('media')}}">Media</a></li>
                                                <li><a href="{{route('contact')}}">Contacts</a></li>

                                            </ul><!-- .dl-menu end -->
                                        </div><!-- #dl-menu end -->

                                        <!-- #search start -->
                                        <div id="search">
                                            <form action="#" method="get">
                                                <input class="search-submit" type="submit" />
                                                <input id="m_search" name="s" type="text" placeholder="Type and hit enter..." />
                                            </form>
                                        </div><!-- #search end -->
                                    </div><!-- MAIN NAVIGATION END -->
                                </nav><!-- .navbar.navbar-default end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .main-nav end -->
                </div><!-- .container end -->
            </header><!-- .header.header-style01 -->
        </div><!-- .header-wrapper.header-transparent end -->

<script>function myFunction(e) {
    if (document.querySelector('#navList a.active') !== null) {
    document.querySelector('#navList a.active').classList.remove('active');
  }
  e.target.className = "active";
    }


</script>

