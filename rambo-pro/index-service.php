<?php
/**
* @Theme Name	:	Rambopro
* @file         :	index-service.php
* @package      :	Rambopro
* @author       :	Hari Maliya
* @license      :	license.txt
* @filesource   :	wp-content/themes/rambopro/index-service.php
*/

$current_options=get_option('rambo_pro_theme_options');
if($current_options['home_service_enabled']=="on")
{
?>
<div class="container">
	<div class="row-fluid featured_port_title">
	<?php if($current_options['service_section_title']!='') { ?>
		<h1><?php echo $current_options['service_section_title']; ?></h1>
	<?php } ?>
	<?php if($current_options['service_section_descritpion']!='') { ?>	
		<p><?php echo $current_options['service_section_descritpion']; ?></p>
	<?php } ?>
	</div>
	<!-- /Home Service Section -->
	<div class="row">	
		<?php
	
			$i=1;
			$default_arg =array('class' => "index_ser_img img-responsive" );
		    $total_services = $current_options['service_list'];
			$args = array( 'post_type' => 'rambopro_service','posts_per_page' =>$total_services) ; 	
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
				?>
				<div class="span3 home_service">
					<?php if(has_post_thumbnail()){ ?>
					<span class="icon_align_center">
                      <?php if($link==1) { ?>					
					<a href="<?php echo $meta_service_link;?>" target="<?php if(get_post_meta( get_the_ID(),'meta_service_target', true )) echo "_blank";  ?>" >
					<?php
					  the_post_thumbnail('',$default_arg);?>
				    </a> <?php  } else {  the_post_thumbnail('',$default_arg);  } ?>  </span>
					<?php } else { ?>
					<span class="fa-stack fa-4x icon_align_center">	
					    <?php if($link==1) { ?>
					<a href="<?php echo $meta_service_link;?>" target="<?php if(get_post_meta( get_the_ID(),'meta_service_target', true )) echo "_blank";  ?>" > <i class="fa <?php echo $service_icon_image; ?> home_media_icon_1x fa-inverse"></i></a>
					<?php } else { ?> <i class="fa <?php echo $service_icon_image; ?> home_media_icon_1x fa-inverse"></i>
					<?php } ?>
					</span>
					<?php } if($link==1) {?>
					<a href="<?php echo $meta_service_link;?>" target="<?php if(get_post_meta( get_the_ID(),'meta_service_target', true )) echo "_blank";  ?>" ><h2><?php echo the_title(); ?></h2></a>
					<?php } else {  echo '<H2>'; echo the_title() ; echo '</h2>' ;   }?> 
					<p><?php echo $meta_service_description; ?></p>
				</div>
				<?php if($i%4==0){	echo "<div class='clearfix'></div>"; } $i++; endwhile;
			} else
			{  for($j=1; $j<=4; $j++) {  ?>
			<div class="span3 home_service">
				<span class="fa-stack fa-4x icon_align_center">					
					<i class="fa fa-flag home_media_icon_1x fa-inverse"></i>
				</span>
				<h2><?php _e('Html5 & Css3',''); ?></h2>
				<p><?php _e('Mauris rhoncus pretium porttitor. Cras scelerisque commodo odio. Phasellus dolor enim, faucibus egestas scelerisque hendrerit, aliquet sed lorem.','rambo');?></p>
				<!-- <a class="home_service_btn" href="#"><i class="fa fa-angle-double-right"></i><?php _e('Read More','rambo');?></a> -->
			</div>
		<?php } 
		} ?>		
	</div>
	<!-- /Home Service Section -->	
</div>
<?php } ?>