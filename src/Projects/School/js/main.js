$(window).scroll(function()
    {
        if($(this).scrollTop()>250) {
          $('.scrollToTop').fadeIn();
        } else {
          $('.scrollToTop').fadeOut();
        }
      }
    );

jQuery(document).ready(function($) {

  $.scrollTo('#top');

  $('a').click(function(event) {
    $.scrollTo($(this).attr('href'), 500);
  });
});
