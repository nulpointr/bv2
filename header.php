<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<meta charset="utf-8" />
<title>Bella Vita</title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_url') ?>/slides.min.jquery.js"></script>
<script>
    $(function () {
        $('#slides').slides({
            preload: true,
            preloadImage: 'img/loading.gif',
            play: 5000,
            pause: 2500,
            hoverPause: true
        });

        $(document).ready(function () {
            $('.headerWrapper').width($(window).width() - (322 + $('#siteLogo').position().left));
            console.log($('#siteLogo').width());
        });

        $(window).resize(function () {
            $('.headerWrapper').width($(window).width() - ($('#siteLogo').width() + $('#siteLogo').position().left));
        });


    });
</script>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
    <header>
           <div id="banner">
            <div id="topNav">
                <div class="headerWrapper">
                    <ul>
                        <li><a href="#">Country</a></li>
                        <li style="border-left: 1px solid #cecfad; border-right: 1px solid #cecfad;"><a href="#">Help</a></li>
                        <li style="margin-right: 70px;"><a href="#" >Contact</a></li>
                        <li><a href="#">Login</a></li>
                        <li style="border-left: 1px solid #cecfad; border-right: 1px solid #cecfad;"><a href="#">Find a Distributor</a></li>
                        <li><a href="#">Shop Now</a></li>
                    </ul>
                </div>
           </div>
            <div class="contentWrapper">
                <a href="<?php bloginfo('url'); ?>"><img id="siteLogo" style="position: absolute; margin-left: -70px;" src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a>
            </div>
           </div>
    <div id="navBar">
        <div class="contentWrapper">
            <?php wp_nav_menu(array('menu' => 'Nav Menu' )); ?>
        </div>
    </div>
</header>