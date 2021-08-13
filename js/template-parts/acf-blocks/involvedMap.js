import $ from 'jquery';

function involvedMap() {
    $('.involved__map').each(function(){
        let block = $(this);
        block.find('.involved__map__points__item').click(function(){
            let country = $(this).data('country');
            block.find('.involved__item').removeClass('active');
            block.find('.involved__item[data-country='+country+']').addClass('active');
        });
        block.find('.involved__item').each(function(){
            let item = $(this);
            let close = $(this).find('.involved__item__close');
            close.click(function(){
                item.removeClass('active');
            });
        });
    });
}

export { involvedMap };