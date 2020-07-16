<div class="block ui-tabs-panel deactive" id="option-ui-id-3" >	
	<?php $current_options = get_option('rambo_pro_theme_options');
	if(isset($_POST['rambopro_settings_save_3']))
	{	
		if($_POST['rambopro_settings_save_3'] == 1) 
		{
			if ( empty($_POST) || !wp_verify_nonce($_POST['rambopro_gernalsetting_nonce_customization'],'rambopro_customization_nonce_gernalsetting') )
			{  print 'Sorry, your nonce did not verify.';	exit; }
			else  
			{		
				$current_options['project_protfolio_tag_line']=sanitize_text_field($_POST['project_protfolio_tag_line']);
				$current_options['project_protfolio_description_tag']=sanitize_text_field($_POST['project_protfolio_description_tag']);				
				
			/*	if($_POST['project_protfolio_enabled'])
				{ echo $current_options['project_protfolio_enabled']= sanitize_text_field($_POST['project_protfolio_enabled']); } 
				else
				{ echo $current_options['project_protfolio_enabled']="off"; } */
				
				
				
				update_option('rambo_pro_theme_options',$current_options);
			}
		}	
		if($_POST['rambopro_settings_save_3'] == 2) 
		{
			//$current_options['project_protfolio_enabled']="on";
			$current_options['project_protfolio_tag_line']="Featured Portfolio Projects.";
			$current_options['project_protfolio_description_tag']="Maecenas sit amet tincidunt elit. Pellentesque habitant morbi tristique senectus et netus et Nulla facilisi.";
			update_option('rambo_pro_theme_options',$current_options);
		}
	}  ?>
	<form method="post" id="rambopro_theme_options_3">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Project protfolio','rambo');?></h2></td>
				<td style="width:30%;">
					<div class="rambopro_settings_loding" id="rambo_loding_3_image"></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_3_success" ><?php _e('Options data successfully Saved','rambo');?></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_3_reset" ><?php _e('Options data successfully reset','rambo');?></div>
				</td>
				<td style="text-align:right;">
					<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('3');">
					<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('3')" >
				</td>
				</tr>
			</table>	
		</div>
		
		<?php wp_nonce_field('rambopro_customization_nonce_gernalsetting','rambopro_gernalsetting_nonce_customization'); ?>
		<!--<div class="section">
			<h3><?php // _e('Enable Project Portfolio','rambo'); ?></h3>
			<input type="checkbox" <?php // if($current_options['project_protfolio_enabled']=='on') echo "checked='checked'"; ?> id="project_protfolio_enabled" name="project_protfolio_enabled" > <span class="explain"><?php // _e('Enable project-portfolio on front page.','rambo'); ?></span>
		</div>	-->
		<div class="section">
			<h3>
				<?php _e('Project portfolio tag line','rambo'); ?>
				<span class="icons help"><span class="tooltip"><?php  _e('Add cool tag line for your portfolio.','rambo');?></span></span>			
			</h3>
			<input class="webriti_inpute"  type="text" name="project_protfolio_tag_line" id="project_protfolio_tag_line" value="<?php echo $current_options['project_protfolio_tag_line']; ?>" >
			
		</div>
		<div class="section">
			<h3><?php _e('Project protfolio description','rambo'); ?>
			<span class="icons help"><span class="tooltip"><?php  _e('Add short description for your portfolio.','rambo');?></span></span>
			</h3>
			<textarea rows="8" cols="8" id="project_protfolio_description_tag" name="project_protfolio_description_tag"><?php if($current_options['project_protfolio_description_tag']!='') { echo esc_attr($current_options['project_protfolio_description_tag']); } ?></textarea>
		</div>		
		
		<div id="button_section">
			<input type="hidden" value="1" id="rambopro_settings_save_3" name="rambopro_settings_save_3" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('3');">
			<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('3')" >
		</div>
	</form>
</div>