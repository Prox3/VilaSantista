<?php
/* WIDGETS */

if (function_exists('register_sidebar'))
{
    register_sidebar(array(
		'name'			=> 'Sidebar',
        'before_widget'	=> '<div class="widget">',
        'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',
    ));
}

add_theme_support( 'post-thumbnails' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function teste_shortcode( $atts, $content = null ) {
   return '<span class="caption">' . $content . '</span>';
}
add_shortcode( 'teste', 'teste_shortcode' );

?>