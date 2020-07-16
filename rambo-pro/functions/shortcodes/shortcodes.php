<?php	
//get shortcodes pop-up editor == in the dashboard only, would be silly to load on the front end
if(defined('WP_ADMIN') && WP_ADMIN ) {	require_once('shortcode_popup.php'); }
/*--button--*/
function parse_shortcode_content( $content ) {

   /* Parse nested shortcodes and add formatting. */
	$content = trim( do_shortcode( shortcode_unautop( $content ) ) );

	/* Remove '' from the start of the string. */
	if ( substr( $content, 0, 4 ) == '' )
		$content = substr( $content, 4 );

	/* Remove '' from the end of the string. */
	if ( substr( $content, -3, 3 ) == '' )
		$content = substr( $content, 0, -3 );

	/* Remove any instances of ''. */
	$content = str_replace( array( '<p></p>' ), '', $content );
	$content = str_replace( array( '<p>  </p>' ), '', $content );
	return $content;
}


function button_shortcode( $atts,$content = null ){ 
   $atts = shortcode_atts(
    array(	'style' => '',
			'size' => 'small',
			'target'=> 'self',
			'url' => '#',
			'textdata' => 'Button'
		), $atts );		 
	$size = $atts['size'];
	$style = $atts['style'];
	$url = $atts['url'];
	$target = $atts['target'];	
	$target = ($target == 'blank') ? ' target="_blank"' : '';
	$style = ($style) ? ' '.$style : '';    
	$out = '<a' .$target. ' class="' .$style.' '. $size.'  " href="' .$url. '" target="' .$target. '">' .do_shortcode($content). '</a>';
	return $out;
}
add_shortcode('button', 'button_shortcode');

function webriti_shortcode_row($params, $content = null) {
    extract(shortcode_atts(array(
        'class' => ''
    ), $params));	
    $result = '<div class="row-fluid">';
    $content = str_replace("]<br />", ']', $content);
    $content = str_replace("<br />\n[", '[', $content);
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}
add_shortcode('row', 'webriti_shortcode_row');

/*--------------------------------------*/
/*	Columns
/*--------------------------------------*/
function column_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
	  	'offset' =>'',
      	'size' => 'span6',
	  	//'position' =>'first'
      ), $atts ) );	
	$atts = shortcode_atts( array(	'offset' => '','size' => 'span6'), $atts );
	$out = '<div class="'.$size.'">' . do_shortcode($content). '</div>';
	 return $out;
}
add_shortcode('column', 'column_shortcode');

/*-----------Tabs short code-----------*/
if (!function_exists('tabgroup')) {
	function tabgroup( $atts, $content = null ) 
{	  	$tabs_style = $atts['tabs_style'];
		if($tabs_style=='Vartical'){ $tabs_style='tabbable tabs-left'; }  else { $tabs_style='tabbable'; }

		// Extract the tab titles for use in the tab shortcode
		preg_match_all( '/tabs_title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );
		$tab_titles = array();$webriti_tabs_title =array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }		
		$output = '';	
		
		if( count($tab_titles) )
		{	$output .= '<div class="'.$tabs_style.'"><ul class="nav nav-tabs short_tabs" >';
			$count=0;			
			foreach( $tab_titles as $tabs_title )
			{	if($count==0){
				$webriti_tabs_title[0] = str_replace(' ', '_', $tabs_title[0]);
				  $output .= '<li class="active" style="list-style:none;"><a data-toggle="tab" href="#'.preg_replace('~[^A-Za-z\d\s-]+~u', 'wr', $webriti_tabs_title[0]).'">'.$tabs_title[0].'</a></li>';
				 } else {
				  $webriti_tabs_title[0] = str_replace(' ', '_', $tabs_title[0]);	
				  $output .= '<li class="" style="list-style:none;"><a data-toggle="tab" href="#'.preg_replace('~[^A-Za-z\d\s-]+~u', 'wr', $webriti_tabs_title[0]).'">'.$tabs_title[0].'</a></li>';
				 } 
				  $count++;
			}		    
			$output .= '</ul><div class="tab-content" style=" border-radius: 4px 4px 4px 4px;padding: 4px 8px 4px;" >';
			$output .= do_shortcode( $content );			
		} 		 
		 $output .= '</div></div>';
		return $output;	
	}
	add_shortcode( 'tabgroup', 'tabgroup' );
}
function tabs_shortcode( $atts, $content = null ){
	
	$atts = shortcode_atts(array('tabs_title' => 'This is tabs heading','tabs_text' => 'Description','tabs_style'=> 'style'), $atts );	
	$tabs_title = $atts['tabs_title'];
	$tabs_text = $atts['tabs_text'];
	$tabs_style = $atts['tabs_style'];
	$webriti_tabs_title = str_replace(' ', '_', $tabs_title);
	
	$out='<div id="'.preg_replace('~[^A-Za-z\d\s-]+~u', 'wr', $webriti_tabs_title).'" class="tab-pane"><p>'.$tabs_text.'</p>'.do_shortcode( $content ).'</div>';			  
	return $out;	
}
add_shortcode( 'tabs', 'tabs_shortcode' );
/*-----------Alert short code-----------*/

