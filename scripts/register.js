$(document).ready(function () {
    $('input[type=email]').focusout(function()
    {
        $.ajax({
            url: '/waffle-forum/emailExists',
            data: {
                email: $(this).val()
            },
            dataType: 'Text',
            method: 'POST',
            success: function(data) {
                var result =JSON.parse(data);
                if(result.res == false)
                {
                    $('.input-item__text-error#email').show();
                }
                else  $('.input-item__text-error#email').hide();
            }
        });
    });
});