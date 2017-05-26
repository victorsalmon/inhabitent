console.log ('hi');

(function($){
  $('.open-the-search-form').on('click', function(event) {
    event.preventDefault();
    $('.search-field').focus();
  });
})(jQuery);