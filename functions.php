<?php
define( 'ACF_LITE', true );
// include_once('plugins/advanced-custom-fields/acf.php');

function artemix_resources() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'fonnt_awesome_js', 'https://use.fontawesome.com/releases/v5.8.1/js/all.js', null, '5.8.1', false );
	// wp_enqueue_script( 'header_js', get_template_directory_uri() . '/js/header-bundle.js', null, 1.0, false );
	// wp_enqueue_script( 'footer_js', get_template_directory_uri() . '/js/footer-bundle.js', null, 1.0, true );
	wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/assets/js/custom.min.js', null, 1.0, true );
}

add_action( 'wp_enqueue_scripts', 'artemix_resources' );

// Customize excerpt word count length
function custom_excerpt_length() {
	return 22;
}

add_filter( 'excerpt_length', 'custom_excerpt_length' );

// Theme setup
function artemix_setup() {
	// Handle Titles
	add_theme_support( 'title-tag' );

	// Add featured image support
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'small-thumbnail', 720, 720, true );
	add_image_size( 'square-thumbnail', 80, 80, true );
	add_image_size( 'banner-image', 1024, 1024, true );
	add_image_size( 'loop', 359, 320, true );
}

add_action( 'after_setup_theme', 'artemix_setup' );

show_admin_bar( false );


// Checks if there are any posts in the results
function is_search_has_results() {
	return 0 != $GLOBALS['wp_query']->found_posts;
}

//add artemix custom logo
add_theme_support('custom-logo');

//artemix Menus
function artemix_menus(){
	register_nav_menus( array(
		'header-menu' => __('Header Menu', 'artemix'),
		'social-menu' => __('Social Menu', 'artemix'),
		'footer-menu' => __('Footer Menu', 'artemix')
	));
}
add_action('init', 'artemix_menus');
// Add Widget Areas
function artemix_widgets() {
	register_sidebar(
		array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar1',
			'before_widget' => '<div class="widget-item">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'artemix_widgets' );


// Add customPostType Talleres

function artemix_create_post_type() {
  register_post_type( 'artemix_talleres',
    array(
      'labels' => array(
        'name' => __( 'Talleres' ),
				'singular_name' => __( 'Taller' ),
				'search_items' =>  __( 'Buscar por Nombre' ),
				'all_items' => __( 'Todos los Talleres' ),
				'parent_item' => __( 'Género padre' ),
				'parent_item_colon' => __( 'Género padre:' ),
				'edit_item' => __( 'Editar Taller' ),
				'update_item' => __( 'Actualizar Taller' ),
				'add_new_item' => __( 'Añadir nuevo Taller' ),
				'new_item_name' => __( 'Nombre del nuevo Taller' ),
			),
			'menu_position' => 2,
      'menu_icon'     => 'dashicons-money',
      'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'talleres'),
			'supports' => array('title', 'thumbnail', 'excerpt', 'comments' ),
    )
  );
}
add_action( 'init', 'artemix_create_post_type' );


//Advance Custom fields campos predefinidos

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_talleres',
		'title' => 'Talleres',
		'fields' => array (
			array (
				'key' => 'field_5b92d72fb2042',
				'label' => 'descripción del taller',
				'name' => 'descripcion',
				'type' => 'text',
				'instructions' => 'Agrega la descripción del taller',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b9032533cb7a',
				'label' => 'Fecha de Inicio',
				'name' => 'fecha_de_inicio',
				'type' => 'text',
				'instructions' => 'Introduce la fecha de inicio en formato dia-mes-año',
				'required' => 1,
				'default_value' => '01-ENE-2018',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b9033013cb7b',
				'label' => 'Numero de Sesiones',
				'name' => 'numero_de_sesiones',
				'type' => 'number',
				'instructions' => 'Introduce el numero de sesiones para el Taller',
				'default_value' => 1,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5b90334f3cb7c',
				'label' => 'Horario',
				'name' => 'horario',
				'type' => 'text',
				'instructions' => 'Introduce el horario con el formato 5:00PM - 7:00PM
	',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b90339b3cb7d',
				'label' => 'Precio',
				'name' => 'precio',
				'type' => 'text',
				'instructions' => 'Introduce el precio del taller con la forma MX$00.00',
				'required' => 1,
				'default_value' => 'MX$00.00',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'artemix_talleres',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
