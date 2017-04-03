(function($){
	window.onload = function(){
		$(document).ready(function(){
			// Rotating Slider
			var rotating_image$ = $(".rotating-image");
			/* Get elements that are part of the 
			 * rotating carousel.
			 */
			
			// the main container
			var sliding_banner$ = $("#sliding_banner"); 
			
			// Toggle left & right toggle buttons 
			var toggle_slide$ = $(".toggle-slide");
			
			// Get toggle_slide$ img height / 2. 
			var positionY = Math.round(toggle_slide$.find("img").height() / 2);
			
			// The view port
			var slider_viewport$ = $("#slider_viewport");
			
			// Get the natural height and width of images.
			// Store those values to a variable
			var h = rotating_image$.prop('naturalHeight');
			var w = rotating_image$.prop('naturalWidth');
			
			// The images that will be rotating
			var rotating_image$ = $(".rotating-image");
			rotating_image$.css({
				height : h + "px",
				width : w + "px"
			});
			
			
			// Get the number of images and put it into
			// a variable.
			var slider_images$ = $("#slider_images");
			
			// Wait till images load
			// to get the width and height
			// The sum of the left & right toggle buttons and 
			// the slider_viewport.  Used mainly to dynamically center
			// the the #sliding_banner.
			var totalWidth = (toggle_slide$.width() * 2) + rotating_image$.width();
			
			// Add up the images with and set it as the 
			// width for the parent container #slider_images.
			// The images with #slider_images need to be inline
			// not as block element
			slider_images$.css({ width : (rotating_image$.width() * rotating_image$.length) + "px" });
			
			// Make the #slider_viewport width and height set 
			// to .rotating-images width and height 
			slider_viewport$.css({width : rotating_image$.width() + "px", height : h + "px"});
			
			// Set the #sliding_banner with to the sum
			// of the left & right toggle buttons and #slider_viewport
			sliding_banner$.css({width : totalWidth + "px"}); 
			
			toggle_slide$.css( {height : rotating_image$.height() + "px"} );
			
			// Counter Object
			var index = 1;
			
			// Check if index is equal to rotating_image$.length.
			var atEnd = false;
			
			toggle_slide$.on("click",function(){
				// Shift images left if on image 2 or not on last image
				if($(this).hasClass("left")){
					if(!atEnd || index < rotating_image$.length){ 
						if(index !== rotating_image$.length){
							index++;
							slider_images$.animate(
								{ left : "-=" + rotating_image$.width() + "px"}
								,500
								,"swing"
								,function(){
									// Animation complete
								}
							);
						}else{
							atEnd = true;
						}
					}
				}
				// Shift images right if on image 2 or not first image
				else if($(this).hasClass("right")){
					if(atEnd || index > 1){
						if(index !== 1){
							index--;
							slider_images$.animate(
								{ left : "+=" + rotating_image$.width() + "px"}
								,500
								,"swing"
								,function(){
									// Animation complete
								}
							);
						}else{
							atEnd = false;
						}
					}
					
				}
			});
		});
	}
})(jQuery);