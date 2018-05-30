$(document).ready(function() {

  $(".button-collapse").sideNav({closeOnClick: true});

  $('a').click(function(event) {
    $.scrollTo($(this).attr('href'),1200);
  });

  // FREQUENTLY ASKED QUESTIONS
    //Accordian
var action = "click";
var speed = "500";

  $('li.q').on(action, function() {
    $(this).next()
      .slideToggle(speed)
        .siblings('li.a')
          .slideUp(speed);
    var img = $(this).children('img');
    // Remove the 'Rotate' class from all images except the active
    $('img').not(img).removeClass('rotate');
    img.toggleClass('rotate');
  })
});
