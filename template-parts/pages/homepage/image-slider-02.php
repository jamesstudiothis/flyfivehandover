<section id="image-slider-02" data-colour="offwhite">
	
	<div class="gradient--overlay"></div>
	
	<div class="gradient--overlay bottom"></div>
	
	<div class="side--line">
		
		<p>Fly High. Fly FIVE.</p>
		
	</div>
	
	<?php if (is_array( get_field('gallery_section_02') )) {
		
		if (count( get_field('gallery_section_02') ) == 1) { ?>
			
			<div class="container--01" data-scroll="img">
				
				<?php echo wp_get_attachment_image( get_field('gallery_section_02')['0']['id'], 'large' ); ?>
				
			</div>
			
		<?php } else { ?>
			  
			<div data-image-slider> 
					
				<div class="slides-container">
				
					<div class="slides-inner">
						
						<?php foreach( get_field('gallery_section_02') as $image ): ?>
							
								<div class="slide" data-scroll="img">
									
									<?php echo wp_get_attachment_image( $image['id'], 'large' ); ?>
								
								</div>
							
							<?php endforeach; ?>
						
					</div>
					
					<div class="controls">
						
						<div id="prev"></div>
						
						<div id="next"></div>
						
					</div>
						
				</div> 
			
			</div>
			
		<?php }
	  
	} ?>
	
</section>