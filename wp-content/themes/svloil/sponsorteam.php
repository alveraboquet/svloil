<?php

/*
Template Name: Sponsorcommissie
*/

get_header();

$get_sponsorteam_chairman = [
    'post_type' => 'kaderlid',
    'posts_per_page' => -1,
    'meta_key' => 'commissie',
    'orderby' => 'meta_value',
    'order' => 'DESC',
    'meta_query' => [
        'relation' => 'AND',
        [
            'key' => 'commissie',
            'value' => 'sponsorcommissie',
            'compare' => 'LIKE',
        ],
        [
            'key' => 'commissiefunctie',
            'value' => 'Voorzitter',
            'compare' => 'LIKE',
        ],
    ],
];
$query_sponsorteam_chairman = new WP_Query($get_sponsorteam_chairman);

$get_sponsorteam = [
    'post_type' => 'kaderlid',
    'posts_per_page' => -1,
    'meta_key' => 'commissie',
    'orderby' => 'meta_value',
    'order' => 'DESC',
    'meta_query' => [
        'relation' => 'AND',
        [
            'key' => 'commissie',
            'value' => 'sponsorcommissie',
            'compare' => 'LIKE',
        ],
        [
            'key' => 'commissiefunctie',
            'value' => 'Voorzitter',
            'compare' => 'NOT LIKE',
        ],
    ],
];
$query_sponsorteam = new WP_Query($get_sponsorteam);
?>
    <div class="container content-container main-container sponsorteam-page">
        <?php
        echo "<h1>" . get_the_title() . "</h1>";
        echo the_content();
        if ($query_sponsorteam_chairman->have_posts()) :
            while ($query_sponsorteam_chairman->have_posts()) :
                $query_sponsorteam_chairman->the_post();
                echo '<p>';
                echo "<span class='commissie-naam'>" . get_field('commissiefunctie') . ':</span>';
                echo '<span> ' . get_the_title() . '</span>';
                echo '</p>';
            endwhile;
            wp_reset_postdata();
        endif;

        if ($query_sponsorteam->have_posts()) :
            while ($query_sponsorteam->have_posts()) :
                $query_sponsorteam->the_post();
                echo '<p>';
                echo "<span class='commissie-naam'>" . get_field('commissiefunctie') . ':</span>';
                echo '<span> ' . get_the_title() . '</span>';
                echo '</p>';
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
<?php
get_footer();
