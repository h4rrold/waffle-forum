
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
        $(this).css('pointer-events', 'none');
        $(".nav__menu_drop").slideToggle("slow", function () {
            $(".block-users-buttons").hide();
            $(".button__cross").hide();
            $(".button__burger").show();
            $(this).css('pointer-events', 'auto');
        });
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
        $(".rate-post_result").slideToggle(200);
        $(".rate-post").hide();
        $('.rate-post_result').css('display', 'flex');
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
        }
    $(function() {
        $("#editor").wysibb(wbbOpt);
      })
      
});