function alert_shortcode( $atts, $content = null )
{
	$atts = shortcode_atts(  array(
							'alert_heading' => 'Please enter alert heading',     
							'alert_text' => 'Please enter text in alert text',
							'alert_style'=>'',
							'alert_color'=>'af706f'
							),$atts 
						);
	$alert_heading = $atts['alert_heading'];
	$alert_text = $atts['alert_text'];
	$alert_style = $atts ['alert_style'];
	$alert_color = $atts ['alert_color'];
	$out='<div class="'.$alert_style.'">
			<button data-dismiss="alert" class="close" type="button" style="color:#'.$alert_color.'" >x</button>
		   <strong>'.$alert_heading.'</strong>&nbsp;&nbsp;'.$alert_text. do_shortcode($content).'</div>';	
	return $out;
}
add_shortcode( 'alert', 'alert_shortcode' );

/*-----------Dropcap-----------*/
function dropcp_shortcode( $atts, $content = null ){
    $atts = shortcode_atts(array(      	
		'dropcp_style'=>'dropcap_simple_content',
		'dropcp_text'=>'orem ipsum dolor sit amet, Integer commodo tristiqu odio, aliquet ut. Maecenas sed justo imperdiet bibendum. Vivamus nec sapien imperdiet diam. Aliquam erat volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet,volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, volutpat.',
		'dropcp_first_letter' => 'L'
		),
      $atts );
	
	$dropcp_text = $atts['dropcp_text'];
	$dropcp_style = $atts ['dropcp_style'];
	$dropcp_first_letter = $atts ['dropcp_first_letter'];
	
	$out='<div class="span4 '.$dropcp_style.'">	       
		 <p><span class="first">'.$dropcp_first_letter.'</span>&nbsp;&nbsp;'.$dropcp_text.'</p></div>';	
	return $out;
}
add_shortcode( 'dropcap', 'dropcp_shortcode' );

