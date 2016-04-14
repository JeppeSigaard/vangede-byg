<?php 
$phone_label = esc_attr(get_theme_mod('info_telefon'));
if(!$phone_label){'+45 22 22 22 22';}
$phone_link = smamo_tel($phone_label);

function retrieve_page_meta_phone($post_id){
    if(get_post_meta($post_id,'page_telefon',true)){
        return get_post_meta($post_id,'page_telefon',true);
    }
    else {return false ;}
}


$parents = get_post_ancestors( get_the_ID() );
foreach($parents as $parent){
    $p = retrieve_page_meta_phone($parent);
    if ($p){
        $phone_label = $p;
        $phone_link = smamo_tel($p);
    }
}

$p = retrieve_page_meta_phone(get_the_ID());
if ($p){
    $phone_label = $p;
    $phone_link = smamo_tel($p);
}

?>
<a href="<?php echo $phone_link; ?>" class="top-banner-phone">
    <span class="circle-icon">
        <svg viewBox="0 0 32 32"><use xlink:href="#icon-telephone"></use></svg>
    </span>
    <span><?php echo $phone_label; ?></span>
</a>