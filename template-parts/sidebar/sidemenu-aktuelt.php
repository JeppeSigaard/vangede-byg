<?php 

$terms = get_terms('category',array('hide_empty' => 0));

?>
<ul class="side-menu">
    <li class="menu-item current-menu-item"><a href="<?php bloginfo('url'); ?>/aktuelt/">Seneste</a></li>
    <?php foreach ( $terms as $term) : if ($term->parent !== 0) : ?>
    <li class="menu-item"><a href="<?php echo get_term_link($term->term_id) ?>"><?php echo $term->name; ?></a></li>
    <?php endif; endforeach;  ?>
</ul>