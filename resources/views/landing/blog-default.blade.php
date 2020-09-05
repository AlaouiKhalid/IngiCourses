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
                        <h1 class="text-white mb-0">Blog Default</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="list-inline-item breadcrumb-item active">Blog Default</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--blog section start-->
    <section class="our-blog-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading mb-5">
                        <h2>Our Latest News</h2>
                        <p class="lead">
                            Enthusiastically drive revolutionary opportunities before emerging leadership. Phosfluorescently cultivate emerging alignments time methods of empowerment.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img position-relative">
                            <img src="{{url('/landing')}}/img/blog/1.jpg" class="card-img-top" alt="blog">
                            <div class="meta-date">
                                <strong>24</strong>
                                <small>Apr</small>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                        Comments
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span>
                                        Share
                                    </li>
                                </ul>
                            </div>
                            <h3 class="h5 mb-2 card-title"><a href="#">Appropriately productize fully</a></h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk.</p>
                            <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img position-relative">
                            <img src="{{url('/landing')}}/img/blog/2.jpg" class="card-img-top" alt="blog">
                            <div class="meta-date">
                                <strong>24</strong>
                                <small>Apr</small>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                        Comments
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span>
                                        Share
                                    </li>
                                </ul>
                            </div>
                            <h3 class="h5 mb-2 card-title"><a href="#">Quickly formulate backend</a></h3>
                            <p class="card-text">Synergistically engage effective ROI after customer directed
                                partnerships.</p>
                            <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img position-relative">
                            <img src="{{url('/landing')}}/img/blog/3.jpg" class="card-img-top" alt="blog">
                            <div class="meta-date">
                                <strong>24</strong>
                                <small>Apr</small>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                        Comments
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span>
                                        Share
                                    </li>
                                </ul>
                            </div>
                            <h3 class="h5 mb-2 card-title"><a href="#">Objectively extend extensive</a></h3>
                            <p class="card-text">Holisticly mesh open-source leadership rather than proactive
                                users. </p>
                            <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img position-relative">
                            <img src="{{url('/landing')}}/img/blog/4.jpg" class="card-img-top" alt="blog">
                            <div class="meta-date">
                                <strong>24</strong>
                                <small>Apr</small>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                        Comments
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span>
                                        Share
                                    </li>
                                </ul>
                            </div>
                            <h3 class="h5 mb-2 card-title"><a href="#">Objectively extend extensive</a></h3>
                            <p class="card-text">Holisticly mesh open-source leadership rather than proactive
                                users. </p>
                            <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img position-relative">
                            <img src="{{url('/landing')}}/img/blog/5.jpg" class="card-img-top" alt="blog">
                            <div class="meta-date">
                                <strong>24</strong>
                                <small>Apr</small>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                        Comments
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span>
                                        Share
                                    </li>
                                </ul>
                            </div>
                            <h3 class="h5 mb-2 card-title"><a href="#">Objectively extend extensive</a></h3>
                            <p class="card-text">Holisticly mesh open-source leadership rather than proactive
                                users. </p>
                            <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img position-relative">
                            <img src="{{url('/landing')}}/img/blog/6.jpg" class="card-img-top" alt="blog">
                            <div class="meta-date">
                                <strong>24</strong>
                                <small>Apr</small>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                        Comments
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span>
                                        Share
                                    </li>
                                </ul>
                            </div>
                            <h3 class="h5 mb-2 card-title"><a href="#">Objectively extend extensive</a></h3>
                            <p class="card-text">Holisticly mesh open-source leadership rather than proactive
                                users. </p>
                            <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <!--pagination start-->
            <div class="row">
                <div class="col-md-12">
                    <nav class="custom-pagination-nav mt-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-left"></span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--pagination end-->

        </div>
    </section>
    <!--blog section end-->

</div>
@endsection
@section('customJS')

@endsection
