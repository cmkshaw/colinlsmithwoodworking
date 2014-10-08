<?php
/**
 * Template Name: Homepage
 *
 *
 * Custom template used for this theme's homepage display
 *
 * @package WordPress
 * @subpackage Authentic Themes
 * @since 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area clr">
		<div id="content" class="site-content" role="main">

            <div id="home-wrap" class="clr container">
            
              <?php
                /**************************
                * Slider
                ****************************/
				if ( of_get_option ( 'enable_slides', '1' ) == '1' ) : ?>
                	<?php get_template_part( 'content','slides' );  ?>
				<?php endif; ?>
                

		
    
			</div><!-- #home-wrap -->   

    	</div><!-- #content -->
	</div><!-- #primary -->
    
<?php get_footer(); ?>