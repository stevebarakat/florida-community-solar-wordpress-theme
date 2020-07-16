<?php
	// code to change length of blog excerpt
	function get_the_other_excerpt(){
	global $post;
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$original_len = strlen($excerpt);

	$excerpt = substr($excerpt, 0, 250);

	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));

	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));

	$len=strlen($excerpt);

	 
	 if($original_len>250)
	   $excerpt = $excerpt.'<a class="more-link" id="read_more" href="'. get_permalink($post->ID) . '"> Read More</a>';
	return $excerpt;
	}
?>	