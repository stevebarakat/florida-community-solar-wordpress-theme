<?php // Template Name: Contact Page ?>
<?php get_header();
$image_uri= WEBRITI_TEMPLATE_DIR_URI. '/images' ;
$current_options = get_option('rambo_pro_theme_options');
$mapsrc= $current_options['rambo_contact_google_map_url']; 
$mapsrc=$mapsrc.'&amp;output=embed';
?>
<!-- Google Map -->	
<?php if($current_options['contact_google_map_enabled'] == "on"){?>
<div class="Contact_google_map">	
	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo  $mapsrc ?>"></iframe><br /><small><a href="<?php echo $mapsrc; ?>" style="color:#0000FF;text-align:left"><?php _e( "View Larger Map", 'rambo' ); ?> </a></iframe>
</div>
<?php } ?>
<!-- /Google Map -->
	
<!-- Container -->
<div class="container">
	<!-- Contact Container -->
	<div class="row-fluid">
		<!-- Contact -->
		<div class="span8">			
			<!-- Contact Form -->
			<div id="myformdata">
				<div class="row-fluid leave_comment_section">
					<?php if($current_options['contact_form_heading']!='') { ?> 
					<div class="blog_single_post_head_title"><h3><?php echo esc_attr($current_options['contact_form_heading']);  ?></h3></div>
					<?php } ?>
					<form id="contactus_form" method="post"  action="">
						<?php wp_nonce_field('rambo_name_nonce_check','rambo_name_nonce_field'); ?>
						<fieldset>
							<label><?php _e('Name','rambo'); ?><span>*</span></label>
							<input class="span9 leave_comment_field" id="yourname" name="yourname" type="text"> 
							<label><?php _e('Email','rambo'); ?><span>*</span></label>
							<input class="span9 leave_comment_field" type="text" id="email" name="email">
							<label><?php _e('Website','rambo'); ?></label>
							<input class="span9 leave_comment_field" type="text" id="website" name="website"> 
							<label><?php _e('Comment','rambo') ?><span>*</span></label>
							<textarea rows="7" class="span12 leave_comment_field" id="message" name="message"></textarea>
						</fieldset>
						<div class="span3" >
							<button type="submit" class="comment_btn" id="contact_submit" name="contact_submit"><?php _e('Send Message','rambo'); ?></button>
						</div>
						<div class="span4" style="padding-top:10px;">
							<span  style="display:none; color:red" id="contact_user_name_error"><?php _e('Please Enter Your Name','rambo'); ?> </span>
							<span  style="display:none; color:red" id="contact_email_error"><?php _e('Please Enter valid email','rambo'); ?> </span>
							<span  style="display:none; color:red" id="contact_massage_error"><?php _e('Please Enter your contact message','rambo'); ?></span>
							<span  style="display:none; color:red" id="contact_nonce_error"><?php _e('Sorry, your nonce did not verify','rambo');?></span>
						</div>
					</form>				
				</div>
			</div>
			<div id="mailsentbox" style="display:none">
				<div class="alert alert-success" >
					<strong><?php _e('Thank  you!','rambo');?></strong> <?php _e('You successfully sent contact information...','rambo');?>
				</div>
			</div>
			<!-- /Contact Form -->		
		</div>
		<!-- /Contact -->		
		<!-- Sidebar Widget -->
		<div class="span4 sidebar">			
			<!--Get in Touch-->
			<?php if($current_options['rambo_get_in_touch_enabled'] == "on"){?>
			<div class="sidebar_widget">
				<div class="sidebar_widget_title"><h2><?php if($current_options['rambo_get_in_touch']!='') { echo esc_attr($current_options['rambo_get_in_touch']); } else { echo _e('Get in Touch','rambo'); } ?></h2></div>
				<div class="row-fluid">
					<p><?php if($current_options['rambo_get_in_touch_description']!='') { echo($current_options['rambo_get_in_touch_description']); } else { echo _e('Lorem ipsum dolor sit amet, usu rebum errem pericula ea, ei alia quaerendum vix. Ea justo tritani sit, odio ignota quo te. Lorem ipsum dolor sit amet.','rambo'); } ?>
					</p>
				</div>
			</div>
			<?php } ?>
			<!--/Get in Touch-->
			
			<!--Contact Detail-->
			<?php if($current_options['rambo_our_office_enabled'] == "on"){?>
			<div class="sidebar_widget">
				<div class="sidebar_widget_title"><h2><?php if($current_options['rambo_our_office']!='') { echo esc_attr($current_options['rambo_our_office']); } else { echo _e('Our Office','rambo'); } ?></h2></div>
				<div class="row-fluid">
					<p class="sidebar_con_detail">
						<i class="fa fa-map-marker icon-spacing"></i><span>
							<?php _e('Address:','rambo'); ?> <small><?php if($current_options['rambo_contact_address']!='') { echo esc_attr($current_options['rambo_contact_address']); } else { echo _('New York City, USA','rambo'); } ?>
						</small></span>
					</p>
					<p class="sidebar_con_detail">
						<i class="fa fa-envelope icon-spacing"></i><span><?php _e('Email:','rambo'); ?> <small>
						<?php if($current_options['rambo_contact_email']!='') { echo esc_attr($current_options['rambo_contact_email']); } else { echo _('info@rambotheme.com','rambo'); } ?>
						</small></span>
					</p>
					<p class="sidebar_con_detail">
						<i class="fa fa-phone icon-spacing"></i><span><?php _e('Phone:','rambo'); ?> <small>
						<?php if($current_options['rambo_contact_phone_number']!='') { echo esc_attr($current_options['rambo_contact_phone_number']); } else { echo _('420-300-3850','rambo'); } ?>
						</small></span>
					</p>
				</div>
			</div>
			<?php } ?>
			<!--/Contact Detail-->			
			<!--Sidebar Social Icons-->
			<?php if($current_options['social_media_in_contact_page_enabled'] == "on"){?>
			<div class="sidebar_widget">
				<div class="sidebar_widget_title"><h2><?php _e('Get Connected','rambo'); ?></h2></div>
				<div class="sidebar_social">
						<a href="<?php if($current_options['social_media_facebook_link']!='') { echo esc_attr($current_options['social_media_facebook_link']); } else { echo "#"; } ?>" class="facebook">&nbsp;</a>
						<a href="<?php if($current_options['social_media_twitter_link']!='') { echo esc_attr($current_options['social_media_twitter_link']); } else { echo "#"; } ?>" class="twitter">&nbsp;</a>
						<a href="<?php if($current_options['social_media_linkedin_link']!='') { echo esc_attr($current_options['social_media_linkedin_link']); } else { echo "#"; } ?>" class="linked-in">&nbsp;</a>
						<a href="<?php if($current_options['social_media_google_plus']!='') { echo esc_attr($current_options['social_media_google_plus']); } else { echo "#"; } ?>" class="google_plus">&nbsp;</a>
				</div>				
			</div><!--/Sidebar Social Icons-->
			<?php } ?>
		</div>
		<!-- /Sidebar Widget -->
		<?php
		if(isset($_POST['contact_submit']))
		{	$flag=1;
			if(empty($_POST['yourname']))
			{	
				$flag=0;
				echo "<script>jQuery('#contact_user_name_error').show();</script>";
			}else
			if($_POST['email']=='') 
			{	
				$flag=0;
				echo "<script>jQuery('#contact_email_error').show();</script>";
			}else
			if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$_POST['email'])) 
			{	
				$flag=0;
				echo "<script>jQuery('#contact_email_error').show();</script>";
			}else
			if($_POST['message']=='')
			{
				$flag=0;
				echo "<script>jQuery('#contact_massage_error').show();</script>";
			}else
			if(empty($_POST) || !wp_verify_nonce($_POST['rambo_name_nonce_field'],'rambo_name_nonce_check') )
			{
				echo "<script>jQuery('#contact_nonce_error').show();</script>";
			   exit;
			}
			else
			{	if($flag==1)
				{	
					$to = get_option('admin_email');
					$subject = trim($_POST['yourname'])." sent you a message from ".get_option("blogname");
					$massage = stripslashes(trim($_POST['message']))."Message sent from:: ".trim($_POST['email']);
					$headers = "From: ".trim($_POST['yourname'])." <".trim($_POST['email']).">\r\nReply-To:".trim($_POST['email']);
					$maildata =wp_mail($to, $subject, $massage, $headers);
					if($maildata){						
					echo "<script>jQuery('#myformdata').hide();</script>";
					echo "<script>jQuery('#mailsentbox').show();</script>";
					}
					
				}
			}
		}
		?>
	
	</div>
	<!-- /Contact Container -->	
</div>
<?php get_footer();?>