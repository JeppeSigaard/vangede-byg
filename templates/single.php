<section class="article-section">
    <main>
        <?php while(have_posts() ) : the_post(); ?>
        <?php get_template_part('template-parts/common/article-header'); ?>
        <article>
            <?php get_template_part('template-parts/common/article-content');?>
        </article>
        <?php endwhile; ?>
    </main>
    <aside class="fixed-aside">
        <div class="inner">
            <?php get_template_part('template-parts/sidebar/sidemenu',get_post_type(get_the_ID())); ?>
        </div>
    </aside>
</section>