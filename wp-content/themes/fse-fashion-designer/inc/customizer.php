<?php
/**
 * FSE Fashion Designer: Customizer
 *
 * @package FSE Fashion Designer
 * @subpackage fse_fashion_designer
 */

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class FSE_Fashion_Designer_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'FSE_Fashion_Designer_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new FSE_Fashion_Designer_Customize_Section_Pro(
				$manager,
				'fse_fashion_designer_section_pro',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'FSE Fashion Designer Pro', 'fse-fashion-designer' ),
					'pro_text' => esc_html__( 'GET PRO', 'fse-fashion-designer' ),
					'pro_url'  => esc_url( 'https://www.cretathemes.com/products/fashion-stylist-wordpress-theme', 'fse-fashion-designer' ),
				)
			)
		);

	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'fse-fashion-designer-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'fse-fashion-designer-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/customize-controls.css' );
	}
}

// Doing this customizer thang!
FSE_Fashion_Designer_Customize::get_instance();