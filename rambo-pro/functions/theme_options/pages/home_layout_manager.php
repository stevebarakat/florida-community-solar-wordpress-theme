<div class="block ui-tabs-panel deactive" id="option-ui-id-14" >	
	<?php $current_options = get_option('rambo_pro_theme_options');
	if(isset($_POST['rambopro_settings_save_14']))
	{	if($_POST['rambopro_settings_save_14'] == 2) 
		{
			$current_options['front_page_data']=array('Theme-Introduction-Top','Service Section','Project Portfolio','Latest News','Call Out Area');		
			update_option('rambo_pro_theme_options',$current_options);
		}
	}
	
	if(isset($_POST['rambopro_front_data']))
	{
		if($_POST['rambopro_front_data'] ) 
		{		
				/*send data hold*/
				$datashowredify = $_POST['rambopro_front_data'];
				$hold = strstr($datashowredify,'|');
				$datashowredify = str_replace('|', '' ,$hold);				
				$data = explode(",",$datashowredify);				
				/*data save*/
				$current_options['front_page_data']=$data;
				/*update all field*/
				update_option('rambo_pro_theme_options' , $current_options);
				
		}
	}
	?>
	<form method="post" id="rambopro_theme_options_14">
		<?php wp_nonce_field('rambopro_customization_nonce_gernalsetting','rambopro_gernalsetting_nonce_customization'); ?>
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Front Page Layout','rambo');?></h2></td>
				<td>
					<div class="rambopro_settings_loding" id="rambo_loding_14_image"></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_14_success" ><?php _e('Options data successfully Saved','rambo');?></div>
					<div class="rambopro_settings_massage" id="rambopro_settings_save_14_reset" ><?php _e('Options data successfully reset','rambo');?></div>
				</td>
				<td style="text-align:right;">
					<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('14');">
					<!--<input class="btn btn-primary" type="button" value="Save Options" onclick="rambo_option_data_save('14')" > -->
					<input class="btn btn-primary" type="button" value="Save Options" id="rambopro_front_enable_save1" >
					
				</td>
				</tr>
			</table>	
		</div>		
		<div class="section">
			<table  class="form-table">						
				<div class="dhe-example-section-content"><!---dhe-example-section-content--->
					<div id="rambopro_frontpage"><!--redify_frontpage--->
						<div class="column left first">
							<font color="#333333" size="+2"> <?php _e('Disabled','rambo');?></font><p></p>							
							<div class="sortable-list" id="disable">
								<?php 	
									$data = $current_options['front_page_data'];									
									$defaultenableddata=array('Theme-Introduction-Top','Service Section','Project Portfolio','Latest News','Call Out Area');
									$todisable=array_diff($defaultenableddata,$data);
									if($todisable != '')
									{	foreach($todisable as $value)
										{ ?>
											<div class="sortable-item" id="<?php echo $value ?>"><?php _e($value,'rambo'); ?></div>
								<?php 	}		 
									} ?>
							</div>
						</div>
						<div class="column left">
							<font color="#333333" size="+2"> <?php _e('Enabled','rambo'); ?></font><p></p>
							<div class="sortable-list" id="enable">
								<?php 
								$enable =$current_options['front_page_data'];								
								if($enable[0]!="")
								{	foreach($enable as $value)
									{ ?>
										<div class="sortable-item" id="<?php echo $value ?>"><?php _e($value,'rambo'); ?></div> <?php 
									} 
								}								
								?>
							</div>
						</div>
					</div>			
				</div><!--end redify_frontpage--->
			</table>				
		</div>
		<div class="section">
		<p> <b><?php _e('Slider section always top on the home page','rambo'); ?></b></p>
		<p> <b><?php _e('Note:','rambo'); ?> </b> <?php _e('By default all the section are enable on homepage. If you do not want to display any section just drag that section to the disabled box.','rambo'); ?><p>
		</div>
		<div id="button_section">
			<input type="hidden" value="1" id="rambopro_settings_save_14" name="rambopro_settings_save_14" />
			<input class="reset-button btn" type="button" name="reset" value="Restore Defaults" onclick="rambo_option_data_reset('14');">
			<input class="btn btn-primary" type="button" value="Save Options" id="rambopro_front_enable_save" >
		</div>
	</form>
	

<script type="text/javascript">

jQuery(document).ready(function(){	
	//drag drop tabs
	jQuery('#rambopro_frontpage .sortable-list').sortable({ connectWith: '#rambopro_frontpage .sortable-list' });	
	
	// Get items id you can chose
	function ramboproItems(rambopro)
	{
		var columns = [];
		jQuery(rambopro + ' div.sortable-list').each(function(){
			columns.push(jQuery(this).sortable('toArray').join(','));
		});
		return columns.join('|');
	}
	
	//onclick check id
	jQuery('#rambopro_front_enable_save').click(function(){ 
		var aa = ramboproItems('#rambopro_frontpage');		
		 var dataStringfirst = 'rambopro_front_data='+ aa;
		 
			 var url = '?page=rambo';
     
			 	jQuery.ajax({
					dataType : 'html',
					type: 'POST',
					url : url,
			   		data : dataStringfirst,
					complete : function() {  },
					success: function(data) 
				  	{	
						jQuery("#rambopro_settings_save_14_success").show();
						jQuery("#rambopro_settings_save_14_success").fadeOut(5000);
					}
			 	});
	});
	
	//onclick check id
	jQuery('#rambopro_front_enable_save1').click(function(){  
		var aa = ramboproItems('#rambopro_frontpage');		
		 var dataStringfirst = 'rambopro_front_data='+ aa; 	
			 var url = '?page=rambo';     
			 	jQuery.ajax({
					dataType : 'html',
					type: 'POST',
					url : url,
			   		data : dataStringfirst,
					complete : function() {  },
					success: function(data) 
				  	{	
						jQuery("#rambopro_settings_save_14_success").show();
						jQuery("#rambopro_settings_save_14_success").fadeOut(5000);
					}
			 	});
	});
	
});
</script>
</div>

