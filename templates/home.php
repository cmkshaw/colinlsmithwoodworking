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

	<script type="application/ld+json">
		{ "@context" : "http://schema.org",
		  "@type" : "Person",
		  "name" : "Colin Smith",
		  "url" : "http://www.colinsmithwoodworking.com",
		  "logo": "http://colinsmithwoodworking.com/wp-content/uploads/2014/09/LOGLOGO1801.jpg"
		  "sameAs" : [ "https://www.facebook.com/colinsmithwoodworking",
		      "https://instagram.com/colinsmithwoodworking/",
		      "http://ca.linkedin.com/pub/colin-smith/b3/174/b26",
		      "https://plus.google.com/+Colinsmithwoodworking/",
		      "https://twitter.com/colinsmithwood",
		      "https://www.pinterest.com/colinsmithwood/"] 
		}
	</script>
    
<?php get_footer(); ?>