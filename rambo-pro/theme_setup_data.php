<?php
/*---------------------------------------------------------------------------------*
 * @file           theme_stup_data.php
 * @package        Rambopro
 * @copyright      2013 webriti
 * @license        license.txt
 * @author       :	webriti
 * @filesource     wp-content/themes/rambo-pro/theme_setup_data.php
 *	Admin  & front end defual data file 
 *-----------------------------------------------------------------------------------*/ 
function theme_data_setup()
{
	return $rambo_pro_theme_options=array(
			//Logo and Fevicon header			
			'front_page'  => 'on',
			'layout_selector' => 'wide',
			'rambopro_stylesheet'=>'default.css',			
			'upload_image_logo'=>'',
			'height'=>'50',
			'width'=>'150',
			'rambo_texttitle'=>'on',
			'upload_image_favicon'=>'',
			'google_analytics'=>'',
			'webrit_custom_css'=>'',
			// front page
			'front_page_data'=>array('Theme-Introduction-Top','Service Section','Project Portfolio','Latest News','Call Out Area'),
			
			//Slide 	
			'home_slider_enabled'=>'on',
			'animation' => 'slide',								
			'animationSpeed' => '500',
			'slide_direction' => 'horizontal',
			'slideshowSpeed' => '2000',
			
			// service
			'home_service_enabled'=>'on',
			'service_list' => 4,
			
			//about us Settings
			'aboutus_content_with_image'=>'on',
			'about_page_title' => 'Who we are',
			'aboutus_social_icon_enabled'=>'on',
			
			//Client Strip Options
			'aboutus_client_strip_enabled' =>'on',
			'service_client_strip_enabled' => 'on',			
			'client_strip_title' => 'Our Client',			
			'number_of_client'=> '5',
			'rambo_client_strip_speed'=> '2000',
			
			// Team settings
			'aboutus_our_team_enabled' => 'on',
			'our_team_title' =>'Meet the Team',
			
			// Testimonials
			'aboutus_testimonial_enabled' => 'on',
			'service_testimonial_enabled'=>'on',
			'testimonials_title' =>'Testimonials',		
			
			// project 
			'project_protfolio_enabled'=>'on',
			'project_protfolio_tag_line'=>'Featured Portfolio Projects',
			'project_protfolio_description_tag' =>"Maecenas sit amet tincidunt elit. Pellentesque habitant morbi tristique senectus et netus et Nulla facilisi.",
			
			//home latest news
			'home_latest_news_enabled'=>'on',
			'blog_section_head' =>'Latest News',
			
			// site intro info 
			'site_info_enabled'=>'on',
			'site_info_title'=>'Rambo is a clean and fully responsive Template.',
			'site_info_descritpion' =>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos excepturi vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat.",
			'site_info_button_text'=>'Purchase Now',
			'site_info_button_link'=>'#',
			
			
			// site intro info 			
			'site_intro_descritpion' =>"Rambo is a clean and fully responsive Template.",
			'site_intro_button_text'=>'Purchase Now',
			'site_intro_button_link'=>'#',
			'intro_button_target'=>'on',
			
			// Service section
			'service_section_title'=>'Our Services',
			'service_section_descritpion'=>'Check out our Main Services which we offer to every client',
			
			// footer customization
			'rambo_copy_rights_text'=>'2013 &copy; Rambo. ALL Rights Reserved',			
			'rambo_privacy_policy'=>'Privacy Policy',
			'rambo_privacy_policy_link'=>'#',			
			'rambo_terms_of_service'=>'Terms of Service',
			'rambo_terms_of_service_link'=>'#',			
			'footer_social_media_enabled'=>'on',	
			
			//Social media links
			'social_media_in_contact_page_enabled'=>'on',
			'social_media_twitter_link' =>"https://twitter.com/",
			'social_media_facebook_link' =>"https:www.facebook.com",
			'social_media_linkedin_link' =>"http://linkedin.com/",
			'social_media_google_plus' =>"https://plus.google.com/",
			
			//contact page settings	
			'rambo_get_in_touch_enabled'=>'on',
			'rambo_get_in_touch' =>'Get in Touch',
			'rambo_get_in_touch_description'=>'Lorem ipsum dolor sit amet, usu rebum errem pericula ea, ei alia quaerendum vix. Ea justo tritani sit, odio ignota quo te. Lorem ipsum dolor sit amet.',
			
			'contact_form_heading' => 'Contact Form',
			'rambo_our_office_enabled'=>'on',
			'rambo_our_office'=>'Our Office',
			'rambo_contact_address'=>'New York City, USA',
			'rambo_contact_phone_number'=>'420-300-3850',
			'rambo_contact_email'=>'themes@webriti.com',			
			'rambo_contact_website'=>'https://www.webriti.com',
			
			'contact_google_map_enabled'=>'on',
			'rambo_contact_google_map_url' => 'https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kota+Industrial+Area,+Kota,+Rajasthan&amp;aq=2&amp;oq=kota+&amp;sll=25.003049,76.117499&amp;sspn=0.020225,0.042014&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Kota+Industrial+Area,+Kota,+Rajasthan&amp;z=13&amp;ll=25.142832,75.879538',
			
			'enable_custom_typography'=>'off',
			
			// general typography			
			'general_typography_fontsize'=>'13',
			'general_typography_fontfamily'=>'Helvetica Neue,Helvetica,Arial,sans-serif',
			'general_typography_fontstyle'=>"",
			
			// menu title
			'menu_title_fontsize'=>'18',
			'menu_title_fontfamily'=>'RobotoRegular',
			'menu_title_fontstyle'=>"",
			
			// post title
			'post_title_fontsize'=>'26',
			'post_title_fontfamily'=>'RobotoRegular',
			'post_title_fontstyle'=> "",
			
			// page title
			'page_title_fontsize'=>'30',
			'page_title_fontfamily'=>'RobotoRegular',
			'page_title_fontstyle'=>"",
			
			// Service  title
			'service_title_fontsize'=>'26',
			'service_title_fontfamily'=>'RobotoBold',
			'service_title_fontstyle'=>"",
			
			// Potfolio  title Widget Heading Title
			'portfolio_title_fontsize'=>'20',
			'portfolio_title_fontfamily'=>'RobotoRegular',
			'portfolio_title_fontstyle'=>"",
			
			// Widget Heading Title
			'widget_title_fontsize'=>'24',
			'widget_title_fontfamily'=>'RobotoLight',
			'widget_title_fontstyle'=>"",
			
			// Call out area Title   
			'calloutarea_title_fontsize'=>'34',
			'calloutarea_title_fontfamily'=>'RobotoBold',
			'calloutarea_title_fontstyle'=>"",
			
			// Call out area descritpion      
			'calloutarea_description_fontsize'=>'15',
			'calloutarea_description_fontfamily'=>'RobotoRegular',
			'calloutarea_description_fontstyle'=>"",
			
			// Call out area purches button      
			'calloutarea_purches_fontsize'=>'16',
			'calloutarea_purches_fontfamily'=>'RobotoBold',
			'calloutarea_purches_fontstyle'=>"",

            //Post Type slug Options
			'rambo_slider_slug' => 'rambo_slider',
			'rambo_service_slug' => 'rambo_service',
			'rambo_portfolio_slug' => 'rambo_project',
			'rambo_testimonial_slug' => 'rambo_testimonial',
			'rambo_team_slug' => 'rambo_team',					
		);
}
?>