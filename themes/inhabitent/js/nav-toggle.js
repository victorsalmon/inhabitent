(function($){
  $(document).ready(function(){


    $('.open-the-search-form').on('click', function() {
      $('.main-navigation .search-field').animate({width:'toggle'}, 0);
      $('.main-navigation .search-field').focus();      
    });

    $('.main-navigation .search-field').on('blur', function() {
      $('.main-navigation .search-field').animate({width:'toggle'}, 0);

    });

// (function ($) {
//   $(window).scroll(function() {
//     var winH = $(window).height();
//   if ($(window).scrollTop() > winH) {
//     $('.home header, .page-template-about header').addClass('green-navigation');
//     $('.home header, .page-template-about header').removeClass('site-header');

    //Scrolling
    if (
      $('body').hasClass('page-template-page-about') ||
      $('body').hasClass('home') ||
      $('body').hasClass('single-adventure') ){
        $('.main-navigation').addClass('custom-nav');
        $('.site-content').css("padding-top", "0");
        $(window).on('scroll', function(){
            var a = $('.hero').height(),
                b = $('.product-image').height(),
                c = $('.page-template-page-about .entry-header').height(),
                windowHeight = Math.max(a, b, c);
            console.log (a, b, c, windowHeight);
            
          var posEndScroll = Math.round( $(window).scrollTop() );
          if (posEndScroll >= windowHeight){
            $('.main-navigation').removeClass('custom-nav');
          } else {
            $('.main-navigation').addClass('custom-nav');
            $('.site-content').css("padding-top", "0");
          }
        })
    }


  }) // document.ready
})(jQuery); //IIFE