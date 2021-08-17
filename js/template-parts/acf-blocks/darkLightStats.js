import jQuery from 'jquery';

function darkLightStats() {

    // $(".switchStats__switcherGroup a").each(function() {
    //     $(this).on("click", function(e){
    //         e.preventDefault();
    //         jQuery(".switchStats").toggleClass('light');
    //         $(this).toggleClass('active');
    //         jQuery(".switchStats__listCarousel").toggleClass('light');
            
    //     });
    //     $("switchStats.light .switchStats__switcherGroup a").hover(function() {
    //         $(this).removeClass('active');
    //     });
    // });
    $(".switchStats__switcherGroup a.two").on("click", function(e){
        $(this).addClass('active');
        $(".switchStats__switcherGroup a.one").removeClass('active');
        jQuery(".switchStats").toggleClass('light');
        jQuery(".switchStats__listCarousel").toggleClass('light');
    });
    $(".switchStats__switcherGroup a.one").on("click", function(e){
        $(this).addClass('active');
        $(".switchStats__switcherGroup a.two").removeClass('active');
        jQuery(".switchStats").toggleClass('light');
        jQuery(".switchStats__listCarousel").toggleClass('light');
    });
    $(".switchStats__switcherGroup a.one").hover(function(e){
        $(".switchStats__switcherGroup a.two").removeClass('active');
        $(this).addClass('active');
    });
    $(".switchStats__switcherGroup a.two").hover(function(e){
        $(".switchStats__switcherGroup a.one").removeClass('active');
        $(this).addClass('active');
    });
    $(".light .switchStats__switcherGroup").mouseleave(function(e){
        $(".switchStats__switcherGroup a.two").addClass('active');
    });

}

export { darkLightStats };
