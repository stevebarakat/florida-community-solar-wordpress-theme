<?php
add_action('admin_menu', 'rambopro_admin_menu_pannel');  
function rambopro_admin_menu_pannel()
 {	$page=add_theme_page( 'theme', 'Option Panel', 'edit_theme_options', 'rambo', 'rambopro_option_panal_function' ); 
 	add_action('admin_print_styles-'.$page, 'rambopro_admin_enqueue_script');
 }
function rambopro_admin_enqueue_script()
{	
	
	wp_enqueue_script('tab',get_template_directory_uri().'/functions/theme_options/js/option-panel-js.js',array('media-upload','jquery-ui-sortable'));	
	wp_enqueue_style('thickbox');	
	wp_enqueue_style('option',get_template_directory_uri().'/functions/theme_options/css/style-option.css');
	
	/******* color picker*******/
	//wp_enqueue_script('wp-color',get_template_directory_uri().'/functions/theme_options/js/my-color-picker-script.js', array( 'wp-color-picker' ), false, true );
	//wp_enqueue_style( 'wp-color-picker' );

	wp_enqueue_style('optionpanal-dragdrop',get_template_directory_uri().'/functions/theme_options/css/optionpanal-dragdrop.css');
	
	
	
}
function rambopro_option_panal_function()
{	require_once('webriti_option_pannel.php'); }
?>