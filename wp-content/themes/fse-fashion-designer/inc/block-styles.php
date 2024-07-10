<?php
/**
 * Block Styles
 *
 * @package fse_fashion_designer
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function fse_fashion_designer_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'fse-fashion-designer-padding-0',
				'label' => esc_html__( 'No Padding', 'fse-fashion-designer' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'fse-fashion-designer-post-author-card',
				'label' => esc_html__( 'Theme Style', 'fse-fashion-designer' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'fse-fashion-designer-button',
				'label'        => esc_html__( 'Plain', 'fse-fashion-designer' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'fse-fashion-designer-post-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-fashion-designer' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'fse-fashion-designer-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-fashion-designer' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'fse-fashion-designer-wp-table',
				'label'        => esc_html__( 'Theme Style', 'fse-fashion-designer' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'fse-fashion-designer-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'fse-fashion-designer' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'fse-fashion-designer-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'fse-fashion-designer' ),
			)
		);
	}
	add_action( 'init', 'fse_fashion_designer_register_block_styles' );
}
