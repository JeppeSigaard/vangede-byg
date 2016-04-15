<?php 

$smamo_p_ol = array();
$pages = get_pages();
foreach($pages as $page){
    $smamo_p_ol[$page->ID] = $page->post_title;
}

$smamo_cat_ol = array(
    '0' => 'Alle',
);
$cats = get_categories(array('hide_empty' => false));
foreach($cats as $cat){
    $smamo_cat_ol[$cat->term_id] = $cat->name;
}

Kirki::add_config( 'smamo_front_page_settings', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

// Forside panel
Kirki::add_panel( 'smamo_front_page_panel', array(
    'priority'    => 20,
    'title'       => __( 'Forside', 'smamo' ),
    'description' => __( 'Konfigurer sektioner på hjemmesidens forside', 'smamo' ),
) );

// Sektion -- Slideshow
Kirki::add_section( 'slideshow', array(
    'title'          => esc_attr__( 'Slideshow', 'smamo' ),
    'panel'          => 'smamo_front_page_panel',
    'capability'     => 'edit_theme_options',
) );

Kirki::add_field( 'smamo_front_page_settings', array(
    'type'        => 'toggle',
    'settings'    => 'toggle_slideshow',
    'label'       => __( 'Vis slideshow på forsiden', 'kirki' ),
    'section'     => 'slideshow',
    'default'     => true,
    'priority'    => 10,
) );


Kirki::add_field( 'smamo_front_page_settings', array(
	'type'        => 'checkbox',
	'settings'    => 'show_latest_posts',
	'label'       => __( 'Inkluder seneste artikler', 'smamo' ),
	'description' => __( 'Opretter automatisk et slideshow fra hjemmesidens arkiov over artikler', 'smamo' ),
	'section'     => 'slideshow',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'smamo_front_page_settings', array(
	'type'        => 'number',
	'settings'    => 'post_slides_per_page',
	'description'       => __( 'Antal', 'smamo' ),
	'section'     => 'slideshow',
	'default'     => '4',
	'priority'    => 10,
) );

Kirki::add_field( 'smamo_front_page_settings', array(
	'type'        => 'select',
	'settings'    => 'post_slides_cat',
	'description'       => __( 'Vis fra kategori(er)', 'smamo' ),
	'section'     => 'slideshow',
	'default'     => '0',
	'priority'    => 10,
    'multiple'    => 1,
    'choices'     => $smamo_cat_ol,
) );


Kirki::add_field( 'smamo_front_page_settings', array(
	'type'        => 'checkbox',
	'settings'    => 'slide_metabox',
	'label'       => __( 'TIlvælg manuelt artikler og sider', 'smamo' ),
    'description' => __( 'Opretter mulighed for tilvalg af visning i slideshow i redigeringen for en side eller en artikel', 'smamo' ),
	'section'     => 'slideshow',
	'default'     => '0',
	'priority'    => 10,
) );


Kirki::add_field( 'smamo_front_page_settings', array(
	'type'        => 'checkbox',
	'settings'    => 'show_custom_slides',
	'label'       => __( 'Inkluder egne slides', 'smamo' ),
    'description' => __( 'Opret dine egne slides ved at tilføje dem herunder', 'smamo' ),
	'section'     => 'slideshow',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'smamo_front_page_settings', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Tilføj ekstra slides', 'smamo' ),
	'section'     => 'slideshow',
	'priority'    => 10,
	'settings'    => 'custom_slides',
	'fields' => array(
		'slide_text' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Slide Tekst', 'smamo' ),
			'default'     => '',
		),
		'slide_url' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Slide URL', 'smamo' ),
			'default'     => '',
		),
        'slide_img' => array(
			'type'        => 'img',
			'label'       => esc_attr__( 'Slide billede', 'smamo' ),
			'default'     => '',
		),
	)
) );

// Sektion -- afdelinger
Kirki::add_section( 'afdeling', array(
    'title'          => esc_attr__( 'Afdelingsoversigt', 'smamo' ),
    'panel'          => 'smamo_front_page_panel',
    'capability'     => 'edit_theme_options',
) );

