/* ROTATING TESTIMONIALS */
(function($){
	$(document).ready(function($){
		var w,mHeight,tests = $("#testimonials");
		w = tests.outerWidth();
		mHeight = 130;
		tests.find(".testimonial").each(function(index){
			$("#t_pagers").find(".pagers:eq(0)").addClass("active"); // Make the first pager active initially
			if(index == 0){
				$(this).addClass("active"); // Make the first slide active initially
			}
			
			if($(this).height() > mHeight){ // Just finding the max hieght of the slides
				mHeight = $(this).height();
			}
			
			var l = index * w; // Find the left position of each slide
			$(this).css("left",l);
			tests.find("#test_container").height(mHeight);// Make the height of the slider equal to max height of the slides
		});
		
		$(".pagers").on("click",function(e){ // Clicking action for pagination
			e.preventDefault();
			next = $(this).index(".pagers");
			clearInterval(t_int);// Clicking stops the autoplay
			moveIt(next);
		});
		
		function moveIt(next){ // The main sliding function
			var c = parseInt($(".testimonial.active").removeClass("active").css("left")); // Current position
			var n = parseInt($(".testimonial").eq(next).addClass("active").css("left")); // New Position
			$(".testimonial").each(function(){ // shift each slide
				if(n > c){
					$(this).animate({"left" : "-=" + (n - c) + "px"});
				}else{
					$(this).animate({"left" : "+=" + Math.abs(n - c) + "px"});
				}
			});
			$(".pagers.active").removeClass("active");
			$("#t_pagers").find(".pagers").eq(next).addClass("active");
		}
		
		var t_int = setInterval(function(){ // For autoplay
			var i = $(".testimonial.active").index(".testimonial");
			if(i == $(".testimonial").length - 1){
				next = 0;
			}else{
				next = i + 1;
			}
			
			moveIt(next);
		},3000);
	}); 
	
	// Resize an image if its width is wider than its
	// parent width.
	$(document).ready(function(){
		
		// Find the images.
		var img$ = $("#copy").find("img");
		
		// Cycle through each image and resize it.
		img$.each(function(){
			
			// Get the images parent container.
			var img_container$ = $(this).parent();
			
			// Check to see if the width of the image
			// is wider than its parent width.  If it is
			// then set the parents width to the 
			// childs width.
			if($(this).width() > img_container$.width()){
				$(this).css( { display : "block", height : "auto" , width : img_container$.width() + "px"} );
			}
		});
	});
})(jQuery);	