<?php 
// Template Name: Service Template 
/**
* @Theme Name	:	Rambopro
* @file         :	service-template.php
* @package      :	Busiprof
* @author       :	Hari Maliya
* @license      :	license.txt
* @filesource   :	wp-content/themes/rambopro/service-templatephp
*/ ?>
<?php get_template_part('banner','strip');
$image_uri= WEBRITI_TEMPLATE_DIR_URI. '/images' ;
$current_options = get_option('rambo_pro_theme_options');
?>
<div class="container">
	<!-- Our Main Service -->
	<div class="row">
		<?php 
		
		    $k=1;
			$default_arg =array('class' => "index_ser_img img-responsive" );
			$count_posts = wp_count_posts( 'rambopro_service')->publish;			
			$args = array( 'post_type' => 'rambopro_service','posts_per_page' =>$count_posts) ; 	
			$service = new WP_Query( $args );
			if( $service->have_posts() )
			{	while ( $service->have_posts() ) : $service->the_post();
			     $link=1;
				$service_icon_image =  get_post_meta( get_the_ID(),'service_icon_image', true ); 
				$meta_service_description =  get_post_meta( get_the_ID(),'meta_service_description', true ); 
				if(get_post_meta( get_the_ID(),'meta_service_link', true ))
				{ $meta_service_link = sanitize_text_field( get_post_meta( get_the_ID(),'meta_service_link', true )) ; }
				else
				{  $link=0; }
				     
			?>	<div class="span6 our_main_service_section">
					<div class="our_main_ser_icon">
						<span class="fa-stack fa-3x pull-left">
						<?php if(has_post_thumbnail()){ ?>
					<span class="icon_align_center">
                      <?php if($link==1) { ?>					
					<a href="<?php echo $meta_service_link;?>" target="<?php if(get_post_meta( get_the_ID(),'meta_service_target', true )) echo "_blank";  ?>" >
					<?php
					  the_post_thumbnail('',$default_arg);?>
				    </a> <?php  } else {  the_post_thumbnail('',$default_arg);  } ?>  </span>
					<?php } else { ?>
						       
						  <i class="fa fa-circle media-icon-bg fa-stack-2x"></i>
						     <?php if($link==1) { ?>	
						  <a href="<?php echo $meta_service_link;?>" target="<?php if(get_post_meta( get_the_ID(),'meta_service_target', true )) echo "_blank";  ?>" > <i class="fa <?php echo $service_icon_image; ?> media-icon-1x fa-inverse"></i></a>
						  <?php } else { ?>
						    <i class="fa <?php echo $service_icon_image; ?> media-icon-1x fa-inverse"></i>
					<?php } } ?>	  
						</span>
					  <div class="our_main_ser_content">
					   <?php if($link==1) { ?>
						<a href="<?php echo $meta_service_link;?>" target="<?php if(get_post_meta( get_the_ID(),'meta_service_target', true )) echo "_blank";  ?>" > <h4 class="our_main_ser_title"><?php echo the_title(); ?></h4></a>
						<?php } else { ?> 
						  <h4 class="our_main_ser_title"><?php echo the_title(); ?></h4>
						<?php } ?>
						<p class="our_main_ser_text"><?php echo $meta_service_description; ?> </p>
					  </div>
					</div>
				</div>
		<?php   if($k%2==0){	echo "<div class='clearfix'></div>"; } $k++;  endwhile;
			} else {  // defualt service
			for($i=1; $i<=6; $i++) {  ?>
			<div class="span6 our_main_service_section">
				<div class="our_main_ser_icon">
					<span class="fa-stack fa-3x pull-left">
					  <i class="fa fa-circle media-icon-bg fa-stack-2x"></i>
					  <i class="fa fa fa-mobile media-icon-1x fa-inverse"></i>
					</span>
				  <div class="our_main_ser_content">
					<h4 class="our_main_ser_title"><?php _e('Fully Responsive Design','rambo'); ?></h4>
					<p class="our_main_ser_text"><?php _e('Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum do lore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in anim id est laborum.','rambo'); ?> </p>
				  </div>
				</div>
			</div>
		<?php }
		} //end of all service  ?>
	</div>
	<!-- Testimonial page  --->
	<?php if($current_options['service_testimonial_enabled'] == 'on') { ?>
		<?php get_template_part('testimonials','page'); ?>
	<?php } ?>
	
	<?php if($current_options['service_client_strip_enabled'] == 'on') { ?>
		<?php get_template_part('client','strip'); ?>
	<?php } ?>
	<!---End Client-Strip-->
</div>
<?php get_footer();?>