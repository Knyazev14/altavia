<?php
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	//Стили
	wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
	wp_enqueue_style( 'style', get_template_directory_uri() .'/assets/css/style.min.css');
    

	//Скпипты
	wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.js', [],'1.0',['strategy' => 'defer', 'in_footer' => true,]);

}

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');


add_filter( 'script_loader_tag', 'add_type_attribute' , 10, 3 );

function add_type_attribute($tag, $handle, $src) {
	// if not your script, do nothing and return original $tag
	if ( 'script' !== $handle ) {
		return $tag;
	}
	// change the script tag by adding type="module" and return it.
	$tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
	return $tag;
}

?>