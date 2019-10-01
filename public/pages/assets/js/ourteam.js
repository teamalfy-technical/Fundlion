// ceo
$('#ceo_img').popover({
    placement: 'right',
    html: true,
    trigger: 'click',
    title: function () {
        return $('#ceo_title').html();
    },
    content: function () {
        return $('#ceo_cv').html();
    }

});   

// david
$('#david_img').popover({
    placement: 'left',
    html: true,
    trigger: 'click',
    title: function () {
        return $('#david_title').html();
    },
    content: function () {
        return $('#david_cv').html();
    }
});   

// Sriv
$('#sriv_img').popover({
    placement: 'left',
    html: true,
    trigger: 'click',
    title: function () {
        return $('#sriv_title').html();
    },
    content: function () {
        return $('#sriv_cv').html();
    }
});   

// jasneet
$('#jasneet_img').popover({
    placement: 'right',
    html: true,
    trigger: 'click',
    title: function () {
        return $('#jasneet_title').html();
    },
    content: function () {
        return $('#jasneet_cv').html();
    }
});   

// jonathan
$('#jonathan_img').popover({
    placement: 'right',
    html: true,
    trigger: 'click',
    title: function () {
        return $('#jonathan_title').html();
    },
    content: function () {
        return $('#jonathan_cv').html();
    }
});   

$(document).on("click", ".popover .team_info_close", function () {
    $(this).parents(".popover").popover('hide');
});













$('.team_cv').hide();
$('.team_img_overlay').hide();
$('.team_img_overlay_txt').hide();

// $('.team_img').hover(function (){
    // $(this).children().fadeToggle();
// });

// ceo
$("#ceo_img").click(function () {
    $('#ceo_cv').fadeToggle('slow');
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