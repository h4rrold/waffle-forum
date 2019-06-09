$( document ).ready(function() {

    $( ".cross" ).hide();
    $( ".menu" ).hide();
    $( ".button__burger" ).click(function() {
   
    $( ".nav__menu_drop").slideToggle( "slow", function() {
        $( ".block-users-buttons" ).show(); 
    $( ".button__burger" ).hide();
    $( ".button__cross" ).show();
   
    
    });
    });
    
    $( ".button__cross" ).click(function() {
    $( ".nav__menu_drop" ).slideToggle( "slow", function() {
        $( ".block-users-buttons" ).hide(); 
    $( ".button__cross" ).hide();
    $( ".button__burger" ).show();
    });
    });
    

    $(".community-menu__button-up_drop").hide();
    $(".community-menu_drop").hide();
    $(".community-menu__button-down_drop").click(function(){
        $(".community-menu_drop").slideToggle("slow", function () {
            $(".community-menu__button-down_drop").hide();
            $(".community-menu__button-up_drop").show();
          });
    });
    $(".community-menu__button-up_drop").click(function () {
        $(".community-menu_drop").slideToggle("slow", function () {
            $(".community-menu__button-up_drop").hide();
            $(".community-menu__button-down_drop").show();
            
          });
    });

    $(".rate-post__button").click(function () { 
        $(".community-menu_drop").slideToggle(400, function () {
            $(".rate-post").hide();
            $('.rate-post_result').css('display', 'flex');
          });
        
    });
    
    });