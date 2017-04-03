(function($){
	$(document).ready(function(){
		var schedule$ = $("#schedule_now");
		var popupDiv$ = $("#pop_bg");
		var close_popup$ = $("#close_popup_div");
		var schedule_now_mobile$ = $("#schedule_service_mobile");

		schedule$.on('click',function(){
			popupDiv$.css({
				display: "block",
				zIndex: 20 
			});
		});

		schedule_now_mobile$.on('click',function(){
			popupDiv$.css({
				display: "block",
				zIndex: 20 
			});
		});

		close_popup$.on('click',function(){
			popupDiv$.css({
				display: "none",
				zIndex: 1
			});
		});
	});

})(jQuery);
		