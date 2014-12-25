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

            <div class="home_intro">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		            
		    <?php the_content(); ?>

		    <?php endwhile; else : ?>
				<p>Welcome.</p>
			<?php endif; ?>
			</div>
            
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