function gridsystemlayout_function ($atts , $content = null)
{
	$grid_layout = $atts['grid_layout'];
	
   if($grid_layout == "one-column")
	{	
		$atts = shortcode_atts(array(	
			'one_column_title'=>'One Column',
			'one_column_description' => 'orem ipsum dolor sit amet, Integer commodo tristiqu odio, aliquet ut. Maecenas sed justo imperdiet bibendum. Vivamus nec sapien imperdiet diam. Aliquam erat volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet,volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, volutpat.'
			),$atts );
		
		$one_column_title = $atts ['one_column_title'];		
		$one_column_description = $atts ['one_column_description'];			
		$out='<div class="row-fluid">
				<div class="span12 grid_coloumn"><div class="grid_head_title"><h3>'.$one_column_title.'</h3></div>
					<p>'.$one_column_description.'</p>
				</div>
			</div>';
	} else
	if($grid_layout == "two-column")
	{ 	
		$atts = shortcode_atts(array(	
			'one_column_title'=>'two Column',
			'one_column_description' => 'orem ipsum dolor sit amet, Integer commodo tristiqu odio, aliquet ut. Maecenas sed justo imperdiet bibendum. Vivamus nec sapien imperdiet diam. Aliquam erat volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet,volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, volutpat.',
			'two_column_title'=>'two Column',
			'two_column_description' => 'orem ipsum dolor sit amet, Integer commodo tristiqu odio, aliquet ut. Maecenas sed justo imperdiet bibendum. Vivamus nec sapien imperdiet diam. Aliquam erat volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet,volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, volutpat.'
			),$atts );
		
		$one_column_title = $atts ['one_column_title'];		
		$one_column_description = $atts ['one_column_description'];		
		$two_column_title = $atts ['two_column_title'];		
		$two_column_description = $atts ['two_column_description'];
		
		$out='<div class="row-fluid">
				<div class="span6 grid_coloumn"><div class="grid_head_title"><h3>'.$one_column_title.'</h3></div>
					<p>'.$one_column_description.'</p>
				</div>
				<div class="span6 grid_coloumn"><div class="grid_head_title"><h3>'.$two_column_title.'</h3></div>
					<p>'.$two_column_description.'</p>
				</div>				
		</div>';			
	} else
	if($grid_layout == "three-column")
	{ 	$atts = shortcode_atts(array(	
			'one_column_title'=>'Three Column',
			'one_column_description' => 'orem ipsum dolor sit amet, Integer commodo tristiqu odio, aliquet ut. Maecenas sed justo imperdiet bibendum. Vivamus nec sapien imperdiet diam. Aliquam erat volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet,volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, volutpat.',
			'two_column_title'=>'Three Column',
			'two_column_description' => 'orem ipsum dolor sit amet, Integer commodo tristiqu odio, aliquet ut. Maecenas sed justo imperdiet bibendum. Vivamus nec sapien imperdiet diam. Aliquam erat volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet,volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, volutpat.',
			'three_column_title'=>'Three Column',
			'tthree_column_description' => 'orem ipsum dolor sit amet, Integer commodo tristiqu odio, aliquet ut. Maecenas sed justo imperdiet bibendum. Vivamus nec sapien imperdiet diam. Aliquam erat volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet,volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, volutpat.'
			),$atts );
		
		$one_column_title = $atts ['one_column_title'];		
		$one_column_description = $atts ['one_column_description'];			
		$two_column_title = $atts ['two_column_title'];		
		$two_column_description = $atts ['two_column_description'];		
		$three_column_title = $atts ['three_column_title'];		
		$three_column_description = $atts ['three_column_description'];			
		$out='<div class="row-fluid">
				<div class="span4 grid_coloumn"><div class="grid_head_title"><h3>'.$one_column_title.'</h3></div>
					<p>'.$one_column_description.'</p>
				</div>
				<div class="span4 grid_coloumn"><div class="grid_head_title"><h3>'.$two_column_title.'</h3></div>
					<p>'.$two_column_description.'</p>
				</div>
				<div class="span4 grid_coloumn"><div class="grid_head_title"><h3>'.$three_column_title.'</h3></div>
					<p>'.$three_column_description.'</p>
				</div>				
		</div>';			
	} else
	if($grid_layout == "fourth-column")
	{ 	
		$atts = shortcode_atts(array(	
			'one_column_title'=>'fourth Column',
			'one_column_description' => 'orem ipsum dolor sit amet, Integer commodo tristiqu odio, aliquet ut. Maecenas sed justo imperdiet bibendum. Vivamus nec sapien imperdiet diam. Aliquam erat volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet,volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, volutpat.',
			'two_column_title'=>'fourth Column',
			'two_column_description' => 'orem ipsum dolor sit amet, Integer commodo tristiqu odio, aliquet ut. Maecenas sed justo imperdiet bibendum. Vivamus nec sapien imperdiet diam. Aliquam erat volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet,volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, volutpat.',
			'three_column_title'=>'fourth Column',
			'three_column_description' => 'orem ipsum dolor sit amet, Integer commodo tristiqu odio, aliquet ut. Maecenas sed justo imperdiet bibendum. Vivamus nec sapien imperdiet diam. Aliquam erat volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet,volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, volutpat.',
			'fourth_column_title'=>'fourth Column',
			'fourth_column_description' => 'orem ipsum dolor sit amet, Integer commodo tristiqu odio, aliquet ut. Maecenas sed justo imperdiet bibendum. Vivamus nec sapien imperdiet diam. Aliquam erat volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet,volutpat. Sed onsectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, volutpat.'
			),$atts );
			
		$one_column_title = $atts ['one_column_title'];		
		$one_column_description = $atts ['one_column_description'];		
		$two_column_title = $atts ['two_column_title'];		
		$two_column_description = $atts ['two_column_description'];		
		$three_column_title = $atts ['three_column_title'];		
		$three_column_description = $atts ['three_column_description'];		
		$fourth_column_title = $atts ['fourth_column_title'];		
		$fourth_column_description = $atts ['fourth_column_description'];	
		
		$out='<div class="row-fluid">
				<div class="span3 grid_coloumn"><div class="grid_head_title"><h3>'.$one_column_title.'</h3></div>
					<p>'.$one_column_description.'</p>
				</div>
				<div class="span3 grid_coloumn"><div class="grid_head_title"><h3>'.$two_column_title.'</h3></div>
					<p>'.$two_column_description.'</p>
				</div>
				<div class="span3 grid_coloumn"><div class="grid_head_title"><h3>'.$three_column_title.'</h3></div>
					<p>'.$three_column_description.'</p>
				</div>
				<div class="span3 grid_coloumn"><div class="grid_head_title"><h3>'.$fourth_column_title.'</h3></div>
					<p>'.$fourth_column_description.'</p>
				</div>
		</div>';						
	}	
return $out;
}
add_shortcode('gridsystemlayout','gridsystemlayout_function');

