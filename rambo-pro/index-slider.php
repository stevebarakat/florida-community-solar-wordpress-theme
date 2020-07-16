<?php 
/**
* @Theme Name	:	Rambopro
* @file         :	index-slider.php
* @package      :	Busiprof
* @author       :	Hari Maliya
* @license      :	license.txt
* @filesource   :	wp-content/themes/rambopro/index-slider.php
*/
$current_options=get_option('rambo_pro_theme_options');
if($current_options['home_slider_enabled']=="on")
{
$animation= $current_options['animation'];
$animationSpeed=$current_options['animationSpeed'];
$direction=$current_options['slide_direction'];
$slideshowSpeed=$current_options['slideshowSpeed'];
?>
<script type="text/javascript">
		jQuery(window).load(function(){
		  jQuery('.flexslider').flexslider({	
			animation: "<?php echo $animation; ?>",
			animationSpeed: <?php echo $animationSpeed; ?>,
			direction: "<?php echo $direction; ?>",
			slideshowSpeed: <?php echo $slideshowSpeed; ?>,
			pauseOnHover: true, 
			slideshow: true,
			start: function(slider){
			  jQuery('body').removeClass('loading');
			}			
		  });
		});
</script>
<div class="main_slider">	
	<div class="flexslider">
        <div class="flex-viewport" style="overflow: hidden; position: relative;">
			<ul class="slides">
			<?php 
				$count_posts = wp_count_posts( 'rambopro_slider')->publish;
				$args = array( 'post_type' => 'rambopro_slider','posts_per_page' =>$count_posts); 	
				$slider = new WP_Query( $args ); 
				if( $slider->have_posts() )
				{ while ( $slider->have_posts() ) : $slider->the_post();?>				
					<li>
						<?php if(has_post_thumbnail()):?>
						<?php the_post_thumbnail('home_slide'); ?>
						<?php endif;?>	
						<!--<img class="main_slide_img" src="<?php echo get_template_directory_uri () ?>/images/slide/slide1.jpg"> -->
						<div class="slider_con">
							<h2><?php echo the_title(); ?></h2>
							<?php 
								$sliderimg_description = sanitize_text_field( get_post_meta( get_the_ID(),'image_description', true )); 
								$readmore_button = sanitize_text_field( get_post_meta( get_the_ID(),'readmore_button', true )) ;
								if(get_post_meta( get_the_ID(),'readmore_link', true ))
								{ $readmorelink = sanitize_text_field( get_post_meta( get_the_ID(),'readmore_link', true )) ; }
								else
								{ $readmorelink = get_post_permalink(); }
							?>
							<h5 class="slide-title"><span><?php echo $sliderimg_description; ?></span></h5>
							<a class="flex_btn" href="<?php echo $readmorelink; ?>" target="<?php if(get_post_meta( get_the_ID(),'meta_slider_target', true )) echo "_blank";  ?>"><?php echo $readmore_button; ?></a>					
						</div>
					</li>
			<?php endwhile;  
				}  else 
				{  
					for($i=1; $i<=8; $i++) { 	?>
					<li><img class="main_slide_img" src="<?php echo get_template_directory_uri () ?>/images/default/slide/slide<?php echo$i; ?>.png">
						<div class="slider_con">
							<h2><?php _e('Fully Responsive Theme !','rambo'); ?></h2>
							<h5 class="slide-title"><span><?php _e('Furniot makes content easy to view on any device with any resolution. You may check this with resizing. Fully Responsive Theme Amazing Design.','rambo'); ?></span></h5>
							<a class="flex_btn" href="#"><?php _e('Buy Now','rambo');?>!</a>							
						</div>
					</li><?php } 
				} ?>
			</ul>
		</div>		
	</div>	
</div>
<?php } ?>
<!-- /Slider -->