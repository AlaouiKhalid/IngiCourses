@extends('landing.layouts.master')
@section('customCSS')
@endsection
@section('content')
<div class="main">

    <!--hero section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Download</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="list-inline-item breadcrumb-item active">Download</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--about us section start-->
    <section class="about-us-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="about-us-img">
                        <img src="{{url('/landing')}}/img/about-us-img.svg" alt="about us" class="img-fluid about-single-img">
                        <img src="{{url('/landing')}}/img/about-us-img-bg.svg" alt="about bg" class="about-us-bg">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="about-us-content-wrap">
                        <strong class="color-secondary">Download Now</strong>
                        <h3>Download App Manage Your Business More Faster</h3>
                        <span class="animate-border mb-4"></span>
                        <p>Globally transition proactive niches without progressive processes. Objectively syndicate
                            enterprise-wide services through timely metrics. </p>
                        <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Creative</strong>
                                Websites Design
                            </li>
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Accounting</strong>
                                Procedures Guidebook
                            </li>
                            <li class="py-1"><span
                                    class="ti-control-forward mr-2 color-secondary"></span><strong>Cost</strong>
                                Accounting Fundamentals
                            </li>
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Corporate</strong>
                                Cash Management
                            </li>
                            <li class="py-1"><span
                                    class="ti-control-forward mr-2 color-secondary"></span><strong>SEO</strong>
                                Optimization Services
                            </li>
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Company</strong>
                                Brand Solutions
                            </li>
                            <li class="py-1"><span
                                    class="ti-control-forward mr-2 color-secondary"></span><strong>45-Day</strong>
                                Money-Back Guarantee
                            </li>
                        </ul>
                        <div class="row mt-4">
                            <div class="col-4">
                                <div class="counter-single">
                                    <h2 class="mb-0 color-secondary">4566</h2>
                                    <strong>Total Project</strong>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="counter-single">
                                    <h2 class="mb-0 color-secondary">25002</h2>
                                    <strong>Total Customer</strong>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="counter-single">
                                    <h2 class="mb-0 color-secondary">4566</h2>
                                    <strong>Total Project</strong>
                                </div>
                            </div>
                        </div>
                        <div class="download-btn mt-4">
                            <a href="#" class="btn secondary-solid-btn mr-3"><span class="ti-android"></span> Google
                                Play</a>
                            <a href="#" class="btn outline-btn"><span class="ti-apple"></span> App Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->

</div>
@endsection
@section('customJS')

@endsection
