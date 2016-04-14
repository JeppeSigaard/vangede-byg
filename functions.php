<?php 

// get_functions_part([$filnavn],[$undermappe]);
function smamo_include_functions_part_if_exists($fetch, $in = false){
    if ($in){$fetch = $in . '/' . $fetch;}
    $fetch = get_template_directory() . '/functions/' . $fetch . '.php';
    if(file_exists($fetch)){include_once $fetch;} 
}

function get_functions_part($fetch, $in = false){
    if(is_array($fetch)){foreach($fetch as $p){smamo_include_functions_part_if_exists($p,$in);}}
    else{smamo_include_functions_part_if_exists($fetch,$in);} 
}

// Hent svg fil og inkluder, fra statics/svg eller fullpath
function get_svg($path = false, $fullpath = false){
    if(!$path){return;}
    $path = esc_attr($path);
    
    if (!$fullpath){
        $path = get_template_directory() . '/statics/svg/' . $path . '.svg';
    }
    
    if(file_exists($path)){
        require $path;
    }
}

function get_svg_uri($path = false, $fullpath = false){
    if(!$path){return;}
    $path = esc_attr($path);
    
    if(!$fullpath){
        $check_path = get_template_directory() . '/statics/svg/' . $path . '.svg';
    
        if(file_exists($check_path)){
            return get_template_directory_uri() . '/statics/svg/' . $path . '.svg';
        }
    }
    else{
        if(file_exists($path)){
            return esc_url($path);
        }
    }
}

function get_svg_path_from_uri($path = false){
    if(!$path){return;}
    
    $uri = esc_url(get_bloginfo('url'));
    $path = str_replace($uri, ABSPATH, esc_url($path));
    if(file_exists($path)){return $path;}
}

function include_svg_path_from_uri($path = false){
    if(!$path){return;}
    $path = get_svg_path_from_uri($path);
    if(file_exists($path)){require $path;}
}

// Rendér telefonnummer
function smamo_tel($str){
    $str = str_replace('+','00',$str);
    return 'tel:' . esc_attr(preg_replace('/[^0-9]/', '', $str));    
}

/* lesgo! */
get_functions_part(array(
    'images',
    'menus',
    'scripts',
    'hide-piklist',
    'remove-tags',
    'post-labels',
    'remove-page-editor',
    'piklist'
));


get_functions_part(array(
    'email',
    'testemonial',
),'post-types');



if (class_exists('Kirki')){
    get_functions_part(array(
        'siteinfo',
        'slideshow',
        'front-page',
        'forsideartikel',
        'aktuelt',
        'testemonial',
    ),'kirki');
}