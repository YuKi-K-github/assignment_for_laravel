$(function(){

    $('.user_name').click(function(){
        $('.logout').fadeIn();
        $('.close').fadeIn();
    })
    $('.close').click(function(){
        $('.logout').fadeOut();
        $('.close').fadeOut();
    })
})