Kirki::add_field( 'smamo_front_page_settings', array(
    'type'        => 'toggle',
    'settings'    => 'toggle_afdeling',
    'label'       => esc_attr__( 'Vis afdelinger på forsiden', 'kirki' ),
    'description' => esc_attr__( 'Vi eller skjul oversigt over afdelinger på forsiden af hjemmesiden.', 'kirki-demo' ),
    'section'     => 'afdeling',
    'default'     => true,
    'priority'    => 10,
) );


Kirki::add_field( 'smamo_front_page_settings', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Afdelingskasser', 'smamo' ),
    'Description' => esc_attr__('Opret afdelingskasser, træk og slip for at sortere','smamo'),
	'section'     => 'afdeling',
	'priority'    => 10,
	'settings'    => 'afdeling_group',
	'default'     => array(
        array(
            'afdeling_header' => '',
            'afdeling_img' => '',
            'afdeling_link' => '',
            'afdeling_tel' => '',
        ),
        array(
            'afdeling_header' => '',
            'afdeling_img' => '',
            'afdeling_link' => '',
            'afdeling_tel' => '',
        ),
        array(
            'afdeling_header' => '',
            'afdeling_img' => '',
            'afdeling_link' => '',
            'afdeling_tel' => '',
        ),
        array(
            'afdeling_header' => '',
            'afdeling_img' => '',
            'afdeling_link' => '',
            'afdeling_tel' => '',
        ),
    ),
	'fields' => array(
		'afdeling_header' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Overskrift', 'smamo' ),
			'default'     => '',
		),
        
		'afdeling_img' => array(
			'type'        => 'image',
			'label'       => esc_attr__( 'Baggrundsbillede', 'smamo' ),
			'default'     => '',
		),
        
        'afdeling_link'   => array(
			'type'        => 'select',
            'choices'     => $smamo_p_ol,
			'label'       => esc_attr__( 'Link til', 'smamo' ),
			'default'     => '',
		),
        
        'afdeling_tel'   => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Telefonnummer', 'smamo' ),
			'default'     => '',
		),
	)
) );


// Sektion --- Forsideartikel
Kirki::add_section( 'front-article', array(
    'title'          => esc_attr__( 'Forsideartikel', 'smamo' ),
    'panel'          => 'smamo_front_page_panel',
    'capability'     => 'edit_theme_options',
) );

Kirki::add_field( 'smamo_front_page_settings', array(
	'type'        => 'toggle',
	'settings'    => 'show_front_article',
	'label'       => __( 'Inkluder en forsideartikel', 'smamo' ),
	'description' => __( 'Opretter et uddrag af en side på forsiden', 'smamo' ),
	'section'     => 'front-article',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'smamo_front_page_settings', array(
	'type'        => 'dropdown-pages',
	'settings'    => 'front_article',
	'label'       => __( 'Vælg en side, som vises i uddrag på forsiden', 'smamo' ),
	'section'     => 'front-article',
	'default'     => 'Vælg en forside',
	'priority'    => 10,
) );

Kirki::add_field( 'smamo_front_page_settings', array(
	'type'        => 'number',
	'settings'    => 'front_article_excerpt_length',
	'label'       => __( 'Indstil uddragets længde', 'smamo' ),
	'section'     => 'front-article',
	'default'     => '70',
	'priority'    => 13,
) );



// Sektion --- Testemonials
Kirki::add_section( 'testemonials', array(
    'title'          => esc_attr__( 'Citater', 'smamo' ),
    'panel'          => 'smamo_front_page_panel',
    'capability'     => 'edit_theme_options',
) );

Kirki::add_field( 'smamo_front_page_settings', array(
	'type'        => 'toggle',
	'settings'    => 'show_testemonials',
	'label'       => __( 'Inkluder citatslider', 'smamo' ),
	'description' => __( 'Opretter et slideshow over citater', 'smamo' ),
	'section'     => 'testemonials',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'smamo_front_page_settings', array(
	'type'        => 'number',
	'settings'    => 'testemonials_slides_per_page',
	'description'       => __( 'Antal citater', 'smamo' ),
	'section'     => 'testemonials',
	'default'     => 4,
	'priority'    => 10,
) );