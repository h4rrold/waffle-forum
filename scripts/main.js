$(document).ready(function () {

    $(".button__burger").click(function () {
        $('.button__cross').css('pointer-events', 'none');
        $(".nav__menu_drop").slideToggle("slow", function () {
            $(".block-users-buttons").show();
            $('.button__cross').css("pointer-events", "auto");
        });
        $(this).hide();
        $(".button__cross").show();

    });

    $(".button__cross").click(function () {
        $(this).css('pointer-events', 'none')
        $(".block-users-buttons").hide();
        $(".nav__menu_drop").slideToggle("slow", function () {
            $(".button__cross").hide();
            $(".button__burger").show();
            $(this).css('pointer-events', 'auto');
        });
    });

    $('.search').children().on('submit', function(e) {
        e.preventDefault();
        let seek_string = $(this).children('input').val();
        window.location = '/waffle-forum/community/seek/'+seek_string;
    });



    $(".community-menu__button-drop").click(function () {
        $(this).css('pointer-events', 'none');
        if ($(this).children('i').hasClass('fa-chevron-up')) {
            $(this).children('i').removeClass('fa-chevron-up');
            $(this).children('i').addClass('fa-chevron-down');
        } else if ($(this).children('i').hasClass('fa-chevron-down')) {
            $(this).children('i').removeClass('fa-chevron-down');
            $(this).children('i').addClass('fa-chevron-up');
        }
        $(".community-menu_drop").slideToggle("slow", function () {
            $('.community-menu__button-drop').css('pointer-events', 'auto');
        });

    });


    $(".rate-post__button").click(function () {
        let container = $(this).closest('.post-content__rate-post');

        let inc = $(this).data('inc');
        let user_id = $(this).parent().data('user_id');
        let post_id = $(this).closest('.discussion__post').data('post_id');
        $.ajax({
            url: '/community/categories/increaseRatingByUserVote',
            data: {
                inc: inc,
                post_id: post_id
            },
            dataType: 'Text',
            method: 'POST',
            success: function (data) {
                $(container).children(".rate-post_result").slideToggle(200);
                $(container).children('.rate-post').hide();
                $(container).children('.rate-post_result').css('display', 'flex');
                $(container).find('.rate-post__text_result').html(data);
                if(inc === 1){
                    $(container).find('.stat-post__positive').html(+$(container).find('.stat-post__positive').html() + 1)
                } else {
                    $(container).find('.stat-post__negative').html(+$(container).find('.stat-post__negative').html() + 1)
                }
            }
        })
    });

    $('.last-post-topic__text').each(function () {

        $(this).text(function () {
            let tLength = $(this).text().length;
            return $(this).text().substring(0, 75) + (tLength > 75 ? '...' : '');
        });
    });

    /*WusiBb init */

    var wbbOpt = {
        buttons: "bold,italic,underline,|,img,link,|,code,quote"
    };
    $(function () {
        $("#editor").wysibb(wbbOpt);
    });

});