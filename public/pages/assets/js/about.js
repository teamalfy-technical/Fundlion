$(function () {
    $('#about_header').load('header.html');
    // $('#about_hero').load('hero.html');
    // $('#hero_head').html('ABOUT US');
    // console.log($('#hero_head').html());

    $('.dropdown-toggle').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
        
})