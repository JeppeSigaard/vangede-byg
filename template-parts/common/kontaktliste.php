<?php 

$meb = new WP_Query(array(
    'post_type' => 'medarbejder',
    'posts_per_page' => -1,
));

if ( $meb->have_posts()) :



?>
<ul class="article-list white-bg article-style">
    <?php while ( $meb->have_posts() ) : $meb->the_post(); $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), '180-140' ); ?>
    <li class="article-list-item">
        <span class="inner">
            <div class="list-item-text">
                <h3 class="list-item-header"><?php echo esc_attr(get_post_meta(get_the_ID(),'mb_name',true)); ?></h3>
                <span class="list-item-position"><?php echo esc_attr(get_post_meta(get_the_ID(),'mb_position',true)); ?></span>
                <?php $tel = get_post_meta(get_the_ID(),'meb_phone',true ); if ($tel) : ?>
                <span class="list-item-phone">Tlf: <a href="tel:<?php echo smamo_tel($tel); ?>"><?php echo $tel ?></a></span>
                <?php endif; $mail = get_post_meta(get_the_ID(),'mb_email',true ); if ($mail) : ?>
                <span class="list-item-email">Mail: <a href="mailto:<?php echo $mail ?>"><?php echo $mail ?></a></span>
                <?php endif;  ?>
            </div>
            <img src="<?php echo get_svg_uri('blank'); ?>" data-src="<?php echo $image_url[0]; ?>">
        </span>
    </li>
    <?php endwhile; wp_reset_postdata(); ?>
</ul>
<?php endif; 