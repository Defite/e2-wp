<?php
/**
 * Video post template
 * @package e2
 * @since e2 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">
			<?php	$categories_list = get_the_category_list( __( ', ', 'e2' ) );
					if ( $categories_list && e2_categorized_blog() ) : printf( __( '%1$s &rarr; ', 'e2' ), $categories_list ); 
					endif; // End if categories 
			?>
			<?php if ( is_single() ) : ?>
            	<?php the_title(); ?>
			<?php else : ?>
            	<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'e2' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
            <?php endif; // is_single() ?>
        </h1>
        <?php edit_post_link( __( 'Edit', 'e2' ), '<span class="edit-link">', '</span>' ); ?>
		<span class="entry-meta">
			<?php e2_posted_on(); ?>
		</span><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content( __( 'Далее <span class="meta-nav">&rarr;</span>', 'e2' ) ); ?>
        
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'e2' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
    
    <footer class="entry-meta">
		<?php //if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ' ', 'e2' ) );
				if ( $tags_list ) :
			?>
			<div class="tags-links">
				<?php printf( __( '%1$s', 'e2' ), $tags_list ); ?>
			</div>
			<?php //endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( comments_open() && ! is_single() ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Оставить комментарий', 'e2' ), __( '1 комментарий', 'e2' ), __( 'Уже % отписалось', 'e2' ) ); ?></span>
		<?php endif; ?>
		
	</footer><!-- .entry-meta -->

</article><!-- #post-<?php the_ID(); ?> -->