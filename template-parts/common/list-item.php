<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), '180-140' );?>
<li class="article-list-item">
    <a class="inner" href="<?php the_permalink(); ?>">
        <div class="list-item-text">
            <h3 class="list-item-header"><?php the_title(); ?></h3>
            <span class="list-item-date"><?php the_date('F Y') ?></span>
        </div>
        <img src="<?php echo get_svg_uri('blank') ?>" data-src="<?php echo  $image_url[0] ?>">
    </a>
    <a class="list-item-download circle-icon" href="#"><svg viewBox="-2 -2 37 37"><use xlink:href="#icon-pdf"></use></svg> Hent pdf</a>
</li>