<section id="acj-twentytwo-section-02" data-colour="black">
	
	<div class="container--01">
		
		<h3 data-reveal="lines">ACJ TwoTwenty <u>9H-FIVE</u></h3>
		
		<p class="sub--title" data-reveal="lines"><?php echo get_field('acj_twentytwo_section_02_sub_header'); ?></p>
			
		<p data-reveal="lines"><?php echo get_field('acj_twentytwo_section_02_body'); ?></p>
		
		<ul>
			
			<?php if( have_rows('feature_list') ):
				while( have_rows('feature_list') ) : the_row(); ?>
					
					<li data-reveal="lines">
						
						<span>—</span>
						<?php echo get_sub_field('feature') ?>
						
					</li>
					
				<?php endwhile;
			endif; ?>
			
		</ul>
		
	</div>
	
	<div class="container--02" data-scroll="img">
		
		<?php if ( get_field('is_video') == 'no' ) { ?>
			
			<?php echo wp_get_attachment_image( get_field('acj_twentytwo_section_02_image')['id'], 'large' ); ?>
			
		<?php } elseif ( get_field('is_video') == 'yes' ) { ?> 
			
			<video autoplay="autoplay" playsinline="" muted="muted" loop="loop" src="<?php echo get_field('video_url') ?>"></video>
			
		<?php } ?>
		
	</div>
	
	<div class="side--line">
		
		<p>The Plane</p>
		
		<span class="line"></span>
		
	</div>
	
</section>