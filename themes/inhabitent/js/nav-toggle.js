console.log ('hi');

(function($){
  $(document).ready(function(){


    $('.open-the-search-form').on('click', function() {
      $('.search-field').animate({width:'toggle'}, 0);
      $('.search-field').focus();      
    });

    $('.search-field').on('blur', function() {
      $('.search-field').animate({width:'toggle'}, 200);
      $('.search-field').css('display', 'none');

    });

    //Scrolling
    $(window).on('scroll', function(){
      var windowHeight = $('.hero').height();
      var posEndScroll = Math.round( $(window).scrollTop() );
      if (posEndScroll >= windowHeight){
        $('.site-navigation').removeClass('custom-nav');
      } else {
        $('.site-navigation').addClass('custom-nav');
      }
    });

  })
})(jQuery);