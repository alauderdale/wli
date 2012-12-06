jQuery(document).ready(function($) {



//share

$('a.share').click(function(){

  $(this).closest('ul').prev('.social-share').toggle('block');
  console.log('Testing console');

});

//contact placeholder




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


});