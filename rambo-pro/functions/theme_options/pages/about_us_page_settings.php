<div class="block ui-tabs-panel deactive" id="option-ui-id-5" >	
	<?php $current_options = get_option('rambo_pro_theme_options');
	if(isset($_POST['rambopro_settings_save_5']))
	{	
		if($_POST['rambopro_settings_save_5'] == 1) 
		{
			if ( empty($_POST) || !wp_verify_nonce($_POST['rambopro_clientsetting_nonce_customization'],'rambopro_customization_nonce_clientsetting') )
			{  print 'Sorry, your nonce did not verify.';	exit; }
			else  
			{		
				$current_options['about_page_title']=sanitize_text_field($_POST['about_page_title']);
				
				
				$current_options['our_team_title']=sanitize_text_field($_POST['our_team_title']);
				
				$current_options['testimonials_title']=sanitize_text_field($_POST['testimonials_title']);		
				
				
				// Featured Image About Us Page yes or on
				if($_POST['aboutus_content_with_image'])
				{ echo $current_options['aboutus_content_with_image']= sanitize_text_field($_POST['aboutus_content_with_image']); } 
				else { echo $current_options['aboutus_content_with_image']="off"; }
				
				//Meet our team section yes or no
				if($_POST['aboutus_our_team_enabled'])
				{ echo $current_options['aboutus_our_team_enabled']= sanitize_text_field($_POST['aboutus_our_team_enabled']); } 
				else { echo $current_options['aboutus_our_team_enabled']="off"; } 
				
				//Meet testimonials section yes or no
				if($_POST['aboutus_testimonial_enabled'])
				{ echo $current_options['aboutus_testimonial_enabled']= sanitize_text_field($_POST['aboutus_testimonial_enabled']); } 
				else { echo $current_options['aboutus_testimonial_enabled']="off"; } 
				
				if($_POST['service_testimonial_enabled'])
				{ echo $current_options['service_testimonial_enabled']= sanitize_text_field($_POST['service_testimonial_enabled']); } 
				else { echo $current_options['service_testimonial_enabled']="off"; }
				
				update_option('rambo_pro_theme_options',$current_options);
			}
		}	
		if($_POST['rambopro_settings_save_5'] == 2) 
		{
			$current_options['aboutus_content_with_image']="on";
			$current_options['about_page_title']="Who we are";
			
			$current_options['aboutus_our_team_enabled']="on";
			$current_options['our_team_title']="Meet the Team";
			
			$current_options['aboutus_testimonial_enabled']="on";
			$current_options['service_testimonial_enabled']="on";			
			$current_options['testimonials_title']="Testimonials";
			
			update_option('rambo_pro_theme_options',$current_options);
		}
	}  ?>
	<form method="post" id="rambopro_theme_options_5">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('About Us','rambo');?></h2></td>
				<td style="width:30%;">
					<div class="rambopro_settings_loding" id="rambo_loding_5_image"></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_5_success" ><?php _e('Options data successfully Saved','rambo');?></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_5_reset" ><?php _e('Options data successfully reset','rambo');?></div>
				</td>
				<td style="text-align:right;">
					<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('5');">
					<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('5')" >
				</td>
				</tr>
			</table>	
		</div>			
		<?php wp_nonce_field('rambopro_customization_nonce_clientsetting','rambopro_clientsetting_nonce_customization'); ?>
		
		<div class="section">
			<h3><?php _e('Enable about us content with Featured image.','rambo'); ?>  </h3>
			<input type="checkbox" <?php if($current_options['aboutus_content_with_image']=='on') echo "checked='checked'"; ?> id="aboutus_content_with_image" name="aboutus_content_with_image" > <span class="explain"><?php _e('Enable About Us content with Featured Image and social media links on About Us Page','rambo'); ?></span>
			
			<h3><?php _e('About Page Title','rambo'); ?></h3>
			<input class="webriti_inpute"  type="text" name="about_page_title" id="about_page_title" value="<?php echo $current_options['about_page_title']; ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter About Page Title','rambo');?></span>
			</span>			
		</div>			
		
		<div class="section">
			<h3><?php _e('Enable Our team section','rambo'); ?>  </h3>
			<input type="checkbox" <?php if($current_options['aboutus_our_team_enabled']=='on') echo "checked='checked'"; ?> id="aboutus_our_team_enabled" name="aboutus_our_team_enabled" > <span class="explain"><?php _e('Enable Our team section on about us page.','rambo'); ?></span>
			
			<h3><?php _e('Our Team Title','rambo'); ?></h3>
			<input class="webriti_inpute"  type="text" name="our_team_title" id="our_team_title" value="<?php echo $current_options['our_team_title']; ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter Meet the Team Heading','rambo');?></span>
			</span>	
		</div>
		
		<div class="section">
			<h3><?php _e('Enable testmonials section','rambo'); ?>  </h3>
			<input type="checkbox" <?php if($current_options['aboutus_testimonial_enabled']=='on') echo "checked='checked'"; ?> id="aboutus_testimonial_enabled" name="aboutus_testimonial_enabled" > <span class="explain"><?php _e('Enable testmonials section on about us page.','rambo'); ?></span>
			<input type="checkbox" <?php if($current_options['service_testimonial_enabled']=='on') echo "checked='checked'"; ?> id="service_testimonial_enabled" name="service_testimonial_enabled" > <span class="explain"><?php _e('Enable testmonials section on service template.','rambo'); ?></span>
			
			<h3><?php _e('Testimonials Title','rambo'); ?></h3>
			<input class="webriti_inpute"  type="text" name="testimonials_title" id="testimonials_title" value="<?php echo $current_options['testimonials_title']; ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter testimonials title','rambo');?></span>
			</span>	
		</div>
		
		
		
		<div id="button_section">
			<input type="hidden" value="1" id="rambopro_settings_save_5" name="rambopro_settings_save_5" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('5');">
			<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('5')" >			
		</div>
	</form>
</div>