<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sikkha</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    @livewireStyles
</head>

<body>
   
    <!-- header-start -->
    <header id="home">
        <div class="header-area">
            <!-- header-top -->
            <div class="header-top primary-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="header-social-icon-list d-flex">
                                <ul>
                                    <li><a href="#"><span class="ti-facebook"></span></a></li>
                                    <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                    <li><a href="#"><span class="ti-dribbble"></span></a></li>
                                    <li><a href="#"><span class="ti-google"></span></a></li>
                                    <li><a href="#"><span class="ti-pinterest"></span></a></li>
                                </ul>            
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">                                                               
                            @if (Route::has('login'))
                                <div class="header-social-icon-list d-flex f-right"> 
                                    @auth
                                        @if(Auth::user()->utype === 'ADM')
                                            <a href="#" class="text-sm text-gray-700 underline">My Account({{Auth::user()->name}})</a>
                                            <ul>
                                                <li class="menu-item">
                                                    <a href="{{route('admin.dashboard')}}" title="Dashboard">Dashboard</a>
                                                </li>
                                                <li class="mene-item">
                                                        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                    </li>
                                                <form id="logout-form" action="{{route('logout')}}" method="POST">
                                                    @csrf                                                    
                                                </form>
                                            </ul>
                                        @else
                                            <a href="#" class="text-sm text-gray-700 underline submenu">My Account({{Auth::user()->name}})</a>
                                            <ul>
                                                <li class="menu-item">
                                                    <a href="{{route('user.dashboard')}}" title="Dashboard">Dashboard</a>
                                                </li>
                                                <li class="mene-item">
                                                        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                    </li>
                                                <form id="logout-form" action="{{route('logout')}}" method="POST">
                                                    @csrf                                                    
                                                </form>
                                            </ul>
                                        @endif
                                    @else
                                        <ul>
                                            <li><a href="{{ route('login') }}" title="Resister or login">Login</a></li>
                                            <li><a href="{{ route('register') }}" title="Resister or login">Register</a></li>
                                        </ul>                                                                                                                                                                                                                                                                                                                                 
                                    @endauth    
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <!-- header-bottom -->
            <div class="header-bottom-area header-sticky" style="transition: .6s;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{asset('assets/img/logo/logo.png')}}" />
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-6">
                            <div class="header-bottom-icon f-right">
                                <ul>
                                    <li class="toggle-search-icon"><a href="#"><span class="ti-search"></span>
                                            <div class="toggle-search-box">
                                                <form action="#" id="searchbox">
                                                    <input placeholder="Search" type="text">
                                                    <button class="button-search"><span class="ti-search"></span></button>
                                                </form>
                                            </div>
                                        </a>
                                    </li>                                    
                                </ul>
                            </div>
                            <div class="main-menu f-right">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <li>
                                            <a href="/">Home</a>                                
                                        </li>
                                        <li>
                                            <a href="#about">PAGES</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="about_us.html">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="advisors.html">Advisors</a>
                                                </li>
                                                <li>
                                                    <a href="advisors_details.html">Advisors Details</a>
                                                </li>
                                                <li>
                                                    <a href="faq.html">FAQ</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#about">ELEMENTS</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="events_01.html">Events 01</a>
                                                </li>
                                                <li>
                                                    <a href="events_02.html">Events 02</a>
                                                </li>
                                                <li>
                                                    <a href="event_details.html">Events Details</a>
                                                </li>                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="course_01.html">Courses</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="course_01.html">Courses 01</a>
                                                </li>
                                                <li>
                                                    <a href="course_02.html">Courses 02</a>
                                                </li>
                                                <li>
                                                    <a href="course_03.html">Courses 03</a>
                                                </li>
                                                <li>
                                                    <a href="course_details.html">Course Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="events_01.html">NEWS</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="grid_news.html">Blog 3 Column</a>
                                                </li>
                                                <li>
                                                    <a href="standard_blog.html">Blog Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="news_details.html">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact_us.html">CONTACT</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-bottom -->
        </div>
    </header>
    <!-- header-end -->

    {{$slot}}

    <!-- subscribe start -->
    <div class="subscribe-area">
        <div class="container">
            <div class="subscribe-box">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-lg-7 col-md-8">
                                <div class="subscribe-text">
                                    <h1>Subscribe</h1>
                                    <span>Enter your email and get latest updates and offers subscribe us</span>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-4 justify-content-end">
                                <div class="email-submit-form">
                                    <div class="subscribe-form">
                                        <form action="#">
                                            <input placeholder="Enter your email" type="email">
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe end -->

    <!-- footer start -->
    <footer id="Contact">
        <div class="footer-area primary-bg pt-150">
            <div class="container">
                <div class="footer-top pb-35">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-logo">
                                    <img src="{{asset('assets/img/logo/logo_2.png')}}" />
                                </div>
                                <div class="footer-para">
                                    <p>Sorem ipsum dolor sit amet conse ctetur adipiscing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nostrud exercition ullamco laboris nisi </p>
                                </div>
                                <div class="footer-socila-icon">
                                    <span>Follow Us</span>
                                    <div class="footer-social-icon-list">
                                        <ul>
                                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                            <li><a href="#"><span class="ti-dribbble"></span></a></li>
                                            <li><a href="#"><span class="ti-google"></span></a></li>
                                            <li><a href="#"><span class="ti-pinterest"></span></a></li>
                                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Quick Links</h1>
                                </div>
                                <div class="footer-menu clearfix">
                                    <ul>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Condition</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Consultation</a></li>
                                        <li><a href="#">Team Member</a></li>
                                        <li><a href="#">Our Services</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Who we are</a></li>
                                        <li><a href="#">Get a Quote</a></li>
                                        <li><a href="#">Recent Post</a></li>
                                        <li><a href="#">Who we are</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 d-lg-none d-xl-block col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Recent Post</h1>
                                </div>
                                <div class="recent-post d-flex mb-25">
                                    <div class="recent-post-thumb">
                                        <img src="{{asset('assets/img/post/recent_post1.jpg')}}" />
                                    </div>
                                    <div class="recent-post-text">
                                        <p>Neque porro quisquam est qui dolorem ipsum</p>
                                        <div class="footer-time">
                                            <span class="ti-time"></span>
                                            <span class="footer-published-time">05 May 2018</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post d-flex">
                                    <div class="recent-post-thumb">
                                        <img src="{{asset('assets/img/post/recent_post1.jpg')}}" />
                                    </div>
                                    <div class="recent-post-text">
                                        <p>Neque porro quisquam est qui dolorem ipsum</p>
                                        <div class="footer-time">
                                            <span class="ti-time"></span>
                                            <span class="footer-published-time">05 May 2018</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4  col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Contact Us</h1>
                                </div>
                                <div class="footer-contact-list">
                                    <div class="single-footer-contact-info">
                                        <span class="ti-headphone "></span>
                                        <span class="footer-contact-list-text">+003 (1234) 7894</span>
                                    </div>
                                    <div class="single-footer-contact-info">
                                        <span class="ti-email "></span>
                                        <span class="footer-contact-list-text">youremail@gmail.com</span>
                                    </div>
                                    <div class="single-footer-contact-info">
                                        <span class="ti-location-pin"></span>
                                        <span class="footer-contact-list-text">123 New Street, 6th Floor, New York</span>
                                    </div>
                                </div>
                                <div class="opening-time">
                                    <span>Opening Hour</span>
                                    <span class="opening-date">
                                        Sun - Sat : 10:00 am - 05:00 pm
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom pt-25 pb-25">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="footer-copyright text-center">
                                    <span><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->


    <!-- JS here -->
    <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/one-page-nav-min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.barfiller.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    @livewireScripts
</body>


</html>
