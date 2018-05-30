var body = document.getElementsByTagName('body')[0];
var bgImg = document.getElementById('background');

function bgScroll() {
  var bgPos = body.getBoundingClientRect().top/20;
  bgImg.style.top = bgPos + 'px';
}

function myScroll(contentDiv) {
  contentDiv.scrollIntoView({behavior: "smooth", block: "start"});
}
