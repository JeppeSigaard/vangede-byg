<?php 

if (true == get_post_meta(get_the_ID(),'page_widgets_active',true)) :
    $widget_areas = get_post_meta(get_the_ID(),'page_widgets',false);
    foreach($widget_areas as $area) : ?>
    
    <div class="widget-area <?php echo $area ?>">
        <?php dynamic_sidebar($area); ?>
    </div>
    
    <?php endforeach; endif;