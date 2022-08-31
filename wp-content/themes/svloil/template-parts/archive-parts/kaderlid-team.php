<?php

$teamname = $args['team'];
echo "<h2> $teamname </h2>";

$get_president = [
    'post_type' => 'kaderlid',
    'posts_per_page' => -1,
    'meta_key' => 'commissie',
    'orderby' => 'meta_value',
    'order' => 'DESC',
    'meta_query' => [
        [
            'key' => 'commissiefunctie',
            'value' => 'voorzitter',
            'compare' => '=',
        ],
        [
            'key' => 'commissie',
            'value' => $teamname,
            'compare' => 'LIKE',
        ],
    ],
];

$get_team = [
    'post_type' => 'kaderlid',
    'posts_per_page' => -1,
    'meta_key' => 'commissie',
    'orderby' => 'meta_value',
    'order' => 'DESC',
    'meta_query' => [
        [
            'key' => 'commissiefunctie',
            'value' => 'voorzitter',
            'compare' => '!=',
        ],
        [
            'key' => 'commissie',
            'value' => $teamname,
            'compare' => 'LIKE',
        ],
    ],
];
$query_president = new WP_Query($get_president);
$query_team = new WP_Query($get_team);

?>
<div class="table-responsive">
    <table class='table commissies'>
        <?php
        if ($query_president->have_posts()) :
            while ($query_president->have_posts()) :
                $query_president->the_post();
                ?>
                <tr>
                    <td>
                        <?php
                        echo get_field('naam'); ?>
                    </td>
                    <td>
                        <?php
                        echo get_field('commissiefunctie'); ?>
                    </td>
                    <td>
                        <?php
                        echo get_field('email'); ?>
                    </td>
                </tr>
            <?php
            endwhile;
            wp_reset_postdata();
        endif;
        if ($query_team->have_posts()) :
            while ($query_team->have_posts()) :
                $query_team->the_post();
                ?>
                <tr>
                    <td>
                        <?php
                        echo get_the_title(); ?>
                    </td>
                    <td>
                        <?php
                        echo get_field('commissiefunctie'); ?>
                    </td>
                    <td>
                        <?php
                        echo get_field('email'); ?>
                    </td>
                </tr>
            <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </table>
</div>
