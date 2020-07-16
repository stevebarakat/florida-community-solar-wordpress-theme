<div class="block ui-tabs-panel deactive" id="option-ui-id-2" >	
	<?php $current_options = get_option('rambo_pro_theme_options');
	if(isset($_POST['rambopro_settings_save_2']))
	{	
		if($_POST['rambopro_settings_save_2'] == 1) 
		{
			if ( empty($_POST) || !wp_verify_nonce($_POST['rambopro_gernalsetting_nonce_customization'],'rambopro_customization_nonce_gernalsetting') )
			{  print 'Sorry, your nonce did not verify.';	exit; }
			else  
			{		
				$current_options['animation']=sanitize_text_field($_POST['animation']);
				$current_options['animationSpeed']=sanitize_text_field($_POST['animationSpeed']);
				$current_options['slide_direction']=sanitize_text_field($_POST['slide_direction']);
				$current_options['slideshowSpeed']=sanitize_text_field($_POST['slideshowSpeed']);
				
				// slider section enabled yes ya on
				if($_POST['home_slider_enabled'])
				{ echo $current_options['home_slider_enabled']= sanitize_text_field($_POST['home_slider_enabled']); } 
				else { echo $current_options['home_slider_enabled']="off"; } 
				
				update_option('rambo_pro_theme_options',$current_options);
			}
		}	
		if($_POST['rambopro_settings_save_2'] == 2) 
		{
			$current_options['home_slider_enabled']="on";
			$current_options['animation']='slide';
			$current_options['animationSpeed']='500';
			$current_options['slide_direction']='horizontal';
			$current_options['slideshowSpeed']='2000';			
					
			update_option('rambo_pro_theme_options',$current_options);
		}
	}  ?>
	<form method="post" id="rambopro_theme_options_2">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Slider Settings','rambo');?></h2></td>
				<td style="width:30%;">
					<div class="rambopro_settings_loding" id="rambo_loding_2_image"></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_2_success" ><?php _e('Options data successfully Saved','rambo');?></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_2_reset" ><?php _e('Options data successfully reset','rambo');?></div>
				</td>
				<td style="text-align:right;">
					<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('2');">
					<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('2')" >
				</td>
				</tr>
			</table>	
		</div>	
		
		<?php wp_nonce_field('rambopro_customization_nonce_gernalsetting','rambopro_gernalsetting_nonce_customization'); ?>
		<div class="section">
			<h3><?php _e('Enable Home Slider','rambo'); ?>  </h3>
			<input type="checkbox" <?php if($current_options['home_slider_enabled']=='on') echo "checked='checked'"; ?> id="home_slider_enabled" name="home_slider_enabled" > <span class="explain"><?php _e('Enable slider on front page.','rambo'); ?></span>
		</div>					
		<div class="section">
			<h3><?php _e('Animation','rambo'); ?></h3>
			<?php $animation = $current_options['animation']; ?>		
				<select name="animation" class="webriti_inpute" >					
				<option value="fade"  <?php echo selected($animation, 'fade' ); ?>><?php _e('fade','rambo');?></option>
				<option value="slide" <?php echo selected($animation, 'slide' ); ?>><?php _e('slide','rambo');?></option> 
				</select>
			<span class="icon help">
				<span class="tooltip"><?php  _e('Select the Animation Type','rambo');?></span>
			</span>		
		</div>
		<div class="section">
			<h3><?php _e('Slide direction','rambo'); ?></h3>
			<?php $slide_direction = $current_options['slide_direction']; ?>		
				<select name="slide_direction" class="webriti_inpute" >					
					<option value="vertical"  <?php echo selected($slide_direction, 'vertical' ); ?>><?php _e('vertical','rambo');?></option>
					<option value="horizontal" <?php echo selected($slide_direction, 'horizontal' ); ?>><?php _e('horizontal','rambo');?></option> 
				</select>
			<span class="icon help">
				<span class="tooltip"><?php  _e('Select the Slider Direction','rambo');?></span>
			</span>	
		</div>
		<div class="section">
			<h3><?php _e('Animation speed','rambo') ?></h3>
			<?php $animationSpeed = $current_options['animationSpeed']; ?>		
				<select name="animationSpeed" class="webriti_inpute" >					
					<option value="500" <?php selected($animationSpeed, '500' ); ?>>0.5</option>
					<option value="1000" <?php selected($animationSpeed, '1000' ); ?>>1.0</option>
					<option value="1500" <?php selected($animationSpeed, '1500' ); ?>>1.5</option>
					<option value="2000" <?php selected($animationSpeed, '2000' ); ?>>2.0</option>
					<option value="2500" <?php selected($animationSpeed, '2500' ); ?>>2.5</option>
					<option value="3000" <?php selected($animationSpeed, '3000' ); ?>>3.0</option>
					<option value="3500" <?php selected($animationSpeed, '3500' ); ?>>3.5</option>
					<option value="4000" <?php selected($animationSpeed, '4000' ); ?>>4.0</option>
					<option value="4500" <?php selected($animationSpeed, '4500' ); ?>>4.5</option>
					<option value="5000" <?php selected($animationSpeed, '5000' ); ?>>5.0</option>
					<option value="5500" <?php selected($animationSpeed, '5500' ); ?>>5.5</option>
				</select>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Select the Animation Speed','rambo');?></span>
				</span>
		</div>
		<div class="section">
			<h3><?php _e('Slideshow speed','rambo'); ?></h3>
			<?php $slideshowSpeed = $current_options['slideshowSpeed']; ?>		
					<select name="slideshowSpeed" class="webriti_inpute">					
						<option value="500" <?php selected($slideshowSpeed, '500' ); ?>>0.5</option>
						<option value="1000" <?php selected($slideshowSpeed, '1000' ); ?>>1.0</option>
						<option value="1500" <?php selected($slideshowSpeed, '1500' ); ?>>1.5</option>
						<option value="2000" <?php selected($slideshowSpeed, '2000' ); ?>>2.0</option>
						<option value="2500" <?php selected($slideshowSpeed, '2500' ); ?>>2.5</option>
						<option value="3000" <?php selected($slideshowSpeed, '3000' ); ?>>3.0</option>
						<option value="3500" <?php selected($slideshowSpeed, '3500' ); ?>>3.5</option>
						<option value="4000" <?php selected($slideshowSpeed, '4000' ); ?>>4.0</option>
						<option value="4500" <?php selected($slideshowSpeed, '4500' ); ?>>4.5</option>
						<option value="5000" <?php selected($slideshowSpeed, '5000' ); ?>>5.0</option>
						<option value="5500" <?php selected($slideshowSpeed, '5500' ); ?>>5.5</option>
					</select>
				<span class="icon help">
					<span class="tooltip"><?php  _e('Select the Slide Show Speed','rambo');?></span>
				</span>
		</div>		
		<div id="button_section">
			<input type="hidden" value="1" id="rambopro_settings_save_2" name="rambopro_settings_save_2" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('2');">
			<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('2')" >
		</div>
	</form>
</div>