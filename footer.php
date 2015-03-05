<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Authentic Themes
 * @since 1.0
 */
?>

    <div class="clear"></div>
    </div><!-- #main-content -->
    
    </div><!-- #wrap -->

    <div id="footer-wrap">

        <footer id="footer" class="container">

            <div id="footer-widgets" class="clr site-footer">
                <div class="footer-box">
                    <?php dynamic_sidebar( 'footer-one' ); ?>
                </div><!-- .footer-box -->
                <div class="footer-box">
                    <?php dynamic_sidebar( 'footer-two' ); ?>
                </div><!-- .footer-box -->
                <div class="footer-box">
                    <?php dynamic_sidebar( 'footer-three' ); ?>
                </div><!-- .footer-box -->
                <div class="footer-box remove-margin">
                    <?php dynamic_sidebar( 'footer-four' ); ?>
                </div><!-- .footer-box -->
            </div><!-- #footer-widgets -->
            <p id="copyright">&copy; Colin Smith 2015</p>


            
            <ul id="sm">
                    
                    <li><a class="instagram" href="http://instagram.com/colinsmithwoodworking" target="_blank">Instagram</a></li>
                    <li><a class="twitter" href="https://twitter.com/colinsmithwood" target="_blank">Twitter</a></li>
                    <li><a class="facebook" href="https://www.facebook.com/colinsmithwoodworking" target="_blank">Facebook</a></li>
                    <li><a class="googleplus" href="https://plus.google.com/+Colinsmithwoodworking/" target="_blank">Google Plus</a></li>
                    <li><a class="pinterest" href="http://www.pinterest.com/colinsmithwood/" target="_blank">Pinterest</a></li>
             </ul>
       
        </footer><!-- #footer -->

    </div><!-- #footer-wrap -->
    
    <?php att_hook_site_after(); ?>

<?php wp_footer(); ?>
</body>
</html>