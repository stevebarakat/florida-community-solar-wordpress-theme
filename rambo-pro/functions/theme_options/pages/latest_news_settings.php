<div class="block ui-tabs-panel deactive" id="option-ui-id-12" >	
	<?php $current_options = get_option('rambo_pro_theme_options');
	if(isset($_POST['rambopro_settings_save_12']))
	{	
		if($_POST['rambopro_settings_save_12'] == 1) 
		{
			if ( empty($_POST) || !wp_verify_nonce($_POST['rambopro_gernalsetting_nonce_customization'],'rambopro_customization_nonce_gernalsetting') )
			{  print 'Sorry, your nonce did not verify.';	exit; }
			else  
			{		
				//home_latest_news_enabled  yes ya on
				if($_POST['home_latest_news_enabled'])
				{ echo $current_options['home_latest_news_enabled']= sanitize_text_field($_POST['home_latest_news_enabled']); } 
				else { echo $current_options['home_latest_news_enabled']="off"; } 				
				update_option('rambo_pro_theme_options',$current_options);
			}
		}	
		if($_POST['rambopro_settings_save_12'] == 2) 
		{
			$current_options['home_latest_news_enabled']="on";			
			update_option('rambo_pro_theme_options',$current_options);
		}
	}  ?>
	<form method="post" id="rambopro_theme_options_12">
		<?php wp_nonce_field('rambopro_customization_nonce_gernalsetting','rambopro_gernalsetting_nonce_customization'); ?>
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Latest News ','rambo');?></h2></td>
				<td style="width:30%;">
					<div class="rambopro_settings_loding" id="rambo_loding_12_image"></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_12_success" ><?php _e('Options data successfully Saved','rambo');?></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_12_reset" ><?php _e('Options data successfully reset','rambo');?></div>
				</td>
				<td style="text-align:right;">
					<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('12');">
					<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('12')" >
				</td>
				</tr>
			</table>	
		</div>		
		<div class="section">
			<h3><?php _e('Enable Latest News section ','rambo'); ?></h3>
			<input type="checkbox" <?php if($current_options['home_latest_news_enabled']=='on') echo "checked='checked'"; ?> id="home_latest_news_enabled" name="home_latest_news_enabled" > <span class="explain"><?php _e('Enable Latest News in front page.','rambo'); ?></span>
		</div>	
		<div class="section">			
			<p><?php _e('The latest new section will display your latest blog post.It will looks great if you add featured image in the blog post.','rambo'); ?></p>
			<p><?php _e('Check latest new section in theme','rambo'); ?><a href="http://www.webriti.com/demo/wp/rambo/" target="_blank"><?php _e('Demo','rambo'); ?></a></p>
		</div>
		<div id="button_section">
			<input type="hidden" value="1" id="rambopro_settings_save_12" name="rambopro_settings_save_12" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('12');">
			<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('12')" >
		</div>
	</form>
</div>