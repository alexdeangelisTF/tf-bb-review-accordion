<?php

/**
 * Plugin Name: TF BB Review Accordion
 * Description: A WordPress Beaver Builder module to display reviews in an accordion style, using an ACF repeater field
 * Version: 1.0.0
 * Author: Thinking Fox
 * Author URI: https://www.thinkingfox.com
 */
define( 'TF_BB_REVIEW_ACCORDION_DIR', plugin_dir_path( __FILE__ ) );
define( 'TF_BB_REVIEW_ACCORDION_URL', plugins_url( '/', __FILE__ ) );

function tf_bb_review_accordion_module() {
	if ( class_exists( 'FLBuilder' ) ) {
		// Include your custom modules here.
		require_once 'tf-review-accordion/tf-review-accordion.php';
	}
}
add_action( 'init', 'tf_bb_review_accordion_module' );