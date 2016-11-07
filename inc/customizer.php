<?php 
	function wpb_customize_register($wp_customize){
		// Showcase Section
		$wp_customize -> add_section('showcase', array(
			'title' => __('Showcase', 'x-theme'),
			'description' => sprintf(__('Options for showcase','x-theme')),
			'priority' => 130
			));

		$wp_customize -> add_setting('showcase_image', array(
			'default' =>  get_bloginfo('template_directory').'/img/showcase.jpg',
			'type' => 'theme_mod'
			));
		$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
			'label' => __('Showcase Image','x-theme'),
			'section' => 'showcase',
			'settings' => 'showcase_image',
			 'priority' => 1
			)));

		$wp_customize -> add_setting('showcase_heading', array(
			'default' =>  _x('X Header Theme','x-theme'),
			'type' => 'theme_mod'
			));
		$wp_customize -> add_control('showcase_heading', array(
			'label' => __('Heading','x-theme'),
			'section' => 'showcase',
			 'priority' => 2
			));

		$wp_customize -> add_setting('showcase_text', array(
			'default' =>  _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi impedit dicta tenetur voluptas magni et eligendi id quas libero! Soluta numquam quae cumque harum perferendis velit doloribus delectus, voluptatem natus.','x-theme'),
			'type' => 'theme_mod'
			));
		$wp_customize -> add_control('showcase_text', array(
			'label' => __('Text','x-theme'),
			'section' => 'showcase',
			 'priority' => 3
			));

		$wp_customize -> add_setting('btn_url', array(
			'default' =>  _x('http://test.com','x-theme'),
			'type' => 'theme_mod'
			));
		$wp_customize -> add_control('btn_url', array(
			'label' => __('Button Url','x-theme'),
			'section' => 'showcase',
			 'priority' => 4
			));

		$wp_customize -> add_setting('btn_text', array(
			'default' =>  _x('Learn More','x-theme'),
			'type' => 'theme_mod'
			));
		$wp_customize -> add_control('btn_text', array(
			'label' => __('Button Text','x-theme'),
			'section' => 'showcase',
			 'priority' => 5
			));
	}
	add_action('customize_register', 'wpb_customize_register')
 ?>