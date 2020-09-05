@extends('landing.layouts.master')
@section('customCSS')
@endsection
@section('content')
<div class="main">

    <!--hero section start-->
    <section class="hero-section ptb-100 gradient-overlay full-screen"
             style="background: url('img/slider-img-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="hero-content-left text-white text-center">
                        <h1 class="text-white">Thank You !</h1>

                        <p class="lead">We will be in touch shortly. We're looking forward to your demo. If you have any questions prior to your demo feel free to give us a call.</p>

                        <div class="mb-5">
                            <h5 class="mb-0 text-white"> <span class="ti-mobile mr-2 align-items-center"></span> (612) 255-461</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 col-lg-5">
                    <form action="#" method="post" class="subscribe-form subscribe-form-footer subscribe-form-two d-none d-md-block d-lg-block">
                        <div class="d-flex align-items-center">
                            <input type="text" class="form-control input" id="email-footer" name="email" placeholder="info@yourdomain.com">
                            <input type="submit" class="button btn secondary-solid-btn" id="submit-footer" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

</div>

@endsection
@section('customJS')

@endsection
