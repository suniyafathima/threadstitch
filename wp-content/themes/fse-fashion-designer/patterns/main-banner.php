<?php

/**
 * Title: Header Media
 * Slug: fse-fashion-designer/main-banner
 */

?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>","id":9,"dimRatio":50,"customOverlayColor":"#f2e7dc","minHeight":700,"isDark":false,"className":"alignfull","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover is-light alignfull" style="min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#f2e7dc"></span><img class="wp-block-cover__image-background wp-image-9" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"slider-content"} -->
<div class="wp-block-column is-vertically-aligned-center slider-content" style="flex-basis:40%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"33px","lineHeight":"1.8"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-bg-color"}}}},"textColor":"secondary-bg-color","fontFamily":"pacifico"} -->
<h2 class="wp-block-heading has-secondary-bg-color-color has-text-color has-link-color has-pacifico-font-family" style="font-size:33px;font-style:normal;font-weight:400;line-height:1.8"><?php esc_html_e('Make People Believe In You','fse-fashion-designer'); ?><br><span class="color-2"><?php esc_html_e(' By Your Style!!','fse-fashion-designer'); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#9c9d95"},"elements":{"link":{"color":{"text":"#9c9d95"}}}},"fontSize":"small"} -->
<p class="has-text-color has-link-color has-small-font-size" style="color:#9c9d95"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.','fse-fashion-designer'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary-bg-color","textColor":"background","style":{"border":{"radius":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"tiny"} -->
<div class="wp-block-button has-custom-font-size has-tiny-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-background-color has-secondary-bg-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><?php esc_html_e('Make An Appointment','fse-fashion-designer'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->