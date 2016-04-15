<?php 
$heading = get_post_meta(get_the_ID(),'page_title',true);
if (!$heading){$heading = get_the_title();} 

$download_link = get_post_meta(get_the_ID(),'download_pdf',true);
?>

<h1 class="article-title"><?php echo $heading ?></h1>
<?php if ($download_link) : ?>
    <a target="blank" class="article-download circle-icon" href="<?php echo esc_url(get_bloginfo('url') .'?pdf='. get_the_ID()) ?>"><svg viewBox="-2 -2 37 37"><use xlink:href="#icon-pdf"></use></svg> Hent pdf</a>
<?php endif; ?>
<div class="article-content wp-styles">
   <?php the_content(); ?>
</div>