
function formatState_select_flags (state) {
	if (!state.id) {
	  return state.text;
	}
	var $state = $(
	  '<span><span class="flag flag-'+state.element.value.toLowerCase()+'"></span>' + state.text + '</span>'
	);
	return $state;
  };
  function formatState_select_gender (state) {
	if (!state.id) {
	  return state.text;
	}
	var $state = $(
	  '<span><span class="iconGender fas fa-'+((state.element.value == "M")?'male':'female')+'"></span>' + state.text + '</span>'
	);
	return $state;
  };

  jQuery.browser = {};
  (function () {
	  jQuery.browser.msie = false;
	  jQuery.browser.version = 0;
	  if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
		  jQuery.browser.msie = true;
		  jQuery.browser.version = RegExp.$1;
	  }
  })();
 
$(document).ready(function() {
	$('input.alloptions').maxlength({
	alwaysShow: true,
	warningClass: "badge badge-success",
	limitReachedClass: "badge badge-danger",
	separator: ' out of ',
	preText: 'You typed ',
	postText: ' chars available.',
	validate: true
});
$(".select-flags").select2({
	templateResult: formatState_select_flags,
	templateSelection: formatState_select_flags
  });
  $(".select-gender").select2({
	templateResult: formatState_select_gender,
	templateSelection: formatState_select_gender
  });
$('.profilePictureChange .buttonText').text("Change picture");
$('input[name="img"]').on("change", function(){
	var inputImg = this;
	if (inputImg.files && inputImg.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#previewImg').attr('src',e.target.result);
		};
		reader.readAsDataURL(inputImg.files[0]);
	}
	$('.divPreview').fadeIn();
});

//IsChanged (For sweetalert confirmation)
$('form#editAccount input,form#editAccount select').change(function() {
	isChanged = true;
});
});
$(document).ready(function() {
    var request;
    //Edit account
	$('#editAccount').submit(function(event) {
		event.preventDefault();
		if (request) {
			request.abort();
		}
		var $form = $(this);
		var $inputs = $form.find('input');
		var formData = new FormData($form[0]);
		var oldsaveBtnVal = $('.saveBtn').val();
		$('.saveBtn').val('Saving please wait ...');
		$inputs.prop('disabled', true);
		$('select').prop('disabled', true);
		$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
		request = $.ajax({
			url: $form.attr('action'),
			type: 'post',
			processData: false,
			contentType: false,
			data: formData
		});
		request.done(function(response, textStatus, jqXHR) {
			if (response.status == 'true') {
				Swal.fire({
					title: 'Account updated successfully!',
					text: 'Your account has been updated!',
					type: 'success'
                }).then((result) => {
					isChanged = false;
                    if ($form.attr('data-redirect') != "#") window.location = $form.attr('data-redirect');
                });				
			} else if (response.errors) {
				Swal.fire({
					title: 'Errors occurred during the update process !',
					html: response.errors,
					type: 'error'
				});
			} else {
				Swal.fire({
					title: 'Error E-300',
					text: 'An error occurred during the update process !',
					type: 'error'
				});
			}
		});

		request.fail(function(jqXHR, textStatus, errorThrown) {
			Swal.fire({
				title: 'The following error occurred: ',
				text: textStatus + ' : ' + errorThrown,
				type: 'error'
			});
		});
		request.always(function() {
			$inputs.prop('disabled', false);
			$('input[name="url"]').prop('disabled', true);
			$('.bootstrap-filestyle input').prop('disabled', true);
			$('select').prop('disabled', false);
			$('.saveBtn').val(oldsaveBtnVal);
		});
	});
	//Edit password
	$('#editPassword').submit(function(event) {
		event.preventDefault();
		if (request) {
			request.abort();
		}
		var $form = $(this);
		var $inputs = $form.find('input');
		var formData = new FormData($form[0]);
		var oldsaveBtnVal = $('.changePasswordBtn').val();
		$('.changePasswordBtn').val('Changing please wait ...');
		$inputs.prop('disabled', true);
		$('select').prop('disabled', true);
		$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
		request = $.ajax({
			url: $form.attr('action'),
			type: 'post',
			processData: false,
			contentType: false,
			data: formData
		});
		request.done(function(response, textStatus, jqXHR) {
			if (response.status == 'true') {
				Swal.fire({
					title: 'Password updated successfully!',
					text: 'Your password has been updated!',
					type: 'success'
                }).then((result) => {
					isChanged = false;
                    if ($form.attr('data-redirect') != "#") window.location = $form.attr('data-redirect');
                });				
			} else if (response.errors) {
				Swal.fire({
					title: 'Errors occurred during the update process !',
					html: response.errors,
					type: 'error'
				});
			} else {
				Swal.fire({
					title: 'Error E-300',
					text: 'An error occurred during the update process !',
					type: 'error'
				});
			}
		});

		request.fail(function(jqXHR, textStatus, errorThrown) {
			Swal.fire({
				title: 'The following error occurred: ',
				text: textStatus + ' : ' + errorThrown,
				type: 'error'
			});
		});
		request.always(function() {
			$inputs.prop('disabled', false);
			$('.bootstrap-filestyle input').prop('disabled', true);
			$('select').prop('disabled', false);
			$('.changePasswordBtn').val(oldsaveBtnVal);
		});
	});
	
});
