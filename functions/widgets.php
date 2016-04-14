<?php 



add_action('init',function(){
    
    $widget_areas = array(
        'none' => '(vælg fra listen)',
        'widget-area-1' => 'Område 1',
        'widget-area-2' => 'Område 2',
        'widget-area-3' => 'Område 3',
        'widget-area-4' => 'Område 4',
        'widget-area-5' => 'Område 5',
        'widget-area-6' => 'Område 6',
    );
    
    add_theme_support('widgets');
    foreach($widget_areas as $area => $name){
        if ($area !== 'none'){
            register_sidebar( array(
                'name' => __( $name, 'smamo' ),
                'id' => $area,
                'before_widget' => '<div id="%1$s" class="widget wp-styles %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="sidebar-widget-title">',
                'after_title'   => '</h2>',
            ) );
        }
    }   
});