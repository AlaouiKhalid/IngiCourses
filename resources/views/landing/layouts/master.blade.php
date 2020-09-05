<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
          content="BizBite corporate business template or agency and marketing template helps you easily create websites for your business.">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!--title-->
    <title>ITSpot MyAPP v1</title>

    <!--favicon icon-->
    <link rel="icon" href="{{url('/landing')}}/img/favicon.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&amp;display=swap"
          rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{url('/landing')}}/css/bootstrap.min.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{url('/landing')}}/css/magnific-popup.css">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{url('/landing')}}/css/themify-icons.css">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="{{url('/landing')}}/css/all.min.css">
    <!--animated css-->
    <link rel="stylesheet" href="{{url('/landing')}}/css/animate.min.css">
    <!--ytplayer css-->
    <link rel="stylesheet" href="{{url('/landing')}}/css/jquery.mb.YTPlayer.min.css">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{url('/landing')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/landing')}}/css/owl.theme.default.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="{{url('/landing')}}/css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" href="{{url('/landing')}}/css/responsive.css">
    @yield('customCSS')

</head>
<body>

<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->

<!--header section start-->
<header class="header">
    <!--topbar start-->
    <div id="header-top-bar" class="primary-bg py-2">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 col-lg-7 d-none d-md-block d-lg-block">
                    <div class="topbar-text text-white">
                        <ul class="list-inline">
                            <li class="list-inline-item"><span class="fas fa-headphones-alt mr-1"></span> 24x7 Technical Support</li>
                            <li class="list-inline-item"><span class="fas fa-phone-alt mr-1"></span> 883-4565-123456</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="topbar-text text-white">
                        <ul class="list-inline text-md-right text-lg-right text-left  mb-0">
                            <li class="list-inline-item">
                                <a href="#" class="rounded"><span class="fab fa-facebook-f"></span></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="rounded"><span
                                    class="fab fa-twitter"></span></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="rounded"><span
                                    class="fab fa-linkedin-in"></span></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="rounded"><span
                                    class="fab fa-dribbble"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--topbar end-->
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top white-bg">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}/home">
                <img src="{{url('/landing')}}/img/logo-color.png" alt="logo" class="img-fluid"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li><a href="{{url('/')}}/home">Home</a></li>
                    <li><a href="{{url('/')}}/about-us">About Us</a></li>
                    <li><a href="#" class="dropdown-toggle">Pages</a>

                        <ul class="sub-menu">
                            
                            <li><a href="#" class="dropdown-toggle-inner">Login & Sign Up</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/')}}/basic-login">Login Page 1</a></li>
                                    <li><a href="{{url('/')}}/basic-sign-up">Signup Page 1</a></li>
                                    <li><a href="{{url('/')}}/password-reset">Reset Password</a></li>
                                    <li><a href="{{url('/')}}/change-password">Change Password</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle-inner">Utilities</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/')}}/download">Download Page</a></li>
                                    <li><a href="{{url('/')}}/review">Review Page</a></li>
                                    <li><a href="{{url('/')}}/faq">FAQ Page</a></li>
                                    <li><a href="{{url('/')}}/404">404 Page</a></li>
                                    <li><a href="{{url('/')}}/coming-soon">Coming Soon</a></li>
                                    <li><a href="{{url('/')}}/thank-you">Thank You Page</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle-inner">Team</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/')}}/team">Our Team Members</a></li>
                                    <li><a href="{{url('/')}}/team-single">Team Member Profile</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle-inner">Our Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/')}}/blog-default">Blog Grid</a></li>
                                    <li><a href="{{url('/')}}/blog-no-sidebar">Blog No Sidebar</a></li>
                                    <li><a href="{{url('/')}}/blog-left-sidebar">Blog Left Sidebar</a></li>
                                    <li><a href="{{url('/')}}/blog-right-sidebar">Blog Right Sidebar</a></li>
                                    <li><a href="{{url('/')}}/blog-right-sidebar-2">Blog Right Sidebar 02</a></li>
                                    <li><a href="{{url('/')}}/blog-single-left-sidebar">Details Left Sidebar</a></li>
                                    <li><a href="{{url('/')}}/blog-single-right-sidebar">Details Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('/')}}/project-details">Project Details </a>
                            </li>
                            <li>
                                <a href="{{url('/')}}/services-details">Services Details</a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="{{url('/')}}/services">Services</a></li>
                    <li><a href="{{url('/')}}/project">Case Study</a></li>
                    <li><a href="{{url('/')}}/contact-us">Contact Us</a></li>
                    @if (Auth::user())
                    
                        <li><a href="{{route('logout') }}" class="btn secondary-solid-btn check-btn">Logout</a></li>


                        
                    @else
                        <li><a href="{{ url('login') }}" class="btn secondary-solid-btn check-btn">Login</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</header>
