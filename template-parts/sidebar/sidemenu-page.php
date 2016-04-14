<?php 
$menu_setting = get_post_meta(get_the_ID(),'sidemenu_select',true);
$menu_custom = get_post_meta(get_the_ID(),'custom_menu_select',true);
$parents = get_post_ancestors( get_the_ID() );
foreach($parents as $parent){
    $s = get_post_meta($parent,'sidemenu_select',true);
    $c = get_post_meta($parent,'custom_menu_select',true);
    if ($s && $c){
        $menu_setting = $s;
        $menu_custom = $c;
    }
}

if ($menu_setting === 'custom' && $menu_custom) : 

wp_nav_menu(array(
    'menu' => esc_attr($menu_custom),
    'container' => false,
    'menu_class' => 'side-menu',
));


elseif(!$menu_setting || $menu_setting === 'auto' || $menu_setting === 'custom' && !$menu_custom) :
$current_id = get_the_ID();

$parents = get_post_ancestors( $current_id );
$parent_id = ($parents) ? $parents[count($parents)-1]: $post->ID;

$submenu_args = array(
    'post_type' => 'page',
    'posts_per_page' => -1,
    'post_parent' => $parent_id,
);

$submenu = new WP_Query($submenu_args);
if($submenu->have_posts()) :

?>

<ul class="side-menu">
    <?php while( $submenu->have_posts() ) : $submenu->the_post(); ?>
        <li class="menu-item<?php if (get_the_ID() === $current_id ) { echo ' current-menu-item';}  ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; wp_reset_postdata(); ?>
</ul>
<?php endif; endif;