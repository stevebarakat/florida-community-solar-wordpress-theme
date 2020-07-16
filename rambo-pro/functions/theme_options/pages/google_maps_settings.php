<div class="block ui-tabs-panel deactive" id="option-ui-id-8" >	
	<?php $current_options = get_option('rambo_pro_theme_options');
	if(isset($_POST['rambopro_settings_save_8']))
	{	
		if($_POST['rambopro_settings_save_8'] == 1) 
		{
			if ( empty($_POST) || !wp_verify_nonce($_POST['rambopro_gernalsetting_nonce_customization'],'rambopro_customization_nonce_gernalsetting') )
			{  print 'Sorry, your nonce did not verify.';	exit; }
			else  
			{		
				$current_options['rambo_contact_google_map_url']= $_POST['rambo_contact_google_map_url'];
				// Google map enabled in contact page yes ya on
				if($_POST['contact_google_map_enabled'])
				{ echo $current_options['contact_google_map_enabled']= sanitize_text_field($_POST['contact_google_map_enabled']); } 
				else { echo $current_options['contact_google_map_enabled']="off"; } 
				
				update_option('rambo_pro_theme_options',$current_options);
			}
		}	
		if($_POST['rambopro_settings_save_8'] == 2) 
		{
			$current_options['contact_google_map_enabled']="on";
			$current_options['rambo_contact_google_map_url']='https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kota+Industrial+Area,+Kota,+Rajasthan&amp;aq=2&amp;oq=kota+&amp;sll=25.003049,76.117499&amp;sspn=0.020225,0.042014&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Kota+Industrial+Area,+Kota,+Rajasthan&amp;z=13&amp;ll=25.142832,75.879538';					
			update_option('rambo_pro_theme_options',$current_options);
		}
	}  ?>
	<form method="post" id="rambopro_theme_options_8">
		<?php wp_nonce_field('rambopro_customization_nonce_gernalsetting','rambopro_gernalsetting_nonce_customization'); ?>
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Google Maps','rambo');?></h2></td>
				<td style="width:30%;">
					<div class="rambopro_settings_loding" id="rambo_loding_8_image"></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_8_success" ><?php _e('Options data successfully Saved','rambo');?></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_8_reset" ><?php _e('Options data successfully reset','rambo');?></div>
				</td>
				<td style="text-align:right;">
					<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('8');">
					<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('8')" >
				</td>
				</tr>
			</table>	
		</div>		
		<div class="section">
			<h3><?php _e('Enable Google Map in contact page :','rambo'); ?>  </h3>
			<input type="checkbox" <?php if($current_options['contact_google_map_enabled']=='on') echo "checked='checked'"; ?> id="contact_google_map_enabled" name="contact_google_map_enabled" > <span class="explain"><?php _e('Enable Google map on contact page.','rambo'); ?></span>
		</div>
		<div class="section">
			<h3><?php _e('Google Map URL:','rambo');?></h3>
			<input class="webriti_inpute"  type="text" name="rambo_contact_google_map_url" id="rambo_contact_google_map_url" value="<?php if($current_options['rambo_contact_google_map_url']!='') { echo $current_options['rambo_contact_google_map_url']; } ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter google map url.','rambo');?></span>
			</span>		
		</div>
		<div id="button_section">
			<input type="hidden" value="1" id="rambopro_settings_save_8" name="rambopro_settings_save_8" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('8');">
			<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('8')" >
		</div>
	</form>
</div>