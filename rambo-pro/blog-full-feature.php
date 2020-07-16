<?php // Template Name: Blog full feature image ?>
<?php get_template_part('banner','strip');
$image_uri= WEBRITI_TEMPLATE_DIR_URI. '/images' ;
?>
<div class="container">
	<!-- Blog Section Content -->
	<div class="row-fluid">
		<!-- Blog Main -->
		<div class="span8 Blog_main">
			<?php 				
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array( 'post_type' => 'post','paged'=>$paged);		
				$post_type_data = new WP_Query( $args );
					while($post_type_data->have_posts()):
					$post_type_data->the_post();
					global $more;
					$more = 0; ?>
			<div class="blog_section2" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php $defalt_arg =array('class' => "blog_section2_img" )?>
					<?php if(has_post_thumbnail()):?>
					<a  href="<?php the_permalink(); ?>" class="pull-left blog_pull_img2">
					<?php the_post_thumbnail('blog2_section_img', $defalt_arg); ?>
					</a>
					<?php endif;?>
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<div class="blog_section2_comment">
						<a href="<?php the_permalink(); ?>"><i class="fa fa-calendar icon-spacing"></i><?php the_time('M j,Y');?></a>
						<a href="<?php the_permalink(); ?>"><i class="fa fa-comments icon-spacing"></i><?php comments_popup_link( __( 'Leave a comment', 'rambo' ) ); ?></a>
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><i class="fa fa-user icon-spacing"></i> <?php _e("By",'rambo');?>&nbsp;<?php the_author();?></a>
					</div>					
					<p><?php  the_content(''); ?> <?php  // the_content( __( 'Read More' , 'rambo' ) ); ?></p>								
					<p class="tags_alignment">
					<?php $posttags = get_the_tags(); 
						if ($posttags) { ?>
						<span class="blog_tags"><i class="fa fa-tags"></i><a href="<?php the_permalink(); ?>"><?php the_tags(__('Tags:','rambo'));?></a></span>
					<?php }  ?>
					<?php $ismore = strpos( $post->post_content, '<!--more-->');
						if ($ismore) {	?>
						<a class="blog_section2_readmore pull-right" href="<?php the_permalink(); ?>"><?php _e('Read more...','rambo'); ?></a>
					<?php } ?>
					</p>
			</div>
			<?php endwhile ?>
			<?php	$Webriti_pagination = new Webriti_pagination();
					$Webriti_pagination->Webriti_page($paged, $post_type_data);		?>
		</div>
		 <?php get_sidebar();?>
	</div>
</div>
<?php get_footer();?>