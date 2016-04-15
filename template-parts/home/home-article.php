<?php 

if (true == get_theme_mod('show_front_article',true)) :

$main_article = get_post(get_theme_mod('front_article'));

$heading = get_post_meta($main_article->ID,'page_title',true);
if (!$heading){$heading = $main_article->post_title;} 

$excerpt_length = (get_theme_mod('front_article_excerpt_length') !== '') ? esc_attr(get_theme_mod('front_article_excerpt_length')) :  '70';
$excerpt = wp_trim_words(wp_strip_all_tags($main_article->post_content), $num_words = $excerpt_length, $more = null);
?>
<section class="home-article">
    <main>
        <article>
            <header class="article-header">
                <h1><?php echo esc_attr($heading); ?></h1>
            </header>
            <div class="article-content">
                <?php echo $excerpt ?>
            </div>
            <a href="<?php echo get_permalink($main_article->ID) ?>" class="button">læs mere</a>
        </article>
    </main>
    <aside>
        <header class="aside-header">
            <h2>Aktuelt</h2>
        </header>
        <ul class="article-list skew">
            <?php   $i = 0;  while ( have_posts() ) : the_post(); $i++; if ($i < 4) : 
                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), '180-140' );
                    $download_link = get_post_meta(get_the_ID(),'download_pdf',true);
            ?>
            <li <?php post_class('article-list-item') ?>>
                <a class="inner" href="<?php the_permalink() ?>">
                    <div class="list-item-text">
                        <h3 class="list-item-header"><?php the_title(); ?></h3>
                        <span class="list-item-date"><?php the_date('F Y') ?></span>
                    </div>
                    <img src="<?php echo get_svg_uri('blank'); ?>" data-src="<?php echo $image_url[0] ?>">
                </a>
                <?php if ($download_link) : ?>
                <a target="blank" class="list-item-download circle-icon" href="<?php echo esc_url(get_bloginfo('url') .'?pdf='. get_the_ID()) ?>"><svg viewBox="-2 -2 37 37"><use xlink:href="#icon-pdf"></use></svg> Hent pdf</a>
                <?php endif; ?>
            </li>
            <?php endif; endwhile; ?>
        </ul>
    </aside>
</section>
<?php endif;