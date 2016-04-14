<?php 

/*
Template name: kontaktside

*/

get_header(); ?>


<section class="article-section">
    <main>
        <?php while(have_posts() ) : the_post(); if ( has_post_thumbnail()) :?>
        <?php get_template_part('template-parts/common/article-header'); ?>
        <?php endif; ?>
        <article>
            <?php get_template_part('template-parts/common/article-content');?>
            <?php get_template_part('template-parts/common/kontaktliste');?>
        </article>
        <?php endwhile; ?>
    </main>
    <aside class="fixed-aside">
        <div class="inner">
            <?php get_template_part('template-parts/sidebar/sidemenu',get_post_type(get_the_ID())); ?>
            <?php get_template_part('template-parts/sidebar/sidebar-widgets'); ?>
        </div>
    </aside>
</section>


<?php  get_footer();