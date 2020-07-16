<?php $current_options=get_option('rambo_pro_theme_options'); 
if($current_options['enable_custom_typography']=="on")
{
?>
<style>
 
 .blog_section,.blog_section p,.blog_single_post,.blog_single_post p,.blog_section2,.blog_section2 p,.aboutus_testimonial p,.team_bg,.team_bg p,
 .sidebar_widget a,.sidebar_widget div.textwidget,.sidebar_widget p,.footer_widget .textwidget,.footer_widget a,.footer_widget p,
 .featured_port_projects p,.home_service p,.latest_news_section p,.portfolio-detail-description p,.our_main_ser_text,.blog_section p
 {
	font-size:<?php echo $current_options['general_typography_fontsize'].'px'; ?> !important;
	font-family:<?php echo $current_options['general_typography_fontfamily']; ?> !important;
	font-style:<?php echo $current_options['general_typography_fontstyle']; ?> ;
	line-height:<?php echo ($current_options['general_typography_fontsize']+5).'px'; ?> !important;
	
}

.navbar .nav > li > a{
	font-size:<?php echo $current_options['menu_title_fontsize'].'px'; ?>;
	font-family:<?php echo $current_options['menu_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['menu_title_fontstyle']; ?>;
}

.page_head{
	font-size:<?php echo $current_options['page_title_fontsize'].'px'; ?>;
	font-family:<?php echo $current_options['page_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['page_title_fontstyle']; ?>;
}
.blog_single_post h2, .blog_section2 h2, .blog_section h2 {
	font-size:<?php echo $current_options['post_title_fontsize'].'px'; ?>;
	font-family:<?php echo $current_options['post_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['post_title_fontstyle']; ?>;
}

.home_service h2 {
	font-size:<?php echo $current_options['service_title_fontsize'].'px'; ?>;
	font-family:<?php echo $current_options['service_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['service_title_fontstyle']; ?>;
}
.our_main_ser_title{ 
	font-size:<?php echo $current_options['service_title_fontsize'].'px'; ?>;
	font-family:<?php echo $current_options['service_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['service_title_fontstyle']; ?>;
}

.featured_port_projects h3 { 
	font-size:<?php echo $current_options['portfolio_title_fontsize'].'px'; ?>;
	font-family:<?php echo $current_options['portfolio_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['portfolio_title_fontstyle']; ?>;
}
.porfolio_detail_title h3 { 
	font-size:<?php echo $current_options['portfolio_title_fontsize'].'px'; ?>;
	font-family:<?php echo $current_options['portfolio_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['portfolio_title_fontstyle']; ?>;
}
.portfolio_caption h3 {
	font-size:<?php echo $current_options['portfolio_title_fontsize'].'px'; ?>;
	font-family:<?php echo $current_options['portfolio_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['portfolio_title_fontstyle']; ?>;
}
.widget_title h2 {
	font-size:<?php echo $current_options['widget_title_fontsize'].'px'; ?>;
	font-family:<?php echo $current_options['widget_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['widget_title_fontstyle']; ?>;
}
.sidebar_widget_title h2 {
	font-size:<?php echo $current_options['widget_title_fontsize'].'px'; ?>;
	font-family:<?php echo $current_options['widget_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['widget_title_fontstyle']; ?>;
}
.purchase_now_content h1 {
	font-size:<?php echo $current_options['calloutarea_title_fontsize'].'px'; ?>;
	font-family:<?php echo $current_options['calloutarea_title_fontfamily']; ?>;
	font-style:<?php echo $current_options['calloutarea_title_fontstyle']; ?>;
}
.purchase_now_content p{
	font-size:<?php echo $current_options['calloutarea_description_fontsize'].'px'; ?>;
	font-family:<?php echo $current_options['calloutarea_description_fontfamily']; ?>;
	font-style:<?php echo $current_options['calloutarea_description_fontstyle']; ?>;
}
.purchase_now_btn {	
	font-size:<?php echo $current_options['calloutarea_purches_fontsize'].'px'; ?>;
	font-family:<?php echo $current_options['calloutarea_purches_fontfamily']; ?>;
	font-style:<?php echo $current_options['calloutarea_purches_fontstyle']; ?>;
}

</style>
<?php } ?>