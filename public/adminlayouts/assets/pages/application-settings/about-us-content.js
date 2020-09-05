$(document).ready(function() {
	//IsChanged (For sweetalert confirmation)
$('form#about-us-content textarea').change(function() {
	isChanged = true;
});

    var request;
    //edit form
	$('#about-us-content').submit(function(event) {
		event.preventDefault();
		if (request) {
			request.abort();
		}
		var $form = $(this);
		var $inputs = $form.find('input');
		var formData = new FormData($form[0]);
		var oldsaveBtnVal = $('.saveBtn').val();
		$('.saveBtn').val('Saving new content ...');
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
					title: 'Content updated successfully!',
					text: 'New about us content has been updated!',
					type: 'success'
                }).then((result) => {
                    isChanged = false;
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
