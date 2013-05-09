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
				<?php } 
					$options = get_option('e2'); 
					echo $options['1'];				
				?> 
								
			</div>

			<div class="footer-block engine-info">
				Движок &mdash; <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'e2' ); ?>" rel="generator">WordPress</a><br />
				<a href="https://github.com/Defite/e2-wp" target="_blank">
				<?  
				
				if (function_exists('wp_get_theme')){
			        $theme_data = wp_get_theme();
			        $name = $theme_data->get('Name');
			        $version = $theme_data->get('Version');
			        $theme_info = $name.' v.'.$version;
			        printf( __( 'Тема: %1$s', 'e2' ), $theme_info );
			    }else{
			        $theme_data = get_theme_data(trailingslashit(get_stylesheet_directory()) . 'style.css');
			        $name = $theme_data['Name'];
			        $theme_info = $name.' v.'.$version;
			        printf( __( 'Тема: %1$s', 'e2' ), $theme_info );
			    }
				
				?>
				</a>
				
				
			</div>
			<div class="footer-block footer-block_right">
				<?php get_template_part( 'searchform'); ?>	
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->


<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/login.js" type="text/javascript"></script>
<? echo $options['ya-metrika']; ?>
</body>
</html>