<?php 
	// Define thumbnail support for pages
	add_theme_support( 'post-thumbnails' );
	
	//Limit the excerpt length
	function my_excerpt_length($length) {
		return 15;
	}

	add_filter('excerpt_length', 'my_excerpt_length');

	// Custom image size
	add_image_size('palabras_cruzadas_featured_image', 2000, 1200, true);
	add_image_size('thumbnail-news', 368, 248, true);


	


// Define custom featured support

// function tiempo_sport_post_type(){
// 	register_post_type('tiempo_sport_slider',
// 		array(
// 			'labels' => array(
// 				'name' => __( 'Carousel' ), 
// 				'singular_name' => __( 'Item' ), 
// 				'add_new' => __( 'Nuevo item' ), 
// 				'add_new_item' => __( 'Añadir nuevo item' ), 
// 				'edit_item' => __( 'Editar item' ), 
// 				'featured_image' => __( 'Imagen del slide' )
// 			), 
// 			'public' => true, 
// 			'exclude_from_search' => true,
// 			'has_archive' => false,
// 			'show_in_nav_menus' => false, 
// 			'menu_icon' => 'dashicons-slides',
// 			//'rewrite' => array('slug' => 'carousel'),
// 			'supports' => array('title', 'editor', 'thumbnail')
// 		)
// 	);
// }

//add_action('init', 'tiempo_sport_post_type');

add_action( 'init', 'palabras_cruzadas_post_type' );


function palabras_cruzadas_post_type() {

 
  $labels = array(
    'name' => __( 'Slider'),
    'singular_name' => __( 'Item', 'Nueva noticia' ),
    'add_new' => __('Nuevo item'),
	'add_new_item' => __('Añadir nuevo item'),
	'edit_item' =>__('Editar item'),
	'featured_image' =>__('Imagen del slide')
  );

  
  $args = array(
    'labels' => $labels,
    'description' => __('Slider de noticias'),
    'public' => true,
    'exclude_from_search' => true,
	'has_archive' => false,
	'show_in_nav_menus' => false,
	'menu_icon' => 'dashicons-slides',
	//'rewrite' => array('slug'=>'Carousel'),
	'supports' => array('title', 'editor', 'thumbnail')
  );

  register_post_type( 'Slider', $args );
}

add_action( 'widgets_init', 'tiempoSportWidgetsInit' );

function tiempoSportWidgetsInit() {
    register_sidebar( array(
        'name' => __( 'Home sidebar', 'tiempodev' ),
        'id' => 'sidebar-home',
        'description' => __( 'Widgets in this area will be shown on Home page.', 'tiempodev' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init', 'fotoNewsWidgetsInit' );

function fotoNewsWidgetsInit() {
    register_sidebar( array(
        'name' => __( 'Photo sidebar', 'tiempodev' ),
        'id' => 'sidebar-photo',
        'description' => __( 'Widgets in this area will be shown on Home page, down site.', 'tiempodev' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init', 'videoNewsWidgetsInit' );

function videoNewsWidgetsInit() {
    register_sidebar( array(
        'name' => __( 'Video sidebar', 'tiempodev' ),
        'id' => 'sidebar-video',
        'description' => __( 'Widgets in this area will be shown on Home page, down site.', 'tiempodev' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}


add_action( 'widgets_init', 'newsWidgetsInit' );

function newsWidgetsInit() {
    register_sidebar( array(
        'name' => __( 'News sidebar', 'tiempodev' ),
        'id' => 'sidebar-news',
        'description' => __( 'Widgets in this area will be shown on single page.', 'tiempodev' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}

 ?>