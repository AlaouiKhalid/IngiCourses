/*
 Template Name: Veltrix - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 Website: www.themesbrand.com
 File: Main js
 */


!function($) {
    "use strict";

    var MainApp = function () {
        this.$body = $("body"),
            this.$wrapper = $("#wrapper"),
            this.$btnFullScreen = $("#btn-fullscreen"),
            this.$leftMenuButton = $('.button-menu-mobile'),
            this.$menuItem = $('.has_sub > a')
    };

    MainApp.prototype.intSlimscrollmenu = function () {
        $('.slimscroll-menu').slimscroll({
            height: 'auto',
            position: 'right',
            size: "8px",
            color: '#FFFFFF',
            opacity : .8,
            alwaysVisible : true,
            wheelStep: 5,
            touchScrollStep: 50,
        });

        
    },
    MainApp.prototype.initSlimscroll = function () {
        $('.slimscroll').slimscroll({
            height: 'auto',
            position: 'right',
            size: "5px",
            color: '#9ea5ab',
            touchScrollStep: 50
        });
    },

    MainApp.prototype.initMetisMenu = function () {
        //metis menu
        $("#side-menu").metisMenu();
    },

    MainApp.prototype.initLeftMenuCollapse = function () {
        // Left menu collapse
        $('.button-menu-mobile').on('click', function (event) {
            event.preventDefault();
            $("body").toggleClass("enlarged");
        });
    },

    MainApp.prototype.initEnlarge = function () {
        if ($(window).width() < 1025) {
            $('body').addClass('enlarged');
        } else {
            $('body').removeClass('enlarged');
        }
    },

    MainApp.prototype.initActiveMenu = function () {
        // === following js will activate the menu in left side bar based on url ====
        $("#sidebar-menu a").each(function () {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("mm-active");
                $(this).parent().addClass("mm-active"); // add active to li of the current link
                $(this).parent().parent().addClass("mm-show");
                $(this).parent().parent().prev().addClass("mm-active"); // add active class to an anchor
                $(this).parent().parent().parent().addClass("mm-active");
                $(this).parent().parent().parent().parent().addClass("mm-show"); // add active to li of the current link
                $(this).parent().parent().parent().parent().parent().addClass("mm-active");
            }
        });
    },

    MainApp.prototype.initComponents = function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
    },

    //full screen
    MainApp.prototype.initFullScreen = function () {
        var $this = this;
        $this.$btnFullScreen.on("click", function (e) {
            e.preventDefault();

            if (!document.fullscreenElement && /* alternative standard method */ !document.mozFullScreenElement && !document.webkitFullscreenElement) {  // current working methods
                if (document.documentElement.requestFullscreen) {
                    document.documentElement.requestFullscreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullscreen) {
                    document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                }
            } else {
                if (document.cancelFullScreen) {
                    document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
            }
        });
    },



    MainApp.prototype.init = function () {
        this.intSlimscrollmenu();
        this.initSlimscroll();
        this.initMetisMenu();
        this.initLeftMenuCollapse();
        this.initEnlarge();
        this.initActiveMenu();
        this.initComponents();
        this.initFullScreen();
        Waves.init();
    },

    //init
    $.MainApp = new MainApp, $.MainApp.Constructor = MainApp
}(window.jQuery),

//initializing
function ($) {
    "use strict";
    $.MainApp.init();
}(window.jQuery);

//select app
var request_app;
var application_id;
$('.selectUserApp').click(function(event){
    event.preventDefault();
    application_id = $(this).attr('app-id');
    var oldValDD = $('.selectUserAppSelected').text();
    $('.selectUserAppSelected').text('Changing app please wait ...');
    if (request_app) {
        request_app.abort();
    }
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
    request_app = $.ajax({
			url: $('.selectUserAppDropDown').attr('data-url'),
			type: 'post',
			data:{'application_id':application_id}
		});
		request_app.done(function(response, textStatus, jqXHR) {
			if (response.status == 'true') {
				location.reload();				
			} else if (response.errors) {
                $('.selectUserAppSelected').text(oldValDD);
				Swal.fire({
					title: 'Errors occurred !',
					html: response.errors,
					type: 'error'
				});
			} else {
                $('.selectUserAppSelected').text(oldValDD);
				Swal.fire({
					title: 'Error E-300',
					text: 'An error occurred !',
					type: 'error'
				});
			}
		});

		request_app.fail(function(jqXHR, textStatus, errorThrown) {
            $('.selectUserAppSelected').text(oldValDD);
			Swal.fire({
				title: 'The following error occurred: ',
				text: textStatus + ' : ' + errorThrown,
				type: 'error'
			});
		});
});

//Setting Button
var isChanged = false;
var isReturnBtn = false;
$(document).ready(function() {

    //$('.slimscroll-menu').slimScroll({scrollTo: ($('li.mm-active').position().top / 2)+"px"});
    $htmlContent = "<i class=\"fa fa-hourglass mr-2\"></i> Redirecting please wait...";
    $urlRedirection = true;
        $(".btnSetting").click(function(event){
                $(this).html($htmlContent);
                window.location.href = $(this).data("url");
        });
        jQuery(window).bind('beforeunload', function(){
            if(isChanged && !isReturnBtn){
                return 'Would you like to leave this page without saving ?';
            }
            
        });
        $(".returnBtn").click(function(event){
            $returnBtn = $(this);
            isReturnBtn = true;
            if(isChanged){
                Swal.fire({
                    title: "Are you sure?",
                    text: "Would you like to leave this page without saving ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#ec4561",
                    cancelButtonColor: "#02a499",
                    confirmButtonText: "Yes, leave it!"
                  }).then(function (result) {
                    if (result.value) {
                        $returnBtn.html($htmlContent);
                        window.location.href = $returnBtn.data("url");
                    }
                    else{
                        isReturnBtn = false;
                    }
                });
            }
            else {
                $returnBtn.html($htmlContent);
                window.location.href = $returnBtn.data("url");
            }

        });
    });