<?php
$current_options=get_option('rambo_pro_theme_options');
if($current_options['home_latest_news_enabled']=="on")
{
?>
<div class="container">	
	<div class="row-fluid">
			<h3><?php if($current_options['blog_section_head']!='') { echo $current_options['blog_section_head'] ;} else { _e("Latest News",'rambo'); } ?></h3>
			<?php 	$args = array( 'post_type' => 'post','posts_per_page' =>3,'post__not_in'=>get_option("sticky_posts")); 	
	
		query_posts( $args );
		if(query_posts( $args ))
		{	while(have_posts()):the_post();
			{ ?>		
				<div class="span4 latest_news_section">		
				<?php $defalt_arg =array('class' => "latest_news_img");?>
					<?php if(has_post_thumbnail()){ ?>
						<a href="<?php the_permalink(); ?>" >
						<?php the_post_thumbnail('home-blog-thumb',$defalt_arg);?></a>
						<?php } ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h3>
					<p class="p_justify"><?php  echo get_the_excerpt(); ?></p>				
					<div class="latest_news_comment">
						<!--<a class="pull-left" href="#"><i class="fa fa-calendar icon-spacing"></i><?php //echo get_the_date('M j,Y');?></a> -->
						<a class="pull-left" href="<?php the_permalink(); ?>"><i class="fa fa-calendar icon-spacing"></i><?php the_time('M j,Y');?></a>
						<a class="pull-right" href="<?php comments_link(); ?>"><i class="fa fa-comment icon-spacing"></i><?php echo get_comments_number();?></a>
					</div>
				</div>
	<?php 	} endwhile;
		} ?>
	</div>
</div>	
<?php } ?>
<!-- /Latest News Section -->	