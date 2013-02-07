<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package e2
 * @since e2 1.0
 */
?>

	</div><!-- #main .site-main -->
</div><!-- #page .hfeed .site -->
<div class="line"></div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'e2_credits' ); ?>
			<div class="footer-block copyrights">
				<?php
					if ( !is_user_logged_in() ) { ?>
						<a id="login" class="login" href="#">Вход</a>
				<?php } ?>		
				&copy; 2012 &mdash; 2013 Джеффри &laquo;Чувак&raquo; Лебовски
			</div>

			<div class="footer-block engine-info">
				Движок &mdash; <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'e2' ); ?>" rel="generator">WordPress</a><br />
				<?php printf( __( 'Тема: %1$s', 'e2' ), 'e2 v.1' ); ?>
			</div>
			<div class="footer-block footer-block_right">
				<?php get_template_part( 'searchform'); ?>	
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->


<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/login.js" type="text/javascript"></script>
</body>
</html>