<?php
/*
	*Theme Name	: BusiProf
	*Theme Core Functions and Codes
*/	
	/**Includes reqired resources here**/
	define('WEBRITI_TEMPLATE_DIR_URI',get_template_directory_uri());	
	
	define('WEBRITI_TEMPLATE_DIR',get_template_directory());
	define('WEBRITI_THEME_FUNCTIONS_PATH',WEBRITI_TEMPLATE_DIR.'/functions');
	
	define('WEBRITI_THEME_OPTIONS_PATH',WEBRITI_TEMPLATE_DIR_URI.'/functions/theme_options');
	
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/menu/default_menu_walker.php' ); // for Default Menus
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/menu/rambo_nav_walker.php' ); // for Custom Menus	
	
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/scripts/scripts.php' ); // all js and css file for rambo-pro	
	
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/pagination/webriti_pagination.php' ); //webriti pagination class
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/post-type/custom-post-type.php' );// for rambo-pro cpt
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/meta-box/post-meta.php' );// for rambo-pro meta box
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/resize_image/resize_image.php' ); //for image resize
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/commentbox/comment-function.php' ); //for comments
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/widget/custom-sidebar.php' ); //for widget register
	
	// Footer widgets
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/widget/rambo-footer-usefull-links-widgets.php' ); //for footer custom widgets	
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/widget/rambo-footer-contact-widgets.php' ); //for footer custom widgets	
	
	// Sidebar Widgets
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/widget/rambo-sidebar-latest-news.php' ); //for sidebar Latest News custom widgets	
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/widget/rambo-sidebar-categoryt-list.php' ); //for sidebar category list	
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/widget/rambo-sidebar-social-media.php' ); //for sidebar social media	
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/widget/rambo-sidebar-newsletter.php' ); //for sidebar Newsletter widgets
	
	//shortcode  
	require_once( WEBRITI_THEME_FUNCTIONS_PATH .'/shortcodes/shortcodes.php');
	
	//require( WEBRITI_THEME_FUNCTIONS_PATH . '/excerpt/excerpt.php' ); // for Excerpt Length
	
	global $resetno; //user for reset function
	//content width
	if ( ! isset( $content_width ) ) $content_width = 900;	
	
	//wp title tag starts here
	function webriti_head( $title, $sep )
	{	global $paged, $page;		
		if ( is_feed() )
			return $title;
		// Add the site name.
		$title .= get_bloginfo( 'name' );
		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";
		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( _e( 'Page', 'rambo' ), max( $paged, $page ) );
		return $title;
	}	
	add_filter( 'wp_title', 'webriti_head', 10,2 );
	
		add_action( 'after_setup_theme', 'webriti_setup' ); 	
		function webriti_setup()
		{	// Load text domain for translation-ready
			load_theme_textdomain( 'rambo', WEBRITI_THEME_FUNCTIONS_PATH . '/lang' );	
			
		// function custom_excerpt_length( $length ) {	return 50; }
		// add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
		function new_excerpt_more( $more ) {	return '';}
		add_filter('excerpt_more', 'new_excerpt_more');
		
		function cleanup_shortcode_fix($content) {  
              $array = array ('<p>[' => '[',']</p>' => ']',']<br />' => ']',']<br>' => ']','<p>  </p>'=>'');              
			  $content = strtr($content, $array);				
			return $content;
            }
		add_filter('the_content', 'cleanup_shortcode_fix'); 
		
		add_theme_support( 'post-thumbnails' ); //supports featured image
		add_theme_support( 'woocommerce' );//woocommerce
		// This theme uses wp_nav_menu() in one location.
		register_nav_menu( 'primary', __( 'Primary Menu', 'rambo' ) );
		// theme support 	
		$args = array('default-color' => '000000',);
		global $wp_version;
		if ( version_compare( $wp_version, '3.4', '>=' ) ) :
			add_theme_support( 'custom-background' ); 
		else :
			add_custom_background( $args );
		endif;
		
		//do_action('busiprof_init');//load admin pannal file	
		require_once('theme_setup_data.php');
		require( WEBRITI_THEME_FUNCTIONS_PATH . '/theme_options/option_pannel.php' ); // for Custom Menus		
		// setup admin pannel defual data for index page
		
		$rambo_pro_theme=theme_data_setup(); 
		
		$current_theme_options = get_option('rambo_pro_theme_options'); // get existing option data 		
		if($current_theme_options)
		{ 	$rambo_pro_theme_options = array_merge($rambo_pro_theme, $current_theme_options);
			update_option('rambo_pro_theme_options',$rambo_pro_theme_options);	// Set existing and new option data			
		}
		else
		{
			add_option('rambo_pro_theme_options',$rambo_pro_theme);  // set New option data 
		}
			
		/*$rambo_pro_theme_options=theme_data_setup();		
		add_option('rambo_pro_theme_options',$rambo_pro_theme_options); */
	}
		
?>