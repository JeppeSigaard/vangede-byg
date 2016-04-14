<?php 


add_action( 'init', 'smamo_add_testemonial' );

function smamo_add_testemonial() {
	register_post_type( 'citat', array(
		
        'menu_icon' 		 => 'dashicons-format-quote',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'citat' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array('title','editor'),
        'labels'             => array(
            
            'name'               => _x( 'Citater', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Citat', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Citater', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Citater', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'citat', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny citat', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se citat', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find citat', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt citat.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}

