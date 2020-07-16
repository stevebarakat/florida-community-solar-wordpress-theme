<?php
/**** @Theme Name	:	Rambopro
	* @file         :	testimonials.php
	* @package      :	Rambopro
	* @author       :	Hari Maliya
	* @license      :	license.txt
	* @filesource   :	wp-content/themes/prambo-pro/testimonials.php
*/
?>
<!-- Testimonial & Features -->
	<script type="text/javascript">
			jQuery(function() {			
				jQuery("#foo2").carouFredSel({
					circular: true,
			        responsive : true,
					width : "100%",
					prev : "#testimonial_prev",
					next : "#testimonial_next",
					direction : "left",
					scroll : { items : 1, duration : 1000, timeoutDuration : 1000},
					items	: {	visible:1 }
				});
			});
	</script>
	<div class="row">
		<div class="span12 testimonial_section">
			<div class="service_head_title"><h3><?php _e("Testimonial","rambo");?></h3></div>
			<div id="foo2">
			<?php
				$count_posts = wp_count_posts( 'rambopro_testimonial')->publish;			
				$args = array( 'post_type' => 'rambopro_testimonial','posts_per_page' =>$count_posts) ; 	
				$rambopro_testimonial = new WP_Query( $args );
				if( $rambopro_testimonial->have_posts() )
				{	while ( $rambopro_testimonial->have_posts() ) : $rambopro_testimonial->the_post();
						$testimonial_designation =  get_post_meta( get_the_ID(),'testimonial_designation', true ); 
				?>
				<div class="testimonial_area">
					<blockquote class="style1"><span><?php the_content(); ?></span></blockquote>
					<div class="testimonial_author">
					<?php if(has_post_thumbnail()):?>
					<?php the_post_thumbnail('rambo-testimonial'); ?>
					<?php endif;?>
					<span><?php the_title(); ?> <br /><small><?php echo $testimonial_designation; ?></small></span>
					</div>
				</div>
				<?php endwhile;
				} else
				{  for($i=1; $i<=3; $i++) {  ?>				
					<div class="testimonial_area">
						<blockquote class="style1"><span><?php _e('Appreciate your help and quick response. The overall work on the theme is impressive. Thanks for excellent support, I will continue tobuy from you as new site needs arise. Great products service Thanks for excellent support !','rambo'); ?></span></blockquote>
						<div class="testimonial_author">
						<img src="<?php echo WEBRITI_TEMPLATE_DIR_URI ?>/images/default/testi/testimonial<?php echo $i; ?>.png"><span><?php _e('Lisa Roy','rambo'); ?> <br /><small><?php _e('PHP Developer','rambo'); ?></small></span>
						</div>
					</div>
				<?php }
				} ?>
			</div>
		</div>
	</div>
<!-- /Testimonial & Features -->