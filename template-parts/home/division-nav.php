<?php 
$show_afdeling = get_theme_mod('toggle_afdeling',true);
$afdelinger = get_theme_mod('afdeling_group');


if ($show_afdeling == true && $afdelinger) :
?>
<section class="division-nav">
<?php foreach ($afdelinger as $afd) :
    if (    isset($afd['afdeling_header'])
        &&  isset($afd['afdeling_img'])
        &&  isset($afd['afdeling_link'])
        &&  isset($afd['afdeling_tel'])
    ) :
    
    $link = get_permalink($afd['afdeling_link']);
    $image_url = wp_get_attachment_image_src( $afd['afdeling_img'], '400-300' );
    
?>
    <div class="division-nav-item">
        <a href="<?php echo $link ?>" data-bg="<?php echo $image_url[0] ?>">
            <h2  class="division-nav-item-header"><?php echo esc_attr($afd['afdeling_header']) ?></h2>
        </a>
        <a href="<?php echo smamo_tel($afd['afdeling_tel']) ?>" class="button">Ring nu <?php echo $afd['afdeling_tel'] ?></a>
    </div>
<?php endif; endforeach; ?>
</section>
<?php endif;