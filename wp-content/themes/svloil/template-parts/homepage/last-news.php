<?php

$news_items = 4;
$news_item_count = 0;
$recent_posts = wp_get_recent_posts(
    [
        'numberposts' => $news_items,
        'post_status' => 'publish',
    ],
);

foreach ($recent_posts as $post_item) {
    $item_image = get_the_post_thumbnail_url($post_item['ID']) ?: get_theme_mod('main_image_setting');
    if (($news_item_count % 2) !== 0) {
        echo '<div class="col-11 col-sm-12 col-md-5 offset-md-1 home-news__item home-news__item-right post-item">';
    } else {
        echo '<div class="col-11 col-sm-12 col-md-5 home-news__item home-news__item-left post-item">';
    }
    ?>
    <a href="<?php
    echo get_permalink($post_item['ID']); ?>">
        <div class="home-news__item-image post-item__image">
            <div style="background-image: url('<?php
            echo $item_image; ?>')"></div>
        </div>
        <div class="home-news__item-content">
            <p class="home-news__item-title">
                <?php
                echo $post_item['post_title']; ?>
            </p>
            <p class="home-news__item-text">
                <?php
                echo getExcerpt($post_item['ID']); ?>
            </p>
        </div>
    </a>
    <?php
    echo '</div>';
    $news_item_count++;

    if (($news_item_count % 2) !== 0 || $news_item_count === $news_items) {
        continue;
    }

    echo '</div><div class="row home-row">';
}
?>
