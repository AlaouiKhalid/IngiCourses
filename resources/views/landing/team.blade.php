@extends('landing.layouts.master')
@section('customCSS')
@endsection
@section('content')
<div class="main">

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat top center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Our Team Two</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="list-inline-item breadcrumb-item active">Team Two</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--team two section start-->
    <section class="team-two-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <strong class="color-secondary">Our Team</strong>
                        <h2>Awesome Team Members</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead">Distinctively grow go forward manufactured products and optimal networks.
                            Enthusiastically
                            disseminate user-centric outsourcing.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                        <div class="card text-center">
                            <img src="{{url('/landing')}}/img/team-member-1.png" alt="team image" width="120" class="img-fluid m-auto pt-4">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Richard Ford</h5>
                                <span>Instructor of Mathematics</span>
                                <p class="teacher-quote pt-3">Dramatically leverage existing fully researched
                                    platforms. </p>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Dramatically leverage existing fully researched platforms
                                    vis-a-vis viral." </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Richard Ford</h5></a>
                                <span class="teacher-field text-white">Instructor of Mathematics</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                        <div class="card text-center">
                            <img src="{{url('/landing')}}/img/team-member-2.png" alt="team image" width="120" class="img-fluid m-auto pt-4">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Kely Roy</h5>
                                <span>Lead Designer</span>
                                <p class="teacher-quote pt-3">Compellingly strategize covalent e-services rather
                                    than </p>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Credibly extend high-payoff web-readiness via top-line
                                    relationships." </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Kely Roy</h5></a><span
                                    class="teacher-field text-white">Lead Designer</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                        <div class="card text-center">
                            <img src="{{url('/landing')}}/img/team-member-3.png" alt="team image" width="120" class="img-fluid m-auto pt-4">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Gerald Nichols</h5>
                                <span>Managing Director</span>
                                <p class="teacher-quote pt-3">Credibly extend high-payoff web-readiness via
                                    top-line.</p>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Authoritatively evolve stand-alone e-tailers whereas
                                    prospective partnerships." </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Gerald Nichols</h5></a>
                                <span class="teacher-field text-white">Managing Director</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                        <div class="card text-center">
                            <img src="{{url('/landing')}}/img/team-member-4.png" alt="team image" width="120" class="img-fluid m-auto pt-4">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Gerald Nichols</h5>
                                <span>Managing Director</span>
                                <p class="teacher-quote pt-3">Professionally engage clicks-and-mortar customer</p>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Authoritatively evolve stand-alone e-tailers whereas
                                    prospective partnerships." </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Gerald Nichols</h5></a>
                                <span class="teacher-field text-white">Managing Director</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                        <div class="card text-center">
                            <img src="{{url('/landing')}}/img/team-member-5.png" alt="team image" width="120" class="img-fluid m-auto pt-4">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Richard Ford</h5>
                                <span>Instructor of Mathematics</span>
                                <p class="teacher-quote pt-3">Dramatically leverage existing fully researched
                                    platforms. </p>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Dramatically leverage existing fully researched platforms
                                    vis-a-vis viral." </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Richard Ford</h5></a>
                                <span class="teacher-field text-white">Instructor of Mathematics</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                        <div class="card text-center">
                            <img src="{{url('/landing')}}/img/team-member-6.png" alt="team image" width="120" class="img-fluid m-auto pt-4">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Kely Roy</h5>
                                <span>Lead Designer</span>
                                <p class="teacher-quote pt-3">Compellingly strategize covalent e-services rather
                                    than </p>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Credibly extend high-payoff web-readiness via top-line
                                    relationships." </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Kely Roy</h5></a><span
                                    class="teacher-field text-white">Lead Designer</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                        <div class="card text-center">
                            <img src="{{url('/landing')}}/img/team-member-7.png" alt="team image" width="120" class="img-fluid m-auto pt-4">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Gerald Nichols</h5>
                                <span>Managing Director</span>
                                <p class="teacher-quote pt-3">Credibly extend high-payoff web-readiness via
                                    top-line.</p>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Authoritatively evolve stand-alone e-tailers whereas
                                    prospective partnerships." </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Gerald Nichols</h5></a>
                                <span class="teacher-field text-white">Managing Director</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                        <div class="card text-center">
                            <img src="{{url('/landing')}}/img/team-member-8.png" alt="team image" width="120" class="img-fluid m-auto pt-4">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Gerald Nichols</h5>
                                <span>Managing Director</span>
                                <p class="teacher-quote pt-3">Professionally engage clicks-and-mortar customer</p>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Authoritatively evolve stand-alone e-tailers whereas
                                    prospective partnerships." </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Gerald Nichols</h5></a>
                                <span class="teacher-field text-white">Managing Director</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--team two section end-->

    <!--call to action progressbar start-->
    <section class="call-to-action ptb-100" style="background: url('img/ctg-bg-2.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="circle-box">
                        <div class="chart" data-percent="70"><span>70%</span></div>
                    </div>
                    <div class="progress-info text-center mt-3">
                        <strong class="color-secondary">Our Services</strong>
                        <h5 class="text-white">Keywords Results</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="circle-box">
                        <div class="chart" data-percent="75"><span>75%</span></div>
                    </div>
                    <div class="progress-info text-center mt-3">
                        <strong class="color-secondary">Our Services</strong>
                        <h5 class="text-white">Google Analytics</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="circle-box">
                        <div class="chart" data-percent="80"><span>80%</span></div>
                    </div>
                    <div class="progress-info text-center mt-3">
                        <strong class="color-secondary">Our Services</strong>
                        <h5 class="text-white">Competition Metrics</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="circle-box">
                        <div class="chart" data-percent="65"><span>65%</span></div>
                    </div>
                    <div class="progress-info text-center mt-3">
                        <strong class="color-secondary">Our Services</strong>
                        <h5 class="text-white">SEO & Marketing</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action progressbar end-->

    <!--contact us section start-->
    <section class="contact-us-section ptb-100">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="contact-us-form gray-light-bg rounded p-5">
                        <h4>Ready to get started?</h4>
                        <form action="#" method="POST" id="contactForm1" class="contact-us-form" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter name" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn secondary-solid-btn" id="btnContactUs">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-content">
                        <h2>Looking for a excellent Business idea?</h2>
                        <p class="lead">Seamlessly deliver pandemic e-services and next-generation initiatives.</p>

                        <a href="#" class="btn outline-btn align-items-center">Get Directions <span class="ti-arrow-right pl-2"></span></a>

                        <hr class="my-5">

                        <h5>Our Headquarters</h5>
                        <address>
                            100 yellow house, Mn <br>
                            Factory, United State, 13420
                        </address>
                        <br>
                        <span>Phone: +1234567890123</span> <br>
                        <span>Email: <a href="mailto:email@yourdomain.com" class="link-color">email@yourdomain.com</a></span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us section end-->

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
