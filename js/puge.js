/*global $*/
$(function () {
  
  'use strict';

  //start navbar
  
  $('.navbar-light .navbar-nav .nav-link').on('click', function () {
    
    $(this).addClass('active').siblings().removeClass('active');
    
  });
  
  //start slider
  
  var winH = $('window').height(),
      
    upperH = $('.upper-bar').innerHeight(),
      
    navH   = $('.navbar').innerHeight();
  
  $('.carousel').height(winH - (upperH + navH));
  
  //start popup
  
  $('.col-md-4.voda img').on('click', function () {
    
    $('.popup').fadeIn();
    
    $('.popup img').attr('src', $(this).attr('src'));
    
  });
  
  $('.popup').click(function () {
        
    $(this).fadeOut();
    
  });
  
  $('.popup .inner').click(function (e) {
    
    e.stopPropagation();
    
  });
  
  $(document).keydown(function (e) {
        
    if (e.keyCode === 27) {
        
      $('.popup').fadeOut();
    
    }
    
  });
  
  //start scroll-top

  $(document).ready(function () {
    
    var scrollButton = $('#scroll-top');
    
    $(window).on('scroll', function () {
      
      if ($(this).scrollTop() >= 700) {
        
        scrollButton.fadeIn(1000);
        
      } else {
        
        scrollButton.fadeOut(1000);
        
      }
      
    });
    
    scrollButton.on('click', function () {
      
      $('html, body').animate({scrollTop : 0}, 700);
      
    });
    
  });
  
  //start placeholder
  
  $('[placeholder]').focus(function () {
        
    var placeAttr = $(this).attr('placeholder');
        
    $(this).attr('placeholder', '');
        
  }).blur(function () {
        
    $(this).attr('placeholder', placeAttr);
        
  });
  
});










