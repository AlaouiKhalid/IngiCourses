$(document).ready(function() {
	$('.btnEditSocialLink').click(function(){
		$(this).text("Redirecting please wait ...");
		window.location = $(this).attr('data-edit');
	});
	//IsChanged (For sweetalert confirmation)
$('form#editSocialLinks input').change(function() {
	isChanged = true;
});

if($("#datatable").length > 0) {
	$('#datatable').dataTable( {
		"searching": false,
		'paging':false,
		"bInfo" : false,
	  } );
  }


    var request;
    //edit form
	$('#editSocialLinks').submit(function(event) {
		event.preventDefault();
		if (request) {
			request.abort();
		}
		var $form = $(this);
		var $inputs = $form.find('input');
		var formData = new FormData($form[0]);
		var oldsaveBtnVal = $('.saveBtn').val();
		$('.saveBtn').val('Saving new social link ...');
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
					title: 'Social link updated successfully!',
					text: 'New social link has been updated!',
					type: 'success'
                }).then((result) => {
					isChanged = false;
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

$(document).ready(function() {
    //Delete button
	$('.deleteBtn').click(function() {
        var action = $(this).attr('data-action');
		var formation_id = $(this).attr('data-id');
		var linkReturn = $(this).attr('data-return');
		Swal.fire({
			title: 'Are you sure?',
			text: 'Would you like to desactivate this social link ?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#ec4561',
			cancelButtonColor: '#02a499',
			confirmButtonText: 'Yes, desactivate it!'
		}).then(function(result) {
			if (result.value) {
				deleteMenu(action,formation_id,linkReturn);
			}
		});
	});
	function deleteMenu(actionUrl,menu_id,linkReturn = false) {
		var requestDelete;
		$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
		requestDelete = $.ajax({
			url: actionUrl,
			type: 'post',
			data:{id:menu_id}
		});
		requestDelete.done(function(response, textStatus, jqXHR) {
			if (response.status == 'true') {
				Swal.fire({
					title: 'Social link desactivated successfully!',
					html: 'Social link : ' + response.s_title + '<br> has been desactivated !',
					type: 'success'
				}).then(function(result) {
					if(linkReturn) {
						window.location = linkReturn;
					}
				});				
			} else {
				Swal.fire({
					title: 'Error on desactivating!',
					text: 'An error occurred during the desactivation process !',
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

});
