<?php
/************ Home slider meta post ****************/
add_action('admin_init','rambopro_slider_init');
function rambopro_slider_init()
	{
		add_meta_box('home_slider_meta', 'Description', 'rambopro_meta_slider', 'rambopro_slider', 'normal', 'high');
		add_meta_box('home_service_meta', 'featured Service', 'rambopro_meta_service', 'rambopro_service', 'normal', 'high');
		add_meta_box('home_project_meta', 'Portfolio Featured Project Details', 'rambopro_meta_project', 'rambopro_project', 'normal', 'high');
		add_meta_box('home_project_team', 'Our Team', 'rambopro_meta_team', 'rambopro_team', 'normal', 'high');
		add_meta_box('home_project_client', 'Client Strip', 'rambopro_meta_client', 'rambopro_clientstrip', 'normal', 'high');
		add_meta_box('home_rambopro_testimonials', 'Testimonials', 'rambopro_meta_testmonials', 'rambopro_testimonial', 'normal', 'high');
		
		
		add_action('save_post','rambopro_meta_save');
	}
	// code for slider banner description
	function rambopro_meta_slider()
	{	global $post ;
		$image_caption= sanitize_text_field( get_post_meta( get_the_ID(), 'image_description', true ));
		$readmorelink = sanitize_text_field( get_post_meta( get_the_ID(), 'readmore_link', true ));
		$readmorebutton = sanitize_text_field( get_post_meta( get_the_ID(), 'readmore_button', true ));
		$meta_slider_target = sanitize_text_field( get_post_meta( get_the_ID(), 'meta_slider_target', true ));
		?>	
		<p><label><?php _e('Image Caption','rambo');?></label>	</p>
		<p><textarea name="meta_image_description" id="meta_image_description" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter slider description (Use max word length 150 words)"  rows="3" cols="10" ><?php if (!empty($image_caption)) echo esc_textarea( $image_caption ); ?></textarea></p>	
		<p><label><?php _e('Read More Button','rambo');?></label></p> 
		<p><input class="inputwidth"  name="readmore_button" id="readmore_button" style="width: 480px" placeholder="Enter text for button " type="text" value="<?php if (!empty($readmorebutton)) echo esc_attr($readmorebutton);?>"> </input></p>	
		<p><label><?php _e('Read More Link','rambo');?></label></p> 
		<p><input class="inputwidth" name="readmore_link" id="readmore_link" style="width: 480px;" placeholder="Enter link or url for button"	type="text" value="<?php if (!empty($readmorelink)) echo esc_attr($readmorelink);?>"> </input></p>	
		<p><input type="checkbox" id="meta_slider_target" name="meta_slider_target" <?php if($meta_slider_target) echo "checked"; ?> > <?php _e('Open link in a new window/tab','rambo'); ?></p>	
		<?php
	}

	// code for service description
	function rambopro_meta_service()
	{	global $post ;
		
		$service_icon_image =sanitize_text_field( get_post_meta( get_the_ID(), 'service_icon_image', true ));
		$meta_service_description =get_post_meta( get_the_ID(), 'meta_service_description', true );
		$meta_service_link =sanitize_text_field( get_post_meta( get_the_ID(), 'meta_service_link', true ));
		$meta_service_target =sanitize_text_field( get_post_meta( get_the_ID(), 'meta_service_target', true ));	
	
	?>	
		<p><h4 class="heading"><?php _e('Service Icon (Using Font Awesome icons name) like: fa-rub .','rambo');?> <label style="margin-left:10px;"><a target="_blank" href="http://fontawesome.io/icons/"> <?php _e('Get your fontawesome icons.','rambo') ;?></a></label></h4>
		<p><input class="inputwidth"  name="service_icon_image" id="service_icon_image" style="width: 480px" placeholder="Enter the fontawesome icon" type="text" value="<?php if (!empty($service_icon_image)) echo esc_attr($service_icon_image);?>"> </input></p>
		<p><h4 class="heading"><?php _e('Enter the service icon link','rambo');?></h4></p>
		<p><input style="width:600px;" name="meta_service_link" id="meta_service_link" placeholder="Enter the service icon link" type="text" value="<?php if (!empty($meta_service_link)) echo esc_attr($meta_service_link);?>"></p>
		<p><input type="checkbox" id="meta_service_target" name="meta_service_target" <?php if($meta_service_target) echo "checked"; ?> > <?php _e('Open link in a new window/tab','rambo'); ?></p>	
		<p><h4 class="heading"><?php _e('Service Descritpion','rambo');?></h4>
		<p><textarea name="meta_service_description" id="meta_service_description" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter the Service description (Use max-word 115)"  rows="3" cols="10" ><?php if (!empty($meta_service_description)) echo esc_textarea( $meta_service_description ); ?></textarea></p>	
<?php }

