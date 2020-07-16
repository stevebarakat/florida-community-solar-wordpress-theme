<div class="block ui-tabs-panel deactive" id="option-ui-id-15" >	
	<?php  $current_options = get_option('rambo_pro_theme_options');
	if(isset($_POST['rambopro_settings_save_15']))
	{	
		if($_POST['rambopro_settings_save_15'] == 1) 
		{
			if ( empty($_POST) || !wp_verify_nonce($_POST['rambopro_gernalsetting_nonce_customization'],'rambopro_customization_nonce_gernalsetting') )
			{  print 'Sorry, your nonce did not verify.';	exit; }
			else  
			{		
				$current_options['rambo_slider_slug']=sanitize_text_field($_POST['rambo_slider_slug']);
				$current_options['rambo_service_slug']=sanitize_text_field($_POST['rambo_service_slug']);
				$current_options['rambo_portfolio_slug']=sanitize_text_field($_POST['rambo_portfolio_slug']);
				$current_options['rambo_testimonial_slug']=sanitize_text_field($_POST['rambo_testimonial_slug']);
				$current_options['rambo_team_slug']=sanitize_text_field($_POST['rambo_team_slug']);
				
				update_option('rambo_pro_theme_options',$current_options);
			}
		}	
		if($_POST['rambopro_settings_save_15'] == 2) 
		{
			$current_options['rambo_slider_slug']= "rambo_slider";
			$current_options['rambo_service_slug']= "rambo_service";		
			$current_options['rambo_portfolio_slug']= "rambo_project";
			$current_options['rambo_testimonial_slug']= "rambo_testimonial";
			$current_options['rambo_team_slug']= "rambo_team";
			
			update_option('rambo_pro_theme_options',$current_options);
		}
	}  ?>
	<form method="post" id="rambopro_theme_options_15">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Post Type Slug','health');?></h2></td>
				<td><div class="rambopro_settings_loding" id="rambo_loding_15_image"></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_15_success" ><?php _e('Options data successfully Saved','rambo');?></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_15_reset" ><?php _e('Options data successfully reset','rambo');?></div>
				</td>
				<td style="text-align:right;">
					<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('15');">
					<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('15')" >
				</td>
				</tr>
			</table>	
		</div>		
		<?php wp_nonce_field('rambopro_customization_nonce_gernalsetting','rambopro_gernalsetting_nonce_customization'); ?>
		<div class="section">		
			<h3><?php _e('Slider Slug','health'); ?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_slider_slug" id="rambo_slider_slug" value="<?php echo $current_options['rambo_slider_slug']; ?>" >
			<span class="explain"><?php _e('Enter slider slug.','health'); ?></span>
		</div>
		<div class="section">		
			<h3><?php _e('Service Slug','health'); ?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_service_slug" id="rambo_service_slug" value="<?php echo $current_options['rambo_service_slug']; ?>" >
			<span class="explain"><?php _e('Enter service slug.','health'); ?></span>
		</div>
		<div class="section">		
			<h3><?php _e('Testimonial Slug','health'); ?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_testimonial_slug" id="rambo_testimonial_slug" value="<?php echo $current_options['rambo_testimonial_slug']; ?>" >
			<span class="explain"><?php _e('Enter testimonial slug.','health'); ?></span>
		</div>
		<div class="section">		
			<h3><?php _e('Portfolio/Project Slug','health'); ?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_portfolio_slug" id="rambo_portfolio_slug" value="<?php echo $current_options['rambo_portfolio_slug']; ?>" >
			<span class="explain"><?php _e('Enter portfolio slug.','health'); ?></span>
		</div>
		<div class="section">		
			<h3><?php _e('Our Team Slug','health'); ?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_team_slug" id="rambo_team_slug" value="<?php echo $current_options['rambo_team_slug']; ?>" >
			<span class="explain"><?php _e('Enter our team slug.','health'); ?></span>
		</div>
		<div id="button_section">
			<input type="hidden" value="1" id="rambopro_settings_save_15" name="rambopro_settings_save_15" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('15');">
			<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('15')" >
		</div>
	</form>
</div>