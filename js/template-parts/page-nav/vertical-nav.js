import $ from 'jquery';

function verticalNav() {
    if ($('.axspa-nav').length) {
        $('.axspa-nav--vertical').each(function(){
            const navOffset = $('#axspa-nav').offset().top - 85;
            const Height = $('#axspa-nav').height();
            const navHeight = $('#axspa-nav').height();
            const footerHeight = $('footer').height();
            const navHeightAdmin = navHeight + 32;
            const headerHeight =  $('header').height()
            const blocksHeight = $('.blocks').height() - headerHeight - 100;
            console.log(footerHeight);
         
            $(window).scroll(function(){
                const scrolled = $(this).scrollTop();
                const headerHeight = $('#header').height() + 'px';
                const navOffsetBottom = $('#axspa-nav').offset().bottom;
                console.log(blocksHeight);
                console.log(scrolled);
                if(scrolled > navOffset) {
                    $('.axspa-nav').css("position","fixed");
                    $('.axspa-nav + section').css("margin-top",navHeight);
                    $('.admin-bar .axspa-nav + section').css("margin-top",navHeight);
                    if (scrolled > blocksHeight) {
                        $('.axspa-nav').css("opacity","0")
                    } else { 
                        $('.axspa-nav').css("opacity","1")
                    }
                    
                } else if (scrolled <= navOffset){
                    $('.axspa-nav').css("position","static");
                    $('.axspa-nav + section').css("margin-top",0);
                }
            });
        });
    }
}


export { verticalNav  };