<?php
//Template Name:	About Us 
/*	* @Theme Name	:	Rambopro
	* @file         :	about-us.php
	* @package      :	Rambopro
	* @author       :	Hari Maliya
	* @license      :	license.txt
	* @filesource   :	wp-content/themes/prambo-pro/about-us.php
*/

	get_template_part('banner','strip');
	$current_options=get_option('rambo_pro_theme_options');
	the_post();
?>	
<!-- Container -->
<div class="container ">
	<?php if($current_options['aboutus_content_with_image'] == 'on') { ?>
	<div class="row-fluid about_section">		
	   <div class="span12"> 
		<div class="span6" style="margin-right:20px;"> 
		 <?php $defalt_arg =array('class' => "about_img" )?>
			   <?php if(has_post_thumbnail()):?>
					<?php the_post_thumbnail('media-object', $defalt_arg); ?>
					<?php else :?>
					<img class="media-object about_img" alt="Scientech" src="<?php echo get_template_directory_uri() ;?>/images/default/abt.png">
				<?php endif;?>
		</div>	
		
			<div class="head_title">
				<h3><?php if(isset($current_options['about_page_title'])) { echo $current_options['about_page_title']; } else { _e("Who we are",'rambo'); } ?></h3>
			</div>
			<p><?php the_content (); ?></p>			
			<?php if($current_options['aboutus_social_icon_enabled'] == 'on'){ ?>
				<div class="about_social">
					<?php $current_options = get_option('rambo_pro_theme_options'); ?>
					<a href="<?php if($current_options['social_media_facebook_link']!='') { echo esc_attr($current_options['social_media_facebook_link']); } else { echo "#"; } ?>" class="facebook">&nbsp;</a>
					<a href="<?php if($current_options['social_media_twitter_link']!='') { echo esc_attr($current_options['social_media_twitter_link']); } else { echo "#"; } ?>" class="twitter">&nbsp;</a>
					<a href="<?php if($current_options['social_media_linkedin_link']!='') { echo esc_attr($current_options['social_media_linkedin_link']); } else { echo "#"; } ?>" class="linked-in">&nbsp;</a>
					<a href="<?php if($current_options['social_media_google_plus']!='') { echo esc_attr($current_options['social_media_google_plus']); } else { echo "#"; } ?>" class="google_plus">&nbsp;</a>
				</div>	
			<?php } ?>
		</div>		
	</div>
	<?php } ?>
	
	<?php if($current_options['aboutus_our_team_enabled'] == 'on') { ?>
		<div class="team_head_title">
			<h3><?php if(isset($current_options['our_team_title'])) { echo $current_options['our_team_title']; }else { echo __("Meet the Team",'rambo'); } ?></h3>
		</div>	
		<div class="row team_section">
		<?php  $count_posts = wp_count_posts( 'rambopro_team')->publish;
			$arg = array( 'post_type' => 'rambopro_team','posts_per_page' =>$count_posts);
			$team = new WP_Query( $arg ); 
			if($team->have_posts())
			{	while ( $team->have_posts() ) : $team->the_post();	?>
			
				<div class="span3">
					<div class="thumbnail team_bg">
					     <?php $link=get_post_meta( get_the_ID(), 'team_link', true );?>
						<?php if(has_post_thumbnail()):?>
						<a href="<?php echo $link;?>" target="<?php if(get_post_meta( get_the_ID(),'meta_team_target', true )) echo "_blank";  ?>"> <?php the_post_thumbnail('team-thumb'); ?> </a>
						<?php endif;?>
						<div class="caption">
						   
							<?php $designation=get_post_meta( get_the_ID(), 'team_designation', true );?>
							<h4 class="text-center"><a href="<?php echo $link;?>" target="<?php if(get_post_meta( get_the_ID(),'meta_team_target', true )) echo "_blank";  ?>"> <?php the_title();?></a>
								<small><?php if(isset( $designation ) ) { echo $designation;   }  else  { echo "Please Enter Designation" ; } ?></small>
							</h4>
							<?php $description=get_post_meta( get_the_ID(), 'team_role', true );?>
							<p class="text-center">
								<?php if(isset($description)){ echo  $description; } else { echo " Please Enter Description " ; } ?>
							</p>
						</div>
					</div>
				</div>
		<?php endwhile; 
			} else { 		
			for($dp=1; $dp<=6; $dp++) { ?>
				<div class="span3">
					<div class="thumbnail team_bg">
						<img alt="Rambo" src="<?php echo WEBRITI_TEMPLATE_DIR_URI ?>/images/default/team_pic.png">
						<div class="caption">
						<h4 class="text-center"><a><?php _e("Anna Doe",'rambo');?></a><small><?php _e("( Animator )",'rambo');?></small></h4>
						<p class="text-center"><?php _e("Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.",'rambo');?></p>
						</div>
					</div>
				</div>
				<?php } // end of about defualt team 
			} ?>
		</div>
	<?php } ?>
	<!-- Testimonial -->
	<?php if($current_options['aboutus_testimonial_enabled'] == 'on') { ?>
		<div class="team_head_title"><h3><?php if($current_options['testimonials_title']!='') { echo $current_options['testimonials_title']; } else { echo _('Testimonials','rambo'); }?></h3></div>
		<div class="row main_space">
		<?php	$count_posts = wp_count_posts( 'rambopro_testimonial')->publish;			
				$args = array( 'post_type' => 'rambopro_testimonial','posts_per_page' =>$count_posts) ; 	
				$rambopro_testimonial = new WP_Query( $args );
				if( $rambopro_testimonial->have_posts() )
				{	while ( $rambopro_testimonial->have_posts() ) : $rambopro_testimonial->the_post();
					$testimonial_designation =  get_post_meta( get_the_ID(),'testimonial_designation', true ); 	?>
					<div class="span4 aboutus_testimonial">		
						<div class="media">
							<?php $defalt_arg =array('class' => "media-object aboutus_testimonial_img" )?>
							<?php if(has_post_thumbnail()):?>						
							<?php the_post_thumbnail('rambo-testimonial', $defalt_arg); ?>
							<?php endif;?>						
						  <div class="media-body">                    
							<p><?php the_content(); ?></p>
							<h4><?php the_title(); ?><br /><small><?php echo $testimonial_designation; ?></small></h4>
						  </div>
						</div>
					</div>
			<?php endwhile;
				} else	{
					for($i=1; $i<=3; $i++) { ?>
					<div class="span4 aboutus_testimonial">		
						<div class="media">
							<img class="media-object aboutus_testimonial_img" alt="Rambo" src="<?php echo WEBRITI_TEMPLATE_DIR_URI ?>/images/default/testi/aboutus_testimonial_img<?php echo $i; ?>.png">
						  <div class="media-body">                    
							<p><?php _e('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.','rambo'); ?></p>
							<h4><?php _e('Alexia Barlier','rambo'); ?><br /><small><?php _e('HR Executive','rambo') ?></small></h4>
						  </div>
						</div>
					</div>
					<?php }
				}	?>			
		</div>
	<?php } ?>	
	
	<!---- client strip enable ------>
	<?php if($current_options['aboutus_client_strip_enabled'] == 'on')
		{ get_template_part('client','strip');  } ?>	
	
</div>
<!-- /Container -->
<?php get_footer();?>
