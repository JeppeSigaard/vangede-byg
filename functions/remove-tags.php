<?php 

add_action('init', function(){
    unregister_taxonomy_for_object_type('post_tag', 'post');
});