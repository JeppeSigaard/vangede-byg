<?php 

function smamo_change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Aktuelt';
    $menu[5][6] = 'dashicons-feedback';
    $submenu['edit.php'][5][0] = 'Se alle artikler';
    $submenu['edit.php'][10][0] = 'Tilføj artikel';
    
    echo '';
}
function smamo_change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Artikler';
        $labels->singular_name = 'artikel';
        $labels->add_new = 'Tilføj artikel';
        $labels->add_new_item = 'Tilføj artikel';
        $labels->edit_item = 'Rediger artikel';
        $labels->new_item = 'Artikel';
        $labels->view_item = 'se artikel';
        $labels->search_items = 'find artikel';
        $labels->not_found = 'Ingen artikler fundet';
        $labels->not_found_in_trash = 'Papirkurven er tom';
}



add_action( 'init', 'smamo_change_post_object_label' );
add_action( 'admin_menu', 'smamo_change_post_menu_label' );