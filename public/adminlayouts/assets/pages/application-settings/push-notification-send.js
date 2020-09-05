String.prototype.trimEllip = function (length) {
	return this.length > length ? this.substring(0, length) + "..." : this;
  }
$(document).ready(function() {
	//preview
	function checkTime(i) {
        return (i < 10) ? "0" + i : i;
    }

    function startTime() {
        var today = new Date(),
            h = checkTime(today.getHours()),
            m = checkTime(today.getMinutes()),
            s = checkTime(today.getSeconds());
		document.getElementById('fulltime').innerHTML = h + ":" + m + ":" + s;
		document.getElementById('screentime').innerHTML = h + ":" + m;
		document.getElementById('today').innerHTML = today.toDateString();
        t = setTimeout(function () {
            startTime()
        }, 500);
    }
	startTime();
	$("#preTitle").text($('input[name="notification_title"]').val().trimEllip(25));
	$("#preMessage").text($('textarea[name="notification_message"]').val().trimEllip(25));
	
	$('input[name="notification_title"]').on("change keyup paste", function(){
		$("#preTitle").text($(this).val().trimEllip(40));
	});
	$('textarea[name="notification_message"]').on("change keyup paste", function(){
		$("#preMessage").text($(this).val().trimEllip(100));
	});

	$('input[name="notification_img"]').on("change", function(){
		var inputImg = this;
		if (inputImg.files && inputImg.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#previewImg').attr('src',e.target.result);
			};
			reader.readAsDataURL(inputImg.files[0]);
		}
		$('#previewImgP').fadeIn();
	});

	//IsChanged (For sweetalert confirmation)
$('form#sendNotification input').change(function() {
	isChanged = true;
});

$(".select2").select2();


    var request;
    //edit form
	$('#sendNotification').submit(function(event) {
		event.preventDefault();
		if (request) {
			request.abort();
		}
		var $form = $(this);
		var $inputs = $form.find('input');
		var formData = new FormData($form[0]);
		var oldsaveBtnVal = $('.saveBtn').val();
		$('.saveBtn').val('Sending notification please wait ...');
		$inputs.prop('disabled', true);
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
					title: 'Notification sent successfully!',
					text: 'Notification sent to '+response.recipients+' recipients !',
					type: 'success'
                }).then((result) => {
                    isChanged = false;
                });				
			} else if (response.errors) {
				Swal.fire({
					title: 'Errors occurred during the sending process !',
					html: response.errors,
					type: 'error'
				});
			} else {
				Swal.fire({
					title: 'Error E-300',
					text: 'An error occurred during the sending process !',
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
			$('.saveBtn').val(oldsaveBtnVal);
		});
	});
	
});
