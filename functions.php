<?php 
	// Register Navwalker
	require_once('wp_bootstrap_navwalker.php');
	function theme_setup(){

		add_theme_support('post-thumbnails');

		// Nav Menus
		register_nav_menus(array(
			'primary' => __('Primary Menu')
			));

		// Post Formats
		add_theme_support('post-formats', array('aside','gallery'));
	}

	add_action('after_setup_theme', 'theme_setup');

	// Excerpt Length
	function set_excerpt_length(){
		return 45;
	}
	add_filter('excerpt_length', 'set_excerpt_length');

	// Widget Locations
	function init_widgets($id){
		register_sidebar(array(
			'name' => 'sidebar',
			'id' => 'sidebar',
			'before_widget' => ' <div class="sidebar-module table table-condensed table-bordered"> ',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
			));
		register_sidebar(array(
			'name' => 'Box1',
			'id' => 'box1',
			'before_widget' => ' <div class="box"> ',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
			));
		register_sidebar(array(
			'name' => 'Box2',
			'id' => 'box2',
			'before_widget' => ' <div class="box"> ',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
			));
		register_sidebar(array(
			'name' => 'Box3',
			'id' => 'box3',
			'before_widget' => ' <div class="box"> ',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
			));
	}
// Customizer File
	add_action('widgets_init', 'init_widgets');
	require get_template_directory(). '/inc/customizer.php';
 ?>
