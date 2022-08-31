<?php

get_header();

$mainSponsors = getMainSponsors();
$subSponsors = getSubSponsors();
?>
<div class="content-container container">
    <div class="row">
        <?php
        ?>
        <div class="col-12">
            <h1>Sponsors</h1>
            <h2>Hoofdsponsor</h2>
            <div class="sponsors">
                <div class="archive-sponsor col-11 col-md-12 col-lg-11">
                    <?php
                    $mainSponsorIndex = 0;
                    foreach ($mainSponsors as $mainSponsor) {
                        $mainSponsor_logo = get_the_post_thumbnail_url($mainSponsor->ID);
                        $mainSponsor_website = get_field('website', $mainSponsor->ID);
                        $mainSponsor_sponsor = get_field('hoofdsponsor', $mainSponsor->ID);


                        if ($mainSponsorIndex % 2 === 0) {
                            echo "<div class='archive-sponsor__item archive-sponsor__main col-md-5 col-11'>";
                        } else {
                            echo "<div class='archive-sponsor__item archive-sponsor__main col-md-5 offset-md-1 col-11'>";
                        }
                        echo "<a href='" . $mainSponsor_website . "' target='blank'>";
                        echo "<img class='archive-sponsor__item-logo' src='" . $mainSponsor_logo . "' />";
                        echo '</a></div>';

                        $mainSponsorIndex++;
                    }
                    ?>
                </div>
                <h2>Overige sponsoren</h2>
                <div class="archive-sponsor col-11 col-md-12 col-lg-11">
                    <?php
                    $subSponsorIndex = 0;
                    foreach ($subSponsors as $subSponsor) {
                        $subSponsor_logo = get_the_post_thumbnail_url($subSponsor->ID);
                        $subSponsor_website = get_field('website', $subSponsor->ID);
                        $subSponsor_sponsor = get_field('hoofdsponsor', $subSponsor->ID);

                        if ($subSponsorIndex % 2 === 0) {
                            echo "<div class='archive-sponsor__item archive-sponsor__sub col-md-4 col-11'>";
                        } else {
                            echo "<div class='archive-sponsor__item archive-sponsor__sub col-md-4 offset-md-1 col-11'>";
                        }

                        echo "<a href='" . $subSponsor_website . "' target='blank'>";
                        echo "<img class='archive-sponsor__item-logo' src='" . $subSponsor_logo . "' />";
                        echo '</a></div>';

                        $subSponsorIndex++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

wp_footer();
?>
