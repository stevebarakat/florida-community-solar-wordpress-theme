<?php
//Template Name:	portfolio-2-column 
/*	* @Theme Name	:	Rambopro
	* @file         :	portfolio-2-column.php
	* @package      :	Rambopro
	* @author       :	Hari Maliya
	* @license      :	license.txt
	* @filesource   :	wp-content/themes/prambo-pro/portfolio-2-column.php
*/
get_template_part('banner','strip');
 ?>

<div class="container">	
	<!-- Portfolio 2 Column -->
	<div class="row portfolio_section">
	<?php 	global $paged;
			$curpage = $paged ? $paged : 1;
			$args = array('post_type' => 'rambopro_project','posts_per_page' => 4,'paged' =>$paged );
			global $portfolio;
			$portfolio = new WP_Query( $args );			
			if( $portfolio->have_posts() )
			{	
				while ( $portfolio->have_posts() ) : $portfolio->the_post();	
				if(has_post_thumbnail()):
				$post_thumbnail_id = get_post_thumbnail_id();
				$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id );
				if(get_post_meta( get_the_ID(),'portfolio_project_link', true )) 
				{ $portfolio_project_link = get_post_meta( get_the_ID(),'portfolio_project_link', true ); }
				else 
				{ $portfolio_project_link = get_post_permalink(); } 
			?>
				<div class="span6 portfolio_column">		
					<div  class="portfolio_showcase">
						<div class="portfolio_showcase_media">				
							<?php the_post_thumbnail('portfolio-2c-thumb'); ?>							
							<div class="portfolio_showcase_overlay">
								<div class="portfolio_showcase_overlay_inner">
									<h2><a href="<?php echo $portfolio_project_link; ?>" <?php  if(get_post_meta( get_the_ID(),'portfolio_project_target', true )) { echo "target='_blank'"; }  ?> title="Rambo"><?php the_title(); ?></a></h2>
									<div class="portfolio_showcase_icons">
										<a href="<?php echo $portfolio_project_link; ?>" <?php  if(get_post_meta( get_the_ID(),'portfolio_project_target', true )) { echo "target='_blank'"; }  ?> title="Rambo"><i class="fa fa-link"></i></a>
										<a class="hover_thumb" rel="lightbox[group]" href="<?php echo $post_thumbnail_url; ?>"><i class="fa fa-eye"></i></a>
									</div>
								</div>
							</div>				
							
						</div>
					</div>
					<div class="portfolio_caption">
						<h3><a href="<?php echo $portfolio_project_link; ?>" <?php  if(get_post_meta( get_the_ID(),'portfolio_project_target', true )) { echo "target='_blank'"; }  ?>><?php the_title(); ?></a></h3>
						<?php $portfolio_client_project_title =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_client_project_title', true )); ?>
						<small><?php if($portfolio_client_project_title)
							{ echo $portfolio_client_project_title; }else {  echo "Photography";} ?></small>	
					</div>
				</div>
			<?php endif;	endwhile;  ?>		
		<?php } else { 
			for($i=1; $i<=4; $i++)
			{ ?>
			<div class="span6 portfolio_column">
				<div  class="portfolio_showcase">
					<div class="portfolio_showcase_media">
						<img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/default/port/port_two<?php echo $i; ?>.png" alt="Rambo" class="portfolio_showcase_img">
						<div class="portfolio_showcase_overlay">
							<div class="portfolio_showcase_overlay_inner">
								<h2><a href="#" title="Rambo"><?php _e('Responsive Portfolio by Scientech','rambo'); ?></a></h2>
								<div class="portfolio_showcase_icons">
									<a href="#" title="Rambo"><i class="fa fa-link"></i></a>
									<a class="hover_thumb" rel="lightbox[group]" href="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/default/port/port_two<?php echo $i; ?>.png"><i class="fa fa-eye"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="portfolio_caption">
					<h3><a href="#"><?php _e('Responsive Portfolio by Scientech','rambo'); ?></a></h3>
					<small><?php _e('Photography','rambo') ?></small>	
				</div>
			</div>
		<?php }
		} ?>
	</div>
	<?php $Webriti_pagination = new Webriti_pagination();
		  $Webriti_pagination->Webriti_page($curpage, $portfolio);
	?>	
	<!-- /Portfolio 2 Column -->		
</div>
<!-- /Container -->	
<?php get_footer(); ?>