/**
 * Name: Scripts.js
 * Date: 11/11/12
 * Description: Scripts required for TBO: WD
 * Version: 1.0
 * Coder: Chris Allwood
 * Coder URI: http://cdja.co.uk
*/$(document).ready(function(){$(".nav-icon").on("click",function(){$(".header-nav").slideToggle("fast");$(this).toggleClass("active")});$(".header-nav").hide();$(".js-slidetoggle-container").hide();$(".js-slidetoggle").click(function(){event.preventDefault();var e=$(this);$(this).toggleClass("active");e.siblings(".js-slidetoggle-container").toggle()});$(".js-palm-slidetoggle-container").hide();$(".js-palm-slidetoggle").click(function(){if($(window).innerWidth()<=830){event.preventDefault();var e=$(this);$(this).toggleClass("active");e.siblings(".js-palm-slidetoggle-container").toggle()}})});