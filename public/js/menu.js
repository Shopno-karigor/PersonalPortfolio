$(document).ready(function () {
  $('#menu-hide').click(function (event) {
    $("#menu-hide").removeClass("fadeInRight");
    $("#menu").removeClass("fadeOutRight");
    $("#menu-hide").addClass("fadeOutRight");
    $("#menu").removeClass("hide");
    $("#menu").addClass("fadeInRight");
  });

  $('#menu-expand').click(function (event) {
    $("#menu-hide").removeClass("fadeOutRight");
    $("#menu").addClass("animated fadeOutRight");
    $("#menu-hide").removeClass("fadeOutRight");
    $("#menu-hide").addClass("fadeInRight ");
    $("#menu").delay(4000);
    $("#menu").addClass("hide");
  });

});
