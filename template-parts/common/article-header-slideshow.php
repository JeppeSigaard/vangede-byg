<?php $slide_img = get_post_meta(get_the_ID(),'page_slider',false); ?>
<header class="article-header article-header-slideshow">
    <?php foreach($slide_img as $img) : $image_url = wp_get_attachment_image_src( $img, '1600-900' ); if (isset($img[0])) : ?>
    <div class="article-header-slideshow-item loading" data-bg="<?php echo $image_url[0] ?>"></div>
    <?php endif; endforeach; ?>   
    <?php get_template_part('template-parts/common/breadcrumbs'); ?>
</header>


