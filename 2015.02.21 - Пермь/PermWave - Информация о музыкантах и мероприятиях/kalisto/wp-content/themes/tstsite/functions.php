<?php
/**
 * Blank functions and definitions
 *
 * @package Blank
 */

/**
 * Initials
 **/
 
// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                       => _x( 'Жанры', 'Жанры', 'text_domain' ),
		'singular_name'              => _x( 'Жанр', 'Жанр', 'text_domain' ),
		'menu_name'                  => __( 'Жанр', 'text_domain' ),
		'all_items'                  => __( 'Все жанры', 'text_domain' ),
		'parent_item'                => __( 'Родитель', 'text_domain' ),
		'parent_item_colon'          => __( 'Родитель:', 'text_domain' ),
		'new_item_name'              => __( 'Новый жанр', 'text_domain' ),
		'add_new_item'               => __( 'Добавить жанр', 'text_domain' ),
		'edit_item'                  => __( 'Редактировать жанр', 'text_domain' ),
		'update_item'                => __( 'Обновить', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'search_items'               => __( 'Искать жанр', 'text_domain' ),
		'add_or_remove_items'        => __( 'Добавить или удалить жанр', 'text_domain' ),
		'choose_from_most_used'      => __( 'Выбрать из часто используемых', 'text_domain' ),
		'not_found'                  => __( 'Жанр не найден', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'genres', array( 'singer' ), $args );	

	$labels = array(
		'name'                => _x( 'Музыканты', 'Музыканты', 'text_domain' ),
		'singular_name'       => _x( 'Исполнитель', 'Исполнитель', 'text_domain' ),
		'menu_name'           => __( 'Музыканты', 'text_domain' ),
		'parent_item_colon'   => __( 'Исполнитель:', 'text_domain' ),
		'all_items'           => __( 'Все исполнители', 'text_domain' ),
		'view_item'           => __( 'Просмотр', 'text_domain' ),
		'add_new_item'        => __( 'Добавить', 'text_domain' ),
		'add_new'             => __( 'Добавить', 'text_domain' ),
		'edit_item'           => __( 'Редактировать', 'text_domain' ),
		'update_item'         => __( 'Изменить', 'text_domain' ),
		'search_items'        => __( 'Найти исполнителя', 'text_domain' ),
		'not_found'           => __( 'Исполнитель не найден', 'text_domain' ),
		'not_found_in_trash'  => __( 'Исполнитель не найден', 'text_domain' ),
	);
	
	$args = array(
		'label'               => __( 'singer', 'text_domain' ),
		'description'         => __( '', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'thumbnail'),
		'taxonomies'          => array( 'genres', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'singer', $args );

	
	$labels = array(
		'name'                => _x( 'Мероприятия', 'Мероприятия', 'text_domain' ),
		'singular_name'       => _x( 'Мероприятие', 'Мероприятие', 'text_domain' ),
		'menu_name'           => __( 'Мероприятия', 'text_domain' ),
		'parent_item_colon'   => __( 'Мероприятие:', 'text_domain' ),
		'all_items'           => __( 'Все мероприятия', 'text_domain' ),
		'view_item'           => __( 'Просмотр', 'text_domain' ),
		'add_new_item'        => __( 'Добавить', 'text_domain' ),
		'add_new'             => __( 'Добавить', 'text_domain' ),
		'edit_item'           => __( 'Редактировать', 'text_domain' ),
		'update_item'         => __( 'Изменить', 'text_domain' ),
		'search_items'        => __( 'Найти мероприятие', 'text_domain' ),
		'not_found'           => __( 'Мероприятие не найдено', 'text_domain' ),
		'not_found_in_trash'  => __( 'Мероприятие не найдено', 'text_domain' ),
	);
	
	$args = array(
		'label'               => __( 'event', 'text_domain' ),
		'description'         => __( '', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'thumbnail'),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'event', $args );
	
}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );
 
 
 
if(!isset($content_width))
	$content_width = 640; /* pixels */

if(!isset($tst_main_w)){ //setting of main content wrappers
	
	$tst_nav_w = 0;
	$tst_main_w = 8;
	$tst_side_w = 4;
}


