<!-- Widgets Section -->
</div>
<div class="hero-widgets-section">
	<div class="container">
		<div class="row">
			<?php if ( is_active_sidebar( 'footer-widget-area' ) )
			{?>
			<div class="">
				<?php dynamic_sidebar( 'footer-widget-area' ); ?>
			</div>	
			<?php }else { ?> 
			<div class="span4 widget_space">
				<div class="widget_title"><h2><?php _e('About Us','rambo'); ?></h2></div>
				<p><?php _e('Rambo is an incredibly beautiful responsive Bootstrap
				Template for corporate and creative professionals. Rambo is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals.','rambo');?></p>
				<!--<p><a href="#" class="aboutus_readmore pull-Left">Read More</a></p> -->
			</div>
			
			<div class="span4 widget_space">
				<div class="widget_title"><h2><?php _e('Usefull Links','rambo'); ?></h2></div>				
				<div class="usefull_link">
					<a href="#"><i class="fa fa-angle-right icon-spacing"></i><?php _e('Hi This is Rambo Theme Fully Responsive.','rambo'); ?></a>
					<a href="#"><i class="fa fa-angle-right icon-spacing"></i><?php _e('Hi This is Twitter Bootstrap Responsive.','rambo'); ?></a>
					<a href="#"><i class="fa fa-angle-right icon-spacing"></i><?php _e('Hi This is Rambo Usefull Link.','rambo'); ?></a>
					<a href="#"><i class="fa fa-angle-right icon-spacing"></i><?php _e('Hi This is Rambo Theme Fully Responsive.','rambo'); ?></a>
					<a href="#"><i class="fa fa-angle-right icon-spacing"></i><?php _e('Hi This is Twitter Bootstrap Responsive.','rambo'); ?></a>
				</div>
			</div>			
			<div class="span4 widget_space">
				<div class="widget_title"><h2><?php _e('Contact Info','rambo'); ?></h2></div>
				<p class="widget_con_detail">
					<i class="fa fa-home icon-spacing"></i><?php _e('New York City, USA','rambo'); ?>
				</p>
				<p class="widget_con_detail">
					<i class="fa fa-phone icon-spacing"></i><?php _e(' 420-300-3850','rambo'); ?>
				</p>
				<p class="widget_con_detail">
					<i class="fa fa-envelope icon-spacing"></i><?php _e(' info@rambotheme.com','rambo'); ?>
				</p>
				<p class="widget_con_detail">
					<i class="fa fa-map-marker icon-spacing"></i> <?php _e('Find us in Google Map !','rambo'); ?>
				</p>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- /Widgets Section -->
<?php	$current_options = get_option('rambo_pro_theme_options'); ?>

<!-- Footer Section -->
<div class="footer-section">
	<div class="container">
		<div class="row">				
			<div class="span8">
				<p> <?php if($current_options['rambo_copy_rights_text']!='') {  echo $current_options['rambo_copy_rights_text']; } else { echo "2013 &copy; Rambo. ALL Rights Reserved"; } ?>
					<a href="<?php if($current_options['rambo_privacy_policy_link']!='') { echo esc_attr($current_options['rambo_privacy_policy_link']); } else { echo "#"; } ?>">
					<?php if($current_options['rambo_privacy_policy']!='') { echo esc_attr($current_options['rambo_privacy_policy']); } //else { echo _('Privacy Policy','rambo'); } ?></a> |
					<a href="<?php if($current_options['rambo_terms_of_service_link']!='') { echo esc_attr($current_options['rambo_terms_of_service_link']); } else { echo '#'; } ?>">
					<?php if($current_options['rambo_terms_of_service']!='') { echo esc_attr($current_options['rambo_terms_of_service']); } //else { echo _('Terms of Service','rambo'); } ?></a>
				</p> 				
			</div>
			<?php if($current_options['footer_social_media_enabled']=="on") { ?>
			<div class="span4">
				<div class="footer_social pull-right">
					<a href="<?php if($current_options['social_media_facebook_link']!='') { echo esc_attr($current_options['social_media_facebook_link']); } else { echo "#"; } ?>" class="facebook">&nbsp;</a>
					<a href="<?php if($current_options['social_media_twitter_link']!='') { echo esc_attr($current_options['social_media_twitter_link']); } else { echo "#"; } ?>" class="twitter">&nbsp;</a>
					<a href="<?php if($current_options['social_media_linkedin_link']!='') { echo esc_attr($current_options['social_media_linkedin_link']); } else { echo "#"; } ?>" class="linked-in">&nbsp;</a>
					<a href="<?php if($current_options['social_media_google_plus']!='') { echo esc_attr($current_options['social_media_google_plus']); } else { echo "#"; } ?>" class="google_plus">&nbsp;</a>
				</div>	
			</div>
			<?php } ?>
						
		</div>
	</div>
</div>
<!-- Footer Section 
<style>
html{margin-top:0px !important;}
</style>
<!------  Google Analytics code --------->

<?php
$rambopro_current_options=get_option('rambo_pro_theme_options');

if($rambopro_current_options['webrit_custom_css']!='') {  ?>
<style>
<?php echo $rambopro_current_options['webrit_custom_css']; ?>
</style>
<?php } 

if($rambopro_current_options['google_analytics']!='') {  ?>
<script type="text/javascript">
<?php echo $rambopro_current_options['google_analytics']; ?>
</script>
<?php } ?>	
<!------  Google Analytics code end ------->
<!--
<section id="style-switcher">
        <h2><?php _e('Style Switcher',"rambo");?> <a href="#"><i class="fa fa-arrow-right"></i></a></h2>
        <div>
			<h3><?php _e('Layout Style',"rambo");?></h3>
            <div class="layout-style">
              <select autocomplete="off" id="layout-style">
                 <option value="1"><?php _e('Wide',"rambo");?></option>
                 <option value="2"><?php _e('Boxed',"rambo");?></option>
              </select>
            </div>
            <h3><?php _e('Choose color Scheme',"rambo");?></h3>
            <ul id="colors" class="colors">
              <li><a class="onclick_default" href="#" onclick="changeCSS('default.css', 0);"></a></li>
              <li><a class="onclick_blue" href="#" onclick="changeCSS('blue.css', 0);"></a></li>
              <li><a class="onclick_green" href="#" onclick="changeCSS('green.css', 0);"></a></li>
              <li><a class="onclick_orange " href="#" onclick="changeCSS('orange.css', 0);"></a></li>
              <li><a class="onclick_pink" href="#" onclick="changeCSS('pink.css', 0);"></a></li>
            </ul>
			
        </div>
</section> -->
<!-- /Panel Switcher -->
<?php //require( WEBRITI_THEME_FUNCTIONS_PATH . '/scripts/colorscheme.php' );//color  JS for dyanmic color skin ?>
<?php wp_footer(); ?>
</div><!-- End of wrapper div -->
</body>
</html>