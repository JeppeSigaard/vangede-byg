<?php 
global $wp_query;
if (isset($_GET['pdf']) || isset($wp_query->query_vars['pdf'])){
    get_template_part('template-parts/pdf/generator');
}

else{
    get_header(); 

    if (is_home() || is_front_page()){
        get_template_part('templates/home');
    }

    elseif (is_single() || is_singular() || is_page() ) {

        get_template_part('templates/single');
    }

    elseif(is_archive() || is_tax() ){
        get_template_part('templates/archive');
    }

    get_footer(); 
}