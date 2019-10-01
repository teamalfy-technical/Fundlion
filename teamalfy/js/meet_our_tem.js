$('.team_cv').hide();
$('.team_img_overlay').hide();
$('.team_img_overlay_txt').hide();

$('.team_img').hover(function (){
    $(this).children().fadeToggle();
    
});

// $('.team_img').click(function () {    
//     $(this).children().fadeToggle();   
// });

// ceo
$("#ceo_img").click(function () {
    $('#ceo_cv').fadeToggle();
});

// david
$("#david_img").click(function () {
    $('#david_cv').fadeToggle('slow');
});

//sriv
$("#sriv_img").click(function () {
    $('#sriv_cv').fadeToggle('slow');
});

//jasneet
$("#jasneet_img").click(function () {
    $('#jasneet_cv').fadeToggle('slow');
});

//jonathan
$("#jonathan_img").click(function () {
    $('#jonathan_cv').fadeToggle('slow');
});