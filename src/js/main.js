$('.scrollToTop').css('display', 'none');

$(document).ready(function() {

  $.scrollTo('#home');

  $('.skillset').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: false,
    variableWidth: true,
    slidesToShow: 3,
    slidesToScroll: 2,
    autoplay: true,
    autoplaySpeed: 2000,
    pauseOnHover: false
  });

  $('a').on('click', function(event) {
    event.preventDefault();
    $.scrollTo($(this).attr('href'), 800, {
      offset: -5
    });
  });

  $(window).scroll(function() {
        if($(this).scrollTop()>20) {
          $('.scrollToTop').fadeIn();
        } else {
          $('.scrollToTop').fadeOut();
        }
      }
    );


});
