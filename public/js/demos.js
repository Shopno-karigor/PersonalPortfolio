document.addEventListener('DOMContentLoaded', function() {

  var a = document.getElementById('string').innerHTML;
  var typed2 = new Typed('#typed2', {
    strings: [a],
    typeSpeed: 0,
    backSpeed: 0,
    typeSpeed: 20,
    backSpeed: 20,
    startDelay: 1000,
    fadeOut: true,
    loop: false
  });


});

function toggleLoop(typed) {
  if (typed.loop) {
    typed.loop = false;
  } else {
    typed.loop = true;
  }
}
