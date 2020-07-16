<div class="wrap" id="framework_wrap">   		
    <div id="content_wrap">
		<div class="webriti-header">
			<h2 style="padding-top: 0px;font-size: 23px;line-height: 10px;"><a href="http://www.webriti.com/" style="margin-bottom:0px;"><img style="margin-left:10px;" src="<?php echo get_template_directory_uri(); ?>/functions/theme_options/images/png.png"></a></h2>
		</div>
		<div class="webriti-submenu">
		<div id="icon-themes" class="icon32"></div>
			<h2><?php _e('Rambo pro','rambo'); ?>			
				<div class="webriti-submenu-links">
					<a target="_blank" href="http://webriti.com/forum/categories/rambo/" class="btn btn-primary"><?php _e('Support Desk','rambo'); ?></a>
					<a target="_blank" href="http://webriti.com/themes/documentation/rambo/" class="btn btn-info"> <?php _e('Theme Documentation','rambo'); ?></a>
					<a target="_blank" href="<?php echo get_template_directory_uri(); ?>/readme.txt" class="btn btn-success" ><?php _e('View Changelog','rambo'); ?></a>				
				</div><!-- webriti-submenu-links -->
			</h2>
          <div class="clear"></div>
        </div>
        <div id="content">
			<div id="options_tabs" class="ui-tabs ">
				<ul class="options_tabs ui-tabs-nav" role="tablist" id="nav">
					<li class="active" >
						<div class="arrow"><div></div></div><a href="#" id="1"><span class="icon home-page"></span><?php _e('Home Page','rambo');?></a>
						<ul><li class="currunt" ><a href="#" class="ui-tabs-anchor" id="ui-id-1"><?php _e('Quick Start','rambo');?> </a><span></span></li>
							<li><a href="#"  id="ui-id-2"><?php _e('Slider Setting','rambo');?></a><span></span></li>
							<li><a href="#"  id="ui-id-11"><?php _e('Intro Section','rambo');?></a><span></span></li>
							<li><a href="#"  id="ui-id-3"><?php _e('Project Portfolio','rambo');?></a><span></span></li>
							<!--<li><a href="#"  id="ui-id-12"><?php _e('Latest news Settings','rambo');?></a><span></span></li>-->
							<li><a href="#"  id="ui-id-4"><?php _e('Footer call out area','rambo');?></a><span></span></li>
						</ul>
					</li>
					<li>
						<div class="arrow"><div></div></div><a href="#" id="ui-id-13"><span class="icon client_strip"></span><?php _e('Client strip settings','rambo');?></a><span></span>
					</li>
					
					<li>
						<div class="arrow"><div></div></div><a href="#" id="ui-id-10"><span class="icon typography"></span><?php _e('Typography','rambo');?></a><span></span>
					</li>  
					<li>
						<div class="arrow"><div></div></div><a href="#" id="ui-id-15"><span class="icon post_type"></span><?php _e('Post Type Slug','rambo');?></a><span></span>
					</li>
					<li>
						<div class="arrow"><div></div></div><a href="#" id="ui-id-5"><span class="icon about-us"></span><?php _e('About Us Setting','rambo');?></a><span></span>
					</li>					          
					<li>
						<div class="arrow"><div></div></div><a href="#" id="ui-id-6"><span class="icon footer"></span><?php _e('Footer Customization','rambo');?></a><span></span>
					</li>
					<li>
						<div class="arrow"><div></div></div><a href="#" id="7"><span class="icon contact-page"></span><?php _e('Contact Page','rambo');?></a>
						<ul><li ><a href="#" class="ui-tabs-anchor" id="ui-id-7"><?php _e('Contact Information','rambo');?> </a><span></span></li>
							<li><a href="#"  id="ui-id-9"><?php _e('Social media links','rambo');?></a><span></span></li>
							<li><a href="#"  id="ui-id-8"><?php _e('Google Maps','rambo');?></a><span></span></li>
						</ul>
					</li>
					<li>
						<div class="arrow"><div></div></div><a href="#" id="ui-id-14"><span class="icon home_layout_manger"></span><?php _e('Layout Manager','rambo');?></a><span></span>
					</li>
					
					<div id="nav-shadow"></div>
                </ul>
				
				
				<!--most 1 tabs home_page_settings --> 
				<?php require_once('pages/header_page_settings.php'); ?>
				
				<!--most 2 tabs home_page_settings --> 
				<?php require_once('pages/slider_page_settings.php'); ?>
				
				<!--most 11 tabs service_page_seetings --> 
				<?php require_once('pages/theme-introduction-top.php'); ?>
				
				<!--most 3 tabs home_page_settings --> 
				<?php require_once('pages/project_page_settings.php'); ?>
				
				<!--most 4 tabs home_page_settings --> 
				<?php require_once('pages/footer_call_out_area_settings.php'); ?>
				
				
				<!--most 5 tabs home_page_settings --> 
				<?php require_once('pages/about_us_page_settings.php'); ?>
				
				<!--most 6 tabs home_page_settings --> 
				<?php require_once('pages/footer_customization_settings.php'); ?>
				
				<!--most 7 tabs home_page_settings --> 
				<?php require_once('pages/contact_page_settings.php'); ?>
				
				<!--most 8 tabs home_page_settings --> 
				<?php require_once('pages/google_maps_settings.php'); ?>
				
				<!--most 9 tabs home_page_settings --> 
				<?php require_once('pages/contact_social_media_settings.php'); ?>
				
				<!--most 10 tabs home_page_settings --> 
				<?php require_once('pages/typography.php'); ?>
				
				<!--most 15 tabs home_page_settings --> 
				<?php require_once('pages/post_type_slug.php'); ?>
				
				<!--most 12 tabs home_page_settings --> 
				<?php //require_once('pages/latest_news_settings.php'); ?>			
				
				<!--most 13 tabs home_page_settings --> 
				<?php require_once('pages/client_page_settings.php'); ?>	
				
				<!--most 14 tabs home_page_settings --> 
				<?php require_once('pages/home_layout_manager.php'); ?>	
				
			</div>		
        </div>
		<div class="webriti-submenu" style="height:35px;">			
            <div class="webriti-submenu-links" style="margin-top:5px;">
			<form method="POST">
				<input type="submit" onclick="return confirm( 'Click OK to reset theme data. Theme settings will be lost!' );" value="Restore All Defaults" name="restore_all_defaults" id="restore_all_defaults" class="reset-button btn">
			<form>
            </div><!-- webriti-submenu-links -->
        </div>
		<div class="clear"></div>
    </div>
</div>
<?php
// Restore all defaults
if(isset($_POST['restore_all_defaults'])) 
	{
		$rambo_pro_theme_options = theme_data_setup();	
		update_option('rambo_pro_theme_options',$rambo_pro_theme_options);
	}

?>