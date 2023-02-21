<?php
	
/*
	
@package Fly Five
	
	==========================================
	Front Page
	==========================================
*/

?>

<?php get_header(); ?>

<article data-router-view="default">
	
	<main id="homepage">
		
		<?php get_template_part( 'template-parts/pages/homepage/landing', 'landing' ); ?>
		
		<?php get_template_part( 'template-parts/pages/homepage/image-slider', 'image-slider' ); ?>
		
		<?php get_template_part( 'template-parts/pages/homepage/intro-section', 'intro-section' ); ?>
		
		<?php get_template_part( 'template-parts/pages/homepage/acj-twentytwo-section-01', 'acj-twentytwo-section-01' ); ?>
		
		<?php get_template_part( 'template-parts/pages/homepage/image-slider-02', 'image-slider-02' ); ?>
		
		<?php get_template_part( 'template-parts/pages/homepage/acj-twentytwo-section-02', 'acj-twentytwo-section-02' ); ?>
		
		<?php get_template_part( 'template-parts/pages/homepage/carbon-emissions', 'carbon-emissions' ); ?>

	</main>
	
<?php get_footer(); ?>