// Changing contact form to fixed position when it
// moves off screen.
(function($){
	$(window).scroll(function() {
		stickMenu();
    });
	
	var containerWidth = $("#content");
	var switch_info = document.querySelector("#switch-info > div");
	var banner_outer = document.querySelector("#banner-outer").clientHeight;
	
	function stickMenu(){
		var $nav = $("#contact-form"),
			nav = document.querySelector("#contact-form");
			wrapper = containerWidth.width(),
			scrollTop = $(document).scrollTop();
    
		if(scrollTop >= $("#banner-outer").offset().top + banner_outer){
			$nav.addClass("nav-fixed");
			switch_info.style.left = -270 + "px";
			nav.style.position = "fixed";
		} else{
			$nav.removeClass('nav-fixed');
			switch_info.style.left = 0 + "px";
			nav.style.position = "relative";
		}
    }
})(jQuery);