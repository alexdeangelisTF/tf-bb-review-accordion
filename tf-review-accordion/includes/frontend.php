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
		
		// If sub field 1 or 2 settings exist, then run the loop for the repeater field
		if ($sub_field_1_setting || $sub_field_2_setting) {
			
			foreach($repeater_field as $review) {
				
				if ($sub_field_1_setting) {
					$sub_field_1 = $review[$sub_field_1_setting];
				}
				if ($sub_field_2_setting) {
					$sub_field_2 = $review[$sub_field_2_setting];
				}
				
			}
			
		}
		
	}
	
}