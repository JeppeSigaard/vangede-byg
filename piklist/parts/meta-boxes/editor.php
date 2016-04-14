<?php 
   
/*
Title: Indhold
Post Type: page, post
order: 20

*/

piklist('field', array(
    'type' => 'editor',
    'scope' => 'post',
    'class' => 'no-label',
    'field' => 'post_content',
    'template' => 'field',
    'options' => array (
        'wpautop' => true,
        'media_buttons' => true, 
        'tabindex' => '',
        'editor_css' => '',
        'editor_class' => '',
        'teeny' => false,
        'dfw' => false,
        'tinymce' => true,
        'quicktags' => true,
    ),
));