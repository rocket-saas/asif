import $ from 'jquery';

function anchorScroll() {
    $('.axspa-nav a[href^="#"]').click(function(e){
        e.preventDefault();
        let href = $(this).attr('href');
        $('html, body').animate({ scrollTop: $(href).offset().top}, 1000);
    })
}

function scrollDown() {
    $('').each(function(){
       
    });
}

export { anchorScroll , scrollDown };