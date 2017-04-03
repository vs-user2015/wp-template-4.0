/* ROTATING TRUST SECTION */
(function($){
	$(document).ready(function($){
		var w,mHeight,tests = $("#mobile-sliding-main-wrapper");
		w = tests.outerWidth();
		mHeight = 0;
		tests.find(".mobile-sliding-trust").each(function(index){
			$("#trust_indicators").find(".trust_indicator:eq(0)").addClass("active"); // Make the first pager active initially
			if(index == 0){
				$(this).addClass("active"); // Make the first slide active initially
			}
			
			if($(this).height() > mHeight){ // Just finding the max hieght of the slides
				mHeight = $(this).height();
			}
			
			var l = index * w; // Find the left position of each slide
			$(this).css("left",l);
			tests.find("#mobile-sliding-main-wrapper").height(mHeight);// Make the height of the slider equal to max height of the slides
		});
		
		$(".trust_indicator").on("click",function(e){ // Clicking action for pagination
			e.preventDefault();
			next = $(this).index(".trust_indicator");
			clearInterval(t_int);// Clicking stops the autoplay
			moveIt(next);
		});
		
		function moveIt(next){ // The main sliding function
			var c = parseInt($(".mobile-sliding-trust.active").removeClass("active").css("left")); // Current position
			var n = parseInt($(".mobile-sliding-trust").eq(next).addClass("active").css("left")); // New Position
			$(".mobile-sliding-trust").each(function(){ // shift each slide
				if(n > c){
					$(this).animate({"left" : "-=" + (n - c) + "px"});
				}else{
					$(this).animate({"left" : "+=" + Math.abs(n - c) + "px"});
				}
			});
			$(".trust_indicator.active").removeClass("active");
			$("#trust_indicators").find(".trust_indicator").eq(next).addClass("active");
		}
		
		var t_int = setInterval(function(){ // For autoplay
			var i = $(".mobile-sliding-trust.active").index(".mobile-sliding-trust");
			if(i == $(".mobile-sliding-trust").length - 1){
				next = 0;
			}else{
				next = i + 1;
			}
			
			moveIt(next);
		},6000);
	});
})(jQuery);