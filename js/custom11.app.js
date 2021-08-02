(function ($) {   

    var $hh = $('header').outerHeight() + $('.yellow-strip').outerHeight();
    console.log($hh);
    $(window).scroll(function(){
      if($(this).scrollTop() > $hh){
        $('.subway-pills').addClass('sticky');
      }else{
        $('.subway-pills').removeClass('sticky');
      }
    });

    $('a[href^="#"]').click(function(e){
      if(this.hash){
        $pos = $(this).attr('href');
        var $bar = $('.subway-pills ul').outerHeight();
        $('body, html').animate({
          scrollTop : $($pos).offset().top - ($bar + 20)
        }, 1000);

        console.log($bar)
        return false;
      }
    });

    // $(window).load(function(){
    //   $('body, html').animate({
    //     scrollTop : 0
    //   }, 500)
    // })

    $('.subway-pills a').click(function(){
      $(this).parent().siblings().removeClass('active');
      $(this).parent().addClass('active');
    });

    $('.free-order').click(function(){
      $('body, html').animate({
        scrollTop : 250
      }, 500);

      $('.post-code--inner .form-control').focus();

      return false;
    })

    $('.qty button').click(function(){
      var $btn = $(this);
      var $oldVal = $(this).siblings('input').val();
      if($btn.hasClass('btn-inc')){
        var $newVal = parseFloat($oldVal) + 1;
      }else{
        if($oldVal > 0){
          $newVal = parseFloat($oldVal) - 1;
        }else{
          $newVal = 0;
        }
      }
      
      $(this).siblings('input').val($newVal);

    });

})(jQuery);
