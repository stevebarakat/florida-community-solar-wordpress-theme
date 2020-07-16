<?php
/************* Home slider custom post type ************************/
$current_options = get_option('rambo_pro_theme_options');
    $slug_slide = $current_options['rambo_slider_slug'];
	$slug_service = $current_options['rambo_service_slug'];
	$slug_portfolio = $current_options['rambo_portfolio_slug'];
	$slug_team = $current_options['rambo_team_slug'];
	$slug_testimonial = $current_options['rambo_testimonial_slug'];

function rambopro_slider() {
	register_post_type( 'rambopro_slider',
		array(
			'labels' => array(
			'name' => 'Featured Slider',
			//'singular_name' => 'Featured Services',
			'add_new' => __('Add New Slide', 'rambo'),
			'add_new_item' => __('Add New Slider','rambo'),
			'edit_item' => __('Add New Slide','rambo'),
			'new_item' => __('New Link','rambo'),
			'all_items' => __('All Featured Sliders','rambo'),
			'view_item' => __('View Link','rambo'),
			'search_items' => __('Search Links','rambo'),
			'not_found' =>  __('No Links found','rambo'),
			'not_found_in_trash' => __('No Links found in Trash','rambo'), 
			),
		'supports' => array('title','thumbnail'),
		'show_in' => true,
		'public' => true,
		'rewrite' => array('slug' => $GLOBALS['slug_slide']),
		'menu_position' =>20,
		'public' => true,
		'menu_icon' => WEBRITI_TEMPLATE_DIR_URI . '/images/slides.png',
		)
	);
}
add_action( 'init', 'rambopro_slider' );

/************* Home Service custom post type ***********************/	
function rambopro_service_type()
{	register_post_type( 'rambopro_service',
		array(
			'labels' => array(
			'name' => 'Service',
			//'singular_name' => 'Featured Services',
			'add_new' => __('Add New service', 'rambo'),
			'add_new_item' => __('Add New Service','rambo'),
			'edit_item' => __('Add New service','rambo'),
			'new_item' => __('New Link','rambo'),
			'all_items' => __('All Services','rambo'),
			'view_item' => __('View Link','rambo'),
			'search_items' => __('Search Links','rambo'),
			'not_found' =>  __('No Links found','rambo'),
			'not_found_in_trash' => __('No Links found in Trash','rambo'), 
			),
		'supports' => array('title','thumbnail'),
		'show_in' => true,
		'public' => true,
		'rewrite' => array('slug' => $GLOBALS['slug_service']),
		'menu_position' =>20,
		'public' => true,
		'menu_icon' => WEBRITI_TEMPLATE_DIR_URI . '/images/option-icon-general.png',
		)
	);
}
add_action( 'init', 'rambopro_service_type' );

/************* Home project custom post type ***********************	*/
function rambopro_project_type()
{
	register_post_type( 'rambopro_project',
		array(
			'labels' => array(
				'name' => 'Portfolio / Project',
				//'singular_name' => 'Featured Services',
				'add_new' => __('Add New Item', 'rambo'),
				'add_new_item' => __('Add New Project','rambo'),
				'edit_item' => __('Add New Portfolio / project','rambo'),
				'new_item' => __('New Link','rambo'),
				'all_items' => __('All Portfolio Project','rambo'),
				'view_item' => __('View Link','rambo'),
				'search_items' => __('Search Links','rambo'),
				'not_found' =>  __('No Links found','rambo'),
				'not_found_in_trash' => __('No Links found in Trash','rambo'), 
			),
			'supports' => array('title','editor','thumbnail'),
			'show_in' => true,
			'show_in_nav_menus' => false,
			'rewrite' => array('slug' =>$GLOBALS['slug_portfolio']),
			'public' => true,
			'menu_position' =>20,
			'public' => true,
			'menu_icon' => WEBRITI_TEMPLATE_DIR_URI . '/images/option-icon-media.png',
		)
	);
}
add_action( 'init', 'rambopro_project_type' );

/******************************Team POST TYPE*******************************************************/
function rambopro_team_type()
{	register_post_type( 'rambopro_team',
		array(
			'labels' => array(
				'name' => 'Our Team',
				//'singular_name' => 'Featured Services',
				'add_new' => __('Add New Team Member', 'rambo'),
                'add_new_item' => __('Add New Member','rambo'),
				'edit_item' => __('Add New Member','rambo'),
				'new_item' => __('New Link','rambo'),
				'all_items' => __('All Team Member','rambo'),
				'view_item' => __('View Link','rambo'),
				'search_items' => __('Search Links','rambo'),
				'not_found' =>  __('No Links found','rambo'),
				'not_found_in_trash' => __('No Links found in Trash','rambo'), 
				),
			'supports' => array('title','thumbnail'),
			'show_in' => true,
			'public' => true,
			'rewrite' => array('slug' => $GLOBALS['slug_team']),
			'menu_position' => 20,
			'public' => true,
			'menu_icon' => WEBRITI_TEMPLATE_DIR_URI . '/images/team.png',
			)
	);
}
add_action( 'init', 'rambopro_team_type' );

/************* Home project custom post type ***********************/		
function rambopro_client_strip()
{	register_post_type( 'rambopro_clientstrip',
		array(
			'labels' => array(
				'name' => ' Client',
				//'singular_name' => 'Featured Services',
				'add_new' => __('Add New Client', 'rambo'),
                'add_new_item' => __('Add New Client','rambo'),
				'edit_item' => __('Add New Client','rambo'),
				'new_item' => __('New Link','rambo'),
				'all_items' => __('All Client','rambo'),
				'view_item' => __('View Link','rambo'),
				'search_items' => __('Search Links','rambo'),
				'not_found' =>  __('No Links found','rambo'),
				'not_found_in_trash' => __('No Links found in Trash','rambo'), 
				),
			'supports' => array('title','thumbnail'),
			'show_in' => true,
			'public' => true,
			'menu_position' => 20,
			'public' => true,
			'menu_icon' => WEBRITI_TEMPLATE_DIR_URI . '/images/satisfied-clients.jpg',
			)
	);
}
add_action( 'init', 'rambopro_client_strip' );

/******************************Testimonial POST TYPE*****************************************/
function rambopro_testimonials_type()
{	register_post_type( 'rambopro_testimonial',
		array(
			'labels' => array(
				'name' => 'Testimonials',
				//'singular_name' => 'Featured Services',
				'add_new' => __('Add New Testimonial', 'rambo'),
				'add_new_item' => __('Add New Testimonial','rambo'),
				'edit_item' => __('Add New Testimonial','rambo'),
				'new_item' => __('New Link','rambo'),
				'all_items' => __('All Testimonials','rambo'),
				'view_item' => __('View Link','rambo'),
				'search_items' => __('Search Links','rambo'),
				'not_found' =>  __('No Links found','rambo'),
				'not_found_in_trash' => __('No Links found in Trash','rambo'), 
				),
			'supports' => array('title','editor','thumbnail'),
			'show_in' => true,
			'public' => true,
			'rewrite' => array('slug' => $GLOBALS['slug_testimonial']),
			'menu_position' => 20,
			'public' => true,
			'menu_icon' => get_template_directory_uri() . '/images/testimonial.png',
		)
	);
}
add_action( 'init', 'rambopro_testimonials_type' );

?>