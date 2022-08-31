<?php

$mainSponsors = getMainSponsors();
$countLoop = 0;
if ($mainSponsors) {
    echo "<div class='row'>";
    foreach ($mainSponsors as $mainSponsor) {
        echo "<div class='col'>";
        echo "<img class='sponsorlogo' src='" . get_the_post_thumbnail_url($mainSponsor->ID) . "' />";
        echo '</div>';
        $countLoop++;

        if ($countLoop === 3) {
            break;
        }
    }
    echo '</div>';
}

//if ($mainSponsors) {
//    echo "<div class='row sponsor-head'>";
//    foreach ($mainSponsors as $mainSponsor) {
//        echo "<div class='row sponsor-head__item'>";
//        echo "<img class='sponsorlogo' src='" . get_the_post_thumbnail_url($mainSponsor->ID) . "' />";
//        echo '</div>';
//        $countLoop++;
//
//        if ($countLoop === 3) {
//            break;
//        }
//    }
//    echo '</div>';
//}

wp_reset_postdata();
