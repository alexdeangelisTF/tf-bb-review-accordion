<?php

/*Instance JS goes here*/

?>

(function($) {
	
	// On click of accordion open element
	$('.tf-review-accordion .accordion-open span').on('click',function(){
		// Toggle the display of the accordion extra element
		$(this).parent().parent().find('.review-accordion-extra').slideToggle();
		
		$(this).parent().toggleClass('closed');
		$(this).parent().toggleClass('open')
		
	})

})( jQuery );