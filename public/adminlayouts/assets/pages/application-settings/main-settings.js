
function formatState2 (state) {
	if (!state.id) {
	  return state.text;
	}
	var baseUrl = $('#editMainSettings').attr('base-url');
	var $state = $(
	  '<span><img src="' + baseUrl + '/androidFiles/images/button/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
	);
	return $state;
  };
  function formatState3 (state) {
	if (!state.id) {
	  return state.text;
	}
	var baseUrl = $('#editMainSettings').attr('base-url');
	var $state = $(
	  '<span><img src="' + baseUrl + '/androidFiles/images/loader/' + state.element.value.toLowerCase() + '.gif" class="img-flag" /> ' + state.text + '</span>'
	);
	return $state;
  };
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
$(".select2").select2();
$(".select3").select2({
	templateResult: formatState2,
	templateSelection: formatState2
  });
  $(".select4").select2({
	templateResult: formatState3,
	templateSelection: formatState3
  });

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
$('form#editMainSettings input,form#editMainSettings select').change(function() {
	isChanged = true;
});
});
$(document).ready(function() {
    var request;
    //Add form
	$('#editMainSettings').submit(function(event) {
		event.preventDefault();
		if (request) {
			request.abort();
		}
		var $form = $(this);
		var $inputs = $form.find('input');
		var formData = new FormData($form[0]);
		var oldsaveBtnVal = $('.saveBtn').val();
		$('.saveBtn').val('Editing settings please wait ...');
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
					title: 'Settings updated successfully!',
					text: 'New settings has been updated!',
					type: 'success'
                }).then((result) => {
                    window.location = $form.attr('data-redirect');
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
	
});
