<?php 
$show_slideshow = get_theme_mod('toggle_slideshow');
if ($show_slideshow) :

$slides = array();

// Hent fra posts?
if (true == get_theme_mod('show_latest_posts',true)){
    $post_args = array(
        'post_type' => 'post',
        'posts_per_page' => (get_theme_mod('post_slides_per_page') ) ? get_theme_mod('post_slides_per_page') : 6,
    );
    
    if (get_theme_mod('post_slides_cat') && get_theme_mod('post_slides_cat') !== '0'){
        $post_args['category'] = get_theme_mod('post_slides_cat');
    }
    
    $slide_posts = get_posts($post_args);
    foreach($slide_posts as $p) {
        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($p->ID), '1600-530' );
        
        $heading = get_post_meta($p->ID,'page_title',true);
        if (!$heading){$heading = $p->post_title;} 
        
        $slides[] = array(
            'url' => get_permalink($p->ID),
            'img' => $image_url[0],
            'title' => $heading,
        );   
    }
}

// Hent fra manuel selektion?
if (true == get_theme_mod('slide_metabox',true)){
    $meta_box_slides = get_posts(array(
        'post_type' => 'any',
        'posts_per_page' => -1,
        'meta_key' => 'show_in_slideshow',
        'meta_value' => '1',
    )); 

    foreach($meta_box_slides as $p){
        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($p->ID), '1600-530' );
        
        $heading = get_post_meta($p->ID(),'page_title',true);
        if (!$heading){$heading = $p->post_title;} 
        
        $slides[] = array(
            'url' => get_permalink($p->ID),
            'img' => $image_url[0],
            'title' => $heading,
        );   
    }
}

// Hent fra custom?
if (true == get_theme_mod('show_custom_slides',true)){
    foreach(get_theme_mod('custom_slides') as $p){
        
        if ( isset($p['slide_text']) && isset($p['slide_url']) && isset($p['slide_img'])){
            
            $image_url = wp_get_attachment_image_src( $p['slide_img'], '1600-530' );
            $slides[] = array(
                'url' => get_permalink($p['slide_url']),
                'img' => $image_url[0],
                'title' => $p['slide_text'],
            );   
            
        }
    }
}

if (!empty($slides)) :
?>
<section class="hero-banner">
    <?php foreach ($slides as $slide) : ?>
    <a class="hero-banner-item" href="<?php echo $slide['url'] ?>" data-bg="<?php echo $slide['img'] ?>">
        <div class="hero-banner-item-header"><h2><?php echo $slide['title'] ?></h2></div>
    </a>
    <?php endforeach; ?>
</section>
<?php endif; endif;