<?php
/**
 * FSE Fashion Designer functions and definitions
 *
 * @package fse_fashion_designer
 * @since 1.0
 */

if ( ! function_exists( 'fse_fashion_designer_support' ) ) :
	function fse_fashion_designer_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

	}
endif;

add_action( 'after_setup_theme', 'fse_fashion_designer_support' );

if ( ! function_exists( 'fse_fashion_designer_styles' ) ) :
	function fse_fashion_designer_styles() {
		// Register theme stylesheet.
		$fse_fashion_designer_theme_version = wp_get_theme()->get( 'Version' );

		$fse_fashion_designer_version_string = is_string( $fse_fashion_designer_theme_version ) ? $fse_fashion_designer_theme_version : false;
		wp_enqueue_style(
			'fse-fashion-designer-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$fse_fashion_designer_version_string
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'fse_fashion_designer_styles' );

/* Theme Credit link */
define('FSE_FASHION_DESIGNER_BUY_NOW',__('https://www.cretathemes.com/products/fashion-stylist-wordpress-theme','fse-fashion-designer'));
define('FSE_FASHION_DESIGNER_PRO_DEMO',__('https://pattern.cretathemes.com/fse-fashion-designer/','fse-fashion-designer'));
define('FSE_FASHION_DESIGNER_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/fse-fashion-designer/','fse-fashion-designer'));
define('FSE_FASHION_DESIGNER_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/fse-fashion-designer/','fse-fashion-designer'));
define('FSE_FASHION_DESIGNER_SUPPORT',__('https://wordpress.org/support/theme/fse-fashion-designer','fse-fashion-designer'));
define('FSE_FASHION_DESIGNER_REVIEW',__('https://wordpress.org/support/theme/fse-fashion-designer/reviews/#new-post','fse-fashion-designer'));

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// Add Getstart admin notice
function fse_fashion_designer_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'fse_fashion_designer_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_fse-fashion-designer-guide-page' ) { ?>

	    <div class="notice notice-success">
	        <h1><?php esc_html_e('Hey, Thank you for installing FSE Fashion Designer Theme!', 'fse-fashion-designer'); ?></h1>
	        <p><a class="button button-primary customize load-customize hide-if-no-customize" href="<?php echo esc_url( admin_url( 'themes.php?page=fse-fashion-designer-guide-page' ) ); ?>"><?php esc_html_e('Navigate Getstart', 'fse-fashion-designer'); ?></a> <a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'fse-fashion-designer'); ?></a></p>
	        <p class="dismiss-link"><strong><a href="?fse_fashion_designer_admin_notice=1"><?php esc_html_e( 'Dismiss', 'fse-fashion-designer' ); ?></a></strong></p>
	    </div>
	    <?php }?>
	    <?php
	}
}

add_action( 'admin_notices', 'fse_fashion_designer_admin_notice' );

if( ! function_exists( 'fse_fashion_designer_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function fse_fashion_designer_update_admin_notice(){
    if ( isset( $_GET['fse_fashion_designer_admin_notice'] ) && $_GET['fse_fashion_designer_admin_notice'] = '1' ) {
        update_option( 'fse_fashion_designer_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'fse_fashion_designer_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'fse_fashion_designer_getstart_setup_options');
function fse_fashion_designer_getstart_setup_options () {
    update_option('fse_fashion_designer_admin_notice', FALSE );
}