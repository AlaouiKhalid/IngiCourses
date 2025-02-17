@extends('landing.layouts.master')
@section('customCSS')
@endsection
@section('content')
<div class="main">

    <!--hero section start-->
    <section class="hero-section ptb-100 gradient-overlay full-screen"
             style="background: url('img/slider-img-2.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="error-content text-center text-white">
                        <div class="notfound-404"><h1 class="text-white">404</h1></div>
                        <h2 class="text-white">Sorry, something went wrong</h2>
                        <p class="lead">The page you are looking for might have been removed had its name changed or is temporarily
                            unavailable.</p><a class="btn outline-white-btn" href="home">Go to Homepage</a></div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

</div>
@endsection
@section('customJS')

@endsection
