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
                    <div class="bg-cover vh-100 ml-n3 gradient-overlay" style="background-image: url(img/slider-img-4.jpg);">
                        <div class="position-absolute login-signup-content">
                            <div class="position-relative text-white col-md-12 col-lg-7">
                                <h2 class="text-white">Change Your Password</h2>
                                <p>Keep your face always toward the sunshine - and shadows will fall behind you. Continually pursue fully researched niches whereas timely platforms. Credibly parallel task optimal catalysts for change after focused catalysts for change.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6">
                    <div class="login-signup-wrap px-4 px-lg-5 my-5">
                        <!-- Heading -->
                        <h1 class="text-center mb-1">
                            Change Password
                        </h1>

                        <!-- Subheading -->
                        <p class="text-muted text-center mb-5">
                            Enter your new password
                        </p>

                        <!-- Form -->
                        <form class="login-signup-form">
                            <div class="form-group">
                                <label class="pb-1">New Password</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-lock color-primary"></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="New password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="pb-1">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-lock color-primary"></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Confirm password">
                                </div>
                            </div>
                            <!-- Submit -->
                            <button class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3">
                                Change Password
                            </button>

                            <!-- Link -->
                            <div class="text-center">
                                <small class="text-muted text-center">
                                    Remember your password? <a href="login">Log in</a>.
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