if ( ! function_exists( 'tst_setup' ) ) :
function tst_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Blank, use a find and replace
	 * to change 'blank' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'tst', get_template_directory() . '/languages' );

	
	//add_theme_support( 'automatic-feed-links' );

	/**
	 * Images
	 **/
	add_theme_support( 'post-thumbnails' );
	
	/* image sizes */
	set_post_thumbnail_size(390, 244, true ); // regular thumbnails
	add_image_size('logo', 220, 140, true ); // logo thumbnail 
	//add_image_size('poster', 220, 295, true ); // poster in widget	
	add_image_size('embed', 640, 400, true ); // fixed size for embending
	add_image_size('long', 640, 280, true ); // long thumbnail for pages

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary'   => 'Главное меню',
		'auxiliary' => 'Вспомогательное меню',		
		'social'    => 'Социальные кнопки'
	));

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array('image', 'video', 'gallery'));

	
}
endif; // blank_setup
add_action( 'after_setup_theme', 'tst_setup' );


/**
 * Register widgetized area and update sidebar with default widgets
 */
function tst_widgets_init() {
	
	$config = array(
		'common' => array(
						'name' => 'Боковая колонка',
						'description' => 'Общая боковая колонка справа'
					),
		'helper' => array(
						'name' => 'Навигационная колонка',
						'description' => 'Навигационная боковая колонка слева'
					),
		'header' => array(
						'name' => 'Шапка',
						'description' => 'Динамическая область в шапке сайта'
					),				
		'footer_one' => array(
						'name' => 'Футер - 1/3',
						'description' => 'Динамическая нижняя область - 1 колонка'
					),
		'footer_two' => array(
						'name' => 'Футер - 2/3',
						'description' => 'Динамическая нижняя область - 2 колонка'
					),
		'footer_three' => array(
						'name' => 'Футер - 3/3',
						'description' => 'Динамическая нижняя область - 3 колонка'
					),
		'home_one' => array(
						'name' => 'Главная - 1/3',
						'description' => 'Динамическая нижняя область - 1 колонка'
					),
		'home_two' => array(
						'name' => 'Главная - 2/3',
						'description' => 'Динамическая нижняя область - 2 колонка'
					),
		'home_three' => array(
						'name' => 'Главная - 3/3',
						'description' => 'Динамическая нижняя область - 3 колонка'
					)	
	);
		
	
	foreach($config as $id => $sb) {
		
		$before = '<div id="%1$s" class="widget %2$s">';
		
		if(false !== strpos($id, 'footer')){
			$before = '<div id="%1$s" class="widget %2$s bottom">';
		}
		elseif(false !== strpos($id, 'header')) {
			$before = '<div id="%1$s" class="header-block">';
		}
		
		register_sidebar(array(
			'name' => $sb['name'],
			'id' => $id.'-sidebar',
			'description' => $sb['description'],
			'before_widget' => $before,
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		));
	}
}
add_action( 'widgets_init', 'tst_widgets_init' );


/**
 * Enqueue scripts and styles
 */
function tst_scripts() {
	
	$url = get_template_directory_uri();
		
	wp_enqueue_style('gfonts', 'http://fonts.googleapis.com/css?family=Open+Sans|PT+Serif&subset=latin,cyrillic', array());	
	wp_enqueue_style('defaults', $url.'/css/defaults.css', array());	
	wp_enqueue_style('design', $url.'/css/design.css', array('dashicons'));
	
	
	wp_enqueue_script('front', $url.'/js/front.js', array('jquery'), '1.0', true);
	
}
add_action( 'wp_enqueue_scripts', 'tst_scripts' );

function tst_admin_scripts() {
	
	$url = get_template_directory_uri();	
	
	wp_enqueue_style('tst-admin', $url.'/css/admin.css', array());
	
}
add_action( 'admin_enqueue_scripts', 'tst_admin_scripts' );

/**
 * Custom additions.
 */
require get_template_directory().'/inc/template-tags.php';
require get_template_directory().'/inc/extras.php';
require get_template_directory().'/inc/related.php';
require get_template_directory().'/inc/events.php';
require get_template_directory().'/inc/home.php';

