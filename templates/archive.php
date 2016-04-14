<section class="article-section">
    <main>
        <?php if (have_posts()) : get_template_part('template-parts/common/article-header'); ?>
        <article>
            <?php $i = 0; while(have_posts() ) : the_post(); $i++; if ($i === 1) : ?>
            <?php get_template_part('template-parts/common/article-content');?>
            <?php elseif ($i === 2) : ?>
            <ul class="article-list skew white-bg article-style">
                <?php get_template_part('template-parts/common/list-item'); ?>
            <?php else: ?>
                <?php get_template_part('template-parts/common/list-item'); ?>
            <?php endif;  endwhile;?>
            </ul>
        </article>
        <?php else : ?>
        <article>
            <?php get_template_part('template-parts/common/article-content','none');?>
        </article>
        <?php endif; ?>
    </main>
    <aside class="fixed-aside">
        <div class="inner">
            <?php get_template_part('template-parts/sidebar/sidemenu-post'); ?>
        </div>
    </aside>
</section>