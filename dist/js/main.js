$(".scrollToTop").css("display","none"),$(document).ready(function(){$(".hamburgerWrapper").on("click",function(){$(this).toggleClass("cross")}),$(".skillset").slick({dots:!1,infinite:!0,speed:300,slidesToShow:1,centerMode:!1,variableWidth:!0,slidesToShow:3,slidesToScroll:2,autoplay:!0,autoplaySpeed:2e3,pauseOnHover:!1}),$("a").on("click",function(o){$.scrollTo($(this).attr("href"),800,{offset:-5})}),$(window).scroll(function(){20<$(this).scrollTop()?$(".scrollToTop").fadeIn():$(".scrollToTop").fadeOut()})});