<?php

/*
template name: Aktuelt
*/
get_header(); 
$posts = new WP_Query(array(
    'post_type' => 'post',
));
?>
<section class="article-section">
    <main>
        <?php $i = 0; while($posts->have_posts() ) : $posts->the_post(); $i++; if ($i === 1) : ?>
        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), '1600-900' ); ?>
        <header class="article-header" data-bg="<?php echo $image_url[0] ?>"></header>
        <?php endif; endwhile; ?>
        <article>
            <?php $i = 0; while($posts->have_posts() ) : $posts->the_post(); $i++; if ($i === 1) : ?>
            <?php get_template_part('template-parts/common/article-content');?>
            <?php elseif ($i === 2) : ?>
            <ul class="article-list skew white-bg article-style">
                <?php get_template_part('template-parts/common/list-item'); ?>
            <?php else: ?>
                <?php get_template_part('template-parts/common/list-item'); ?>
            <?php endif;  endwhile; ?>
            </ul>
        </article>
    </main>
    <aside class="fixed-aside">
        <div class="inner">
            <?php get_template_part('template-parts/sidebar/sidemenu', 'aktuelt'); ?>
        </div>
    </aside>
</section>
<?php get_footer();