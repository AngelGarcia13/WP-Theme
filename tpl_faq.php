<?php
/*
Template Name: FAQs
*/
	get_header();
	?>
	<div class="container">
			<div class="row">
                    <div class="col-xs-12 col-sm-12 postZoom text-left">
                    		<?php
                    		echo do_shortcode('[sp_faq limit="-1"]');

                    		?>
                    </div>
				
			</div>
		
	</div>
	<?php
 	get_sidebar();
 	get_footer(); 
 ?>