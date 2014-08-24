jQuery(document).ready(function($) {

//	Draggable.create("#mainwrap", {
        //type:"scrollTop"
		
    //});
	
	function fsizer() {
		var fcp = $("#feature img").height();
		    fc = 20 - fcp;
		$(".fcap").css("top", fc);
	}
	
	function rsizer() {
//		fsizer();
	
//		var g = $(".slides").width();
//		$(".slide img:nth-child(2)").css("width", g);
//		var h = $(".slide img:nth-child(2)").height();
//		$(".slide img").css("height", h);	
	}

	rsizer();
						
	$( window ).resize(function() {
		rsizer();
	});


	var tl = new TimelineMax({repeat:0, repeatDelay:1});
	tl.add( TweenLite.from($('.slide img:nth-child(1)'), 1, {opacity:0}) );
	tl.add( TweenLite.from($('.slide img:nth-child(2)'), 1, {opacity:0}) );
	tl.add( TweenLite.from($('.slide img:nth-child(3)'), .7, {opacity:0, right:50 + '%'}) );
	tl.add( TweenLite.from($('.slide img:nth-child(4)'), .7, {opacity:0, right:-50 + '%'}) );
	tl.add( TweenLite.from($('.slide div'), .1, {opacity:0}) );	
	tl.add( TweenLite.from($('.slide div h3'), .6, {opacity:0, top:-300}) );
	tl.add( TweenLite.from($('.slide div span'), .5, {opacity:0, left:-300}) );
	tl.add( TweenLite.from($('.slide div a'), .5, {opacity:0}) );







	
//	$('.featured figure a span img').hover(function(){	
//		$(this).fadeOut("fast");
//	}, function() {	
//		$(this).fadeIn("slow");
//	});

	$('.featured figure').hover(function(){
		TweenMax.to( $('a span img', this), .5, {css:{autoAlpha: 1}});
	}, function() {
		TweenMax.to( $('a span img', this), .2, {css:{autoAlpha: 0}});
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