<!--header section end-->

@yield('content')

<!--footer section start-->
<footer class="footer-section">
    <!--footer top start-->
    <div class="footer-top gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <div class="row footer-top-wrap">
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <img src="{{url('/landing')}}/img/logo-white.png" alt="logo" class="mb-2">
                                <p>Continually myocardinate inexpensive catalysts for change with seamless
                                    initiatives.</p>
                                <div class="social-nav mt-4">
                                    <ul class="list-unstyled social-list mb-0">
                                        <li class="list-inline-item tooltip-hover">
                                            <a href="#" class="rounded"><span class="ti-facebook"></span></a>
                                            <div class="tooltip-item">Facebook</div>
                                        </li>
                                        <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span
                                                class="ti-twitter"></span></a>
                                            <div class="tooltip-item">Twitter</div>
                                        </li>
                                        <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span
                                                class="ti-linkedin"></span></a>
                                            <div class="tooltip-item">Linkedin</div>
                                        </li>
                                        <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span
                                                class="ti-dribbble"></span></a>
                                            <div class="tooltip-item">Dribbble</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">COMPANY</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About Our Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Our Affiliates Program</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">View Our Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Check Our Careers</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">LEGAL</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Legal Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Report Abuse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Terms of Service</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="row footer-top-wrap mt-md-4 mt-sm-0 mt-lg-0">
                        <div class="col-12">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">GET IN TOUCH</h4>
                                <ul class="get-in-touch-list">
                                    <li class="d-flex align-items-center py-2"><span
                                            class="fas fa-map-marker-alt mr-2"></span> 1234 Street Name, City Name, USA
                                    </li>
                                    <li class="d-flex align-items-center py-2"><span
                                            class="fas fa-envelope mr-2"></span> you@domain.com
                                    </li>
                                    <!--<li class="d-flex align-items-center py-2"><span class="fas fa-phone-alt mr-2"></span> (123) 456-7890 - (123) 456-7890</li>-->
                                </ul>
                                <form class="newsletter-form mt-3">
                                    <input type="text" class="input-newsletter" placeholder="Enter your email"
                                           name="EMAIL" required="" autocomplete="off">
                                    <button type="submit" class="disabled"
                                            style="pointer-events: all; cursor: pointer;"><i
                                            class="fas fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
    <div class="footer-bottom gray-light-bg py-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-lg-5">
                    <p class="copyright-text pb-0 mb-0">Copyrights © 2020. All
                        rights reserved by
                        <a href="/https://themeforest.net/user/themetags" target="_blank">ThemeTags</a></p>
                </div>
                <div class="col-md-7 col-lg-6 d-none d-md-block d-lg-block">
                    <ul class="list-inline policy-nav text-right social-list">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
<!--footer section end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>

<script src="{{url('/landing')}}/js/jquery-3.5.0.min.js"></script>
<!--Popper js-->
<script src="{{url('/landing')}}/js/popper.min.js"></script>
<!--Bootstrap js-->
<script src="{{url('/landing')}}/js/bootstrap.min.js"></script>
<!--Magnific popup js-->
<script src="{{url('/landing')}}/js/jquery.magnific-popup.min.js"></script>
<!--jquery easing js-->
<script src="{{url('/landing')}}/js/jquery.easing.min.js"></script>
<!--jquery ytplayer js-->
<script src="{{url('/landing')}}/js/jquery.mb.YTPlayer.min.js"></script>
<!--Isotope filter js-->
<script src="{{url('/landing')}}/js/mixitup.min.js"></script>
<!--wow js-->
<script src="{{url('/landing')}}/js/wow.min.js"></script>
<!--owl carousel js-->
<script src="{{url('/landing')}}/js/owl.carousel.min.js"></script>
<!--countdown js-->
<script src="{{url('/landing')}}/js/jquery.countdown.min.js"></script>
<!--jquery easypiechart-->
<script src="{{url('/landing')}}/js/jquery.easy-pie-chart.js"></script>
<!--custom js-->
<script src="{{url('/landing')}}/js/scripts.js"></script>
@yield('customJS')
</body>

</html>
