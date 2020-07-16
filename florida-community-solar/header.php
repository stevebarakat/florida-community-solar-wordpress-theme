<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head> 
	<meta http-equiv="X-UA-Compatible" content="IE=9">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php 	$rambopro_current_options=get_option('rambo_pro_theme_options'); ?>	
	<?php if($rambopro_current_options['rambopro_stylesheet']!='')
		{ $rambo_css=$rambopro_current_options['rambopro_stylesheet']; } else { $rambo_css="default.css"; } ?>
	<link rel="stylesheet" href="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/css/<?php echo $rambo_css; ?>" type="text/css" media="screen" />
	<?php 		
		if($rambopro_current_options['upload_image_favicon']!='')
		{ ?><link rel="shortcut icon" href="<?php  echo $rambopro_current_options['upload_image_favicon']; ?>" /> 
			<?php } else {?>	
			<link   rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/fevicon.icon">
		<?php } ?>	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div id="wrapper" <?php if ($rambopro_current_options['layout_selector']!='wide'){ echo "class=boxed"; } ?>>
<div class="container">		
		<div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                  <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
				  <!-------custom logo and custom test and defualt logo text-------->
                  <a href="<?php echo home_url( '/' ); ?>" class="brand">
				  <?php if($rambopro_current_options['rambo_texttitle'] =="on") { ?>
				  <?php $blogname = get_bloginfo( );
						$blogname1 = substr($blogname,0,1);
						$blogname2 = substr($blogname,1);
				  ?>
				  <span class="logo-title"><?php echo ucfirst($blogname1); ?><small><?php echo $blogname2; ?></small></span>
				  <?php } else if($rambopro_current_options['upload_image_logo']!='')
						{ ?><img src="<?php echo $rambopro_current_options['upload_image_logo']; ?>" style="height:<?php if($rambopro_current_options['height']!='') { echo $rambopro_current_options['height']; }  else { "50"; } ?>px; width:<?php if($rambopro_current_options['width']!='') { echo $rambopro_current_options['width']; }  else { "150"; } ?>px;" />


						
						<div class="slogan"><?php bloginfo('description'); ?></div>



						<?php
						} else { ?>
					<span class="logo-title"><?php _e('R','rambo'); ?><small><?php _e('ambo','rambo'); ?></small></span>
					<?php } ?>
				  </a>


				  <!------ end of logo -------->
                  <div class="nav-collapse collapse navbar-responsive-collapse ">
				  <?php	wp_nav_menu( array(  
									'theme_location' => 'primary',
									'container'  => 'nav-collapse collapse navbar-inverse-collapse',
									'menu_class' => 'nav',
									'fallback_cb' => 'webriti_fallback_page_menu',
									'walker' => new webriti_nav_walker()
									)
								);	?>                    
                  </div><!-- /.nav-collapse -->
                </div>
            </div><!-- /navbar-inner -->
        </div>
</div>
