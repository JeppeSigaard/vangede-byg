<?php 
$crumbs = array();

if ( is_page() ){
    
    $anc = get_ancestors(get_the_ID(),'page');
    if($anc){
        foreach($anc as $a){
            $c = get_post($a);
            
            $crumbs[] = array(
                'link' => get_the_permalink($a),
                'name' => $c->post_title,
            );
        }
        
    }
    
    $crumbs[] = array(
        'link' => false,
        'name' => get_the_title(),
    );
}


/* ------------------ */
// Let's render the crumbs -->
if (!empty($crumbs)) : ?>
<div class="article-breadcrumbs">
    <?php foreach($crumbs as $crumb ) : if ($crumb['link'] !== false ) : ?>
    <a href="<?php echo $crumb['link'] ?>"><?php echo $crumb['name'] ?></a>
    <?php else : ?>
    <span><?php echo $crumb['name'] ?></span>
    <?php endif; endforeach;?>
</div>
<?php endif;