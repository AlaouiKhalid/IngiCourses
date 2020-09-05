@extends('landing.layouts.master')
@section('customCSS')
<link href="{{ url('/adminlayouts/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="main">

    <section class="hero-section full-screen gray-light-bg">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">

                <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">

                    <!-- Image -->
                    <div class="bg-cover vh-100 ml-n3 gradient-overlay" style="background-image: url(img/slider-img-3.jpg);">
                        <div class="position-absolute login-signup-content">
                            <div class="position-relative text-white col-md-12 col-lg-7">
                                <h2 class="text-white">Don't Worry You Can Reset Password? <br/> </h2>
                                <p>Keep your face always toward the sunshine - and shadows will fall behind you. Continually pursue fully researched niches whereas timely platforms. Credibly parallel task optimal catalysts for change after focused catalysts for change.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6">
                    <div class="login-signup-wrap px-4 px-lg-5 my-5">
                        <!-- Heading -->
                        <h1 class="text-center mb-1">
                            Password Reset
                        </h1>
                        
                        <p class="text-muted text-center mb-5">
                            Enter your email to get a password reset link.
                        </p>
                        
                        <div id="infoafter"></div>

                        <form class="login-signup-form" id ="resetForm" method="POST" action="{{ url('/reset_password_without_token') }}">
                            @csrf                               
                            <div class="form-group">
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-email color-primary"></span>
                                    </div>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="name@address.com" required>
                                </div>
                            </div> 
                            <button class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3" id="resetBtn" disabled>
                                Get the link
                            </button>

                            <div class="text-center">
                                <small class="text-muted text-center">
                                Remember your password? <a href="{{url('/')}}/login">Log in</a>.
                                </small>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div>
    </section>

</div>
@endsection
@section('customJS')
    <script src="{{ url('/adminlayouts/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            
            $('#email').keyup(function(event){
                
                $input=$(this);
                if($input.get(0).validity.valid == true){
                    $input.removeClass("is-invalid");
                    $input.addClass("is-valid");
                }
                else{
                    $input.removeClass("is-valid");
                    $input.addClass("is-invalid");
                    $input.parents('.form-group').find('.invalid-feedback').remove();
                    $input.after("<span class=\"invalid-feedback\" role=\"alert\">"+$input.get(0).validationMessage+"</span>");
                }
                if( $('#resetForm').get(0).checkValidity()== true){
                    $('#resetBtn').prop('disabled',false);
                }
                else{
                    $('#resetBtn').prop('disabled',true);
                }
            });

            var request;
            $('#resetForm').submit(function(event) {
                event.preventDefault();
                if (request) {
                    request.abort();
                }
                var $form = $(this);
                var $inputs = $form.find('input');
                var formData = new FormData($form[0]);
                var oldresetBtnVal = $('#resetBtn').text();
                $('#resetBtn').text('Sending ...');
                $inputs.prop('disabled', true);
                $('#resetBtn').prop('disabled', true);
                request = $.ajax({
                    url: $form.attr('action'),
                    type: $form.attr('method'),
                    processData: false,
                    contentType: false,
                    data: formData
                });
                request.done(function(response, textStatus, jqXHR) {
                        if (response.success) {
                            $('#infoafter').html("<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" >x</button>Successfully Send! \nLook at your email </div>");

                        // Swal.fire({
                        //     title: 'Successfully Send!',
                        //     text: 'Look at your email ',
                        //     type: 'success'
                        // }).then((result) => {
                        //     //window.location = $form.attr('data-r');
                        // });	
                        
                    }else if (response.errors) {
                        $('#infoafter').html("<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" >x</button>"+response.errors+"</div>");

                    } else {
                        $('#infoafter').html("<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" >x</button> <strong> An error occurred during the process !</strong></div>");
                    }
                    
                });

                request.fail(function(jqXHR, textStatus, errorThrown) {
                    $('#infoafter').html("<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" >x</button>"+textStatus + ' : ' + errorThrown+"</div>");
                });
                
                request.always(function() {
                    $inputs.prop('disabled', false);
                    $('#resetBtn').prop('disabled', false);
                    $('#resetBtn').text(oldresetBtnVal);
                });
            });
        });
    </script>
@endsection
