<section id="landing" data-colour="offwhite">
	
	<div class="container--scale">
	
		<div class="container--01">
			
			<div class="container--01">
				
				<p>Elevating.</p> 
				
			</div>
			
			<div class="container--02">
				
				<?php if( have_rows('header_messaging') ):
					while( have_rows('header_messaging') ) : the_row(); ?>
						
						<p><?php echo get_sub_field('message') ?></p>
						
					<?php endwhile;
				endif; ?>
				
			</div>
			
		</div>
		
		<div class="container--02">
			
			<p>ACJ TwoTwenty | 9H-FIVE</p>
			
			<p>FLY HIGH. FLY FIVE.</p>
			
		</div>
		
		<div class="container--03">
			
			<div data-logo>
				
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo-icon.webp">
				
			</div>
			
		</div>
		
	</div>
	
</section>