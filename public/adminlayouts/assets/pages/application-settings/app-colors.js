
 $(document).ready(function() {
	$('#colorpicker-color-pattern').colorpicker({
	format: 'hex'
});
$('#colorpicker-color-pattern2').colorpicker({
	format: 'hex'
});
	$('.linearGradient').css('background','linear-gradient(135deg, '+$('#colorpicker-color-pattern').colorpicker('getValue', '#ffffff')+' , '+$('#colorpicker-color-pattern2').colorpicker('getValue', '#ffffff')+')')
	$('#colorpicker-color-pattern,#colorpicker-color-pattern2').colorpicker().on('changeColor', function() {
		$('.firstColor').val($('#colorpicker-color-pattern').colorpicker('getValue', '#ffffff'));
		$('.secondColor').val($('#colorpicker-color-pattern2').colorpicker('getValue', '#ffffff'));
		$('.linearGradient').css('background','linear-gradient(135deg, '+$('#colorpicker-color-pattern').colorpicker('getValue', '#ffffff')+' , '+$('#colorpicker-color-pattern2').colorpicker('getValue', '#ffffff')+')');
		isChanged = false;
	});

	
});
$(document).ready(function() {
    var request;
    //Add form
	$('#app-colors').submit(function(event) {
		event.preventDefault();
		if (request) {
			request.abort();
		}
		var $form = $(this);
		var $inputs = $form.find('input');
		var formData = new FormData($form[0]);
		var oldsaveBtnVal = $('.saveBtn').val();
		$('.saveBtn').val('Editing colors please wait ...');
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
					title: 'Colors updated successfully!',
					text: 'New colors has been updated!',
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
			$('.saveBtn').val(oldsaveBtnVal);
		});
	});
	
});
