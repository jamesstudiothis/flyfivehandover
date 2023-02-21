<footer class="footer bg-black-100" data-colour="offwhite">
	
	<section class="footer-container">    
		
		<div class="container--01">
			
			<h6 data-reveal="lines">Make An Enquiry</h6>
			
			<p class="header" data-reveal="lines"><?php echo get_field('make_an_enquiry_section_sub_header'); ?></p>
				
			<p data-reveal="lines">
			
				<?php echo get_field('make_an_enquiry_section_body'); ?>
				
				<span panel-button data-link underline-animation-reverse>About FIVE Hotels & Resorts.</span>
			
			</p>
			
			<div class="container--01">
				
				<div class="container--01" data-reveal="obj">
			
					<?php gravity_form( 1, false, false, false, '', true ); ?>
					
				</div>
				
				<div class="container--02">
					
					<div data-logo data-reveal="obj" data-delay="1">
						
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo-icon.webp">
						
					</div>
					
					<div class="container--01">
						
						<a href="https://www.wearevapour.com/" target="_blank">
							
							<?php echo file_get_contents( get_stylesheet_directory_uri() . '/dist/img/website_by.svg' ); ?>
							
						</a>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		<div class="side--line">
			
			<p>ACJ TwoTwenty | 9H-FIVE</p>
			
			<span class="line"></span>
			
		</div>
		   
	</section>
  
</footer>