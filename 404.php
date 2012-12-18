<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package e2
 * @since e2 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="page-title"><?php _e( 'Где страница, Лебовски?', 'e2' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p><?php _e( 'То, что вы ищите, пропало или не существует. Прям как мой ковёр.', 'e2' ); ?></p>

				</div><!-- .entry-content -->
			</article><!-- #post-0 .post .error404 .not-found -->

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<?php get_footer(); ?>