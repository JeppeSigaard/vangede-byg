<?php 
    
add_action( 'init', 'smamo_page_editor' );
function smamo_page_editor() {
	remove_post_type_support('page', 'editor');
    remove_post_type_support('post', 'editor');
}