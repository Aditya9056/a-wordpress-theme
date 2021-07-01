<?php

class FunctionsClass {

	public function __construct() {
		// Actions
		add_action( 'wp_enqueue_scripts', array( $this, 'load_assets' ) );
		add_action( 'after_setup_theme', array( $this, 'theme_features' ) );

		// Dynamic Header & Footer Navigation
		register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
		register_nav_menu( 'footerMenuOne', 'Footer Menu One' );
		register_nav_menu( 'footerMenuTwo', 'Footer Menu Two' );

	}

	public function theme_features() {
		add_theme_support( 'title-tag' );
	}

	public function load_assets() {
			// filemtime( plugin_dir_path( __FILE__ ) . '/assets/js/scripts-bundled.js' ),
			// get_template_directory_uri() . '/assets/js/scripts-bundled.js',

		if ( strstr( $_SERVER['SERVER_NAME'], 'one.wordpress.test' ) ) {
			wp_enqueue_script(
				'university-javascript',
				'http://localhost:3000/bundled.js',
				null,
				1,
				true
			);
		} else {
			wp_enqueue_script(
				'university-vendor-js',
				get_theme_file_uri( '/bundled-assets/vendors~scripts.8c97d901916ad616a264.js' ),
				null,
				1,
				true
			);
			wp_enqueue_script(
				'university-script-js',
				get_theme_file_uri( ' / bundled - assets / scripts.9407ba0c9e80d0b7c41d.js' ),
				null,
				1,
				true
			);

			wp_enqueue_style(
				'main-style',
				get_theme_file_uri( ' / bundled - assets / styles.9407ba0c9e80d0b7c41d.css' ),
				null,
				1,
				false
			);
		}

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

	}

}
 new FunctionsClass();




