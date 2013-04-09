<?php
/**
 * The template for displaying posts in the Link post format.
 *
 * @package WordPress
 * @subpackage e2
 * @since e2 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">
			<a href="<?php echo esc_url( e2_get_link_url() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>   
        </h1>
		<?php edit_post_link( __( 'Edit', 'e2' ), '<span class="edit-link">', '</span>' ); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
		<span class="entry-meta">
			<?php e2_posted_on(); ?>
		</span><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'e2' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ' ', 'e2' ) );
				if ( $tags_list ) :
			?>
			<div class="tags-links">
				<?php printf( __( '%1$s', 'e2' ), $tags_list ); ?>
			</div>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Оставить комментарий', 'e2' ), __( '1 комментарий', 'e2' ), __( 'Уже % отписалось', 'e2' ) ); ?></span>
		<?php endif; ?>

		
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->