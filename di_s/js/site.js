jQuery(document).ready(function($) {

	function fsizer() {
		var fcp = $("#feature img").height();
		    fc = 20 - fcp;
		$(".fcap").css("top", fc);
	}
	
	function rsizer() {
		fsizer();
	
		var g = $(".gallery-item").width();
		    gh = g;

		$(".gallery-item").css("height", gh);
	}

	rsizer();
						
	$( window ).resize(function() {
		rsizer();
	});
	
	$('#feature img.fimg').hover(function(){	
		fsizer();	
		$(this).css("opacity", "0.2");
		$(this).css("z-index", "1");
	}, function() {	
		fsizer();	
		$(this).css("opacity", "1");
		$(this).css("z-index", "3");
	});
	
});
	
	
		// var h = $("#feature").width() * 0.2475;
/*		var f = $("#feature").width();
		    h = f * 0.245;
			
		if (f <= 736) {
			h = f * 0.35;
		}
		
		var w = h * 1.327;
		
		$(".fpic").css("height", h);
		//$(".fpic").css("width", w);
		$(".fpic img").css("height", h); 
		//$(".fpic img").css("width", w); 

		var	x = $(".fpic img").width();
			y = $(".fpic img").height();
			xy = x / y;
		
		if (xy > 2) {
		alert(x);
			w = h * 2.654 + 10;
		}
		*/



