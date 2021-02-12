<?php

class TFReviewAccordion extends FLBuilderModule {
	public function __construct() {
		parent::__construct(array(
			'name'            => __( 'Review Accordion', 'tf-bb-review-accordion' ),
			'description'     => __( 'A totally awesome module from Thinking Fox!', 'tf-bb-review-accordion' ),
			'group'           => __( 'Thinking Fox Modules', 'tf-bb-review-accordion' ),
			'category'        => __( 'Thinking Fox', 'tf-bb-review-accordion' ),
			'dir'             => TF_BB_REVIEW_ACCORDION_DIR . 'tf-review-accordion/',
			'url'             => TF_BB_REVIEW_ACCORDION_URL . 'tf-review-accordion/',
			'icon'            => 'button.svg',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'         => true, // Defaults to true and can be omitted.
			'partial_refresh' => false, // Defaults to false and can be omitted.
		));
	}
}

FLBuilder::register_module( 'TFReviewAccordion', array(
  'tf-review-accordion-tab-1'      => array(
    'title'         => __( 'Review Accordion', 'tf-bb-review-accordion' ),
    'sections'      => array(
      'tf-review-accordion-section-1'  => array(
        'title'         => __( 'Section', 'tf-bb-review-accordion' ),
        'fields'        => array(
          'tf_review_accordion_repeater_field'     => array(
            'type'          => 'text',
            'label'         => __( 'Repeater field', 'tf-bb-review-accordion' ),
          ),
          'tf_review_accordion_sub_field_1'     => array(
            'type'          => 'text',
            'label'         => __( 'Sub field 1', 'tf-bb-review-accordion' ),
          ),
          'tf_review_accordion_sub_field_2'     => array(
            'type'          => 'text',
            'label'         => __( 'Sub field 2', 'tf-bb-review-accordion' ),
          )
        )
      )
    )
  )
) );