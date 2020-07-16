<?php	
$current_options = get_option('rambo_pro_theme_options');
	if (  $current_options['front_page'] != 'on' ) {
	get_template_part('index');
	}	
	else 
	{
	get_header();
	
	get_template_part('index', 'slider') ;
						
		$data = $current_options['front_page_data'];
		if($data) 
		{
			foreach($data as $key=>$value)
			{
				switch($value) 
				{
					case 'Theme-Introduction-Top':
					get_template_part('index', 'theme-introduction-top');	
					break; 
					
					case 'Service Section': 
					/****** get index service  ********/
					get_template_part('index', 'service') ;
					break;
					
					case 'Project Portfolio':
					/****** get index project  ********/
					get_template_part('index', 'project');					
					break;
					
					
					 			
					/****** get index recent blog  ********/
					case 'Call Out Area':
					get_template_part('index', 'theme-introduction');					
					break;
						
					case 'Latest News': 			
					/****** get index recent blog  ********/
					echo '<div class="for_mobile">';
					get_template_part('index', 'recentblog');					
					echo '</div>';
					break; 
					
				}	
			}
		} 
	
	get_footer(); 
	}
?>