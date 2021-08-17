import $ from 'jquery';

function anchorScroll() {
    $('.axspa-nav a[href^="#"]').click(function(e){
        e.preventDefault();
        let href = $(this).attr('href');
        $('html, body').animate({ scrollTop: $(href).offset().top}, 1000);
    })
}

function scrollDown() {
    $('.section__scroll a[href^="#"]').click(function(e){
        e.preventDefault();
        let href2 = $(this).attr('href');
        $('html, body').animate({ scrollTop: $(href2).offset().top - 100}, 1000);
    });
}

export { anchorScroll , scrollDown };