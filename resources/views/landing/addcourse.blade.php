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
                    <h1 class="text-white">Create Your Account </h1>
                    
                        <p class="lead">
                            Keep your face always toward the sunshine - and shadows will fall behind you.
                        </p>
                        <p class="lead">
                        the Founder is the logged user
                        </p>

                        <p class="lead">
                        Folder in Server
                        </p>

                        <p class="lead">
                        -numberofsails =0 	-created_at=now -updated_at  now
                        </p>
                        
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="card login-signup-card shadow-lg mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h6 class="h3">Add Course</h6>
                            </div>
                            <div id="infoafter"></div>

                            <form method="POST" action="{{route('register-post')}}" class="login-signup-form" id="registerForm" data-r="{{route('adminPanel')}}" enctype="multipart/form-data" >
                                @csrf                               
                                <div class="form-group">
                                    <label class="pb-1">
                                    Title

                                    </label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <input id="firstname" type="text" class="form-control" name="firstname" value=""  autocomplete="name" autofocus pattern="[a-zA-Z]{2,50}" required> 
                                        
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="pb-1">
                                    Field of Course
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <select name="cars" id="cars" class="form-control">
                                            <option value="volvo">Computer Sciences</option>
                                            <option value="saab">Chimistry</option>
                                            <option value="mercedes">Psychology</option>
                                            <option value="audi">Other</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="pb-1">
                                    Files or videos
                                    </label>
                                    <div class="input-group input-group-merge">
                                        
                                        <!-- <input type="file"   class="form_submit_button button trans_200" required>
                                        <img  id="previewImg" class="img-fluid float-center" width="200" src="{{ url('/uploads') }}/"> -->
                                        <input type="file" name="files[]" multiple />
                                        <div class="filenames"></div>


                                        <!-- to load in laravel


                                        1)
                                        $files = $request->file('attachment');

                                        if($request->hasFile('attachment'))
                                        {
                                            foreach ($files as $file) {
                                                $file->store('users/' . $this->user->id . '/messages');
                                            }
                                        }

                                        or 2)

                                        public function fileUpload(Request $request)
                                        {
                                            if ($request->hasfile('filenames')) {
                                                foreach ($request->file('filenames') as $file) {
                                                    $name = $file->getClientOriginalName();
                                                    $file->move(public_path() . '/mytestfile/', $name);
                                                    $data[] = $name;
                                                }
                                                return back()->with('Success!','Data Added!');
                                            }
                                        } -->


                                        
                                    </div>
                                    
                                </div>

                                <button class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3" id="registerButton" disabled>
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

        $(document).ready(function() {
            $(function() {
                $('input:file').change(function(){
                    for(var i = 0 ; i < this.files.length ; i++){
                    var fileName = this.files[i].name;
                    $('.filenames').append('<div class="name">' + (i+1)+'-->'+fileName + '</div>');
                    }
                });
            });

            
            $('#password-confirm').keyup(function(event){

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
                if( $('#registerForm').get(0).checkValidity()== true){
                    $('#registerButton').prop('disabled',false);
                }
                else{
                    $('#registerButton').prop('disabled',true);
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
                if( $('#registerForm').get(0).checkValidity()== true){
                    $('#registerButton').prop('disabled',false);
                }
                else{
                    $('#registerButton').prop('disabled',true);
                }
            });

            
            $('#firstname,#lastname,#email').keyup(function(event){
                
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
                if( $('#registerForm').get(0).checkValidity()== true){
                    $('#registerButton').prop('disabled',false);
                }
                else{
                    $('#registerButton').prop('disabled',true);
                }
            });

            var request;
            $('#registerForm').submit(function(event) {
                event.preventDefault();
                if (request) {
                    request.abort();
                }
                var $form = $(this);
                var $inputs = $form.find('input');
                var formData = new FormData($form[0]);
                var oldregisterButtonVal = $('#registerButton').text();
                $('#registerButton').text('Registring ...');
                $inputs.prop('disabled', true);
                $('#registerButton').prop('disabled', true);
                $('#message').prop('disabled', true);
                request = $.ajax({
                    url: $form.attr('action'),
                    type: $form.attr('method'),
                    processData: false,
                    contentType: false,
                    data: formData
                });
               request.done(function(response, textStatus, jqXHR) {
                     if (response.success) {
                        //$('#infoafter').html("<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" >x</button>"+response.errors+"</div>");



                        Swal.fire({
                            title: 'Successfully Added!',
                            text: 'Welcome '+response.userName+' You will be redirected now ...',
                            type: 'success'
                        }).then((result) => {
                            window.location = $form.attr('data-r');
                        });	
                        
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
                    $('#message').prop('disabled', false);
                    $('#registerButton').prop('disabled', false);
                    $('#registerButton').text(oldregisterButtonVal);
                });
            });
        });
    </script>
    @endsection