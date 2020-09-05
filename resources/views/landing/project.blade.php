@extends('landing.layouts.master')
@section('customCSS')
@endsection
@section('content')
<div class="main">

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Case Studies</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Projects</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->


    <!--our work or portfolio section start-->
    <section class="our-portfolio-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <strong class="color-secondary">Previous Project</strong>
                        <h2>Our Case Studies</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements.
                            Intrinsicly
                            develop end-to-end customer service without extensive data.</p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pb-2">
                        <button type="button" class="filter-btn" data-mixitup-control data-filter="all">Digital
                            Marketing
                        </button>
                        <button type="button" class="filter-btn" data-mixitup-control data-filter=".branding">Marketing
                            Strategy
                        </button>
                        <button type="button" class="filter-btn" data-mixitup-control data-filter=".animation">Content
                            Marketing
                        </button>
                        <button type="button" class="filter-btn" data-mixitup-control data-filter=".other">SEO
                            Services
                        </button>
                    </div>
                    <div class="portfolio-container" id="MixItUp">
                        <div class="mix portfolio-item branding" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{url('/landing')}}/img/portfolios/3.jpg" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Creative Design</h5>
                                        <p>Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item other animation" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{url('/landing')}}/img/portfolios/2.jpg" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Web UI/UX Design</h5>
                                        <p>Web, Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item animation" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{url('/landing')}}/img/portfolios/4.jpg" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Corporate Flyer Design</h5>
                                        <p>Flyer Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item branding" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{url('/landing')}}/img/portfolios/1.jpg" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Web UI/UX Design</h5>
                                        <p>Web, Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item animation other" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{url('/landing')}}/img/portfolios/5.jpg" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Wall Painting Design</h5>
                                        <p>Painting Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item branding " data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{url('/landing')}}/img/portfolios/6.jpg" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Corporate Identity Design</h5>
                                        <p>Corporate Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our work or portfolio section end-->


    <!--call to action section start-->
    <section class="call-to-action-video">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="free-trial-image text-center">
                    <img src="{{url('/landing')}}/img/cta-2-girl-img.jpg" alt="image" class="img-fluid">
                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA"
                       class="popup-youtube video-play-icon white-bip shadow"><span class="ti-control-play"></span> </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
                <div class="free-trial-content text-white">
                    <h2 class="text-white">Best Consulting Every Business</h2>
                    <p>Interactively evisculate performance based ROI whereas premier mindshare. Dramatically matrix
                        real-time convergence rather than empowered manufactured products.</p>
                    <a href="#" class="btn primary-solid-btn mt-3">Start Now</a>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->


    <!--pricing with switch section start-->
    <section class="pricing-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <strong class="color-secondary">Our Pricing</strong>
                        <h2>Flexible Price</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead">
                            Professional hosting at an affordable price. Distinctively recaptiualize principle-centered
                            core competencies through client-centered
                            core competencies.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="switch-wrap text-center mb-5">
                        <label class="form-switch">
                            <span class="beforeinput text-success year-switch">
                                Monthly
                            </span>
                            <input type="checkbox" id="js-contcheckbox">
                            <span class="switch-icon gray-light-bg"></span>
                            <span class="afterinput year-switch">
                                Yearly
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="{{url('/landing')}}/img/priching-img-1.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">$19<span>.99</span></div>
                            <div class="price text-center mb-0 yearly-price">$69<span>.99</span></div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">Standard</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>Track 15</span> Keywords with our tool</li>
                                <li><span>50</span> Page Analysis</li>
                                <li><span>50</span> Crawl Pages with our crawl</li>
                                <li><span>1</span> Project to optimize site</li>
                                <li>24/7 Phone Support</li>
                            </ul>
                            <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card popular-price text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="{{url('/landing')}}/img/priching-img-2.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">$49<span>.99</span></div>
                            <div class="price text-center mb-0 yearly-price">$159<span>.99</span></div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">Premium</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>Track 15o</span> Keywords with our tool</li>
                                <li><span>100</span> Page Analysis</li>
                                <li><span>100</span> Crawl Pages with our crawl</li>
                                <li><span>5</span> Project to optimize site</li>
                                <li>24/7 Phone Support</li>
                            </ul>
                            <a href="#" class="btn primary-solid-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="{{url('/landing')}}/img/priching-img-3.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">$69<span>.99</span></div>
                            <div class="price text-center mb-0 yearly-price">$259<span>.99</span></div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">Unlimited</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li><span>Track 500</span> Keywords with our tool</li>
                                <li><span>250</span> Page Analysis</li>
                                <li><span>250</span> Crawl Pages with our crawl</li>
                                <li><span>10</span> Project to optimize site</li>
                                <li>24/7 Phone Support</li>
                            </ul>
                            <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="support-cta text-center mt-5">
                        <h5 class="mb-1"><span class="ti-headphone-alt color-primary mr-3"></span>We're Here to Help You
                        </h5>
                        <p>Have some questions? <a href="#">Chat with us now</a>, or <a href="#">send us an email</a> to
                            get in touch.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--pricing with switch section end-->

    <!--testimonial section start-->
    <section class="testimonial-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <strong class="color-secondary">Testimonials</strong>
                        <h2>What Clients Say About Us</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead">
                            Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                            e-business. Conveniently innovate compelling internal.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="owl-carousel owl-theme client-testimonial custom-arrow mb-5">
                        <div class="item">
                            <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                <blockquote>
                                    Assertively procrastinate distributed relationships whereas equity invested intellectual capital everything energistically underwhelm proactive.
                                </blockquote>
                                <div class="client-ratting mt-2">
                                    <ul class="list-inline client-ratting-list">
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item rating"> (5.0)</li>
                                    </ul>
                                    <h6 class="font-weight-bold"><small class="font-weight-lighter">BizBite</small></h6>
                                </div>
                            </div>
                            <div class="client-info-wrap d-flex align-items-center mt-5">
                                <div class="client-img mr-3">
                                    <img src="{{url('/landing')}}/img/client-1.jpg" alt="client" width="60" class="img-fluid rounded-circle shadow-sm"/>
                                </div>
                                <div class="client-info">
                                    <h5 class="mb-0">Austin Cesar</h5>
                                    <p class="mb-0">ThemeTags</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                <blockquote>
                                    Intrinsicly facilitate functional imperatives without next-generation meta-services. Compellingly revolutionize worldwide users vis-a-vis enterprise best practices.
                                </blockquote>
                                <div class="client-ratting mt-2">
                                    <ul class="list-inline client-ratting-list">
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item rating"> (5.0)</li>
                                    </ul>
                                    <h6 class="font-weight-bold"><small class="font-weight-lighter">Prolex</small></h6>
                                </div>
                            </div>
                            <div class="client-info-wrap d-flex align-items-center mt-5">
                                <div class="client-img mr-3">
                                    <img src="{{url('/landing')}}/img/client-2.jpg" alt="client" width="60" class="img-fluid rounded-circle shadow-sm"/>
                                </div>
                                <div class="client-info">
                                    <h5 class="mb-0">Pirtle Karol</h5>
                                    <p class="mb-0">ThemeTags</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                <blockquote>
                                    Interactively grow backend scenarios through one paradigms. Distinctively and communicate efficient information without effective meta-services.
                                </blockquote>
                                <div class="client-ratting mt-2">
                                    <ul class="list-inline client-ratting-list">
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item rating"> (5.0)</li>
                                    </ul>
                                    <h6 class="font-weight-bold"><small class="font-weight-lighter">AppCo</small></h6>
                                </div>
                            </div>
                            <div class="client-info-wrap d-flex align-items-center mt-5">
                                <div class="client-img mr-3">
                                    <img src="{{url('/landing')}}/img/client-3.jpg" alt="client" width="60" class="img-fluid rounded-circle shadow-sm"/>
                                </div>
                                <div class="client-info">
                                    <h5 class="mb-0">Aminul Islam</h5>
                                    <p class="mb-0">ThemeTags</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                <blockquote>
                                    Intrinsicly facilitate functional imperatives without next-generation meta-services. Compellingly revolutionize worldwide users vis-a-vis enterprise best practices.
                                </blockquote>
                                <div class="client-ratting mt-2">
                                    <ul class="list-inline client-ratting-list">
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        <li class="list-inline-item rating"> (5.0)</li>
                                    </ul>
                                    <h6 class="font-weight-bold"><small class="font-weight-lighter">Datrics</small></h6>
                                </div>
                            </div>
                            <div class="client-info-wrap d-flex align-items-center mt-5">
                                <div class="client-img mr-3">
                                    <img src="{{url('/landing')}}/img/client-4.jpg" alt="client" width="60" class="img-fluid rounded-circle shadow-sm"/>
                                </div>
                                <div class="client-info">
                                    <h5 class="mb-0">Pirtle Karol</h5>
                                    <p class="mb-0">ThemeTags</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial section end-->


    <!--client section start-->
    <div class="client-section ptb-100" style="background: url('img/client-bg.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="client-heading-wrap">
                        <h3>Who are Happy With Services and Work</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="client-para">
                        <p>Seamlessly administrate synergistic growth strategies and collaborative markets. Globally
                            empower inexpensive infomediaries after sustainable mindshare. Phosfluorescently brand
                            professional collaboration and idea-sharing without principle-centered interfaces. </p>
                    </div>
                </div>
            </div>
            <!--clients logo start-->
            <div class="row align-items-center justify-content-center mb-4">
                <div class="col-md-10 col-lg-9">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator client-logo-wrap">
                        <div class="item single-client">
                            <img src="{{url('/landing')}}/img/clients-logo-01.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{url('/landing')}}/img/clients-logo-02.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{url('/landing')}}/img/clients-logo-03.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{url('/landing')}}/img/clients-logo-04.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{url('/landing')}}/img/clients-logo-05.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{url('/landing')}}/img/clients-logo-06.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{url('/landing')}}/img/clients-logo-07.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{url('/landing')}}/img/clients-logo-08.png" alt="client logo" class="client-img">
                        </div>
                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </div>
    <!--client section end-->


</div>
@endsection
@section('customJS')

@endsection
