$(document).ready(function () {
    $('input[type=email]').focusout(function()
    {
        let elem = $(this).siblings('.input-item__text-error');
        $.ajax({
            url: '/waffle-forum/emailExists',
            data: {
                email: $(this).val()
            },
            method: 'POST',
            success: function(data) {
                if(!(+data))
                {
                    $(elem).show();
                }
                else  $(elem).hide();
            }
        });


    });

    $('input[name=nick-in]').focusout(function() {
        let elem = $(this).siblings('.input-item__text-error');
        $.ajax({
            url: '/waffle-forum/nickExists',
            data: {
                nick: $(this).val()
            },
            method: 'POST',
            success: function(data) {
                if(!(+data)){
                    $(elem).show();
                }else{
                    $(elem).hide();
                }
            }
        });
    });

    $('input[name=pas-in2]').focusout(function() {
        if($(this).val() !== $('input[name=pas-in]').val()){
            $(this).siblings('.input-item__text-error').show();
        } else {
            $(this).siblings('.input-item__text-error').hide();
        }
    });
});