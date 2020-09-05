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
                            Enter your new password 
                        </p>
                        
                        <div id="infoafter"></div>
                        <form class="login-signup-form" id ="resetForm" method="POST" action="{{ url('/reset_password_with_token') }}" data-r="{{url('/')}}/login">
 
                            <input type="hidden" name="token" value="{{ $passwordReset->token }}">
                            <input type="hidden" name="email" value="{{ $passwordReset->email }}">

                            @csrf                        
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control"   value="{{ $passwordReset->email }}" disabled>
                                </div>
                            </div>
                        
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                        
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                                </div>
                            </div>
                        
                            <div class="form-group row">
                                <label for="passwordconfirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                        
                                <div class="col-md-6">
                                    <input id="passwordconfirm" type="password" class="form-control" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" name="passwordconfirm" required>
                                </div>
                            </div>
                        
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" id="resetButton" class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3" disabled>
                                        Reset Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
@section('customJS')
    <script src="{{ url('/adminlayouts/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#passwordconfirm').keyup(function(event){

                $input=$(this);
                if($input.get(0).validity.valid == true && $('#password').val() == $input.val()){
                    $input.removeClass("is-invalid");
                    $input.addClass("is-valid");
                }
                else{
                    $input.removeClass("is-valid");
                    $input.addClass("is-invalid");
                    $input.parents('.form-group').find('.invalid-feedback').remove();
                    $input.after("<span class=\"invalid-feedback\" role=\"alert\">Passwords Don\'t Match</span>");
                }
                if( $('#resetForm').get(0).checkValidity()== true && $('#password').val() == $input.val()){
                    $('#resetButton').prop('disabled',false);
                }
                else{
                    $('#resetButton').prop('disabled',true);
                }
            });


            $('#password').keyup(function(event){

                $input=$(this);
                if($input.get(0).validity.valid == true){
                    $input.removeClass("is-invalid");
                    $input.addClass("is-valid");
                }
                else{
                    $input.removeClass("is-valid");
                    $input.addClass("is-invalid");
                    $input.parents('.form-group').find('.invalid-feedback').remove();
                    $input.after("<span class=\"invalid-feedback\" role=\"alert\">Password has to contain UpperCase, LowerCase, Number/SpecialChar and min 8 Chars</span>");
                }
                if( $('#resetForm').get(0).checkValidity()== true){
                    $('#resetButton').prop('disabled',false);
                }
                else{
                    $('#resetButton').prop('disabled',true);
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
                    $('#infoafter').html("<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" >x</button>Successfully Updated!\nYour password was updated</div>");
                        window.location = $form.attr('data-r');
                        // if (response.success) {
                        // Swal.fire({
                        //     title: 'Successfully Updated!',
                        //     text: 'Your password was updated ',
                        //     type: 'success'
                        // }).then((result) => {
                        //     
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
                    $('#resetBtn').text(oldresetBtnVal);
                });
            });
        });
    </script>
@endsection
