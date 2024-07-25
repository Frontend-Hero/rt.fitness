<?php


	/*********************************************************
	* Enable WP parts
	**********************************************************/

	add_theme_support( 'post-thumbnails' );  
	add_theme_support( 'menus' );


	/*********************************************************
	* Allow SVG 
	**********************************************************/

	add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

		global $wp_version;
			if ( $wp_version !== '4.7.1' ) {
			return $data;
		}

		$filetype = wp_check_filetype( $filename, $mimes );

		return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
		];

		}, 10, 4 );

	function cc_mime_types( $mimes ){
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter( 'upload_mimes', 'cc_mime_types' );

	function fix_svg() {
		echo '<style type="text/css">
		.attachment-266x266, .thumbnail img {
		width: 100% !important;
		height: auto !important;
		}
		</style>';
	}
	add_action( 'admin_head', 'fix_svg' );


	/*********************************************************
	* Remove JetPack upsell messages
	**********************************************************/

	// add_filter( 'jetpack_just_in_time_msgs', '__return_false' );



	/*********************************************************
	* Remove archive title prefixes
	**********************************************************/
	
	add_filter('get_the_archive_title', function ($title) {
		if (is_category()) {
			$title = single_cat_title('', false);
		} elseif (is_tag()) {
			$title = single_tag_title('', false);
		} elseif (is_author()) {
			$title = '<span class="vcard">' . get_the_author() . '</span>';
		} elseif (is_tax()) { //for custom post types
			$title = sprintf(__('%1$s'), single_term_title('', false));
		} elseif (is_post_type_archive()) {
			$title = post_type_archive_title('', false);
		}
		return $title;
	});


	/**
	 * We use WordPress's init hook to make sure
	 * our blocks are registered early in the loading
	 * process.
	 *
	 * @link https://developer.wordpress.org/reference/hooks/init/
	 */
	function rt_register_acf_blocks() {
		/**
		 * We register our blocks with WordPress's handy
		 * register_block_type();
		 *
		 * @link https://developer.wordpress.org/reference/functions/register_block_type/
		 */
		/* register_block_type( __DIR__ . '/blocks/hero' ); */
	}
	// Here we call our tt3child_register_acf_block() function on init.
	add_action( 'init', 'rt_register_acf_blocks' );


	/*********************************************************
	* Customise excerpt
	**********************************************************/

	function feh_custom_excerpt_length( $length ) 
	{
		return 25;
	}
	add_filter( 'excerpt_length', 'feh_custom_excerpt_length', 999 );

	function feh_excerpt_more( $more ) {
		return '...';
	}
	add_filter( 'excerpt_more', 'feh_excerpt_more' );
	

	/*********************************************************
	* Enqueue scripts and styles
	**********************************************************/

	function feh_scripts()  
	{	
		/* Styles */
		wp_enqueue_style( 'adobe-futura', 'https://use.typekit.net/uqs2rox.css' );
		wp_enqueue_style( 'aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css');

		wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
		wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' );
        wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/hamburgers.min.css' );
		wp_enqueue_style( 'rt-fitness', get_stylesheet_uri() . '' );
		 
		/* JS */
		wp_enqueue_script('jquery');
		wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
		wp_enqueue_script('aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js');

		wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js?v=9hdfg5' );
	}

	add_action( 'wp_enqueue_scripts', 'feh_scripts' );


	/*********************************************************
	* Register menu
	**********************************************************/

	add_action( 'init', 'register_my_menu' );
	function register_my_menu() 
	{
		register_nav_menus 
		(
			array 
			(
				'primary-nav' => 'Primary Navigation',
				// 'footer-nav' => 'Footer Navigation',
			)
		);
	}
			

	/*********************************************************
	* Add Widget Areas
	**********************************************************/

	if(function_exists('register_sidebar')) 
	{
		register_sidebar(array 
		(
   			'name' 			=> __('Primary Sidebar'),
			'id' 			=> 'primary-sidebar',
   			'before_widget' => '<div id="%1$s" class="widget_box %2$s">',
			'after_widget' 	=> '</div>',
		    'before_title'	=> '<h3>',
		    'after_title' 	=> '</h3>'
    	));
		register_sidebar(array 
		(
   			'name' 			=> __('Footer Area'),
			'id' 			=> 'footer-area',
   			'before_widget' => '<div id="%1$s" class="widget_box footer-area grid-span-4 %2$s">',
			'after_widget' 	=> '</div>',
		    'before_title'	=> '<h4>',
		    'after_title' 	=> '</h4>'
    	));
	}