(function($){
  $(document).ready(function(){

    $('.open-the-search-form').on('click', function() {
      $('.search-field').animate({width:'toggle'}, 0);
      $('.search-field').focus();      
    });

    $('.search-field').on('blur', function() {
      $('.search-field').animate({width:'toggle'}, 0);

    });

    //Scrolling
    $(window).on('scroll', function(){
      var windowHeight = $('.hero').height();
      var posEndScroll = Math.round( $(window).scrollTop() );
      if (posEndScroll >= windowHeight){
        $('.main-navigation').removeClass('custom-nav');
      } else {
        $('.main-navigation').addClass('custom-nav');
      }
    });

  })
})(jQuery);