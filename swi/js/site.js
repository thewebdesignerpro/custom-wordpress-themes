jQuery(document).ready(function($) {

var logob = $('#logoblock');
var logoh = $('#logohover');
	
logob.mouseenter(function(){
logoh.fadeIn(500);
});
logob.mouseleave(function(){	
logoh.fadeOut(300);	
});
	
var navla = $('ul#hnav li a');
	
navla.mouseenter(function(){
$(this).children('span').fadeIn(400);
});
navla.mouseleave(function(){	
$(this).children('span').fadeOut(300);
});

var navr = $('ul.xoxo ul li a');
	
navr.mouseenter(function(){
$(this).children('span').fadeIn(300);
});
navr.mouseleave(function(){	
$(this).children('span').fadeOut(300);
});	
			
});	