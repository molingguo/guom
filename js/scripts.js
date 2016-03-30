

$(document).ready(function(){

    //slider
    $("#workslider").PikaChoose();
    $('.work-filter ul a.button').click(function() {
        $('.work-filter ul a.button').removeClass('active');
        $(this).addClass('active');
        currentCategory=$(this).attr('rel');
        $('.workPortfolio ul li').each(function() {
            if(currentCategory == 'all') {
                $(this).removeClass('inactive');
            } else if ($(this).hasClass(currentCategory)) {
                $(this).removeClass('inactive');
            } else {
                $(this).addClass('inactive');
            }
        })
    });
});