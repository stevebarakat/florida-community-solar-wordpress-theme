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
			    $current_options['service_list']= sanitize_text_field($_POST['service_list']);
				// service section enabled yes ya on
				if($_POST['home_service_enabled'])
				{ echo $current_options['home_service_enabled']= sanitize_text_field($_POST['home_service_enabled']); } 
				else { echo $current_options['home_service_enabled']="off"; } 
				
				update_option('rambo_pro_theme_options',$current_options);
			}
		}	
		if($_POST['rambopro_settings_save_11'] == 2) 
		{
			$current_options['home_service_enabled']="on";	
			$current_options['service_list']=4;		
			update_option('rambo_pro_theme_options',$current_options);
		}
	}  ?>
	<form method="post" id="rambopro_theme_options_11">
		<?php wp_nonce_field('rambopro_customization_nonce_gernalsetting','rambopro_gernalsetting_nonce_customization'); ?>
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Service Section','rambo');?></h2></td>
				<td><div class="rambopro_settings_loding" id="rambo_loding_11_image"></div>
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
		<div class="section">
			<h3><?php _e('Enable Home Service','rambo'); ?></h3>
			<input type="checkbox" <?php if($current_options['home_service_enabled']=='on') echo "checked='checked'"; ?> id="home_service_enabled" name="home_service_enabled" > <span class="explain"><?php _e('Enable Home service section in custom front page.','rambo'); ?></span>
		</div>
		<div class="section">
			<h3><?php _e('Number of services on service section','rambo'); ?></h3>
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
		
		<div class="section">
			<h3><?php _e('Add Services','rambo');?></h3>
			<p><?php _e('You can add services from tab menu Service >> Add New Service. By this you can add as many services you want. <br /> If you have more than 
			four services to display than use our services template','rambo');?></p>
				
		</div>
		<div id="button_section">
			<input type="hidden" value="1" id="rambopro_settings_save_11" name="rambopro_settings_save_11" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('11');">
			<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('11')" >
			<!--  alert massage when data saved and reset -->
		</div>
	</form>
</div>