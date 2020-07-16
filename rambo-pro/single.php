<?php get_template_part('banner','strip');?>
<!-- Container -->
<div class="container">
	<!-- Blog Section Content -->
	<div class="row-fluid">
		<!-- Blog Single Page -->
		<div class="<?php if( is_active_sidebar('sidebar-primary')) echo "span8"; else echo "span12";?> Blog_main">
			<div class="blog_single_post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php  the_post(); ?>
			<?php $defalt_arg =array('class' => "blog_section2_img" )?>
			<?php if(has_post_thumbnail()):?>
			<a  href="<?php the_permalink(); ?>" class="pull-left blog_pull_img2">
				<?php the_post_thumbnail('blog2_section_img', $defalt_arg); ?>
			</a>
			<?php endif;?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="blog_section2_comment">
			<a href="<?php the_permalink(); ?>"><i class="fa fa-calendar icon-spacing"></i><?php the_time('M j,Y');?></a>
			<a href="<?php the_permalink(); ?>"><i class="fa fa-comments icon-spacing"></i><?php comments_popup_link( __( 'Leave a comment', 'rambo' ) ); ?></a>
			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><i class="fa fa-user icon-spacing"></i> <?php _e("By",'rambo');?>&nbsp;<?php the_author();?></a>
			</div>
			<p><?php  the_content( __( 'Read More' , 'rambo' ) ); ?></p>
			</div>
			<?php comments_template( '', true );?>
		</div>
		<?php get_sidebar();?>
	</div>
</div>
<?php get_footer();?>