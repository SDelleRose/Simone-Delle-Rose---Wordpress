<?php

// SIDEBARS
if (function_exists('register_sidebar')) {
	register_sidebar(array(
	'name' => 'Sidebar',
	'id'   => 'sidebar-area',
	'description'   => 'La nostra widget area.',
	'before_widget' => '<div class="widget-box">',
	'after_widget'  => '</div>',
	'before_title'  => '<p><strong>',
	'after_title'   => '</strong></p>'
	));
	
	register_sidebar(array(
	'name' => 'Footer Sidebar',
	'id'   => 'footer-sidebar-area',
	'description'   => 'La nostra widget area.',
	'before_widget' => '<div class="widget-box">',
	'after_widget'  => '</div>',
	'before_title'  => '<p><strong>',
	'after_title'   => '</strong></p>'
	));
	
   }



// file CSS and JAVASCRIPT
if (! function_exists('business_enqueue')) {
function business_enqueue(){
	wp_enqueue_style( "style", get_template_directory_uri()."/style.css", array(), "1.0.0", "all" );

	wp_enqueue_script( "code", get_template_directory_uri()."/js/code.js", array(), "1.0.0", true );
}
}
add_action( "wp_enqueue_scripts", "business_enqueue" );



// theme SETUP
if (! function_exists('business_setup')) {
function business_setup(){

	// Enable featured image
	add_theme_support( 'post-thumbnails' );

	// Enable logo
	add_theme_support( 'custom-logo' );

	// Enable title tag
	add_theme_support( "title-tag" );

	// Enable custom header
	$args = array(
		'default-color' => '0000ff',
	);
	add_theme_support( 'custom-header', $args );

	// Custom menu
	register_nav_menus( array (
		'header' => esc_html__('Header', 'fullbase')
	));
}
}
add_action( "init", "business_setup" );
?>