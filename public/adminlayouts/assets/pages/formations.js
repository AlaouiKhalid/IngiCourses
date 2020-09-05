//delete function
function deleteFormation(actionUrl,formation_id,Row) {
    var requestDelete;
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
	requestDelete = $.ajax({
		url: actionUrl,
        type: 'post',
        data:{id:formation_id}
	});
	requestDelete.done(function(response, textStatus, jqXHR) {
		if (response.status == 'true') {
			Swal.fire({
				title: 'Formation deleted successfully!',
				html: 'Formation : ' + response.f_title + '<br> has been deleted !',
				type: 'success'
            });
            Row.remove();
		} else {
			Swal.fire({
				title: 'Error on deleting!',
				text: 'An error occurred during the delete process !',
				type: 'error'
			});
		}
	});
	requestDelete.fail(function(jqXHR, textStatus, errorThrown) {
		Swal.fire({
			title: 'The following error occurred: ',
			text: textStatus + ' : ' + errorThrown,
			type: 'error'
		});
	});
	requestDelete.always(function() {});
};
//
$(document).ready(function() {
    var request;
    //Add form
	$('#addFormation').submit(function(event) {
		event.preventDefault();
		if (request) {
			request.abort();
		}
		var $form = $(this);
		var $inputs = $form.find('input');
		var formData = new FormData($form[0]);
		var oldsaveBtnVal = $('.saveBtn').val();
		$('.saveBtn').val('Adding new formation please wait ...');
		$inputs.prop('disabled', true);
		$('.summernote').summernote('disable');
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
					title: 'Formation added successfully!',
					text: 'New formation has been added!',
					type: 'success'
                }).then((result) => {
                    window.location = $form.attr('data-redirect');
                });				
			} else if (response.errors) {
				Swal.fire({
					title: 'Errors on adding new formation !',
					html: response.errors,
					type: 'error'
				});
			} else {
				Swal.fire({
					title: 'Error on adding!',
					text: 'An error occurred during the add process !',
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
			$('.summernote').summernote('enable');
			$('.saveBtn').val(oldsaveBtnVal);
		});
	});
    //Update form
	$('#updateFormation').submit(function(event) {
		event.preventDefault();
		if (request) {
			request.abort();
		}

		var $form = $(this);
		var $inputs = $form.find('input');
		var formData = new FormData($('#updateFormation')[0]);
		var oldsaveBtnVal = $('.saveBtn').val();
		$('.saveBtn').val('Saving please wait ...');
		$inputs.prop('disabled', true);
		$('.summernote').summernote('disable');
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
					title: 'Formation updated successfully!',
					text: 'All your changes have been saved !',
					type: 'success'
				});
				//isChanged for Sweetalert confirmation on returnBtn click
				isChanged = false;
				//If image changed
				if (response.imageName) {
					$('#previewImg').attr('src', $('#previewImg').attr('data-baseUrl') + response.imageName);
					$('.saveToPreview').fadeOut();
					$('#previewImg').fadeIn();
				}
			} else if (response.errors) {
				Swal.fire({
					title: 'Errors on updating!',
					html: response.errors,
					type: 'error'
				});
			} else {
				console.log(response.status);
				Swal.fire({
					title: 'Error on updating!',
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
			$('.summernote').summernote('enable');
			$('.saveBtn').val(oldsaveBtnVal);
		});
	});
    //Delete button
	$('.deleteBtn').click(function() {
        var Row = $(this).closest('tr');
        var action = $(this).attr('data-action');
        var formation_id = $(this).attr('data-id');
		Swal.fire({
			title: 'Are you sure?',
			text: 'Would you like to delete this formation ?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#ec4561',
			cancelButtonColor: '#02a499',
			confirmButtonText: 'Yes, delete it!'
		}).then(function(result) {
			if (result.value) {
				deleteFormation(action,formation_id,Row);
			}
		});
	});
});
