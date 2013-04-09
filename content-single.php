<?php
/**
 * @package e2
 * @since e2 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
                <?php edit_post_link( __( 'Edit', 'e2' ), '<span class="edit-link">', '</span>' ); ?>
		<span class="entry-meta">
			<?php e2_posted_on(); ?>
		</span><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
        
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'e2' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->