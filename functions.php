<?php


	/*********************************************************
	* Enable WP parts
	**********************************************************/

	add_theme_support( 'post-thumbnails' );  
	add_theme_support( 'menus' );


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
		/* register_block_type( __DIR__ . '/blocks/about-area' );
		register_block_type( __DIR__ . '/blocks/blog-posts' );
        register_block_type( __DIR__ . '/blocks/accordion' );
		register_block_type( __DIR__ . '/blocks/courses' ); */
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
		wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' );
		//wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' );
        //wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/hamburger.min.css' );
		wp_enqueue_style( 'rt-fitness', get_stylesheet_uri() . '' );
		 
		/* JS */
		wp_enqueue_script('jquery');
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