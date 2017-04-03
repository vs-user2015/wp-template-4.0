/* 
 * OFF CANVAS MENU & CONTACT FORM
 */
/* Trigger element to slide in the $off_canvas_menu */
(function($){
	$(document).ready(function(){
		var clickMobile$ = $("#schedule_now_mobile");
		var mobileNavigation$ = $("#mobile_navigation");
		var closeMobileNavigation$ = $(".close-mobile-navigation");
		var body$ = $("body");
		var closed = true;
		
		clickMobile$.on("click",function(){
			if(closed){
				mobileNavigation$.animate({
					left: 0 + "%"
				},300,function(){
					closed = false;
				});
			}
		});
		
		closeMobileNavigation$.on("click",function(){
			$sub_menu.slideUp();
			mobileNavigation$.animate({
				left: -100 + "%"
			},300,function(){
				closed = true;
			});
		});

		// Toggle sub-menu on mobile menu
		var $sub_menu = $("#mobile_menu .sub-menu");
		var $mobile_arrow_1 = $(".mobile-arrow-1");
		$sub_menu.hide();
		$mobile_arrow_1.on("click",function(){
			if($(this).next().is(":hidden")){
				$sub_menu.slideUp();
				$(this).next().slideDown();
			}else{
				$(this).next().slideUp();
			}
		});
	
		var clickMobileForm$ = $(".click-mobile-form");
		var offCanvas$ = $(".off-canvas");
		var closed = true;
		clickMobileForm$.on("click",function(){
			if(closed){
				offCanvas$.animate({left : 0 + "px"});
				closed = false;
			}
		});

		var closeOffCanvas$ = $(".close-off-canvas");
		closeOffCanvas$.on("click",function(){
			if(!closed){
				offCanvas$.animate({left : 100 + "%"});
				closed = true;
			}
		});
	});
})(jQuery);