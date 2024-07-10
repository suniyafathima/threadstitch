<?php
/**
 * Block Patterns
 *
 * @package fse_fashion_designer
 * @since 1.0
 */

function fse_fashion_designer_register_block_patterns() {
	$block_pattern_categories = array(
		'fse-fashion-designer' => array( 'label' => esc_html__( 'FSE Fashion Designer', 'fse-fashion-designer' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'fse-fashion-designer' ) ),
	);

	$block_pattern_categories = apply_filters( 'fse_fashion_designer_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'fse_fashion_designer_register_block_patterns', 9 );