/**
 * Name: Scripts.js
 * Date: 11/11/12
 * Description: Scripts required for TBO: WD
 * Version: 1.0
 * Coder: Chris Allwood
 * Coder URI: http://cdja.co.uk
*/$(document).ready(function(){$(".nav-icon").on("click",function(){$(".header-nav").slideToggle("slow");$(this).toggleClass("active")});$(".header-nav").hide();$(".js-slidetoggle-container").hide();$(".js-slidetoggle").click(function(e){e.preventDefault();var t=$(this);$(this).toggleClass("active");t.siblings(".js-slidetoggle-container").toggle()});$(".js-palm-slidetoggle-container").hide();$(".js-palm-slidetoggle").click(function(e){if($(window).innerWidth()<=830){e.preventDefault();var t=$(this);$(this).toggleClass("active");t.siblings(".js-palm-slidetoggle-container").toggle()}})});