<?php

add_action( 'init', 'smamo_add_emails' );

function smamo_add_emails() {
	register_post_type( 'email', array(
		
        'menu_icon' 		 => 'dashicons-email',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => array( 'slug' => 'email' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 23,
		'supports'           => array(''),
        'labels'             => array(
            
            'name'               => _x( 'Kontaktformular', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Email', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Emails', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Emails', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'email', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny email', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se email', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find email', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Ingen emails i arkivet', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}