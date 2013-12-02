/**
 * Name: Scripts.js
 * Date: 11/11/12
 * Description: Scripts required for TBO: WD
 * Version: 1.0
 * Coder: Chris Allwood
 * Coder URI: http://cdja.co.uk
*/

$(document).ready(function(){

  	// Off-viewport navigation - Link and functionality.
	var $menu = $('#menu'),
	    $menulink = $('.menu-link'),
	    $wrap = $('#wrap');
	  
	$menulink.click(function() {
		event.preventDefault();
    	$menulink.toggleClass('active');
	    $wrap.toggleClass('active');
	    return false;
	});


	// Toggle show/hide content

	$('.js-slidetoggle-container').hide();

	$('.js-slidetoggle').click(function() {
        event.preventDefault();
  		var thisObj = $(this);
  		$(this).toggleClass('active');
  		thisObj.siblings('.js-slidetoggle-container').toggle();
	});

    $('.js-palm-slidetoggle-container').hide();

    $('.js-palm-slidetoggle').click(function() {
        if($(window).innerWidth() <= 830){
            event.preventDefault();
            var thisObj = $(this);
            $(this).toggleClass('active');
            thisObj.siblings('.js-palm-slidetoggle-container').toggle();
        }
    });

});