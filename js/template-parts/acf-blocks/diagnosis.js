import $ from 'jquery';

function diagnosisBubbles() {
    $('.diagnosis__stat__bubbles').each(function(){
        let block = $(this);
        block.find('.diagnosis__stat__bubble').click(function(){
            if($(this).hasClass('active')){
                $(this).removeClass('active')
                block.find('.diagnosis__stat__bubble__content').removeClass('active');
                block.removeClass('diagnosis__stat__bubbles--active');
            } else{
                block.addClass('diagnosis__stat__bubbles--active');
                block.find('.diagnosis__stat__bubble').removeClass('active');
                $(this).addClass('active');
                let index = $(this).data('index');
                block.find('.diagnosis__stat__bubble__content').removeClass('active');
                block.find('.diagnosis__stat__bubble__content[data-index='+index+']').addClass('active');
            }
        });
        $('body').on('click', function (e) {
            if ($(e.target).closest('.diagnosis__stat__bubble__content').length === 0 && $(e.target).closest('.diagnosis__stat__bubble').length === 0) {
                block.find('.diagnosis__stat__bubble__content').removeClass('active');
                block.find('.diagnosis__stat__bubble').removeClass('active');
                block.removeClass('diagnosis__stat__bubbles--active');
            }
        });
    });
}

function diagnosisMap() {
    $('.diagnosis__map').each(function(){
        let block = $(this);
        let svg = $(this).find('.diagnosis__map__img');
        block.find('.diagnosis__map__point').click(function(){
            block.find('.diagnosis__map__point').removeClass('active');
            $(this).addClass('active');
            let country = $(this).data('country');
            block.find('.diagnosis__map__item').removeClass('active');
            svg.find('.country').removeClass('active');
            block.find('.diagnosis__map__item[data-country='+country+']').addClass('active');
            svg.find('#'+country+' .country').addClass('active');
        });
        block.find('.diagnosis__map__item').each(function(){
            let item = $(this);
            let close = $(this).find('.diagnosis__map__item__close');
            close.click(function(){
                item.removeClass('active');
            });
        });
        $('body').on('click', function (e) {
            if ($(e.target).closest('.diagnosis__map__item').length === 0 && $(e.target).closest('.diagnosis__map__point').length === 0) {
                block.find('.diagnosis__map__item.active').removeClass('active');
                svg.find('.country').removeClass('active');
                block.find('.diagnosis__map__point.active').removeClass('active');
            }
        });
    });
}

export { diagnosisBubbles , diagnosisMap };