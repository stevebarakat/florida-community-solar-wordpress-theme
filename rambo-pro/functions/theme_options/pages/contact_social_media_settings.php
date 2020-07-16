<div class="block ui-tabs-panel deactive" id="option-ui-id-9" >	
	<?php $current_options = get_option('rambo_pro_theme_options');
	if(isset($_POST['rambopro_settings_save_9']))
	{	
		if($_POST['rambopro_settings_save_9'] == 1) 
		{
			if ( empty($_POST) || !wp_verify_nonce($_POST['rambopro_gernalsetting_nonce_customization'],'rambopro_customization_nonce_gernalsetting') )
			{  print 'Sorry, your nonce did not verify.';	exit; }
			else  
			{		
				$current_options['social_media_twitter_link']=sanitize_text_field($_POST['social_media_twitter_link']);
				$current_options['social_media_facebook_link']=sanitize_text_field($_POST['social_media_facebook_link']);
				$current_options['social_media_linkedin_link']=sanitize_text_field($_POST['social_media_linkedin_link']);
				$current_options['social_media_google_plus']=sanitize_text_field($_POST['social_media_google_plus']);	
			
				// social media in contact page yes ya on
				if($_POST['social_media_in_contact_page_enabled'])
				{ echo $current_options['social_media_in_contact_page_enabled']= sanitize_text_field($_POST['social_media_in_contact_page_enabled']); } 
				else { echo $current_options['social_media_in_contact_page_enabled']="off"; } 
				
				// Social Icons about us page yes or on
				if($_POST['aboutus_social_icon_enabled'])
				{ echo $current_options['aboutus_social_icon_enabled']= sanitize_text_field($_POST['aboutus_social_icon_enabled']); } 
				else { echo $current_options['aboutus_social_icon_enabled']="off"; } 
				
				// Social media enabled in footer section yes ya on
				if($_POST['footer_social_media_enabled'])
				{ echo $current_options['footer_social_media_enabled']= sanitize_text_field($_POST['footer_social_media_enabled']); } 
				else { echo $current_options['footer_social_media_enabled']="off"; } 
				
				
				update_option('rambo_pro_theme_options',$current_options);
			}
		}	
		if($_POST['rambopro_settings_save_9'] == 2) 
		{
			$current_options['social_media_in_contact_page_enabled']="on";
			$current_options['aboutus_social_icon_enabled']="on";
			$current_options['footer_social_media_enabled']="on";	
			$current_options['social_media_twitter_link']="https://twitter.com/";
			$current_options['social_media_facebook_link']="https://facebook.com/";
			$current_options['social_media_linkedin_link']="https://linkedin.com/";
			$current_options['social_media_google_plus']="https://plus.google.com/";			
			
			update_option('rambo_pro_theme_options',$current_options);
		}
	}  ?>
	<form method="post" id="rambopro_theme_options_9">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Social media','rambo');?></h2></td>
				<td><div class="rambopro_settings_loding" id="rambo_loding_9_image"></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_9_success" ><?php _e('Options data successfully Saved','rambo');?></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_9_reset" ><?php _e('Options data successfully reset','rambo');?></div>
				</td>
				<td style="text-align:right;">
					<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('9');">
					<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('9')" >
				</td>
				</tr>
			</table>	
		</div>		
		<?php wp_nonce_field('rambopro_customization_nonce_gernalsetting','rambopro_gernalsetting_nonce_customization'); ?>
		<div class="section">
			<h3><?php _e('Enable Social media:','rambo'); ?>  </h3>
			<input type="checkbox" <?php if($current_options['social_media_in_contact_page_enabled']=='on') echo "checked='checked'"; ?> id="social_media_in_contact_page_enabled" name="social_media_in_contact_page_enabled" > <span class="explain"><?php _e('Enable social media in contact page.','rambo'); ?></span>
			<input type="checkbox" <?php if($current_options['aboutus_social_icon_enabled']=='on') echo "checked='checked'"; ?> id="aboutus_social_icon_enabled" name="aboutus_social_icon_enabled" > <span class="explain"><?php _e('Enable social icons on About us page.','rambo'); ?></span>
			<input type="checkbox" <?php if($current_options['footer_social_media_enabled']=='on') echo "checked='checked'"; ?> id="footer_social_media_enabled" name="footer_social_media_enabled" > <span class="explain"><?php _e('Enable Social media icon in footer section.','rambo'); ?></span>
		</div>
		<div class="section">
			<h3><?php _e('Twitter Link:','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="social_media_twitter_link" id="social_media_twitter_link" value="<?php if($current_options['social_media_twitter_link']!='') { echo esc_attr($current_options['social_media_twitter_link']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter twitter link.','rambo');?></span>
			</span>		
		</div>
		<div class="section">
			<h3><?php _e('Linkedin Links:','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="social_media_linkedin_link" id="social_media_linkedin_link" value="<?php if($current_options['social_media_linkedin_link']!='') { echo esc_attr($current_options['social_media_linkedin_link']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter linkedin link.','rambo');?></span>
			</span>		
		</div>
		
		<div class="section">
			<h3><?php _e('Facebook Links:','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="social_media_facebook_link" id="social_media_facebook_link" value="<?php if($current_options['social_media_facebook_link']!='') { echo esc_attr($current_options['social_media_facebook_link']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter facebook link.','rambo');?></span>
			</span>		
		</div>
		
		<div class="section">
			<h3><?php _e('Google Plus Links:','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="social_media_google_plus" id="social_media_google_plus" value="<?php if($current_options['social_media_google_plus']!='') { echo esc_attr($current_options['social_media_google_plus']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter google plus link.','rambo');?></span>
			</span>		
		</div>
		
		<div id="button_section">
			<input type="hidden" value="1" id="rambopro_settings_save_9" name="rambopro_settings_save_9" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('9');">
			<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('9')" >
		</div>
	</form>
</div>