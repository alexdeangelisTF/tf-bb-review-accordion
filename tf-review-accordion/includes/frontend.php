<?php
// Get the field setting from the module
$repeater_field_setting = $settings->tf_review_accordion_repeater_field;

if ($repeater_field_setting) {
	// Get the ACF repeater field, using the BB module value
	$repeater_field = get_field($repeater_field_setting);
	
	if ($repeater_field) {
		
		// Get the values from the sub fields
		$sub_field_1_setting = $settings->tf_review_accordion_sub_field_1;
		$sub_field_2_setting = $settings->tf_review_accordion_sub_field_2;
		
		echo '<div class="tf-review-accordion tf-review-accordion-' . $id . '>">';
		
		// If sub field 1 or 2 settings exist, then run the loop for the repeater field
		if ($sub_field_1_setting || $sub_field_2_setting) {
			
			$review_count = 0;
			foreach($repeater_field as $review) {
				if ($review_count == 0) {  
					if ($sub_field_1_setting) {
						$sub_field_1 = $review[$sub_field_1_setting];
					}
					if ($sub_field_2_setting) {
						$sub_field_2 = $review[$sub_field_2_setting];
					}
					include( plugin_dir_path( __FILE__ ) . '/review_body/body.php');
				}
				$review_count++;
			}
			if ($review_count > 0) {
				$review_count = 0;
				echo '<div class="review-accordion-extra">';
				foreach($repeater_field as $review) {
					if ($review_count != 0) {
						if ($sub_field_1_setting) {
							$sub_field_1 = $review[$sub_field_1_setting];
						}
						if ($sub_field_2_setting) {
							$sub_field_2 = $review[$sub_field_2_setting];
						}
						include( plugin_dir_path( __FILE__ ) . '/review_body/body.php');
					}
					$review_count++;
				}
				echo '</div>';
				
				echo '<div class="accordion-open">';
				echo '<span>Read more <i class="fas fa-plus"></i></span>';
				echo '</div>';
				
			} 
			
			
		}
		
		echo '</div>';
		
	}
	
}