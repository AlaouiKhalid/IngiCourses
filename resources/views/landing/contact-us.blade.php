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
                        <h1 class="text-white mb-0">Contact Us</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="{{url('/')}}/home">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Contact Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--contact us promo start-->
    <section class="contact-us-promo pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-mobile icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Call Us</h5>
                                <p class="text-muted mb-0">+123 456-78900</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-location-pin icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Visit Us</h5>
                                <p class="text-muted mb-0">New York, CA N310</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-email icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Mail Us</h5>
                                <p class="text-muted mb-0">help@yourdomain.com</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-headphone-alt icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Live Chat</h5>
                                <p class="text-muted mb-0">Chat with Us 24/7</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us promo end-->

    <!--contact us section start-->
    <section class="contact-us-section ptb-100">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="contact-us-form gray-light-bg rounded p-5">
                        <h4>Ready to get started?</h4>
                        <div id="infoafter"></div>
                        
                        <form method="POST" action="{{route('contact-post')}}" id="contact_form" class="contact-us-form">

                        {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required>
                                        
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <!--  -->
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                         
                                    </div>
                                </div>

                                

                                <div class="col-12">
                                    <div class="form-group">
                                        <!-- pattern="[0-9]{10,}" -->
                                        <input type="text" class="form-control" name="pnumber" id="pnumber" placeholder="Enter phonenumber" 
                                        pattern="\+?[0-9]{10,15}" required >
                                        
                                    </div>
                                </div>
                                

                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message" required></textarea>
                                        
                                    </div>
                                </div>
                                
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" name="saveBtn" disabled="true" id="saveBtn" class="btn secondary-solid-btn">
                                        Send Message
                                    </button>
                                </div>

                                


                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-content">
                        <h2>Looking for a excellent Business idea?</h2>
                        <p class="lead">Seamlessly deliver pandemic e-services and next-generation initiatives.</p>

                        <a href="#" class="btn outline-btn align-items-center">Get Directions <span class="ti-arrow-right pl-2"></span></a>

                        <hr class="my-5">

                        <h5>Our Headquarters</h5>
                        <address>
                            100 Yellow House, Mn <br>
                            Factory, United State, 13420
                        </address>
                        <br>
                        <span>Phone: +1234567890123</span> <br>
                        <span>Email: <a href="mailto:email@yourdomain.com" class="link-color">email@yourdomain.com</a></span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us section end-->

    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13246.385924809207!2d-5.5460491!3d33.9000448!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4c19a6d806991fb6!2sITSpot!5e0!3m2!1sfr!2sma!4v1592819175086!5m2!1sfr!2sma" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    
    </div>


</div>
@endsection
@section('customJS')
<script>
    $(document).ready(function() {
        $('#contact_form input,#contact_form textarea').keyup(function(event){
            
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

                if( $('#contact_form').get(0).checkValidity()== true){
                    $('#saveBtn').prop('disabled',false);
                }
                else{
                    $('#saveBtn').prop('disabled',true);
                }
        });
        var request;
        $('#contact_form').submit(function(event) {
            event.preventDefault();
            if (request) {
                request.abort();
            }
            var $form = $(this);
            var $inputs = $form.find('input');
            var formData = new FormData($form[0]);
            
            var oldsaveBtnVal = $('#saveBtn').text();
            $('#saveBtn').text('Sending please wait ...');
            $inputs.prop('disabled', true);
            $('#saveBtn').prop('disabled', true);
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
                    $('#infoafter').html("<div class=\"alert alert-success alert-block\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" >x</button><strong>Your message has been send!</strong></div>");
                    $('input, textarea').val("");
                    $('#saveBtn').prop('disabled',true);

                } else if (response.errors) {
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
                $('#saveBtn').prop('disabled', false);
                $('#saveBtn').text(oldsaveBtnVal);
            });
        });	
    });
</script>
@endsection