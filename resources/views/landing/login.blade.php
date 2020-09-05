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
                                <h2 class="text-white">Welcome Back !</h2>
                                <p>Keep your face always toward the sunshine - and shadows will fall behind you. Continually pursue fully researched niches whereas timely platforms. Credibly parallel task optimal catalysts for change after focused catalysts for change.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="login-signup-wrap px-4 px-lg-5 my-5">
                        <!-- Heading -->
                        <h1 class="text-center mb-1">
                            Admin Login
                        </h1>
                        <p class="text-center mb-5">
                            Free access to our dashboard.
                        </p>
                        <h4 class="text-center Admin"></h4>
                        <p class="connecting"></p>

                        <!-- action=""route('adminLogin') 
                        
                        data-r="" route('adminPanel')-->
                        
                        
                        <form class="login-signup-form login" method="POST" action="{{url('login')}}" id="loginForm"  >
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="pb-1">Email Address</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-email"></span>
                                    </div>
                                    <input class="form-control" type="text" name="email" placeholder="Email ..." autocomplete="off">

                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label class="pb-1">Password</label>
                                    </div>
                                    <div class="col-auto">
                                        <a href="{{url('/')}}/password-reset" class="form-text small text-muted">
                                            Forgot password?
                                        </a>
                                    </div>
                                </div>
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-lock"></span>
                                    </div>
                                    <input class="form-control" type="password" name="password" placeholder="Password ..." autocomplete="off">
                                    
                                </div>
                            </div>
                            <input class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3" type="submit" value="Sign in" name="login">
                            <p class="text-center">
                                <small class="text-muted text-center">
                                    Don't have an account yet? <a href="{{url('/')}}/register">Sign up</a>.
                                </small>
                            </p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection


@section('customJS')
<script>
    
    // $(document).ready(function() { 

    //         var request;
    //         $("#loginForm").submit(function(event){

    //         event.preventDefault();
    //         if (request) {
    //             request.abort();
    //         }
    //         var $form = $(this);
    //         var $inputs = $form.find("input");
    //         var serializedData = $form.serialize();
    //         $('.connecting').removeClass('error');
    //         $('.connecting').html("<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" ></button>Loggin in, please wait ...</div>");

    //         $('.connecting').fadeIn();
    //         $('#loginForm').hide();
    //         $inputs.prop("disabled", true);
    //         request = $.ajax({ url: $form.attr('action'), type: "post", data: serializedData });
    //         request.done(function (response, textStatus, jqXHR){
    //             if(response.status == 'true'){
    //                 $('.Admin').html('Welcome back '+response.userName);
    //                 $('.connecting').html("<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" ></button>Logged successfully </br></br> You will be redirected now ...</div>");

    //                 window.location = $form.attr('data-r');
    //             }
    //             else{
    //                 $('.connecting').addClass('error');
    //                 $('.connecting').html("<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" >x</button>Email or password is incorrect !</div>");

    //                 $('#loginForm').fadeIn();
    //                 $inputs.fadeIn();
    //                 setTimeout(function(){
    //                     $('.connecting').fadeOut();
    //                 },2000)
    //             }
    //         });

    //         request.fail(function (jqXHR, textStatus, errorThrown){
    //             console.error("The following error occurred: "+ textStatus, errorThrown );
    //         });
    //         request.always(function () {
    //             $inputs.prop("disabled", false);
    //         });

    //     });
    // });
</script>
@endsection