// code for project description
	function rambopro_meta_project()
	{	global $post ;		
		$portfolio_client_project_title =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_client_project_title', true ));
		$portfolio_project_skills =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_project_skills', true ));
		$portfolio_project_tags =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_project_tags', true ));
		$portfolio_project_visit_site =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_project_visit_site', true ));
		$portfolio_project_link =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_project_link', true ));
		$portfolio_project_target =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_project_target', true ));
	?>	
	<p><h4 class="heading"><?php _e('Your clients','rambo');?></h4>
	<p><input class="inputwidth"  name="portfolio_client_project_title" id="portfolio_client_project_title" style="width: 480px" placeholder="Enter the client title, For example: Webriti" type="text" value="<?php if (!empty($portfolio_client_project_title)) echo esc_attr($portfolio_client_project_title);?>"> </input></p>	
	
	<p><h4 class="heading"><?php _e('Client Skills','rambo');?></h4>
	<p><input class="inputwidth"  name="portfolio_project_skills" id="portfolio_project_skills" style="width: 480px" placeholder="Enter the skills, For example : Wordpress, Php, Theme Development" type="text" value="<?php if (!empty($portfolio_project_skills)) echo esc_attr($portfolio_project_skills);?>"> </input></p>	
	
	<p><h4 class="heading"><?php _e('Tags','rambo');?></h4>
	<p><input class="inputwidth"  name="portfolio_project_tags" id="portfolio_project_tags" style="width: 480px" placeholder="Enter the tags, For example : Design, Prints, Business" type="text" value="<?php if (!empty($portfolio_project_tags)) echo esc_attr($portfolio_project_tags);?>"> </input></p>	
	
	<p><h4 class="heading"><?php _e('Client website Url','rambo');?></h4>
	<p><input class="inputwidth"  name="portfolio_project_visit_site" id="portfolio_project_visit_site" style="width: 480px" placeholder="Enter visit site url, For example: : http://webriti.com" type="text" value="<?php if (!empty($portfolio_project_visit_site)) echo esc_attr($portfolio_project_visit_site);?>"> </input></p>
	
	<p><h4 class="heading"><?php _e('Portfolio/Project Custom link','rambo');?></h4>
	<p><input style="width:600px;" name="portfolio_project_link" id="portfolio_project_link" placeholder="Enter the portfolio project link" type="text" value="<?php if (!empty($portfolio_project_link)) echo esc_attr($portfolio_project_link);?>"></p>
	<p><input type="checkbox" id="portfolio_project_target" name="portfolio_project_target" <?php if($portfolio_project_target) echo "checked"; ?> > <?php _e('Open link in a new window/tab','rambo'); ?></p>	
		
<?php }

	function rambopro_meta_team()
	{ 
		global $post;
		$link = sanitize_text_field( get_post_meta( get_the_ID(), 'team_link', true ));
		$designation = sanitize_text_field( get_post_meta( get_the_ID(), 'team_designation', true ));
		$role_description = sanitize_text_field( get_post_meta( get_the_ID(), 'team_role', true ));
		$meta_team_target =sanitize_text_field( get_post_meta( get_the_ID(), 'meta_team_target', true ));	
	?>
	  <p><h4 class="heading"><?php _e('Member link','rambo');?></h4>
	<p><input class="inputwidth"  name="link" id="link" style="width: 480px" placeholder="Enter Member's link Here" type="text" value="<?php if (!empty($link)) echo esc_attr($link);?>"></input></p>
	<p><input type="checkbox" id="meta_team_target" name="meta_team_target" <?php if($meta_team_target) echo "checked"; ?> > <?php _e('Open link in a new tab','rambo'); ?></p>	
	
	<p><h4 class="heading"><?php _e('Member Designation','rambo');?></h4>
	<p><input class="inputwidth"  name="designation" id="designation" style="width: 480px" placeholder="Enter Member's Designation Here" type="text" value="<?php if (!empty($designation)) echo esc_attr($designation);?>"></input></p>
	<p><h4 class="heading"><?php _e('Role Descritpion','rambo');?></h4>
	<p><textarea name="role_description" id="role_description" style="width: 480px; height: 56px; padding: 0px;" placeholder="Describe the Roles for the member(Use max-word 115)"  rows="3" cols="10" ><?php if (!empty($role_description)) echo esc_textarea( $role_description ); ?></textarea></p>	
	<?php
	}
	
	function rambopro_meta_client()
	{
	   global $post;
		$client_link = sanitize_text_field( get_post_meta( get_the_ID(), 'clientstrip_link', true ));
		$meta_client_target =sanitize_text_field( get_post_meta( get_the_ID(), 'meta_client_target', true ));	
	?>
	    <p><h4 class="heading"><?php _e('Enter URL  link','rambo');?></h4>
	<p><input class="inputwidth"  name="client_link" id="client_link" style="width: 480px" placeholder="Enter url link Here" type="text" value="<?php if (!empty($client_link)) echo esc_attr($client_link);?>"></input></p>
	<p><input type="checkbox" id="meta_client_target" name="meta_client_target" <?php if($meta_client_target) echo "checked"; ?> > <?php _e('Open link in a new tab','rambo'); ?></p>	
	
	
		<p><label><?php _e('Upload Client image using Feature Image.Best fit scenario is using 130 X 130 px image.','rambo'); ?></label></p>
		<p><label><?php _e('For More Configuration of the slider,Go to Option Panel -> About us settings tab -> Client Strip .','rambo');?></label></p>
	<?php
	}
	
	// code for service description
	function rambopro_meta_testmonials()
	{	global $post ;
		$testimonial_designation =sanitize_text_field( get_post_meta( get_the_ID(), 'testimonial_designation', true ));	?>	
		<p><h4 class="heading"><?php _e('Testimonial Designation','rambo');?></h4>
		<p><input class="inputwidth"  name="testimonial_designation" id="testimonial_designation" style="width: 480px" placeholder="Enter the testimonials designation" type="text" value="<?php if (!empty($testimonial_designation)) echo esc_attr($testimonial_designation);?>"> </input></p>	
		<p><label><h4><?php _e('Upload Testimonial image using Featured Image','rambo');?></h4></label></p>
<?php }
function rambopro_meta_save($post_id) 
{	if ( ! current_user_can( 'edit_page', $post_id ) )
		{     return ;	} 		
		if(isset( $_POST['post_ID']))
		{ 	
			$post_ID = $_POST['post_ID'];				
			$post_type=get_post_type($post_ID);
			if($post_type=='rambopro_slider'){
				update_post_meta($post_ID, 'image_description', sanitize_text_field($_POST['meta_image_description']));	
				update_post_meta($post_ID, 'readmore_button', sanitize_text_field($_POST['readmore_button']));	
				update_post_meta($post_ID, 'readmore_link', sanitize_text_field($_POST['readmore_link']));
				update_post_meta($post_ID, 'meta_slider_target', sanitize_text_field($_POST['meta_slider_target']));
			} 
			elseif($post_type=='rambopro_service'){
				update_post_meta($post_ID, 'service_icon_image', sanitize_text_field($_POST['service_icon_image']));				
				update_post_meta($post_ID, 'meta_service_description', $_POST['meta_service_description']);
				update_post_meta($post_ID, 'meta_service_link', sanitize_text_field($_POST['meta_service_link']));
				update_post_meta($post_ID, 'meta_service_target', sanitize_text_field($_POST['meta_service_target']));
			} 
			elseif($post_type=='rambopro_project'){	
				update_post_meta($post_ID, 'portfolio_client_project_title', sanitize_text_field($_POST['portfolio_client_project_title']));
				update_post_meta($post_ID, 'portfolio_project_skills', sanitize_text_field($_POST['portfolio_project_skills']));	
				update_post_meta($post_ID, 'portfolio_project_tags', sanitize_text_field($_POST['portfolio_project_tags']));	
				update_post_meta($post_ID, 'portfolio_project_visit_site', sanitize_text_field($_POST['portfolio_project_visit_site']));
				update_post_meta($post_ID, 'portfolio_project_link', sanitize_text_field($_POST['portfolio_project_link']));
				update_post_meta($post_ID, 'portfolio_project_target', sanitize_text_field($_POST['portfolio_project_target']));
			}
			elseif($post_type=='rambopro_team'){	
			    update_post_meta($post_ID, 'team_link', sanitize_text_field($_POST['link']));	
				update_post_meta($post_ID, 'team_designation', sanitize_text_field($_POST['designation']));	
				update_post_meta($post_ID, 'team_role', sanitize_text_field($_POST['role_description']));	
				update_post_meta($post_ID, 'meta_team_target', sanitize_text_field($_POST['meta_team_target']));
			}
			elseif($post_type=='rambopro_testimonial'){	
				update_post_meta($post_ID, 'testimonial_designation', sanitize_text_field($_POST['testimonial_designation']));	
			}
			
			elseif($post_type=='rambopro_clientstrip'){	
			    update_post_meta($post_ID, 'clientstrip_link', sanitize_text_field($_POST['client_link']));
				update_post_meta($post_ID, 'meta_client_target', sanitize_text_field($_POST['meta_client_target']));
				}
		}				
} 
?>