<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Kool
 
 * @since Kool 1.0.1
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'kool_credits' ); ?>
			<p><?php bloginfo(); ?> &copy; <?php echo date( 'Y' ); ?>. <?php _e( 'All Rights Reserved.', ' kool' ); ?></p>
		      <p><?php _e('Powered by','kool'); ?> <a href="http://wordpress.org" rel="nofollow">WordPress </a>| <?php _e('Theme by','kool'); ?> <a href="http://hit-hut.com/themes">Shahin Raj</a> </p>
				</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>