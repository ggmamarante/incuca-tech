<?php

	/* ######
	   Inclusão do CSS e JS
	############ */

	function add_css(){
		if (is_admin())
		return;
		wp_enqueue_style('style');
	}

	function add_scripts(){
		if (is_admin())
		return;
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('mask');
	}

	wp_register_style('style',			get_bloginfo('template_url') . '/style.css?v=1');
	add_action('wp_print_styles','add_css');

	wp_register_script( 'bootstrap',	get_bloginfo('template_url') . '/assets/js/bootstrap.min.js');
	wp_register_script( 'mask',			get_bloginfo('template_url') . '/assets/js/mask.min.js');
	add_action('wp_footer','add_scripts');

	/* ######
	   Funções
	############ */

	// Menu do site no painel
	add_theme_support('menus');

	// Oculta barra do admin
	add_filter('show_admin_bar', '__return_false');

	// Oculta versão do Wordpress no código
	remove_action('wp_head', 'wp_generator');

	// Bloqueia tags automáticas do CF7
	add_filter('wpcf7_autop_or_not', '__return_false');

	// Classes da página no body
	function add_slug_body_class($classes){
		global $post;
		if (isset($post)){
			$classes[] = $post->post_type . '-' . $post->post_name;
		}
		return $classes;
	}
	add_filter('body_class', 'add_slug_body_class');

	// Upload HTTP
	add_filter('wp_image_editors', 'change_graphic_lib');
	function change_graphic_lib($array) {
		return array('WP_Image_Editor_GD', 'WP_Image_Editor_Imagick');
	}

	// Alterando link do logo no wp-admin
	function my_login_logo_url() {
		return get_bloginfo( 'url' );
	}
	add_filter( 'login_headerurl', 'my_login_logo_url' );

	// Add página de conteúdo geral
	if(function_exists('acf_add_options_page')) {
		acf_add_options_page([
			'page_title'	=> _('Tema geral'),
			'menu_title'	=> _('Tema geral'),
			'menu_slug' 	=> 'general-theme',
			'redirect'		=> false,
		]);
	}

?>