<div class="block ui-tabs-panel deactive" id="option-ui-id-6" >	
	<?php $current_options = get_option('rambo_pro_theme_options');
	if(isset($_POST['rambopro_settings_save_6']))
	{	
		if($_POST['rambopro_settings_save_6'] == 1) 
		{
			if ( empty($_POST) || !wp_verify_nonce($_POST['rambopro_gernalsetting_nonce_customization'],'rambopro_customization_nonce_gernalsetting') )
			{  print 'Sorry, your nonce did not verify.';	exit; }
			else  
			{	
				
				$current_options['rambo_copy_rights_text']=sanitize_text_field($_POST['rambo_copy_rights_text']);
				$current_options['rambo_privacy_policy']=sanitize_text_field($_POST['rambo_privacy_policy']);
				$current_options['rambo_privacy_policy_link']=sanitize_text_field($_POST['rambo_privacy_policy_link']);
				$current_options['rambo_terms_of_service']=sanitize_text_field($_POST['rambo_terms_of_service']);
				$current_options['rambo_terms_of_service_link']=sanitize_text_field($_POST['rambo_terms_of_service_link']);
				
				update_option('rambo_pro_theme_options',$current_options);
			}
		}	
		if($_POST['rambopro_settings_save_6'] == 2) 
		{
			
			$current_options['rambo_copy_rights_text']='2013 &copy; Rambo. ALL Rights Reserved';
			
			$current_options['rambo_privacy_policy']='Privacy Policy';
			$current_options['rambo_privacy_policy_link']='#';
			
			$current_options['rambo_terms_of_service']='Terms of Service';
			$current_options['rambo_terms_of_service_link']='#';
			
			update_option('rambo_pro_theme_options',$current_options);
		}
	}  ?>
	<form method="post" id="rambopro_theme_options_6">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Footer Custmization','rambo');?></h2></td>
				<td style="width:30%;">
					<div class="rambopro_settings_loding" id="rambo_loding_6_image"></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_6_success" ><?php _e('Options data successfully Saved','rambo');?></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_6_reset" ><?php _e('Options data successfully reset','rambo');?></div>
				</td>
				<td style="text-align:right;">
					<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('6');">
					<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('6')" >
				</td>
				</tr>
			</table>	
		</div>
		<?php wp_nonce_field('rambopro_customization_nonce_gernalsetting','rambopro_gernalsetting_nonce_customization'); ?>
		<div class="section">
			<h3><?php _e('Copy Rights Text','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_copy_rights_text" id="rambo_copy_rights_text" value="<?php if($current_options['rambo_copy_rights_text']!='') { echo esc_attr($current_options['rambo_copy_rights_text']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter custom copy rights text.','rambo');?></span>
			</span>		
		</div>
		<div class="section">
			<h3><?php _e('Privacy Policy Text','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_privacy_policy" id="rambo_privacy_policy" value="<?php if($current_options['rambo_privacy_policy']!='') { echo esc_attr($current_options['rambo_privacy_policy']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter Privacy Policy Text.','rambo');?></span>
			</span>		
		</div>
		<div class="section">
			<h3><?php _e('Privacy Policy Link','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_privacy_policy_link" id="rambo_privacy_policy_link" value="<?php if($current_options['rambo_privacy_policy_link']!='') { echo esc_attr($current_options['rambo_privacy_policy_link']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter custom copy rights text.','rambo');?></span>
			</span>		
		</div>
		<div class="section">
			<h3><?php _e('Terms of Service Text','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_terms_of_service" id="rambo_terms_of_service" value="<?php if($current_options['rambo_terms_of_service']!='') { echo esc_attr($current_options['rambo_terms_of_service']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter custom copy rights text.','rambo');?></span>
			</span>		
		</div>
		<div class="section">
			<h3><?php _e('Terms of Service Link','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_terms_of_service_link" id="rambo_terms_of_service_link" value="<?php if($current_options['rambo_terms_of_service_link']!='') { echo esc_attr($current_options['rambo_terms_of_service_link']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter custom copy rights text.','rambo');?></span>
			</span>		
		</div>
		<div id="button_section">
			<input type="hidden" value="1" id="rambopro_settings_save_6" name="rambopro_settings_save_6" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('6');">
			<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('6')" >
		</div>
	</form>
</div>