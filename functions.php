<?php
// Register nav
	require_once('class-wp-bootstrap-navwalker.php');

// Theme Support
	function wpb_theme_setup(){

		//thumbnails
		add_theme_support('post-thumbnails');
		//Nav Menus
		register_nav_menus(array(
			'primary' => __('Primary Menu')
		));
	}

	add_action('after_setup_theme','wpb_theme_setup');

//Excerpt length control
	function set_excerpt_length(){
		return 40;
	}

	add_filter('excerpt_length', 'set_excerpt_length');


//Widget Location

	function wpb_init_widgets($id){
		register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
		));
	}
	add_action('widgets_init', 'wpb_init_widgets');


//Load Jquery
function loadJquery(){
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . 'js/jquery-3.4.1.min.js', '', 1, true);
  add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_equeue_scripts','loadJquery');



