<?php
/**** @Theme Name	:	Rambopro
	* @file         :	single-rambopro_project.php
	* @package      :	Rambopro
	* @author       :	Hari Maliya
	* @license      :	license.txt
	* @filesource   :	wp-content/themes/prambo-pro/single-rambopro_project.php
*/
?>
<?php get_template_part('banner','strip');?>
<!-- Container -->
<div class="container">	
	<!-- Portfolio Deatil -->	
	<div class="porfolio_detail_title"><h3><?php the_title(); ?></h3></div>
	<div class="row portfolio_section">	
		<div class="span8 portfolio_column">
			<div  class="portfolio_showcase">
				<div class="portfolio_showcase_media">
					<?php if(has_post_thumbnail()):?>
					<?php the_post_thumbnail('portfolio-1c-thumb'); ?>
					<?php 	$post_thumbnail_id = get_post_thumbnail_id();
							$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );	 ?>										
					<div class="portfolio_showcase_overlay">
						<div class="portfolio_showcase_overlay_inner">
							<div class="portfolio_showcase_icons">
								<a class="hover_thumb" rel="lightbox[group]" href="<?php echo $post_thumbnail_url; ?>"><i class="fa fa-eye"></i></a>
							</div>
						</div>
					</div>
					<?php endif;?>	
				</div>
			</div>
		</div>		
		
		<div class="span4 portfolio_detail_sidebar">		
		<ul class="portfolio-detail-pagi">
			<?php	$prev_post = get_previous_post();
					if (!empty( $prev_post )): ?>
					<li><a rel="next" href="<?php echo get_permalink( $prev_post->ID ); ?>"><span class="fa fa-arrow-left"></span></a></li>
			<?php endif; ?>				
			
			<?php	$next_post = get_next_post();
					if (!empty( $next_post )): ?>
					<li><a rel="prev" href="<?php echo get_permalink( $next_post->ID ); ?>"><span class="fa fa-arrow-right"></span></a></li>
			<?php endif; ?>			
		</ul>
		<?php 
			$portfolio_client_project_title =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_client_project_title', true ));
			$portfolio_project_skills =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_project_skills', true ));
			$portfolio_project_tags =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_project_tags', true ));
			$portfolio_project_visit_site =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_project_visit_site', true ));
		?>
			
		<div class="portfolio-detail-info">
		<?php if($portfolio_client_project_title) {?>
			<p><?php _e('Client:','rambo'); ?> <small><?php echo $portfolio_client_project_title; ?></small></p>
		<?php } ?>
		
		<?php if($portfolio_project_skills) {?>
			<p><?php _e('Skills:','rambo'); ?> <small><?php echo $portfolio_project_skills; ?></small></p>
		<?php } ?>
		
		<?php if($portfolio_project_tags) {?>
			<p><?php _e('Tags:','rambo'); ?> <small><?php echo $portfolio_project_tags; ?></small></p>
		<?php } ?>
		
		<?php if($portfolio_project_visit_site) {?>
			<p><?php _e('Visit Website:','rambo'); ?> <small><?php echo $portfolio_project_visit_site; ?></small></p>
		<?php } ?>
		</div>	
		
		<div class="portfolio-detail-description">
			<?php the_post();?>
			<p><?php the_content(); ?></p>
		</div>	
		</div>
	</div>
	<!-- /Portfolio Detail -->		
</div>
<!-- /Container -->
<?php get_footer();?>