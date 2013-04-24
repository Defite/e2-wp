<?php

$options = get_option('e2');

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package e2
 * @since e2 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="keywords" content="<? echo $options['meta-keywords']; ?>">
<meta name='yandex-verification' content='74ec3bade8f3fe65' />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<? echo $options['favicon']; ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<style type="text/css">
a {
	color:<? echo $options['link-color']; ?>;
}

a:hover {
	color:<? echo $options['link-hover-color']; ?>;
}

.entry-title a:hover {
	color: <? echo $options['link-color']; ?>;
	border-color: <? echo $options['link-color']; ?>;
}
</style>
</head>

<body <?php body_class(); ?>>
<div id="login-popup">
	<?php 
	$user_info = get_userdata(1);
    $user_login = $user_info->user_login;
	
	$args = array(
        'label_username' => NULL,
        'label_password' => __( 'Password' ),
        'label_remember' => __( 'Remember Me' ),
        'value_username' => $user_login,
        'value_remember' => false ); 
	wp_login_form($args); ?>
</div>

	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<? if (is_home() && !is_paged()) { ?>
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<? } else { ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<? } ?>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
	</header><!-- #masthead .site-header -->

<div class="line"></div>

<div id="page" class="hfeed site">
	<div id="main" class="site-main">