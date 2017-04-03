// Add Javascript functionality to this file

(function($){	
	/* Expand contact form when there is focus
	 * on the form input.  The form collapses 
	 * when focus is off of the form.
	 */
	$(document).ready(function(){
		$("#form_body .input-fields").eq(1).hide();
		
		$("#form_body .input-fields").eq(0).find("input").focus(function(){
			$("#form_body .input-fields").eq(1).slideDown();
		});
		
		$("body").click(function(event){
			if(event.target !== $("#contact-form").get(0) && $("#contact-form").has(event.target).length < 1){
				if(!$("#form_body .input-fields").eq(1).is(":hidden")){
					$("#form_body .input-fields").eq(1).slideUp();
				}
			}
		});
	}); 
		
})(jQuery);

