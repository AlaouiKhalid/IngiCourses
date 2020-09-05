$(document).ready(function() {

    var account = $('.select2').select2({ minimumResultsForSearch: -1 });
    $(".select3").select2({ minimumResultsForSearch: -1 });

    if (account.val() == "personal") {
        $('input[name="app_id"]').prop('disabled', false);
    } else {
        $('input[name="app_id"]').prop('disabled', true);
    }
    account.on("change", function() {
        if ($(this).val() == "personal") {
            $('input[name="app_id"]').prop('disabled', false);
            $('.app_status').hide();
        } else {
            $('input[name="app_id"]').prop('disabled', true);
            $('input[name="app_id"]').val($('input[name="app_id"]').attr('package'));
            $('input[name="application_link"]').val('https://play.google.com/store/apps/details?id=' + $('input[name="app_id"]').val());
            $('.app_status').show();
        }
    });
    $('input[name="application_link"]').val('https://play.google.com/store/apps/details?id=' + $('input[name="app_id"]').val());
    $('input[name="app_id"]').on("change", function() {
        $('input[name="application_link"]').val('https://play.google.com/store/apps/details?id=' + $('input[name="app_id"]').val());
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