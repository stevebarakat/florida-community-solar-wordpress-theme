<?php
 if ( function_exists( 'add_image_size' ) ) 
 { 
	add_image_size('home_slide',1400,550,true);	
	//portfolio image resize	
	add_image_size('portfolio-1c-thumb',770,473,true);
	add_image_size('portfolio-2c-thumb',570,350,true);
	add_image_size('portfolio-3c-thumb',370,227,true);
	add_image_size('portfolio-4c-thumb',270,166,true);
	//add_image_size('portfolio-home-thumb',270,166,false);
	//add_image_size('portfolio-thumb',50,27,false);	
	
	//Blog Images
	add_image_size('blog2_section_img',770,300,true);
	add_image_size('blog1_section_img',270,260,true);
	add_image_size('home-blog-thumb',162,102,true);	
	add_image_size('blog_sidbar_image_recent',60,60,true);
	
	
	//Team CPT
	add_image_size('team-thumb',270,215,true);
	
	//Client Strip JS
	add_image_size('client-thumb',130,130,true);
	
	//testimonial
	add_image_size('rambo-testimonial',70,70,true);

}
// code for home slider post types 
add_filter( 'intermediate_image_sizes', 'rambopro_image_presets');

function rambopro_image_presets($sizes){
   $type = get_post_type($_REQUEST['post_id']);	
    foreach($sizes as $key => $value){
    	if($type=='rambopro_slider'  &&  $value != 'home_slide' )
		 {        unset($sizes[$key]);      }
		 else  if($type=='rambopro_project' && $value != 'portfolio-home-thumb' && $value != 'portfolio-1c-thumb' && $value != 'portfolio-2c-thumb' && $value != 'portfolio-3c-thumb' && $value != 'portfolio-4c-thumb' && $value != 'portfolio-thumb' )
		 { unset($sizes[$key]);  }	
		 else  if($type=='rambopro_team' && $value != 'team-thumb')
		 { unset($sizes[$key]);  }
		 else  if($type=='rambopro_clientstrip' && $value != 'client-thumb')
		 { unset($sizes[$key]);  }
		  else if($type=='post'  &&  $value != 'blog2_section_img' &&  $value != 'blog1_section_img' &&  $value != 'home-blog-thumb' &&  $value != 'blog_sidbar_image_recent'  )
		 {        unset($sizes[$key]);      }
		 else if($type=='rambopro_testimonial'  &&  $value != 'rambo-testimonial' )
		 {        unset($sizes[$key]);      }
		
    }
    return $sizes;
	 
}
?>