<link rel="stylesheet" href="<?php
echo get_stylesheet_directory_uri() . '/assets/css/style.css'; ?>">
<link rel="stylesheet" href="<?php
echo get_stylesheet_directory_uri() . '/assets/css/responsive.css'; ?>">
<link rel="stylesheet" href="<?php
echo get_stylesheet_directory_uri() . '/assets/css/teams.css'; ?>">
<link rel="stylesheet" href="<?php
echo get_stylesheet_directory_uri() . '/assets/css/sponsors.css'; ?>">
<link rel="stylesheet" href="<?php
echo get_stylesheet_directory_uri() . '/assets/css/sidebar.css'; ?>">
<link rel="stylesheet" href="<?php
echo get_stylesheet_directory_uri() . '/assets/css/menu.css'; ?>">
<link rel="stylesheet" href="<?php
echo get_stylesheet_directory_uri() . '/assets/css/news.css'; ?>">
<link rel="stylesheet" href="<?php
echo get_stylesheet_directory_uri() . '/assets/css/slider.css'; ?>">
<link rel="stylesheet" href="<?php
echo get_stylesheet_directory_uri() . '/assets/css/forms.css'; ?>">
<link rel="stylesheet" href="<?php
echo get_stylesheet_directory_uri() . '/assets/css/activity.css'; ?>">
<link rel="stylesheet" href="<?php
echo get_stylesheet_directory_uri() . '/assets/css/sportlink.css'; ?>">
<link rel="stylesheet" href="<?php
echo get_stylesheet_directory_uri() . '/assets/css/block.css'; ?>">
<?php
if (is_single() && (get_post_type() === 'post' || get_post_type() === 'activity') && has_post_thumbnail()) {
    ?>
    <style>
        .header-image {
            background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>);
        }
    </style>
    <?php
} else {
    ?>
    <style>
        .header-image {
            background-image: url(<?php echo get_theme_mod('main_image_setting'); ?>);
        }
    </style>
    <?php
}
?>
