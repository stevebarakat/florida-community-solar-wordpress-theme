<div class="block ui-tabs-panel deactive" id="option-ui-id-13" >	
	<?php $current_options = get_option('rambo_pro_theme_options');
	if(isset($_POST['rambopro_settings_save_13']))
	{	
		if($_POST['rambopro_settings_save_13'] == 1) 
		{
			if ( empty($_POST) || !wp_verify_nonce($_POST['rambopro_gernalsetting_nonce_customization'],'rambopro_customization_nonce_gernalsetting') )
			{  print 'Sorry, your nonce did not verify.';	exit; }
			else  
			{	
				$current_options['client_strip_title']=sanitize_text_field($_POST['client_strip_title']);
				$current_options['number_of_client']=sanitize_text_field($_POST['number_of_client']);
				$current_options['rambo_client_strip_speed']=sanitize_text_field($_POST['rambo_client_strip_speed']);
				// Client Strip yes or on
				if($_POST['aboutus_client_strip_enabled'])
				{ echo $current_options['aboutus_client_strip_enabled']= sanitize_text_field($_POST['aboutus_client_strip_enabled']); } 
				else { echo $current_options['aboutus_client_strip_enabled']="off"; } 
					// Client Strip Yes Or NO
				if($_POST['service_client_strip_enabled'])
				{ echo $current_options['service_client_strip_enabled']= sanitize_text_field($_POST['service_client_strip_enabled']); } 
				else { echo $current_options['service_client_strip_enabled']="off"; } 
							
				update_option('rambo_pro_theme_options',$current_options);
			}
		}	
		if($_POST['rambopro_settings_save_13'] == 2) 
		{
			$current_options['aboutus_client_strip_enabled']="on";			
			$current_options['service_client_strip_enabled']="on";
			$current_options['client_strip_title']="Our Client";
			$current_options['number_of_client']= 5;
			$current_options['rambo_client_strip_speed']= 2000;
			
			
			update_option('rambo_pro_theme_options',$current_options);
		}
	}  ?>
	<form method="post" id="rambopro_theme_options_13">
		<?php wp_nonce_field('rambopro_customization_nonce_gernalsetting','rambopro_gernalsetting_nonce_customization'); ?>
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Client Strip ','rambo');?></h2></td>
				<td style="width:30%;">
					<div class="rambopro_settings_loding" id="rambo_loding_13_image"></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_13_success" ><?php _e('Options data successfully Saved','rambo');?></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_13_reset" ><?php _e('Options data successfully reset','rambo');?></div>
				</td>
				<td style="text-align:right;">
					<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('13');">
					<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('13')" >
				</td>
				</tr>
			</table>	
		</div>		
		<div class="section">			
			<h3><?php _e('Enable Client Strip','rambo'); ?>  </h3>
			<input type="checkbox" <?php if($current_options['aboutus_client_strip_enabled']=='on') echo "checked='checked'"; ?> id="aboutus_client_strip_enabled" name="aboutus_client_strip_enabled" > <span class="explain"><?php _e('Enable client strip on About us page.','rambo'); ?></span>
			<input type="checkbox" <?php if($current_options['service_client_strip_enabled']=='on') echo "checked='checked'"; ?> id="service_client_strip_enabled" name="service_client_strip_enabled" > <span class="explain"><?php _e('Enable client strip on Service Page template.','rambo'); ?></span>
		</div>
		<div class="section">	
			<h3><?php _e('Client Strip Heading','rambo'); ?>  </h3>			
			<input class="webriti_inpute"  type="text" name="client_strip_title" id="client_strip_title" value="<?php echo $current_options['client_strip_title']; ?>" >
			<span class="icons help">
				<span class="tooltip"><?php  _e('Enter Client Strip title','rambo');?></span>
			</span>
		</div>
		<div class="section">	
		<h3><?php _e('Number of client display in client strip','rambo'); ?></h3>
				<input class="webriti_inpute"  type="text" name="number_of_client" id="number_of_client" value="<?php echo $current_options['number_of_client']; ?>" >
				<span class="icons help">
				<span class="tooltip"><?php  _e('Enter numeric digit for display clients list.','rambo');?></span>
			</span>			
		</div>
		<div class="section">	<?php  $rambo_client_strip_speed=$current_options['rambo_client_strip_speed']; ?>
			<h3><?php _e('Client strip slide speed','rambo'); ?></h3>
				<select id="rambo_client_strip_speed" name="rambo_client_strip_speed" class="webriti_inpute">
				<option <?php echo selected($rambo_client_strip_speed, '1000' ); ?> >1000</option>
				<option <?php echo selected($rambo_client_strip_speed, '2000' ); ?> >2000</option>
				<option <?php echo selected($rambo_client_strip_speed, '3000' ); ?> >3000</option>
				<option <?php echo selected($rambo_client_strip_speed, '4000' ); ?> >4000</option>
				<option <?php echo selected($rambo_client_strip_speed, '5000' ); ?> >5000</option>
			</select>
				<span class="icons help">
				<span class="tooltip"><?php  _e('Select client slider speed.','rambo');?></span>
			</span>			
		</div> 
		<div id="button_section">
			<input type="hidden" value="1" id="rambopro_settings_save_13" name="rambopro_settings_save_13" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('13');">
			<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('13')" >
			<!--  alert massage when data saved and reset -->
		</div>
	</form>
</div>