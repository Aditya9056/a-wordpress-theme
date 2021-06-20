<?php

class FunctionsClass {

	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'load_assets' ) );
		add_action( 'after_setup_theme', array( $this, 'theme_features' ) );
	}

	public function theme_features() {
		add_theme_support( 'title-tag' );
	}

	public function load_assets() {
		wp_enqueue_style(
			'main-style',
			get_stylesheet_uri(),
			array(),
			filemtime( plugin_dir_path( __FILE__ ) . 'style.css' ),
			false
		);

		wp_enqueue_style(
			'font-awesome-style',
			'//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
			array(),
			'4.7.0',
			false
		);

		wp_enqueue_style(
			'roboto-font-style',
			'//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i',
			array(),
			'1.0.0',
			false
		);

		wp_enqueue_script(
			'university-javascript',
			get_template_directory_uri() . '/assets/js/scripts-bundled.js',
			array(),
			filemtime( plugin_dir_path( __FILE__ ) . '/assets/js/scripts-bundled.js' ),
			true
		);

	}

}
 new FunctionsClass();




