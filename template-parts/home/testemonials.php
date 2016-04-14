<?php 

if (get_theme_mod('show_testemonials', true) == 'true') :

$posts_per_page = (get_theme_mod('testemonials_slides_per_page') !== '') ? get_theme_mod('testemonials_slides_per_page') : 4;
$testemonial = new WP_Query( array(
    'post_type' => 'citat',
    'posts_per_page' => $posts_per_page,
));

if ( $testemonial->have_posts() ) : ?>
<section class="testemonial-spinner">
    <?php while ( $testemonial->have_posts() ) : $testemonial->the_post(); ?>
    <a href="#" class="testemonial">
        <h2> <?php the_title(); ?></h2>
        <blockquote>
            <?php the_content(); ?>
        </blockquote>
    </a>
    <?php endwhile; wp_reset_postdata(); ?>
</section>
<?php endif; endif;