jQuery(function($){
    console.log('works');
    let mapBlock = $('.world-map');
    let map = $('#worldMap');
    let mapContainer = $('.world-map__container__inner');
    $('.world-map__popup').each(function(){
        let country = $(this).data('country');
        $('#'+country).addClass('active');
    });
    map.find('.map__countries .country').hover(function(event){
        let country = $(this);
        country.addClass('hover');
        let countryName = $(this).attr('id');
        setTimeout(function(){
            $('.world-map__popup').hide();

            var relX = event.pageX - mapContainer.offset().left;
            var relY = event.pageY;
            console.log(event.pageY,mapContainer.offset().top);
            var coord = {x: relX, y: relY };

            let currentPopup = $('.world-map__popup[data-country="'+countryName+'"]');
            let countryPosition = country.position();
            currentPopup.show();
            currentPopup.css('left',coord.x);
            currentPopup.css('top',coord.y);
        },400);
    },function(){
        let country = $(this);
        country.removeClass('hover');
        let countryName = $(this).attr('id');
        let currentPopup = $('.world-map__popup[data-country="'+countryName+'"]');
        currentPopup.hide();
    });
    mapBlock.find('.world-map__international__title,.world-map__international__img').hover(function(){
        let country = $(this).parent();
        let countryName = 'international';
        $('.world-map__popup').hide();
        let currentPopup = $('.world-map__popup[data-country="'+countryName+'"]');
        let countryPosition = country.position();
        currentPopup.show();
        currentPopup.css('bottom','30px');
        currentPopup.css('left', '230px');
    },function(){
        let countryName = 'international';
        let currentPopup = $('.world-map__popup[data-country="'+countryName+'"]');
        currentPopup.hide();
    });

    //accordion
    $('.world-map__accordion').each(function(){
        let accordion = $(this);
        let items = $(this).find('.world-map__accordion__item');
        items.each(function(){
            let item = $(this);
            let header = $(this).find('.world-map__accordion__item__header');
            let content = $(this).find('.world-map__accordion__item__content');
            header.click(function(){
                if($(this).parent().hasClass('active')){
                    items.removeClass('active');
                    content.slideUp();
                } else{
                    items.removeClass('active');
                    item.addClass('active');
                    accordion.find('.world-map__accordion__item:not(.active) .world-map__accordion__item__content').slideUp();
                    content.slideDown();
                }
            });
        });
    });
});