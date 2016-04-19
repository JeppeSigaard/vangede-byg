<?php 

add_filter( 'post_gallery', 'smamo_media_gallery', 10, 3 );
function smamo_media_gallery( $output = '', $atts, $instance ) {
    wp_enqueue_script('lightbox');
    wp_enqueue_script('lightbox-settings');
    ob_start(); ?>
    
    <ul class="gallery" id="smamo-gallery-<?php echo $instance ?>">
    
    <?php $i= 0; 
    
    $more = count(explode(',',$atts['ids'])) - 4;
    $more = '+'.$more;
    foreach ( explode(',',$atts['ids']) as $id) : 
    
        $i++; 
        $full = wp_get_attachment_image_src($id,'full');
        $large = wp_get_attachment_image_src($id,'550-350');
        $medium = wp_get_attachment_image_src($id,'200-200');
    
        if($i === 1) : ?>
        <li class="large">
            <a data-lightbox="<?php echo $instance ?>" class="img" href="<?php echo $full[0] ?>" data-bg="<?php echo $large[0] ?>">
                <span class="circle-icon"><svg viewBox="0 0 32 32"><use xlink:href="#icon-expand"></use></svg></span>
            </a>
        </li>
        <?php elseif ($i < 5) : ?>
        <li class="small">
            <a data-lightbox="<?php echo $instance ?>" class="img" href="<?php echo $full[0] ?>" data-bg="<?php echo $medium[0] ?>">
               <span class="circle-icon"><svg viewBox="0 0 32 32"><use xlink:href="#icon-expand"></use></svg></span>
            </a>
        </li>
        <?php else : ?>
        <li><a data-lightbox="<?php echo $instance ?>" href="<?php echo $full[0] ?>"></a></li>
        <?php endif; endforeach; ?>
    </ul>
    <?php return ob_get_clean(); 
}
?>