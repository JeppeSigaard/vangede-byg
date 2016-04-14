<?php 

$terms = get_terms('category',array('hide_empty' => 1));
$post_terms_array = array();
$post_terms = wp_get_post_terms(get_the_ID(), 'category');
foreach($post_terms as $term){
    $post_terms_array[] = $term->term_id;
}
?>
<ul class="side-menu">
    <li class="menu-item"><a href="<?php bloginfo('url'); ?>/aktuelt/">Seneste</a></li>
    <?php foreach ( $terms as $term) : if ($term->parent !== 0) : ?>
    <li class="menu-item<?php if(in_array($term->term_id, $post_terms_array)) {echo ' current-menu-item';} ?>"><a href="<?php echo get_term_link($term->term_id) ?>"><?php echo $term->name; ?></a></li>
    <?php endif; endforeach;  ?>
</ul>
<?php 