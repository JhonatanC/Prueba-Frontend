<?php

/**========================================**/
//------Estilos.
/**========================================**/

function mi_theme_style(){
	wp_enqueue_style('font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('style_css', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts','mi_theme_style');


/**========================================**/
//------Scripts.
/**========================================**/

/*function mi_theme_scritp(){
	//wp_enqueue_script('font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	//wp_enqueue_script('style_css', get_template_directory_uri() . '/css/style.css');

	wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.2.1.min.js");
	wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts','mi_theme_scritp');*/


/**========================================**/
//------Menú.
/**========================================**/


function register_menus(){
	register_nav_menus(

		array(
			'menu-principal' => __('Menu Principal')
		)

	);
}

add_action('init',register_menus);



if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	the_post_thumbnail('large');
	//add_image_size( 1920, 500, true );
}


//the_post_thumbnail('full');
//add_theme_support( 'post-thumbnails' )


/**========================================**/
//------Sliders.
/**========================================**/

/*function create_slider(){
	$labels = array(
		'name' => __('Sliders'),
		'singular_name' => __('Slider')
	);

	$args = array(
		'labels' => $labels,
		'public' => true
	);

	register_post_type('Sliders', $args);
}

add_action('init', create_slider);*/


?>