

$(document).ready(function(){
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
    Galleria.loadTheme('js/galleria.classic.js');
    $(document).on('open.fndtn.reveal', '#hgse[data-reveal]', function () {    
        Galleria.run('.galleria.hgse');
    });

    $(document).on('open.fndtn.reveal', '#mbta[data-reveal]', function () { 
        Galleria.run('.galleria.mbta');
    });

    $(document).on('open.fndtn.reveal', '#musicene[data-reveal]', function () { 
        Galleria.run('.galleria.musicene');
    });
});