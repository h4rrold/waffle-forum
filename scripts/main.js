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
        if($(this).children('i').hasClass('fa-chevron-up')){
            $(this).children('i').removeClass('fa-chevron-up');
            $(this).children('i').addClass('fa-chevron-down');
        } else if($(this).children('i').hasClass('fa-chevron-down')){
            $(this).children('i').removeClass('fa-chevron-down');
            $(this).children('i').addClass('fa-chevron-up');
        }
        $(".community-menu_drop").slideToggle("slow", function() {
            $('.community-menu__button-drop').css('pointer-events', 'auto');
        });

    });


    $(".rate-post__button").click(function () {
        $(".community-menu_drop").slideToggle(400, function () {
            $(".rate-post").hide();
            $('.rate-post_result').css('display', 'flex');
        });

    });

});