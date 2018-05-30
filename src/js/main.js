
// SCROLL TO TOP ARROW MADE INVISIBLE WHEN PAGE IS AT THE TOP
$('.scrollToTop').css('display', 'none');

$(document).ready(function() {

  // NAVBAR HAMBURGER TRANSFORM TO CROSS
  $('.hamburgerWrapper').on('click', function() {
    $(this).toggleClass('cross');
  });

  // SKILLSET SLIDER - SLICK JQUERY PLUGIN
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

  // SOFT SCROLL - SCROLLTO JQUERY PLUGIN
  $('a').on('click', function(event) {
    // event.preventDefault();
    $.scrollTo($(this).attr('href'), 800, {
      offset: -5
    });
  });

  // SCROLL TO TOP ARROW
  $(window).scroll(function() {
        if($(this).scrollTop()>20) {
          $('.scrollToTop').fadeIn();
        } else {
          $('.scrollToTop').fadeOut();
        }
      }
    );


});
