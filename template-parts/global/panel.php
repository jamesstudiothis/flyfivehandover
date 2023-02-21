<section id="panel">
	
	<div class="container--01">
		
		<div panel-button data-link>
			
			<span class="first"></span>
				
			<span class="last"></span>
			
		</div>
		
		<div class="container--01">
			
			<h6 data-reveal="lines">FIVE Hotels & Resorts</h6>
			
			<p class="sub--title" data-reveal="lines"><?php echo get_field('five_hotels_and_resorts_section_sub_header') ?></p>
				
			<p data-reveal="lines"><?php echo get_field('five_hotels_and_resorts_section_body') ?></p>
			
			<?php if( get_field('five_hotels_and_resorts_section_button') ): ?>
			
				<a href="<?php echo get_field('five_hotels_and_resorts_section_button')['url'] ?>" target="<?php echo get_field('five_hotels_and_resorts_section_button')['target'] ?>">
					
					<button class="button--offwhite"><?php echo get_field('five_hotels_and_resorts_section_button')['title'] ?></button>
				
				</a>
				
			<?php endif; ?>
			
		</div>
		
	</div>
	
	<div class="background" panel-button data-link></div>
	
</section>