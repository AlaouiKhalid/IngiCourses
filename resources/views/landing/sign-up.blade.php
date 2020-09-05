@extends('landing.layouts.master')
@section('customCSS')
@endsection
@section('content')
<div class="main">

    <!--hero section start-->
    <section class="hero-section full-screen gray-light-bg">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
                    <!-- Image -->
                    <div class="bg-cover vh-100 ml-n3 gradient-overlay" style="background-image: url(img/slider-img-5.jpg);">
                        <div class="position-absolute login-signup-content">
                            <div class="position-relative text-white col-md-12 col-lg-7">
                                <h2 class="text-white">Create Your Account</h2>
                                <p>Keep your face always toward the sunshine - and shadows will fall behind you. Continually pursue fully researched niches whereas timely platforms. Credibly parallel task optimal catalysts for change after focused catalysts for change.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6">
                    <div class="login-signup-wrap px-4 px-lg-5">
                        <!-- Heading -->
                        <h1 class="text-center mb-1">
                            Signup
                        </h1>

                        <!-- Subheading -->
                        <p class="text-muted text-center mb-5">
                            Free access to our dashboard.
                        </p>

                        <!-- Form -->
                        <form class="login-signup-form">
                            <div class="form-group">
                                <!-- Label -->
                                <label class="pb-1">
                                    Your Name
                                </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-user color-primary"></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Label -->
                                <label class="pb-1">
                                    Email Address
                                </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-email color-primary"></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="name@address.com">
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <!-- Label -->
                                <label class="pb-1">
                                    Password
                                </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-lock color-primary"></span>
                                    </div>
                                    <input type="password" class="form-control"
                                           placeholder="Enter your password">
                                </div>
                            </div>

                            <div class="form-check d-flex align-items-center text-center">
                                <input type="checkbox" class="form-check-input mt-0 mr-3" id="exampleCheck1">
                                <label class="form-check-label small" for="exampleCheck1">I agree your <a href="#">Terms & Conditions</a></label>
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3">
                                Sign up
                            </button>

                            <!-- Link -->
                            <div class="text-center">
                                <small class="text-muted text-center">
                                    Already have an account? <a href="login">Log in</a>.
                                </small>
                            </div>

                        </form>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div>
    </section>
    <!--hero section end-->

</div>
@endsection
@section('customJS')

@endsection
