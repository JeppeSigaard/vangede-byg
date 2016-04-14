<?php 

add_action('init',function(){
    add_theme_support('post-thumbnails');
    
    add_image_size('180-140', 180, 140, true);
    add_image_size('200-200', 200, 200, true);
    add_image_size('400-300', 400, 300, true);
    add_image_size('550-350', 550, 350, true);
    add_image_size('1600-530', 1600, 530, true);
    add_image_size('1600-900', 1600, 900, true);
    
});
