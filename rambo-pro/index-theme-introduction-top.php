<?php
/**
* @Theme Name	:	Rambopro
* @file         :	index-theme-introdunction-top.php
* @package      :	Busiprof
* @author       :	Hari Maliya
* @license      :	license.txt
* @filesource   :	wp-content/themes/rambopro/index-theme-introdunction-top.php
*/


$current_options=get_option('rambo_pro_theme_options');
?>
<!-- Purchase Now Section -->
<div class="purchase_main_content">
	<div class="container">
		<div class="row-fluid purchase_now_content">
		<?php if($current_options['site_intro_descritpion']!='') { ?>
			<div class="span8">		
				<h1><?php echo $current_options['site_intro_descritpion']; ?></h1>
			</div>
		<?php } ?>
		<?php if($current_options['site_intro_button_text']!='') { ?>
			<div class="span4">
				<a class="purchase_now_btn" href="<?php if($current_options['site_intro_button_link']!='') { echo $current_options['site_intro_button_link']; } else { echo "#"; } ?>" <?php if($current_options['intro_button_target']=="on") { echo  "target='_blank'"; } ?> ><?php echo $current_options['site_intro_button_text']; ?></a>
			</div>
		<?php } ?>
		</div>
	</div>
</div>
<!-- /Purchase Now Section -->