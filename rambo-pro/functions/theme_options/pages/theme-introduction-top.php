<div class="block ui-tabs-panel deactive" id="option-ui-id-11" >	
	<?php $current_options = get_option('rambo_pro_theme_options');
	if(isset($_POST['rambopro_settings_save_11']))
	{	
		if($_POST['rambopro_settings_save_11'] == 1) 
		{
			if ( empty($_POST) || !wp_verify_nonce($_POST['rambopro_gernalsetting_nonce_customization'],'rambopro_customization_nonce_gernalsetting') )
			{  print 'Sorry, your nonce did not verify.';	exit; }
			else  
			{		
				$current_options['site_intro_descritpion']=sanitize_text_field($_POST['site_intro_descritpion']);
				$current_options['site_intro_button_text']=sanitize_text_field($_POST['site_intro_button_text']);
				$current_options['site_intro_button_link']=sanitize_text_field($_POST['site_intro_button_link']);
				$current_options['service_list']= sanitize_text_field($_POST['service_list']);
				$current_options['service_section_title']=sanitize_text_field($_POST['service_section_title']);
				$current_options['service_section_descritpion']=sanitize_text_field($_POST['service_section_descritpion']);
				if($_POST['intro_button_target'])
				{ echo $current_options['intro_button_target']=sanitize_text_field($_POST['intro_button_target']); } 
				else
				{ echo $current_options['intro_button_target']="off"; } 
				
				update_option('rambo_pro_theme_options', $current_options);
			}
		}	
		if($_POST['rambopro_settings_save_11'] == 2) 
		{
			$current_options['intro_button_target']="on";
			$current_options['service_list']=4;
			$current_options['site_intro_descritpion']="Rambo is a clean and fully responsive Template";
			$current_options['site_intro_button_text']="Purchase Now";
			$current_options['site_intro_button_link']="#";
			
			$current_options['service_section_title']="Our Services.";
			$current_options['service_section_descritpion']="Check out our Main Services which we offer to every client.";
			
			update_option('rambo_pro_theme_options',$current_options);
		}
	}  ?>
	<form method="post" id="rambopro_theme_options_11">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Intro Area','rambo'); ?></h2></td>
				<td style="width:30%;">
					<div class="rambopro_settings_loding" id="rambo_loding_11_image"></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_11_success" ><?php _e('Options data successfully Saved','rambo');?></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_11_reset" ><?php _e('Options data successfully reset','rambo');?></div>
				</td>
				<td style="text-align:right;">
					<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('11');">
					<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('11')" >
				</td>
				</tr>
			</table>	
		</div>
		
		<?php wp_nonce_field('rambopro_customization_nonce_gernalsetting','rambopro_gernalsetting_nonce_customization'); ?>
		
		<div class="section">
			<h3><?php _e('Intro description','rambo','rambo'); ?></h3>
			<input class="webriti_inpute"  type="text" name="site_intro_descritpion" id="site_intro_descritpion" value="<?php if($current_options['site_intro_descritpion']!='') { echo $current_options['site_intro_descritpion']; }  ?>" >
			<span class="explain"><?php  _e('Enter Intro description','rambo');?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Intro button text','rambo'); ?></h3>
			<input class="webriti_inpute"  type="text" name="site_intro_button_text" id="site_intro_button_text" value="<?php if($current_options['site_intro_button_text']!='') { echo esc_attr($current_options['site_intro_button_text']); } ?>" >
			<span class="explain"><?php _e('Enter Intro button text','rambo');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Intro button link','rambo'); ?></h3>
			<input type="checkbox" <?php if($current_options['intro_button_target']=='on') echo "checked='checked'"; ?> id="intro_button_target" name="intro_button_target" ><span class="explain"><?php _e('Open link in a new window/tab','rambo');?> </span>
			<br><br>
			<input class="webriti_inpute"  type="text" name="site_intro_button_link" id="site_intro_button_link" value="<?php if($current_options['site_intro_button_link']!='') { echo esc_attr($current_options['site_intro_button_link']); } ?>" >
			<span class="explain"><?php  _e('Enter Intro button link','rambo');?></span>
		</div>
		
		<div class="section">
			<h2><?php _e('Service Section','rambo'); ?></h2><hr>
			<h3><?php _e('Service title','rambo'); ?></h3>
			<input class="webriti_inpute"  type="text" name="service_section_title" id="service_section_title" value="<?php if($current_options['service_section_title']!='') { echo esc_attr($current_options['service_section_title']); } ?>" >
			<span class="explain"><?php  _e('Enter the service title','rambo');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Service Descritpion','rambo'); ?></h3>
			<input class="webriti_inpute"  type="text" name="service_section_descritpion" id="service_section_descritpion" value="<?php if($current_options['service_section_descritpion']!='') { echo esc_attr($current_options['service_section_descritpion']); } ?>" >
			<span class="explain"><?php  _e('Enter the service descritpion','rambo');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Enabled Number of services on Home Page(service section)','rambo'); ?></h3>
			<?php $service_list = $current_options['service_list']; ?>		
			<select name="service_list" class="webriti_inpute" >					
				<option value="4" <?php selected($service_list, '4' ); ?>>4</option>
				<option value="8" <?php selected($service_list, '8' ); ?>>8</option>
				<option value="12" <?php selected($service_list, '12' ); ?>>12</option>
				<option value="16" <?php selected($service_list, '16' ); ?>>16</option>
				<option value="20" <?php selected($service_list, '20' ); ?>>20</option>
				<option value="22" <?php selected($service_list, '24' ); ?>>24</option>
			</select>
			<span class="explain"><?php _e('Select no of Services','rambo'); ?></span>
		</div>
			
		<div id="button_section">
			<input type="hidden" value="1" id="rambopro_settings_save_11" name="rambopro_settings_save_11" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('11');">
			<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('11')" >
		</div>
	</form>
</div>