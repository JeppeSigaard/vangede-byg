<?php 

/*
Title: Slideshow for side
Post Type: page
scope: post_meta
order: 1
*/

piklist('field',array(
    'type' => 'checkbox',
    'field' => 'page_slider_active',
    'label' => 'Opret slideshow på siden',
    'description' => __('Aktiver slideshow for denne side. Slideshow erstatter visning af billedet i sidens top','smamo'),
    'choices' => array(
        'active' => 'aktivér',
    ),
));

piklist('field',array(
    'type' => 'file',
    'field' => 'page_slider',
    'label' => 'Tilføj billeder',
    'conditions' => array(
        array(
            'field' => 'page_slider_active',
            'value' => 'active',
        ),
    ),
    'options' => array(
      'modal_title' => __('Tilføj billede','smamo'),
        'button' => __('Tilføj','smamo')
    )
));