import jQuery from 'jquery';

function darkLightStats() {

    $(".switchStats__switcherGroup a").each(function() {
        $(this).on("click", function(e){
            e.preventDefault();
            jQuery(".switchStats").toggleClass('light');
            $(this).addClass('active');
            jQuery(".switchStats__listCarousel").toggleClass('light');
            
        });
    });
}

export { darkLightStats };
