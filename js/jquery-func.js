function mycarousel_initCallback(carousel) {
  $(".slider-navigation a").bind("click", function () {
    carousel.scroll($.jcarousel.intval($(this).text()));
    return false;
  });
}

function mycarousel_itemFirstInCallback(carousel, item, idx, state) {
  $(".slider-navigation a").removeClass("active");
  $(".slider-navigation a")
    .eq(idx - 1)
    .addClass("active");
}
function mycarousel_initCallback2(carousel) {
  $(".slider-navigation2 a").bind("click", function () {
    carousel.scroll($.jcarousel.intval($(this).text()));
    return false;
  });
}

function mycarousel_itemFirstInCallback2(carousel, item, idx, state) {
  $(".slider-navigation2 a").removeClass("active2");
  $(".slider-navigation2 a")
    .eq(idx - 1)
    .addClass("active2");
}
function mycarousel_initCallback3(carousel) {
  $(".slider-navigation3 a").bind("click", function () {
    carousel.scroll($.jcarousel.intval($(this).text()));
    return false;
  });
}

function mycarousel_itemFirstInCallback3(carousel, item, idx, state) {
  $(".slider-navigation3 a").removeClass("active3");
  $(".slider-navigation3 a")
    .eq(idx - 1)
    .addClass("active3");
}
function mycarousel_initCallback4(carousel) {
  $(".slider-navigation4 a").bind("click", function () {
    carousel.scroll($.jcarousel.intval($(this).text()));
    return false;
  });
}

function mycarousel_itemFirstInCallback4(carousel, item, idx, state) {
  $(".slider-navigation4 a").removeClass("active4");
  $(".slider-navigation4 a")
    .eq(idx - 1)
    .addClass("active4");
}
function mycarousel_initCallback5(carousel) {
  $(".slider-navigation5 a").bind("click", function () {
    carousel.scroll($.jcarousel.intval($(this).text()));
    return false;
  });
}
function mycarousel_itemFirstInCallback5(carousel, item, idx, state) {
  $(".slider-navigation5 a").removeClass("active5");
  $(".slider-navigation5 a")
    .eq(idx - 1)
    .addClass("active5");
}
$(document).ready(function () {
  $(".slider-holder ul").jcarousel({
    scroll: 1,
    wrap: "both",
    // auto: 4,
    start: 1,
    itemFirstInCallback: mycarousel_itemFirstInCallback,
    initCallback: mycarousel_initCallback,
    // This tells jCarousel NOT to autobuild prev/next buttons
    buttonNextHTML: null,
    buttonPrevHTML: null,
  });
  $(".slider-holder2 ul").jcarousel({
    scroll: 1,
    wrap: "both",
    // auto: 4,
    start: 1,
    itemFirstInCallback: mycarousel_itemFirstInCallback2,
    initCallback: mycarousel_initCallback2,
    // This tells jCarousel NOT to autobuild prev/next buttons
    buttonNextHTML: null,
    buttonPrevHTML: null,
  });
  $(".slider-holder3 ul").jcarousel({
    scroll: 1,
    wrap: "both",
    // auto: 4,
    start: 1,
    itemFirstInCallback: mycarousel_itemFirstInCallback3,
    initCallback: mycarousel_initCallback3,
    // This tells jCarousel NOT to autobuild prev/next buttons
    buttonNextHTML: null,
    buttonPrevHTML: null,
  });

  $(".slider-holder4 ul").jcarousel({
    scroll: 1,
    wrap: "both",
    // auto: 4,
    start: 1,
    itemFirstInCallback: mycarousel_itemFirstInCallback4,
    initCallback: mycarousel_initCallback4,
    // This tells jCarousel NOT to autobuild prev/next buttons
    buttonNextHTML: null,
    buttonPrevHTML: null,
  });
  $(".slider-holder5 ul").jcarousel({
    scroll: 1,
    wrap: "both",
    // auto: 4,
    start: 1,
    itemFirstInCallback: mycarousel_itemFirstInCallback5,
    initCallback: mycarousel_initCallback5,
    // This tells jCarousel NOT to autobuild prev/next buttons
    buttonNextHTML: null,
    buttonPrevHTML: null,
  });
  $("#search .field").focus(function () {
    current = $(this).val();
    if (current == "Search here ...") $(this).val("");
  });

  $("#search .field").blur(function () {
    if ($(this).val() == "") $(this).val("Search here ...");
  });
});
