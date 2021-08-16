import $ from 'jquery';

function verticalNav() {
    if ($('.axspa-nav').length) {
        $('.axspa-nav--vertical').each(function(){
            const navOffset = $('#axspa-nav').offset().top;
            const navHeight = $('#axspa-nav').height();
            const navHeightAdmin = navHeight + 32;
            $(window).scroll(function(){
                const scrolled = $(this).scrollTop();
                const headerHeight = $('#header').height() + 'px';
                if(scrolled > navOffset) {
                    $('.axspa-nav').css("position","fixed");
                    $('.axspa-nav + section').css("margin-top",navHeight);
                    $('.admin-bar .axspa-nav + section').css("margin-top",navHeight);
                    
                } else if (scrolled <= navOffset){
                    $('.axspa-nav').css("position","static");
                    $('.axspa-nav + section').css("margin-top",0);
                }
            });
        });
    }
}


export { verticalNav  };