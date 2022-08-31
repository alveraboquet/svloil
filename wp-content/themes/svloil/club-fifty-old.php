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
