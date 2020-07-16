<div class="block ui-tabs-panel deactive" id="option-ui-id-7" >	
	<?php $current_options = get_option('rambo_pro_theme_options');
	if(isset($_POST['rambopro_settings_save_7']))
	{	
		if($_POST['rambopro_settings_save_7'] == 1) 
		{
			if ( empty($_POST) || !wp_verify_nonce($_POST['rambopro_gernalsetting_nonce_customization'],'rambopro_customization_nonce_gernalsetting') )
			{  print 'Sorry, your nonce did not verify.';	exit; }
			else  
			{	
			    $current_options['contact_form_heading']=sanitize_text_field($_POST['contact_form_heading']);
				$current_options['rambo_get_in_touch']=sanitize_text_field($_POST['rambo_get_in_touch']);
				$current_options['rambo_get_in_touch_description']=($_POST['rambo_get_in_touch_description']);
				
				$current_options['rambo_our_office']=sanitize_text_field($_POST['rambo_our_office']);
				$current_options['rambo_contact_address']=sanitize_text_field($_POST['rambo_contact_address']);
				$current_options['rambo_contact_phone_number']=sanitize_text_field($_POST['rambo_contact_phone_number']);	
				$current_options['rambo_contact_email']=sanitize_text_field($_POST['rambo_contact_email']);
				$current_options['rambo_contact_website']=sanitize_text_field($_POST['rambo_contact_website']);
			
				// service section enabled yes ya on
				if($_POST['rambo_get_in_touch_enabled'])
				{ echo $current_options['rambo_get_in_touch_enabled']= sanitize_text_field($_POST['rambo_get_in_touch_enabled']); } 
				else { echo $current_options['rambo_get_in_touch_enabled']="off"; } 
				
					// Our office enabled yes ya on
				if($_POST['rambo_our_office_enabled'])
				{ echo $current_options['rambo_our_office_enabled']= sanitize_text_field($_POST['rambo_our_office_enabled']); } 
				else { echo $current_options['rambo_our_office_enabled']="off"; } 
				
				update_option('rambo_pro_theme_options',$current_options);
			}
		}	
		if($_POST['rambopro_settings_save_7'] == 2) 
		{	
			$current_options['rambo_get_in_touch_enabled']="on";	
			$current_options['contact_form_heading']='Contact Form';
			$current_options['rambo_get_in_touch']="Get in Touch";
			$current_options['rambo_get_in_touch_description']="Lorem ipsum dolor sit amet, usu rebum errem pericula ea, ei alia quaerendum vix. Ea justo tritani sit, odio ignota quo te. Lorem ipsum dolor sit amet.";			
			
			
			$current_options['rambo_our_office_enabled']="on";	
			$current_options['rambo_our_office']="Our Office";	
			$current_options['rambo_contact_address']="New York City, USA";	
			$current_options['rambo_contact_phone_number']="420-300-3850";	
			$current_options['rambo_contact_email']="info@rambotheme.com";
			$current_options['rambo_contact_website']="https://www.busiprof.com";				
			
			update_option('rambo_pro_theme_options',$current_options);
		}
	}  ?>
	<form method="post" id="rambopro_theme_options_7">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Contact Information','rambo');?></h2></td>
				<td style="width:30%;">
					<div class="rambopro_settings_loding" id="rambo_loding_7_image"></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_7_success" ><?php _e('Options data successfully Saved','rambo');?></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_7_reset" ><?php _e('Options data successfully reset','rambo');?></div>
				</td>
				<td style="text-align:right;">
					<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('7');">
					<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('7')" >
				</td>
				</tr>
			</table>	
		</div>	
		
		<?php wp_nonce_field('rambopro_customization_nonce_gernalsetting','rambopro_gernalsetting_nonce_customization'); ?>
		
		<div class="section">
			<h3><?php _e('Contact Form Heading:','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="contact_form_heading" id="contact_form_heading" value="<?php if($current_options['contact_form_heading']!='') { echo esc_attr($current_options['contact_form_heading']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter the Contact Form Heading.','rambo');?></span>
			</span>		
		</div>
		<div class="section">
			<h3><?php _e('Get in Touch','rambo'); ?>  </h3>
			<input type="checkbox" <?php if($current_options['rambo_get_in_touch_enabled']=='on') echo "checked='checked'"; ?> id="rambo_get_in_touch_enabled" name="rambo_get_in_touch_enabled" > <span class="explain"><?php _e('Enable Get in touch in contact page.','rambo'); ?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Get in Touch Text:','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_get_in_touch" id="rambo_get_in_touch" value="<?php if($current_options['rambo_get_in_touch']!='') { echo esc_attr($current_options['rambo_get_in_touch']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter Get in touch text.','rambo');?></span>
			</span>		
		</div>
		<div class="section">
			<h3><?php _e('Get in Touch Description','rambo'); ?></h3>
			<textarea rows="8" cols="8" id="rambo_get_in_touch_description" name="rambo_get_in_touch_description" ><?php if($current_options['rambo_get_in_touch_description']!='') { echo($current_options['rambo_get_in_touch_description']); } ?></textarea>
			<span class="icons help">
				<span class="tooltip"><?php _e('Enter get in touch description','rambo');?></span>
			</span>
		</div>
		
		<div class="section">
			<h3><?php _e('Our Office section','rambo'); ?>  </h3>
			<input type="checkbox" <?php if($current_options['rambo_our_office_enabled']=='on') echo "checked='checked'"; ?> id="rambo_our_office_enabled" name="rambo_our_office_enabled" > <span class="explain"><?php _e('Enable our office section in contact page.','rambo'); ?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Our Office Text:','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_our_office" id="rambo_our_office" value="<?php if($current_options['rambo_our_office']!='') { echo esc_attr($current_options['rambo_our_office']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter Get in touch text.','rambo');?></span>
			</span>		
		</div>
		
		<div class="section">
			<h3><?php _e('Contact Address:','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_contact_address" id="rambo_contact_address" value="<?php if($current_options['rambo_contact_address']!='') { echo esc_attr($current_options['rambo_contact_address']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter Contact address.','rambo');?></span>
			</span>		
		</div>
		
		<div class="section">
			<h3><?php _e('Contact Phone Number:','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_contact_phone_number" id="rambo_contact_phone_number" value="<?php if($current_options['rambo_contact_phone_number']!='') { echo esc_attr($current_options['rambo_contact_phone_number']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter Contact phone number.','rambo');?></span>
			</span>		
		</div>
		
		<div class="section">
			<h3><?php _e('Contact Email:','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_contact_email" id="rambo_contact_email" value="<?php if($current_options['rambo_contact_email']!='') { echo esc_attr($current_options['rambo_contact_email']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter Contact email address.','rambo');?></span>
			</span>		
		</div>
		
		<div class="section">
			<h3><?php _e('Website :','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_contact_website" id="rambo_contact_website" value="<?php if($current_options['rambo_contact_website']!='') { echo esc_attr($current_options['rambo_contact_website']); } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter your website address.','rambo');?></span>
			</span>		
		</div>
		
		<div id="button_section">
			<input type="hidden" value="1" id="rambopro_settings_save_7" name="rambopro_settings_save_7" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('7');">
			<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('7')" >
		</div>
	</form>
</div>