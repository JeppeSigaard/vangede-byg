<?php 
$heading = get_post_meta(get_the_ID(),'page_title',true);
if (!$heading){$heading = get_the_title();} 
?>

<h1 class="article-title"><?php echo $heading ?></h1>
<div class="article-content wp-styles">
   <?php the_content(); ?>
</div>