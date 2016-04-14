<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), '1600-900' ); ?>
<header class="article-header" data-bg="<?php echo $image_url[0] ?>">
    <?php get_template_part('template-parts/common/breadcrumbs'); ?>
</header>