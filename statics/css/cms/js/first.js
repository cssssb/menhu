$(".a1002_a1").hover(function () {


  $(".a1002_tab2").slideDown(500, function () { });
  $(".a1002_a1").css("background", "#0071bc");
  $(".a1002_a2").css("background", "#ccc");
  $(".a1002_a3").css("background", "#ccc");
  $(".a1002_a4").css("background", "#ccc");
  $(".a1002_tab1").hide();
  $(".a1002_tab3").hide();
  $(".a1002_tab4").hide();
  $(".a1002_tab5").hide();
});




$(".a1002_a2").hover(function () {

  $(".a1002_tab3").fadeIn(500, function () { });
  $(".a1002_a2").css("background", "#0071bc");
  $(".a1002_a1").css("background", "#ccc");
  $(".a1002_a3").css("background", "#ccc");
  $(".a1002_a4").css("background", "#ccc");
  $(".a1002_tab1").hide();
  $(".a1002_tab2").hide();
  $(".a1002_tab4").hide();
  $(".a1002_tab5").hide();
});


$(function () {
  $(".a1002_a3").hover(function () {

    $(".a1002_tab4").fadeTo(500, 1, function () { });
    $(".a1002_a3").css("background", "#0071bc");
    $(".a1002_a1").css("background", "#ccc");
    $(".a1002_a2").css("background", "#ccc");
    $(".a1002_a4").css("background", "#ccc");
    $(".a1002_tab1").hide();
    $(".a1002_tab2").hide();
    $(".a1002_tab3").hide();
    $(".a1002_tab5").hide();

  });
});


$(function () {
  $(".a1002_a4").hover(function () {

    $(".a1002_tab5").slideDown(500, function () { });
    $(".a1002_a4").css("background", "#0071bc");
    $(".a1002_a1").css("background", "#ccc");
    $(".a1002_a1").css("background", "#ccc");
    $(".a1002_a3").css("background", "#ccc");
    $(".a1002_tab1").hide();
    $(".a1002_tab2").hide();
    $(".a1002_tab3").hide();
    $(".a1002_tab4").hide();

  });
});
