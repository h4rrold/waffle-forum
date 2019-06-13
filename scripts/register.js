$(document).ready(function () {
    let canSubmit = true;

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
                    canSubmit = false;
                    $(elem).show();
                }
                else  {
                    canSubmit = true;
                    $(elem).hide()
                }
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
                    canSubmit = false;
                    $(elem).show();
                }else{
                    canSubmit = true;
                    $(elem).hide();
                }
            }
        });
    });

    $('input[name=pas-in2]').focusout(function() {
        if($(this).val() !== $('input[name=pas-in]').val()){
            $(this).siblings('.input-item__text-error').show();
            canSubmit = false;
        } else {
            $(this).siblings('.input-item__text-error').hide();
            canSubmit = true;
        }
    });

    $('form').submit(function() {
        return canSubmit;
    })
});