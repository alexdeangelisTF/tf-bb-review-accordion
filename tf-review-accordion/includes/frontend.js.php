<?php

/*Instance JS goes here*/

?>

(function($) {

$('.tf-review-accordion .accordion-open span').on('click',function(){
	$(this).parent().parent().find('.review-accordion-extra').slideToggle();
})

})( jQuery );