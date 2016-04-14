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
));

piklist('field', array(
    'type' => 'text',
    'field' => 'email_email',
    'label' => 'Email',
));

piklist('field', array(
    'type' => 'text',
    'field' => 'email_telefon',
    'label' => 'Telefonnummer',
));

piklist('field', array(
    'type' => 'text',
    'field' => 'email_firma',
    'label' => 'Evt. firmanavn',
));

piklist('field', array(
    'type' => 'textarea',
    'field' => 'email_comment',
    'label' => 'Kommentar',
    'attributes' => array(
        'class' => 'widefat',
        'rows' => '10'
    ),
));