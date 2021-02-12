<?php

echo '<div class="review-accordion-single">';
if ($sub_field_1) {
	echo '<div class="review-accordion-text">';
	echo wpautop($sub_field_1);
	echo '</div>';
}
if ($sub_field_2) {
	echo '<div class="review-accordion-author">';
	echo wpautop($sub_field_2);
	echo '</div>';
}
echo '</div>';