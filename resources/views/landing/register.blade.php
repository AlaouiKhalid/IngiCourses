@extends('landing.layouts.master')
@section('customCSS')
<link href="{{ url('/adminlayouts/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="main">
    <section class="hero-section hero-bg-2 ptb-100 full-screen">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-5 pt-sm-5 pt-md-5 pt-lg-0">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-content-left text-white">
                        <h1 class="text-white">Create Your Account</h1>
                        <p class="lead">
                            Keep your face always toward the sunshine - and shadows will fall behind you.
                        </p>

                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="card login-signup-card shadow-lg mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h6 class="h3">Create account</h6>
                            </div>
                            
                            <!-- <div id="infoafter"></div> data-r="route('adminPanel')" -->

                            <form method="POST" action="{{ url('/register') }}" class="login-signup-form" id="registerForm" >
                                {{ csrf_field() }}
                                <input type="hidden" name="redirect_url" value="{{ request('redirect_url', '/') }}">           
                                <div class="form-group">
                                    <label class="pb-1">
                                         Name
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <input id="name" type="text" class="form-control" name="name" autofocus pattern="[a-zA-Z]{2,50}" required> 
                                        
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="pb-1">
                                        Email Address
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-email color-primary"></span>
                                        </div>
                                        <input id="email" type="email" class="form-control" name="email" value="" autocomplete="email" required>
                                       
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="pb-1">
                                        Password
                                    </label> 
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-lock color-primary"></span>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"  pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="pb-1">
                                        Confirm Password
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-lock color-primary"></span>
                                        </div>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="pb-1">
                                        Register as 
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <select id="etudes" name="etudes" class="form-control select2" required>
                                            <option value="Professor" >Professor</option>
                                            <option value="Student">Student</option>
                                        </select>

                                    </div>
                                            
                                </div> 
                                <!-- disabled -->
                                <button class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3" id="registerButton" >
                                    Register
                                </button>


                            </form>
                        </div>
                        <div class="card-footer px-md-5 bg-transparent border-top"><small>Already have an acocunt?</small>
                            <a href="login" class="small">Sign in</a></div>
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
         //var $form = $(this);
        //var $inputs = $form.find("input");
        //var serializedData = $form.serialize();
        //$('.connecting').removeClass('error');
        //$('.connecting').html("Loggin in, please wait ...");
        //$('.connecting').fadeIn();
        //$('#loginForm').hide();
        //$inputs.prop("disabled", true);
        //request = $.ajax({ url: $form.attr('action'), type: "post", data: serializedData });
        
        //$('#loginForm').fadeIn();
        //$inputs.fadeIn();
        //setTimeout(function(){
            // $('.connecting').fadeOut();
        //},2000)

        // $(document).ready(function() {
            
        //     $('#password-confirm').keyup(function(event){

        //         $input=$(this);
        //         if($input.get(0).validity.valid == true && $('#password').val() == $input.val()){
        //             $input.removeClass("is-invalid");
        //             $input.addClass("is-valid");
        //         }
        //         else{
        //             $input.removeClass("is-valid");
        //             $input.addClass("is-invalid");
        //             $input.parents('.form-group').find('.invalid-feedback').remove();
        //             $input.after("<span class=\"invalid-feedback\" role=\"alert\">Passwords Don\'t Match</span>");
        //         }
        //         if( $('#registerForm').get(0).checkValidity()== true){
        //             $('#registerButton').prop('disabled',false);
        //         }
        //         else{
        //             $('#registerButton').prop('disabled',true);
        //         }
        //     });


        //     $('#password').keyup(function(event){
                
        //         $input=$(this);
        //         if($input.get(0).validity.valid == true){
        //             $input.removeClass("is-invalid");
        //             $input.addClass("is-valid");
        //         }
        //         else{
        //             $input.removeClass("is-valid");
        //             $input.addClass("is-invalid");
        //             $input.parents('.form-group').find('.invalid-feedback').remove();
        //             $input.after("<span class=\"invalid-feedback\" role=\"alert\">Password has to contain UpperCase, LowerCase, Number/SpecialChar and min 8 Chars</span>");
        //         }
        //         if( $('#registerForm').get(0).checkValidity()== true){
        //             $('#registerButton').prop('disabled',false);
        //         }
        //         else{
        //             $('#registerButton').prop('disabled',true);
        //         }
        //     });

            
        //     $('#firstname,#lastname,#email').keyup(function(event){
                
        //         $input=$(this);
        //         if($input.get(0).validity.valid == true){
        //             $input.removeClass("is-invalid");
        //             $input.addClass("is-valid");
        //         }
        //         else{
        //             $input.removeClass("is-valid");
        //             $input.addClass("is-invalid");
        //             $input.parents('.form-group').find('.invalid-feedback').remove();
        //             $input.after("<span class=\"invalid-feedback\" role=\"alert\">"+$input.get(0).validationMessage+"</span>");
        //         }
        //         if( $('#registerForm').get(0).checkValidity()== true){
        //             $('#registerButton').prop('disabled',false);
        //         }
        //         else{
        //             $('#registerButton').prop('disabled',true);
        //         }
        //     });

        //     var request;
        //     $('#registerForm').submit(function(event) {
        //         event.preventDefault();
        //         if (request) {
        //             request.abort();
        //         }
        //         var $form = $(this);
        //         var $inputs = $form.find('input');
        //         var formData = new FormData($form[0]);
        //         var oldregisterButtonVal = $('#registerButton').text();
        //         $('#registerButton').text('Registring ...');
        //         $inputs.prop('disabled', true);
        //         $('#registerButton').prop('disabled', true);
        //         $('#message').prop('disabled', true);
        //         request = $.ajax({
        //             url: $form.attr('action'),
        //             type: $form.attr('method'),
        //             processData: false,
        //             contentType: false,
        //             data: formData
        //         });
        //        request.done(function(response, textStatus, jqXHR) {
        //              if (response.success) {
        //                 //$('#infoafter').html("<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" >x</button>"+response.errors+"</div>");



        //                 Swal.fire({
        //                     title: 'Successfully Added!',
        //                     text: 'Welcome '+response.userName+' You will be redirected now ...',
        //                     type: 'success'
        //                 }).then((result) => {
        //                     window.location = $form.attr('data-r');
        //                 });	
                        
        //             }else if (response.errors) {
        //                 $('#infoafter').html("<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" >x</button>"+response.errors+"</div>");

        //             } else {
        //                 $('#infoafter').html("<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" >x</button> <strong> An error occurred during the process !</strong></div>");
        //             }
                    
        //         });

        //         request.fail(function(jqXHR, textStatus, errorThrown) {
        //             $('#infoafter').html("<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" >x</button>"+textStatus + ' : ' + errorThrown+"</div>");
        //         });
                
        //         request.always(function() {
        //             $inputs.prop('disabled', false);
        //             $('#message').prop('disabled', false);
        //             $('#registerButton').prop('disabled', false);
        //             $('#registerButton').text(oldregisterButtonVal);
        //         });
        //     });
        // });
    </script>
    @endsection