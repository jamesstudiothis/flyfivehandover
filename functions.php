<?php
	
/*
	==========================================
	Include Scripts
	==========================================
*/

function script_enqueue() {	
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/dist/scripts/bundle.css', array(), '1.0.0', 'all');
	
	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/dist/scripts/bundle.js', array(), '1.0.0', true );
	wp_enqueue_script( 'lottie.min', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.8.1/lottie.min.js', array(), '5.8.1', false);
	wp_localize_script( 'customjs', 'WPURL', array( 'siteurl' => get_template_directory_uri() ));
}
	
add_action( 'wp_enqueue_scripts', 'script_enqueue');

/*
	==========================================
	Call Admin
	==========================================
*/
require( get_template_directory() . '/inc/settings.php' );






// function defer_scripts( $tag, $handle, $src ) {
//   $defer = array( 
// 	'lottie.min'
//   );
//   if ( in_array( $handle, $defer ) ) {
// 	 return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
//   }
// 	
// 	return $tag;
// } 
// add_filter( 'script_loader_tag', 'scripts', 10, 3 );

// function defer_parsing_of_js ( $url ) {
// 	if ( FALSE === strpos( $url, '.js' ) ) return $url;
// 	if ( strpos( $url, 'jquery.js' ) ) return $url;
// 	return "$url' defer";
// }
// add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
