<?php
$legals = array(
    'name'      => esc_attr(get_theme_mod('info_name')),
    'address'   => esc_attr(get_theme_mod('info_address')),
    'postby'    => esc_attr(get_theme_mod('info_post')) . ' ' . esc_attr(get_theme_mod('info_by')),
    'tlf'       => '<a href="'. smamo_tel(get_theme_mod('info_telefon')) .'">' . esc_attr(get_theme_mod('info_telefon')) . '</a>',
    'email'       => '<a href="mailto:'. antispambot(sanitize_email(esc_attr(get_theme_mod('info_email')))) .'">' . esc_attr(get_theme_mod('info_email')) . '</a>',
);
?>

<div class="footer-legal">
    <?php foreach ( $legals as $legal ) : ?>
    <span><?php echo $legal ?></span>
    <?php endforeach; ?>
</div>