<?php
/* Template Name: Homepage: Slider */

/**
 * Media Albums template. Uses dt_gallery post type and dt_gallery_category taxonomy.
 *
 * @package presscore
 * @since presscore 0.1
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

$config = Presscore_Config::get_instance();
$config->set( 'template', 'albums' );
$config->set( 'template.layout.type', 'masonry' );

// add content controller
add_action('presscore_before_main_container', 'presscore_page_content_controller', 15);
get_header();
?> 
<?php
if ( presscore_is_content_visible() ): ?>
			<!-- Content -->
			
			<div id="content" class="content" role="main">
				<?php  presscore_get_template_part( 'theme', 'slider/form-slider' ); ?>
			</div><!-- #content -->

			<?php
			do_action('presscore_after_content');
endif; // if content visible

get_footer(); ?>