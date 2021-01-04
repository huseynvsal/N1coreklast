$(document).on('click','#send_message',function(){
    var formData = new FormData($('#add_message')[0]);
    $.ajax({
        type: "POST",
        url: "add_message",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Mesaj göndərildi');
                $('input[name=name]').val('');
                $('input[name=email]').val('');
                $('input[name=phone]').val('');
                $('textarea[name=message]').val('');
                $('input[name=image]').val('');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});
