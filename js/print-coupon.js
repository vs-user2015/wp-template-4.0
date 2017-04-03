/**
 * This code is to print out the coupons.
 *
 * Printable coupons will have a class="open-coupon".
 */
(function($){
	$(document).ready(function(){
		var open_coupon$ = $(".open-coupon");
		var url = location.host;
		
		open_coupon$.on("click",function(){
			var coupon_img_src = $(this).attr("src");
			window.open("http://" + url + "/coupon-page/?v=" + coupon_img_src,url + "/coupons");
		});
	});
})(jQuery);