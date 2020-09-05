
function formatState (state) {
	if (!state.id) {
	  return state.text;
	}
	var baseUrl = ($('#addMenuList').attr('base-url') != null)?$('#addMenuList').attr('base-url') :$('#editMenuList').attr('base-url');
	var $state = $(
	  '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '" class="img-flag" /> ' + state.text + '</span>'
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
  
  $(".select2").select2({
	templateResult: formatState,
	templateSelection: formatState
  });

  isChanged = false;
});
$(document).ready(function() {
    var request;
    //Add form
	$('#addMenuList').submit(function(event) {
		event.preventDefault();
		if (request) {
			request.abort();
		}
		var $form = $(this);
		var $inputs = $form.find('input');
		var formData = new FormData($form[0]);
		var oldsaveBtnVal = $('.saveBtn').val();
		$('.saveBtn').val('Adding new link please wait ...');
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
					title: 'New link added successfully!',
					text: 'New link has been added!',
					type: 'success'
                }).then((result) => {
                    window.location = $form.attr('data-redirect');
                });				
			} else if (response.errors) {
				Swal.fire({
					title: 'Errors occurred during the add process !',
					html: response.errors,
					type: 'error'
				});
			} else {
				Swal.fire({
					title: 'Error E-300',
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
			$('select').prop('disabled', false);
			$('.saveBtn').val(oldsaveBtnVal);
		});
	});
	
});
$(document).ready(function() {
    var request;
    //edit form
	$('#editMenuList').submit(function(event) {
		event.preventDefault();
		if (request) {
			request.abort();
		}
		var $form = $(this);
		var $inputs = $form.find('input');
		var formData = new FormData($form[0]);
		var oldsaveBtnVal = $('.saveBtn').val();
		$('.saveBtn').val('Editing link please wait ...');
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
					title: 'Editing done!',
					text: 'the link has been edited!',
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
			$('select').prop('disabled', false);
			$('.saveBtn').val(oldsaveBtnVal);
		});
	});
	
});
$(document).ready(function() {
    //Delete button
	$('.deleteBtn').click(function() {
		var Row = $(this).closest('tr');
        var action = $(this).attr('data-action');
		var formation_id = $(this).attr('data-id');
		var linkReturn = $(this).attr('data-return');
		Swal.fire({
			title: 'Are you sure?',
			text: 'Would you like to delete this link ?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#ec4561',
			cancelButtonColor: '#02a499',
			confirmButtonText: 'Yes, delete it!'
		}).then(function(result) {
			if (result.value) {
				deleteMenu(action,formation_id,Row,linkReturn);
			}
		});
	});
	function deleteMenu(actionUrl,menu_id,Row,linkReturn = false) {
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
					title: 'Link deleted successfully!',
					html: 'Link : ' + response.m_title + '<br> has been deleted !',
					type: 'success'
				}).then(function(result) {
					if(linkReturn) {
						window.location = linkReturn;
					}
				});
				if(!linkReturn) Row.remove();
				
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

});