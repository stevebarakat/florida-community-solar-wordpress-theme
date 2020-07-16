<?php
/**
* @Theme Name	:	Rambopro
* @file         :	index-project.php
* @package      :	Busiprof
* @author       :	Hari Maliya
* @license      :	license.txt
* @filesource   :	wp-content/themes/rambopro/index-project.php
*/

$current_options=get_option('rambo_pro_theme_options');
if($current_options['project_protfolio_enabled']=="on")
{
?>
<!-- Recent Work Section -->
<div class="portfolio_main_content">	
	<div class="container">	
		<div class="row-fluid featured_port_title">
			<h1><?php if($current_options['project_protfolio_tag_line']!='') { echo $current_options['project_protfolio_tag_line']; } else { echo _e('Featured Portfolio Projects','rambo'); } ?></h1>
			<p> <?php if($current_options['project_protfolio_description_tag']!='') { echo $current_options['project_protfolio_description_tag']; } else { echo _e('Maecenas sit amet tincidunt elit. Pellentesque habitant morbi tristique senectus et netus et Nulla facilisi.','rambo'); } ?></p>
		</div>	
		<div class="row-fluid">
			<?php 
			$args = array( 'post_type' => 'rambopro_project','posts_per_page' => 4,) ; 	
			$rambopro_project = new WP_Query( $args );
			if( $rambopro_project->have_posts() )
			{	
			while ( $rambopro_project->have_posts() ) : $rambopro_project->the_post();
			?>
			<div class="span3 featured_port_projects">
				<div class="thumbnail">
						<?php if(has_post_thumbnail()):?>
						<?php the_post_thumbnail('portfolio-4c-thumb'); ?>
						<?php endif;?>
						<?php if(get_post_meta( get_the_ID(),'portfolio_project_link', true )) 
							{ $portfolio_project_link=get_post_meta( get_the_ID(),'portfolio_project_link', true ); }
							else { $portfolio_project_link = get_post_permalink(); } 
						?>
					  <div class="featured_service_content">
						<h3><a href="<?php echo $portfolio_project_link; ?>" <?php  if(get_post_meta( get_the_ID(),'portfolio_project_target', true )) { echo "target='_blank'"; }  ?> ><?php echo the_title(); ?></a></h3>
						<p><?php echo substr(get_the_excerpt(), 0,100)." ..."; ?></p>
						<p><a class="featured_port_projects_btn pull-right" href="<?php echo $portfolio_project_link; ?>" <?php  if(get_post_meta( get_the_ID(),'portfolio_project_target', true )) { echo "target='_blank'"; }  ?> ><?php _e('Read More','rambopro')?></a></p>
					  </div>
				</div>
			</div>			
			<?php endwhile;
			} else
			{  for($i=1; $i<=4; $i++) {  ?>
			<div class="span3 featured_port_projects">
				<div class="thumbnail">
					  <img src="<?php echo get_template_directory_uri () ?>/images/default/projects/project<?php echo $i; ?>.png">
					  <div class="featured_service_content">
						<h3><a href="#"><?php _e('One More Works','rambo'); ?></a></h3>
						<p><?php _e('Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.','rambo');?></p>
						<p><a class="featured_port_projects_btn pull-right" href="#"><?php _e('Read More','rambo'); ?></a></p>
					  </div>
				</div>
			</div>
			<?php }  }?>
		</div>
	</div>	
</div>
<?php } ?>	
<!-- /Recent Work Section -->	