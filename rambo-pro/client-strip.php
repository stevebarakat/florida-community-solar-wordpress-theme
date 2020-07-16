<?php $current_options=get_option('rambo_pro_theme_options');
	$number_of_client = $current_options['number_of_client'];
	$rambo_client_strip_speed = $current_options['rambo_client_strip_speed'];
?>
<script type="text/javascript">
			jQuery(function() {
			// This Js for Our Clients & Responsors !
				jQuery('#our_client_product').carouFredSel({
					responsive: true,
					auto: {	pauseOnHover: 'immediate' },
					//scroll: 1,
					scroll : { items : 1, duration : <?php echo $rambo_client_strip_speed; ?>, timeoutDuration : 1000},
					items: {
						width: 150,
						visible: {
							min: 3,
							max: <?php echo $number_of_client; ?>
						}
					}
				});
			});
</script>
<div class="row-fluid main_space">
	<div class="team_head_title"><h3><?php if($current_options['client_strip_title']!='') {echo $current_options['client_strip_title']; } else { echo _e("Our Client",'rambo'); } ?></h3></div>
	<div id="our_client_product">
	<?php 	$count_posts = wp_count_posts( 'rambopro_clientstrip')->publish;                                              
			$args = array( 'post_type' => 'rambopro_clientstrip','posts_per_page'=>$count_posts); 	
			$clientstrip = new WP_Query( $args ); 
			if( $clientstrip->have_posts())
			{	while ( $clientstrip->have_posts() ) : $clientstrip->the_post(); ?>
			           <?php $client_link=get_post_meta( get_the_ID(), 'clientstrip_link', true );?>
					<div><?php if(has_post_thumbnail()) : ?>
						<?php //$tt = the_title(); ?>
						<?php $tt = array('alt'=>"tt")?>
						<a href="<?php echo $client_link;?>" target="<?php if(get_post_meta( get_the_ID(),'meta_client_target', true )) echo "_blank";  ?>"> <?php the_post_thumbnail('client-thumb',$tt);  ?></a>
						<?php else : ?>
						<img src="<?php echo WEBRITI_TEMPLATE_DIR_URI ?>/images/client/logo.png"/>	
						<?php endif; ?>	
					</div> <?php
				endwhile;
			} else {
				for ($csi=1; $csi<8; $csi++)
				{ ?><div>
					<img src="<?php echo  WEBRITI_TEMPLATE_DIR_URI ?>/images/clients/logo<?php echo $csi; ?>.png">
					</div><?php 
				}
			} ?>	
	</div>
</div><!-- /Our Client Section-->