/*Tool Tip*/
function tooltip_function ($atts , $content = null)
{
	wp_enqueue_style ('tool-tip',get_template_directory_uri().'/css/css-tooltips.css'); //ToolTip
	$atts= shortcode_atts(array (
						'tooltip_text' => 'Tight pants next level keffiyeh&nbsp;',
						'tooltip_word' => 'sample',
						'tooltip_url' => '#',
						'tip_word' => 'ToolTip'
					),$atts );
	
	$tooltip_text = $atts['tooltip_text'];
	$tooltip_word = $atts['tooltip_word'];
	$tooltip_url = $atts['tooltip_url'];
	$tip_word = $atts['tip_word'];		
	
	$myString = $tooltip_text;
	$tooltip_text = str_replace($tooltip_word, "<a data-tip='".$tip_word."' href='".$tooltip_url."'>".$tooltip_word."</a>", $myString);
	
	$out ='<div class="row-fluid shortcode_section">
	<p class="para_tooltip">'.$tooltip_text.'</p></div>';
	return $out;
}
add_shortcode('tooltip','tooltip_function');

/******* heading shortcode **********/
/*Tool Tip*/
function heading_function ($atts , $content = null)
{
	$atts= shortcode_atts(array (
						'heading_style' => 'h1',
						'title' => 'Heading'						
					),$atts );
	
	$heading_style = $atts['heading_style'];
	$title = $atts['title'];	
	$out ='<div class="typography_heading"><'.$heading_style.'>'.$title.'</'.$heading_style.'></div>';
	return $out;
}
add_shortcode('heading','heading_function');

/*Tool Tip*/
function iconswithtext_function ($atts , $content = null)
{
	$atts= shortcode_atts(array (
						'fontawesome_icon' => 'fa-check-circle',
						'fontawesome_text' => 'Fusce sit amet orci quis arcu vestibulum vestibulum sed ut felis. Phasellus in risus quis lectus iaculis vulputate id quis nisl Phasellus in risus quis lectus'						
					),$atts );
	
	$fontawesome_icon = $atts['fontawesome_icon'];
	$fontawesome_text = $atts['fontawesome_text'];	
	$out ='<p class="para_icons"><i class="fa '.$fontawesome_icon.'  icon-spacing"></i>'.$fontawesome_text.'</p>';
	return $out;
}
add_shortcode('iconswithtext','iconswithtext_function');

/* list shortcodes--------------------------------------*/
function list_shortcode_unorder( $atts, $content = null  ) {

	extract( shortcode_atts(
		array(
			'list_style' => __('1', 'rambo'),
		     'list_type'=>__('order','rambo'),
      	), $atts ));
	$list_style=$atts['list_style'];
	$list_type=$atts['list_type'];
       if($list_type=='unorder'){
	$output='';
	$output='<div class="span12 typography_coloumn">
			<div class="unordered_list"><ul>';
	$output .= do_shortcode( $content );
	$output.='</ul></div></div>';
	return $output;
	}
	else{
	     $output='';
	$output='<div class="span12 typography_coloumn">
			<div class="ordered_list"><ol>';
	$output .= do_shortcode( $content );
	$output.='</ol></div></div>';
	
	return $output;
	}
}

add_shortcode( 'list', 'list_shortcode_unorder' );

function list_shortcodes( $atts, $content = null ) {
	extract( shortcode_atts( array(
	
      	'list_text' => '',
	  
      ), $atts ) );
 	$list_text=$atts['list_text'];
	$output='<li>'.$list_text.'</li>';
	 return $output;
}
add_shortcode('list_item', 'list_shortcodes');
?>