<?php
add_action('init', 'alv_custom_content', 20);
if(!function_exists('alv_custom_content')) {
function alv_custom_content(){
        
   
	register_taxonomy('attack_cat', array('attack'), array(
        'labels' => array(
            'name'                       => __('Attacks categories', 'alv'),
            'singular_name'              => __('Attacks category', 'alv'),
            'menu_name'                  => __('Categories', 'alv'),
            'all_items'                  => __('All Categories', 'alv'),
            'edit_item'                  => __('Edit Category', 'alv'),
            'view_item'                  => __('View Category', 'alv'),
            'update_item'                => __('Update Category', 'alv'),
            'add_new_item'               => __('Add new Category', 'alv'),
            'new_item_name'              => __('New Category Name', 'alv'),
            'parent_item'                => __('Parent Category', 'alv'),
            'parent_item_colon'          => __('Parent Category:', 'alv'),         
            'search_items'               => __('Search Categories', 'alv'),
            'popular_items'              => __('Popular categories', 'alv'),
            'separate_items_with_commas' => __('Separate with commas', 'alv'),
            'add_or_remove_items'        => __('Add or Remove Categories', 'alv'),
            'choose_from_most_used'      => __('Select from popular', 'alv'),
            'not_found'                  => __('Not found', 'alv'),
        ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_in_nav_menus' => false,
        'show_tagcloud'     => false,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'attack-type', 'with_front' => false),
    ));
	
	register_taxonomy('victim_type', array('attack'), array(
        'labels' => array(
            'name'                       => __('Victim categories', 'alv'),
            'singular_name'              => __('Victim category', 'alv'),
            'menu_name'                  => __('Victims', 'alv'),
            'all_items'                  => __('All Categories', 'alv'),
            'edit_item'                  => __('Edit Category', 'alv'),
            'view_item'                  => __('View Category', 'alv'),
            'update_item'                => __('Update Category', 'alv'),
            'add_new_item'               => __('Add new Category', 'alv'),
            'new_item_name'              => __('New Category Name', 'alv'),
            'parent_item'                => __('Parent Category', 'alv'),
            'parent_item_colon'          => __('Parent Category:', 'alv'),         
            'search_items'               => __('Search Categories', 'alv'),
            'popular_items'              => __('Popular categories', 'alv'),
            'separate_items_with_commas' => __('Separate with commas', 'alv'),
            'add_or_remove_items'        => __('Add or Remove Categories', 'alv'),
            'choose_from_most_used'      => __('Select from popular', 'alv'),
            'not_found'                  => __('Not found', 'alv'),
        ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_in_nav_menus' => false,
        'show_tagcloud'     => false,
        'show_admin_column' => false,
        'query_var'         => true,
        'rewrite'           => false //array('slug' => 'attack-type', 'with_front' => false),
    ));
	
    register_taxonomy('place_cat', array('place'), array(
        'labels' => array(
            'name'                       => __('Places categories', 'alv'),
            'singular_name'              => __('Places category', 'alv'),
            'menu_name'                  => __('Categories', 'alv'),
            'all_items'                  => __('All Categories', 'alv'),
            'edit_item'                  => __('Edit Category', 'alv'),
            'view_item'                  => __('View Category', 'alv'),
            'update_item'                => __('Update Category', 'alv'),
            'add_new_item'               => __('Add new Category', 'alv'),
            'new_item_name'              => __('New Category Name', 'alv'),
            'parent_item'                => __('Parent Category', 'alv'),
            'parent_item_colon'          => __('Parent Category:', 'alv'),         
            'search_items'               => __('Search Categories', 'alv'),
            'popular_items'              => __('Popular categories', 'alv'),
            'separate_items_with_commas' => __('Separate with commas', 'alv'),
            'add_or_remove_items'        => __('Add or Remove Categories', 'alv'),
            'choose_from_most_used'      => __('Select from popular', 'alv'),
            'not_found'                  => __('Not found', 'alv'),
        ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_in_nav_menus' => false,
        'show_tagcloud'     => false,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'place-type', 'with_front' => false),
    ));
	
    register_taxonomy('event_cat', array('event'), array(
        'labels' => array(
            'name'                       => __('Events categories', 'alv'),
            'singular_name'              => __('Events category', 'alv'),
            'menu_name'                  => __('Categories', 'alv'),
            'all_items'                  => __('All Categories', 'alv'),
            'edit_item'                  => __('Edit Category', 'alv'),
            'view_item'                  => __('View Category', 'alv'),
            'update_item'                => __('Update Category', 'alv'),
            'add_new_item'               => __('Add new Category', 'alv'),
            'new_item_name'              => __('New Category Name', 'alv'),
            'parent_item'                => __('Parent Category', 'alv'),
            'parent_item_colon'          => __('Parent Category:', 'alv'),         
            'search_items'               => __('Search Categories', 'alv'),
            'popular_items'              => __('Popular categories', 'alv'),
            'separate_items_with_commas' => __('Separate with commas', 'alv'),
            'add_or_remove_items'        => __('Add or Remove Categories', 'alv'),
            'choose_from_most_used'      => __('Select from popular', 'alv'),
            'not_found'                  => __('Not found', 'alv'),
        ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_in_nav_menus' => false,
        'show_tagcloud'     => false,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'event-type', 'with_front' => false),
    ));
    
     

    register_post_type('attack', array(
        'labels' => array(
            'name'               => __('Attacks', 'alv'),
            'singular_name'      => __('Attack', 'alv'),
            'menu_name'          => __('Attacks', 'alv'),
            'name_admin_bar'     => __('Add attack', 'alv'),
            'add_new'            => __('Add new attack', 'alv'),
            'add_new_item'       => __('Add attack', 'alv'),
            'new_item'           => __('New attack', 'alv'),
            'edit_item'          => __('Edit attack', 'alv'),
            'view_item'          => __('View attack', 'alv'),
            'all_items'          => __('All attacks', 'alv'),
            'search_items'       => __('Search attacks', 'alv'),
            'parent_item_colon'  => __('Parent attack', 'alv'),
            'not_found'          => __('No attacks found', 'alv'),
            'not_found_in_trash' => __('No attacks found in Trash', 'alv'),
       ),
        'public'             => true,
        'exclude_from_search'=> false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_nav_menus'  => false,
        'show_in_menu'       => true,
        'show_in_admin_bar'  => true,
        //'query_var'          => true,        
        'capability_type'    => 'post',
        //'has_archive'        => 'projects',
        'rewrite'            => array('slug' => 'attack', 'with_front' => false),
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor'),
        'taxonomies'         => array('attack_cat'),
   ));
       
    
    register_post_type('place', array(
        'labels' => array(
            'name'               => __('Places', 'alv'),
            'singular_name'      => __('Place', 'alv'),
            'menu_name'          => __('Places', 'alv'),
            'name_admin_bar'     => __('Add place', 'alv'),
            'add_new'            => __('Add new place', 'alv'),
            'add_new_item'       => __('Add place', 'alv'),
            'new_item'           => __('New place', 'alv'),
            'edit_item'          => __('Edit place', 'alv'),
            'view_item'          => __('View place', 'alv'),
            'all_items'          => __('All places', 'alv'),
            'search_items'       => __('Search places', 'alv'),
            'parent_item_colon'  => __('Parent place', 'alv'),
            'not_found'          => __('No places found', 'alv'),
            'not_found_in_trash' => __('No places found in Trash', 'alv'),
       ),
        'public'             => true,
        'exclude_from_search'=> false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_nav_menus'  => false,
        'show_in_menu'       => true,
        'show_in_admin_bar'  => true,
        //'query_var'          => true,        
        'capability_type'    => 'post',
        //'has_archive'        => 'members',
        'rewrite'            => array('slug' => 'place', 'with_front' => false),
        'hierarchical'       => true,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor'),
        'taxonomies'         => array('place_cat'),
   ));
	
	register_post_type('event', array(
        'labels' => array(
            'name'               => __('Events', 'alv'),
            'singular_name'      => __('Event', 'alv'),
            'menu_name'          => __('Events', 'alv'),
            'name_admin_bar'     => __('Add event', 'alv'),
            'add_new'            => __('Add new event', 'alv'),
            'add_new_item'       => __('Add event', 'alv'),
            'new_item'           => __('New event', 'alv'),
            'edit_item'          => __('Edit event', 'alv'),
            'view_item'          => __('View event', 'alv'),
            'all_items'          => __('All events', 'alv'),
            'search_items'       => __('Search events', 'alv'),
            'parent_item_colon'  => __('Parent event', 'alv'),
            'not_found'          => __('No events found', 'alv'),
            'not_found_in_trash' => __('No events found in Trash', 'alv'),
       ),
        'public'             => true,
        'exclude_from_search'=> false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_nav_menus'  => false,
        'show_in_menu'       => true,
        'show_in_admin_bar'  => true,
        //'query_var'          => true,        
        'capability_type'    => 'post',
        //'has_archive'        => 'members',
        'rewrite'            => array('slug' => 'event', 'with_front' => false),
        'hierarchical'       => true,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor'),
        'taxonomies'         => array('event_cat'),
   ));
    
    remove_post_type_support('page', 'comments');
   
}

}//if alv_custom_content


/* Alter post labels */
function alv_change_post_labels($post_type, $args){ /* change assigned labels */
    global $wp_post_types;
     
    if($post_type != 'post')
        return;
     
    $labels = new stdClass();
     
    $labels->name               = "Статьи"; 
    $labels->singular_name      = "Статья";
    $labels->add_new            = "Добавить новую";
    $labels->add_new_item       = "Добавить новую";
    $labels->edit_item          = "Редактировать статью";
    $labels->new_item           = "Новая";
    $labels->view_item          = "Просмотреть";
    $labels->search_items       = "Поиск";
    $labels->not_found          = "Не найдено";
    $labels->not_found_in_trash = "В Корзине статьи не найдены";
    $labels->parent_item_colon  = NULL;
    $labels->all_items          = "Все статьи";
    $labels->menu_name          = "Статьи";
    $labels->name_admin_bar     = "Статья";
     
    $wp_post_types[$post_type]->labels = $labels;
}
//add_action('registered_post_type', 'alv_change_post_labels', 2, 2);
 
function alv_change_post_menu_labels(){ /* change adming menu labels */
    global $menu, $submenu;
     
    $post_type_object = get_post_type_object('post');
    $sub_label = $post_type_object->labels->all_items;
    $top_label = $post_type_object->labels->name;
     
    /* find proper top menu item */
    $post_menu_order = 0;
    foreach($menu as $order => $item){
         
        if($item[2] == 'edit.php'){
            $menu[$order][0] = $top_label;
            $post_menu_order = $order;
            break;
        }
    }
     
    /* find proper submenu */
    $submenu['edit.php'][$post_menu_order][0] = $sub_label;
}
//add_action('admin_menu', 'alv_change_post_menu_labels');
 
function alv_change_post_updated_labels($messages){     /* change updated post labels */
    global $post;
         
    $permalink = get_permalink($post->ID);
         
    $messages['post'] = array(
         
    0 => '',
    1 => sprintf( 'Статья обновлена. <a href="%s">Просмотреть</a>', esc_url($permalink)),
    2 => "Пользовательское поле обновлено",
    3 => "Пользовательское поле удалено",
    4 => "Статья обновлена",   
    5 => isset($_GET['revision']) ? sprintf('Редакция статьи восстановлена из %s', wp_post_revision_title((int)$_GET['revision'], false)) : false,
    6 => sprintf('Статья опубликована. <a href="%s">Просмотреть</a>', esc_url($permalink)),
    7 => "Статья сохранена",
    8 => sprintf('Статья отправлена на рассмотрение. <a target="_blank" href="%s">Просмотреть</a>', esc_url(add_query_arg('preview','true', $permalink))),
    9 => sprintf('Статья запланирована. <a target="_blank" href="%s">Просмотреть</a>', esc_url(add_query_arg('preview','true', $permalink))),
    10 => sprintf('Черновик статьи обновлен. <a target="_blank" href="%s">Просмотреть</a>', esc_url(add_query_arg('preview', 'true', $permalink))) 
    );
 
    return $messages;
}
//add_filter('post_updated_messages', 'alv_change_post_updated_labels');


//add_action( 'p2p_init', 'apl_connection_types' );
function apl_connection_types() {
	p2p_register_connection_type( array(
		'name' => 'project_post',
		'from' => 'project',
		'to'   => 'post',
		'sortable'   => true,
		'reciprocal' => false,
		'prevent_duplicates' => true,
		'admin_box' => array(
			'show' => 'any',
			'context' => 'normal',
			'can_create_post' => true
		),
		'admin_column' => 'to'
	) );
		
}



