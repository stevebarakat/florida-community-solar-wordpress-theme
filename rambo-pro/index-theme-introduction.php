<?php
/**
* @Theme Name	:	Rambopro
* @file         :	index-theme-introdunction.php
* @package      :	Busiprof
* @author       :	Hari Maliya
* @license      :	license.txt
* @filesource   :	wp-content/themes/rambopro/index-theme-introdunction.php
*/
?>

<!-- Callout Section -->
<?php 
$current_options=get_option('rambo_pro_theme_options');
if($current_options['site_info_enabled']=="on")
{ ?>
<div class="callout_main_content">
	<div class="container">
		<div class="row-fluid callout_now_content">
			<div class="span8">		
				<h1><?php if($current_options['site_info_title']!='') { echo $current_options['site_info_title']; } else { echo _e('Rambo is a clean and fully responsive Template.','rambo'); } ?></h1>
				<p><?php if($current_options['site_info_descritpion']!='') { echo $current_options['site_info_descritpion']; } else { echo _e('At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos excepturi  vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat.','rambo'); } ?></p>
			</div>
			<div class="span3 offset1">
				<a class="callout_now_btn" href="<?php if($current_options['site_info_button_link']!='') { echo $current_options['site_info_button_link']; } else { echo "#"; } ?>"><?php if($current_options['site_info_button_text']!='') { echo $current_options['site_info_button_text']; } else { echo _e('Purchase Now','rambo'); } ?></a>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<!-- /Callout Section -->	