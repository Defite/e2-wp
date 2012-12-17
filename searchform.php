<?php
/**
 * The template for displaying search forms in e2
 *
 * @package e2
 * @since e2 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<span class="i-loupe"></span>
		<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Искать &hellip;', 'e2' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'e2' ); ?>" />
	</form>
