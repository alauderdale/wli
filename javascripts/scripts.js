jQuery(document).ready(function($) {

/// get started

$('.get-started-link').mouseover(function(){

  $(this).css('background-position','140px 5px');

});

$('.get-started-link').mouseout(function(){

  $(this).css('background-position','135px 5px');

});

// royal slider

  $('#full-width-slider').royalSlider({
    arrowsNav: true,
    loop: true,
    keyboardNavEnabled: true,
    controlsInside: false,
    imageScaleMode: 'fill',
    arrowsNavAutoHide: false,
    autoScaleSlider: true, 
    controlNavigation: 'bullets',
    thumbsFitInViewport: false,
    navigateByClick: true,
    startSlideId: 0,
    autoPlay: true,
    transitionType:'move',
    globalCaption: true
  });

/// fancybox

  $('.fancybox').fancybox({
    padding: 10,
    overlayColor: '#fff'

  });

/// sticky

  $('#sticky-menu').stickyScroll({ container: '.services-contiainer' });
  $('.blog-sidebar').stickyScroll({ container: '.blog' });

});