<?php 

/*
Title: Modtagne oplysninger
Post Type: email
scope: post_meta
order: 1
lock: true
*/

piklist('field', array(
    'type' => 'text',
    'field' => 'email_name',
    'label' => 'Navn',
    'attributes' => array(
        'class' => 'widefat',
    ),
));

piklist('field', array(
    'type' => 'text',
    'field' => 'email_email',
    'label' => 'Email',
    'attributes' => array(
        'class' => 'widefat',
    ),
));

piklist('field', array(
    'type' => 'text',
    'field' => 'email_phone',
    'label' => 'Telefonnummer',
    'attributes' => array(
        'class' => 'widefat',
    ),
));

piklist('field', array(
    'type' => 'textarea',
    'field' => 'email_message',
    'label' => 'Kommentar',
    'attributes' => array(
        'class' => 'widefat',
        'rows' => '10'
    ),
));