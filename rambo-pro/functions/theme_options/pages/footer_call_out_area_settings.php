<div class="block ui-tabs-panel deactive" id="option-ui-id-4" >	
	<?php $current_options = get_option('rambo_pro_theme_options');
	if(isset($_POST['rambopro_settings_save_4']))
	{	
		if($_POST['rambopro_settings_save_4'] == 1) 
		{
			if ( empty($_POST) || !wp_verify_nonce($_POST['rambopro_gernalsetting_nonce_customization'],'rambopro_customization_nonce_gernalsetting') )
			{  print 'Sorry, your nonce did not verify.';	exit; }
			else  
			{		
				$current_options['site_info_title']=sanitize_text_field($_POST['site_info_title']);
				$current_options['site_info_descritpion']=sanitize_text_field($_POST['site_info_descritpion']);
				$current_options['site_info_button_text']=sanitize_text_field($_POST['site_info_button_text']);
				$current_options['site_info_button_link']=sanitize_text_field($_POST['site_info_button_link']);
				
				/*if($_POST['site_info_enabled'])
				{ 	$current_options['site_info_enabled']= sanitize_text_field($_POST['site_info_enabled']); } 
				else
				{  $current_options['site_info_enabled']="off"; } */
				
				update_option('rambo_pro_theme_options',$current_options);
			}
		}	
		if($_POST['rambopro_settings_save_4'] == 2) 
		{
			// $current_options['site_info_enabled']="on";
			$current_options['site_info_title']="Rambo is a clean and fully responsive Template.";
			$current_options['site_info_descritpion']="At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos excepturi vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat.";
			$current_options['site_info_button_text']="Purchase Now";
			$current_options['site_info_button_link']="#";
			
			update_option('rambo_pro_theme_options',$current_options);
		}
	}  ?>
	<form method="post" id="rambopro_theme_options_4">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Footer call out Area','rambo'); ?></h2></td>
				<td style="width:30%;">
					<div class="rambopro_settings_loding" id="rambo_loding_4_image"></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_4_success" ><?php _e('Options data successfully Saved','rambo');?></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_4_reset" ><?php _e('Options data successfully reset','rambo');?></div>
				</td>
				<td style="text-align:right;">
					<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('4');">
					<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('4')" >
				</td>
				</tr>
			</table>	
		</div>
		
		<?php wp_nonce_field('rambopro_customization_nonce_gernalsetting','rambopro_gernalsetting_nonce_customization'); ?>
		<!--<div class="section">
			<h3><?php // _e('Enable Footer call out area','rambo','rambo');?></h3>
			<input type="checkbox" <?php // if($current_options['site_info_enabled']=='on') echo "checked='checked'"; ?> id="site_info_enabled" name="site_info_enabled" > <span class="explain"><?php // _e('Enable Footer call out area in front page.','rambo'); ?></span>
		</div>	-->
		<div class="section">
			<h3><?php _e('Footer call out title','rambo','rambo'); ?> <span class="icons help"><span class="tooltip"><?php  _e('Enter Footer call out title in short words','rambo');?></span></span></h3>
			<input class="webriti_inpute"  type="text" name="site_info_title" id="site_info_title" value="<?php echo $current_options['site_info_title']; ?>" >
		</div>
		<div class="section">
			<h3>
				<?php _e(' Footer call out description','rambo'); ?>
				<span class="icons help"><span class="tooltip"><?php  _e('Enter Footer call out description','rambo');?></span></span>
			</h3>
			<textarea rows="8" cols="8" id="site_info_descritpion" name="site_info_descritpion" ><?php if($current_options['site_info_descritpion']!='') { echo esc_attr($current_options['site_info_descritpion']); } ?></textarea>
		</div>
		<div class="section">
			<h3><?php _e('Footer call out button text','rambo'); ?>
				<span class="icons help"><span class="tooltip"><?php _e('Enter Footer call out button text','rambo');?></span></span>
			</h3>
			<input class="webriti_inpute"  type="text" name="site_info_button_text" id="site_info_button_text" value="<?php if($current_options['site_info_button_text']!='') { echo esc_attr($current_options['site_info_button_text']); } ?>" >
		</div>
		<div class="section">
			<h3>
				<?php _e('Footer call out button link','rambo'); ?>
				<span class="icons help"><span class="tooltip"><?php  _e('Enter Footer call out button link','rambo');?></span></span>
			</h3>
			<input class="webriti_inpute"  type="text" name="site_info_button_link" id="site_info_button_link" value="<?php if($current_options['site_info_button_link']!='') { echo esc_attr($current_options['site_info_button_link']); } ?>" >
		</div>	
			
		<div id="button_section">
			<input type="hidden" value="1" id="rambopro_settings_save_4" name="rambopro_settings_save_4" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('4');">
			<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('4')" >
		</div>
	</form>
</div>