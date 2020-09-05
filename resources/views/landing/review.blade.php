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
                        <h1 class="text-white mb-0">Customer Say About Us</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="list-inline-item breadcrumb-item active">Review</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->


    <!--customer review section start-->
    <section class="customer-review-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="single-review my-md-4 my-lg-4 my-sm-0">
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
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="single-review my-md-4 my-lg-4 my-sm-0">
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
                            <h6 class="font-weight-bold"><small class="font-weight-lighter">AppBeats</small></h6>
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
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="single-review my-md-4 my-lg-4 my-sm-0">
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
                            <h6 class="font-weight-bold"><small class="font-weight-lighter">AgencyCo</small></h6>
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
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="single-review my-md-4 my-lg-4 my-sm-0">
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
                            <h6 class="font-weight-bold"><small class="font-weight-lighter">Hostlar</small></h6>
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
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="single-review my-md-4 my-lg-4 my-sm-0">
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
                            <h6 class="font-weight-bold"><small class="font-weight-lighter">AppCo</small></h6>
                        </div>
                    </div>
                    <div class="client-info-wrap d-flex align-items-center mt-5">
                        <div class="client-img mr-3">
                            <img src="{{url('/landing')}}/img/client-5.jpg" alt="client" width="60" class="img-fluid rounded-circle shadow-sm"/>
                        </div>
                        <div class="client-info">
                            <h5 class="mb-0">Pirtle Karol</h5>
                            <p class="mb-0">ThemeTags</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="single-review my-md-4 my-lg-4 my-sm-0">
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
    </section>
    <!--customer review section end-->


</div>
@endsection
@section('customJS')

@endsection
