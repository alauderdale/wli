jQuery(document).ready(function($) {

/// get started

$('.get-started-link').mouseover(function(){

  $(this).css('background-position','135px 3px');

});

$('.get-started-link').mouseout(function(){

  $(this).css('background-position','130px 3px');

});


/// menu

    $(window).scroll(function(){
     var divOffset = $('.menu-change').offset();
     if(window.scrollY > divOffset.top ){
        $('.main-nav').addClass('small-nav');
     }
     if(window.scrollY < divOffset.top){
        $('.main-nav').removeClass('small-nav');
     }
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