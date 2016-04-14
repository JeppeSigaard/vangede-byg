<?php

/*
Title: Tilpasset logo for side
Post Type: page
scope: post_meta
order: 1
*/

piklist('field', array(
    'type' => 'file',
    'field' => 'page_logo',
    'label' => 'Tilføj logo',
    'button' => 'Tilføj logo',
    'description' => __('Hjemmesidens standard logo i header erstattes for denne side og dens undersider','smamo'),
    'options' => array(
      'modal_title' => __('Tilføj logo','smamo'),
        'button' => __('Tilføj','smamo')
    )
 ));