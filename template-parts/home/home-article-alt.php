<?php 

if (true == get_theme_mod('show_front_article',true)) :

$main_article = get_post(get_theme_mod('front_article'));

$heading = get_post_meta($main_article->ID,'page_title',true);
if (!$heading){$heading = $main_article->post_title;} 

$excerpt_length = (get_theme_mod('front_article_excerpt_length') !== '') ? esc_attr(get_theme_mod('front_article_excerpt_length')) :  '70';
$excerpt = wp_trim_words(wp_strip_all_tags($main_article->post_content), $num_words = $excerpt_length, $more = null);
?>
<section class="home-article home-article-alt">
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
</section>
<?php endif;