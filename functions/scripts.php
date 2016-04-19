<?php 

add_action('wp_enqueue_scripts','theme_enqueue_scripts');
function theme_enqueue_scripts(){

    //wp_enqueue_style( 'work-sans', '//fonts.googleapis.com/css?family=Work+Sans:400,700,300', false, false, 'all' );
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/style/style.css', false, false, 'all' );
    
    wp_deregister_script('jquery');
    wp_register_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js',array(),'1',true);
    wp_enqueue_script('jquery');
    
    wp_register_script('lightbox',get_template_directory_uri() .'/scripts/assets/lightbox.js',array('jquery'),'1',true);
    wp_register_script('lightbox-settings',get_template_directory_uri() .'/scripts/modules/lightbox-settings.js',array('jquery','lightbox'),'1',true);
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/scripts/script.min.js' , array('jquery'), false, true);
    
}