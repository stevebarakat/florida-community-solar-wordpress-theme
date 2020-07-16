<div class="block ui-tabs-panel active" id="option-ui-id-1" >
<?php $current_options = get_option('rambo_pro_theme_options');
	if(isset($_POST['rambopro_settings_save_1']))
	{	
		if($_POST['rambopro_settings_save_1'] == 1) 
		{
			if ( empty($_POST) || !wp_verify_nonce($_POST['rambopro_gernalsetting_nonce_customization'],'rambopro_customization_nonce_gernalsetting') )
			{  print 'Sorry, your nonce did not verify.';	exit; }
			else  
			{	$current_options['front_page'] = sanitize_text_field($_POST['front_page']) ; 
				$current_options['rambopro_stylesheet']=sanitize_text_field($_POST['rambopro_stylesheet']);
				$current_options['upload_image_logo']=sanitize_text_field($_POST['upload_image_logo']);			
				$current_options['height']=sanitize_text_field($_POST['height']);
				$current_options['width']=sanitize_text_field($_POST['width']);
				$current_options['upload_image_favicon']=sanitize_text_field($_POST['upload_image_favicon']);
				$current_options['google_analytics']=$_POST['google_analytics'];
				$current_options['webrit_custom_css']=$_POST['webrit_custom_css'];
				$current_options['layout_selector']=$_POST['layout_selector'];				
				
				if($_POST['rambo_texttitle'])
				{ echo $current_options['rambo_texttitle']=sanitize_text_field($_POST['rambo_texttitle']); } 
				else
				{ echo $current_options['rambo_texttitle']="off"; } 
				
				update_option('rambo_pro_theme_options',$current_options);
			}
		}	
		if($_POST['rambopro_settings_save_1'] == 2) 
		{
			$current_options['front_page'] = "on" ;
			$current_options['layout_selector']	= "wide";
			$current_options['rambopro_stylesheet']="default.css";
			$current_options['upload_image_logo']="";
			$current_options['height']=50;
			$current_options['width']=150;
			$current_options['upload_image_favicon']="";
			$current_options['rambo_texttitle']="on";
			$current_options['google_analytics']="";
			$current_options['webrit_custom_css']="";		
			update_option('rambo_pro_theme_options',$current_options);
		}
	}  ?>
	<form method="post" id="rambopro_theme_options_1">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Quick Start Settings','rambo');?></h2></td>
				<td style="width:30%;">
					<div class="rambopro_settings_loding" id="rambo_loding_1_image"></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_1_success" ><?php _e('Options data successfully Saved','rambo');?></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_1_reset" ><?php _e('Options data successfully reset','rambo');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('1');">
					<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('1')" >
				</td>
				</tr>
			</table>			
		</div>	
		<?php wp_nonce_field('rambopro_customization_nonce_gernalsetting','rambopro_gernalsetting_nonce_customization'); ?>
		<div class="section">
			<h3><?php _e('Enable Front Page','rambo'); ?>  </h3>
			<input type="checkbox" <?php if($current_options['front_page']=='on') echo "checked='checked'"; ?> id="front_page" name="front_page" > <span class="explain"><?php _e('Enable front page .','rambo'); ?></span>
		</div>
		<div class="section">
			<h3><?php _e('Theme Color Schemes','rambo'); ?></h3>
			<?php $rambopro_stylesheet = $current_options['rambopro_stylesheet']; ?>	
			<select id="rambopro_stylesheet" name="rambopro_stylesheet" class="webriti_inpute">
				<option <?php echo selected($rambopro_stylesheet, 'default.css' ); ?> ><?php _e('default.css','rambo'); ?></option>
				<option <?php echo selected($rambopro_stylesheet, 'blue.css' ); ?> ><?php _e('blue.css','rambo'); ?></option>
				<option <?php echo selected($rambopro_stylesheet, 'green.css' ); ?> ><?php _e('green.css','rambo'); ?></option>
				<option <?php echo selected($rambopro_stylesheet, 'orange.css' ); ?> ><?php _e('orange.css','rambo'); ?></option>
				<option <?php echo selected($rambopro_stylesheet, 'pink.css' ); ?> ><?php _e('pink.css','rambo'); ?></option>
			</select><span class="explain"><?php _e('Select color for you theme.','rambo');?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Theme Layout','rambo');?></h3>
			<?php $layout_selector = $current_options['layout_selector']; ?>
			<select id="layout_selector" name="layout_selector" class="webriti_inpute">
				<option <?php echo selected($layout_selector, 'wide' ); ?> ><?php _e('wide','rambo'); ?></option>
				<option <?php echo selected($layout_selector, 'boxed' ); ?> ><?php _e('boxed','rambo'); ?></option>
			</select><span class="explain"><?php _e('With the Help of box layout you can show sites background','rambo');?></span>			
		</div>
		<div class="section">
			<h3><?php _e('Custom background ','rambo');?></h3>
			<div class="explain"><?php _e('Set your background','rambo');?> <a href="<?php echo home_url( '/' ); ?>wp-admin/themes.php?page=custom-background"><?php _e('Click here','rambo'); ?> </a></div>
		</div>
		<div class="section">
			<h3><?php _e('Custom Logo','rambo'); ?>
				<span class="icons help"><span class="tooltip"><?php  _e('Add custom logo from here suggested size is 150X50 px','rambo');?></span></span>
			</h3>
			<input class="webriti_inpute" type="text" value="<?php if($current_options['upload_image_logo']!='') { echo esc_attr($current_options['upload_image_logo']); } ?>" id="upload_image_logo" name="upload_image_logo" size="36" class="upload has-file"/>
			<input type="button" id="upload_button" value="Custom Logo" class="upload_image_button" />
			
			<?php if($current_options['upload_image_logo']!='') { ?>
			<p><img style="height:60px;width:100px;" src="<?php if($current_options['upload_image_logo']!='') { echo esc_attr($current_options['upload_image_logo']); } ?>" /></p>
			<?php } ?>
		</div>
		<div class="section">
			<h3><?php _e('Logo Height','rambo'); ?>
				<span class="icons help"><span class="tooltip"><?php  _e('Default Logo Height : 50px, if you want to increase than specify your value','rambo');?></span></span>
			</h3>
			<input class="webriti_inpute"  type="text" name="height" id="height" value="<?php echo $current_options['height']; ?>" >						
		</div>
		<div class="section">
			<h3><?php _e('Logo Width','rambo'); ?>
				<span class="icons help"><span class="tooltip"><?php  _e('Default Logo Width : 150px, if you want to increase than specify your value','rambo');?></span></span>
			</h3>
			<input  class="webriti_inpute" type="text" name="width" id="width"  value="<?php echo $current_options['width']; ?>" >			
		</div>
		<div class="section">
			<h3><?php _e('Text Title','rambo'); ?></h3>
			<input type="checkbox" <?php if($current_options['rambo_texttitle']=='on') echo "checked='checked'"; ?> id="rambo_texttitle" name="rambo_texttitle" > <span class="explain"><?php _e('Enable text-based Site Title.   Setup title','rambo');?> <a href="<?php echo home_url( '/' ); ?>wp-admin/options-general.php"><?php _e('Click Here','rambo');?></a>.</span>
		</div>
		<div class="section">
			<h3><?php _e('Custom Favicon','rambo'); ?>
				<span class="icons help"><span class="tooltip"><?php  _e('Make sure you upload .icon image type which is not more then 25X25 px.','rambo');?></span></span>
			</h3>
			<input class="webriti_inpute" type="text" value="<?php if($current_options['upload_image_favicon']!='') { echo esc_attr($current_options['upload_image_favicon']); } ?>" id="upload_image_favicon" name="upload_image_favicon" size="36" class="upload has-file"/>
			<input type="button" id="upload_button" value="Favicon Icon" class="upload_image_button"  />			
			<?php if($current_options['upload_image_favicon']!='') { ?>
			<p><img style="height:60px;width:100px;" src="<?php  echo esc_attr($current_options['upload_image_favicon']);  ?>" /></p>
			<?php } ?>
		</div>
		<div class="section">
			<h3><?php _e('Google Tracking Code','rambo'); ?></h3>
			<textarea rows="8" cols="8" id="google_analytics" name="google_analytics" ><?php if($current_options['google_analytics']!='') { echo esc_attr($current_options['google_analytics']); } ?></textarea>
			<div class="explain"><?php _e('Paste your Google Analytics tracking code here. This will be added into themes footer. Copy only scripting code i.e no need to use script tag ','rambo'); ?><br></div>
		</div>
		<div class="section">
			<h3><?php _e('Custom css','rambo'); ?></h3>
			<textarea rows="8" cols="8" id="webrit_custom_css" name="webrit_custom_css"><?php if($current_options['webrit_custom_css']!='') { echo esc_attr($current_options['webrit_custom_css']); } ?></textarea>
			<div class="explain"><?php _e('This is a powerful feature provided here. No need to use custom css plugin, just paste your css code and see the magic.','rambo'); ?><br></div>
		</div>		
		<div id="button_section">
			<input type="hidden" value="1" id="rambopro_settings_save_1" name="rambopro_settings_save_1" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('1');">
			<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('1')" >
			<!--  alert massage when data saved and reset -->
		</div>
	</form>
</div>