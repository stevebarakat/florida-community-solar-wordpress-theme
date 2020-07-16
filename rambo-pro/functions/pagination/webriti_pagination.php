<?php 
class Webriti_pagination
{
function Webriti_page($curpage, $post_type_data)
{	?>
	<div class="pagination_section">	
		<div class="pagination text-center">
		<ul>
			<?php if($curpage != 1  ) {
					echo '<li><a href="'.get_pagenum_link(($curpage-1 > 0 ? $curpage-1 : 1)).'">Prev</a>'; } ?>
			<?php for($i=1;$i<=$post_type_data->max_num_pages;$i++)
				{
				echo '<li><a class="'.($i == $curpage ? 'active ' : '').'" href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
				}				
			if($i-1!= $curpage)	 {
			echo '<li><a class="" href="'.get_pagenum_link(($curpage+1 <= $post_type_data->max_num_pages ? $curpage+1 : $post_type_data->max_num_pages)).'">Next</a></li>';
			 } ?>
		</ul>
		</div>
	</div>
<?php } 
}
?>