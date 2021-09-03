import $ from 'jquery';

function involvedMap() {
    $('.involved__map').each(function(){
        let block = $(this);
        let svg = $(this).find('.involved__map__svg');
        block.find('.involved__map__points__item').click(function(){
            let country = $(this).data('country');
            block.find('.involved__item').removeClass('active');
            svg.find('.countries>g').removeClass('active');
            block.find('.involved__item[data-country='+country+']').addClass('active');
            svg.find('#'+country).addClass('active');
        });
        block.find('.involved__item').each(function(){
            let item = $(this);
            let close = $(this).find('.involved__item__close');
            close.click(function(){
                item.removeClass('active');
                svg.find('.countries>g').removeClass('active');
            });
        });
        $('body').on('click', function (e) {
            if ($(e.target).closest('.involved__item').length === 0 && $(e.target).closest('.involved__map__points__item').length === 0) {
                block.find('.involved__item.active').removeClass('active');
                svg.find('.countries>g.active').removeClass('active');
            }
        });
    });
}

export { involvedMap };