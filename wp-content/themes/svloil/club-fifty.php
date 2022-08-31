<?php
/*
Template Name: Club van 50
*/

get_header();

$sponsors_clubFifty = getClubFifty();
?>
    <div class="content-container container main-container team-container">
        <div class="row">
            <div class="col-12">
                <h1><?php
                    echo get_the_title(); ?></h1>
                <div class="sponsors">
                    <div class="archive-sponsor col-11 col-md-7">
                        <?php
                        foreach ($sponsors_clubFifty as $clubFifty_member) {
                            $memberLogo = get_field('logo', $clubFifty_member->ID)['url'];
                            $memberWebsite = get_field('website', $clubFifty_member->ID);
                            echo "<div class='archive-sponsor__item col-md-8'>";
                            echo "<a href='" . $memberWebsite . "' target='blank'>";
                            echo "<img class='archive-sponsor__item-logo' src='" . $memberLogo . "' />";
                            echo '</a></div>';
                        }
                        if (empty($sponsors_clubFifty)) {
                            echo "<p>Er zijn geen Club van 50-leden.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();

//<?php
//
//$teamname = $args['team'];
//echo "<h2> $teamname </h2>";
//
//$get_president = [
//    'post_type' => 'kaderlid',
//    'meta_key' => 'commissie',
//    'orderby' => 'meta_value',
//    'order' => 'DESC',
//    'meta_query' => [
//        [
//            'key' => 'commissiefunctie',
//            'value' => 'voorzitter',
//            'compare' => '=',
//        ],
//        [
//            'key' => 'commissie',
//            'value' => $teamname,
//            'compare' => 'LIKE',
//        ],
//    ],
//];
//
//$get_team = [
//    'post_type' => 'kaderlid',
//    'meta_key' => 'commissie',
//    'orderby' => 'meta_value',
//    'order' => 'DESC',
//    'meta_query' => [
//        [
//            'key' => 'commissiefunctie',
//            'value' => 'voorzitter',
//            'compare' => '!=',
//        ],
//        [
//            'key' => 'commissie',
//            'value' => $teamname,
//            'compare' => 'LIKE',
//        ],
//    ],
//];
//$query_president = new WP_Query($get_president);
//$query_team = new WP_Query($get_team);
//
//?>
<!--<div class="table-responsive">-->
<!--    <table class='table commissies'>-->
<!--        --><?php
//        if ($query_president->have_posts()) :
//            while ($query_president->have_posts()) :
//                $query_president->the_post();
//                ?>
<!--                <tr>-->
<!--                    <td>-->
<!--                        --><?php
//                        echo get_field('naam'); ?>
<!--                    </td>-->
<!--                    <td>-->
<!--                        --><?php
//                        echo get_field('commissiefunctie'); ?>
<!--                    </td>-->
<!--                    <td>-->
<!--                        --><?php
//                        echo get_field('email'); ?>
<!--                    </td>-->
<!--                </tr>-->
<!--            --><?php
//            endwhile;
//            wp_reset_postdata();
//        endif;
//        if ($query_team->have_posts()) :
//            while ($query_team->have_posts()) :
//                $query_team->the_post();
//                ?>
<!--                <tr>-->
<!--                    <td>-->
<!--                        --><?php
//                        echo get_the_title(); ?>
<!--                    </td>-->
<!--                    <td>-->
<!--                        --><?php
//                        echo get_field('commissiefunctie'); ?>
<!--                    </td>-->
<!--                    <td>-->
<!--                        --><?php
//                        echo get_field('email'); ?>
<!--                    </td>-->
<!--                </tr>-->
<!--            --><?php
//            endwhile;
//            wp_reset_postdata();
//        endif;
//        ?>
<!--    </table>-->
<!--</div>-->
