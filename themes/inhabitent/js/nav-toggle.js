(function($){
  $(document).ready(function(){

    $('.open-the-search-form').on('click', function() {
      $('.main-navigation .search-field').animate({width:'toggle'}, 0);
      $('.main-navigation .search-field').focus();      
    });

    $('.main-navigation .search-field').on('blur', function() {
      $('.main-navigation .search-field').animate({width:'toggle'}, 0);

    });

    //Scrolling
    $('.main-navigation').addClass('custom-nav');
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