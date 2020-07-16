<?php
function rambo_scripts()
{	if ( is_singular() ) wp_enqueue_script( "comment-reply" );
	/*Template Color Scheme CSs*/
	/*Font Awesome CSS*/
	wp_enqueue_style ('font-awesome',WEBRITI_TEMPLATE_DIR_URI .'/font-awesome-4.0.0/css/font-awesome.css');//wp_enqueue_style ('font-awesome-min',get_template_directory_uri().'/font-awesome-4.0.0/css/font-awesome.min.css');
		
	wp_enqueue_style ('style-media',WEBRITI_TEMPLATE_DIR_URI .'/css/style-media.css'); //Style-Media
	wp_enqueue_style ('bootstrap',WEBRITI_TEMPLATE_DIR_URI.'/css/bootstrap.css');		//bootstrap css
	wp_enqueue_style ('bootstrap-responsive',WEBRITI_TEMPLATE_DIR_URI .'/css/bootstrap-responsive.css'); //boot rsp css
	wp_enqueue_style ('docs',WEBRITI_TEMPLATE_DIR_URI .'/css/docs.css'); //docs css
	wp_enqueue_style ('font',WEBRITI_TEMPLATE_DIR_URI.'/css/font/font.css'); // font css
	/*Layout Change Css*/
	wp_enqueue_style ('layout-responsive',WEBRITI_TEMPLATE_DIR_URI.'/css/switcher/layout-responsive.css');
	
	
	
	/*Flex Slider Css */
	// wp_enqueue_style ('flex_css',WEBRITI_TEMPLATE_DIR_URI.'/css/flex_css/flexslider.css');// Flex Slider CSS
	
	//Template Color Scheme Js	
	wp_enqueue_script('bootstrap',WEBRITI_TEMPLATE_DIR_URI.'/js/menu/bootstrap.min.js',array('jquery'));
	wp_enqueue_script('Bootstrap-transtiton',WEBRITI_TEMPLATE_DIR_URI.'/js/menu/menu.js');
	
	wp_enqueue_script('Bootstrap-transtiton',WEBRITI_TEMPLATE_DIR_URI.'/js/bootstrap-transition.js');
	/*Color Schemes*/
	
	wp_enqueue_script('switcher',WEBRITI_TEMPLATE_DIR_URI.'/js/color_scheme/switcher.js');	
	wp_enqueue_script('spectrum',WEBRITI_TEMPLATE_DIR_URI.'/js/color_scheme/spectrum.js');
	
	/*Flex Slider JS*/
	wp_enqueue_script('flexjs',WEBRITI_TEMPLATE_DIR_URI.'/js/flex_slider/jquery.flexslider.js');
	
	//CLient-Strip Slides JS
	wp_enqueue_script('caro',WEBRITI_TEMPLATE_DIR_URI.'/js/carufredsel/jquery.carouFredSel-6.0.4-packed.js');
	
	/****** prettyPhoto for portfolio ******/
	wp_enqueue_style ('prettyPhotocss',WEBRITI_TEMPLATE_DIR_URI.'/css/lightbox/prettyPhoto.css'); // font css
	wp_enqueue_script('prettyPhoto',WEBRITI_TEMPLATE_DIR_URI.'/js/lightbox/jquery.prettyPhoto.js');
	wp_enqueue_script('lightbox',WEBRITI_TEMPLATE_DIR_URI.'/js/lightbox/lightbox.js');
	
	/******* webriti tab js*********/
	wp_enqueue_script('webriti-tab-js',WEBRITI_TEMPLATE_DIR_URI.'/js/webriti-tab-js.js');
	
	
	
	
	require_once('custom_style.php');
	
}
	add_action( 'wp_enqueue_scripts', 'rambo_scripts' );
?>