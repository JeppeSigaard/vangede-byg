<?php 

/*
Title: Opret PDF
Post Type: page, post
scope: post_meta
order: 1
*/

piklist('field',array(
    'type' => 'checkbox',
    'field' => 'download_pdf',
    'label' => __('Opret PDF fra Artikel'),
    'choices' => array(
        'active' => 'aktiver',
    ),
));

piklist('field',array(
    'type' => 'file',
    'field' => 'pdf_gallery',
    'label' => __('Tilføj billeder'),
    'conditions' => array(
        array(
            'field' => 'download_pdf',
            'value' => 'active'
        ),
    ),
));

piklist('field',array(
    'type' => 'pdf-preview',
    'field' => 'pdf_preview',
    'label' => __('Forhåndsvisning'),
));