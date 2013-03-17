<?php
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Post Format support. You can also use the legacy "gallery" or "asides" (note the plural) categories.
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

    function the_post_thumbnail_url(){
        echo wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
    }

    register_nav_menus( array(
	    'Nav Menu' => 'Main Navigation Menu'
    ) );
?>