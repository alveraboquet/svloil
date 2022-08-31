<?php

get_header();

$sponsorLogo = get_field('logo');
?>
    <div class="container content-container main-container">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <a href="<?php echo get_permalink(); ?>">
                        <h1><?php the_title(); ?></h1>
                    </a>
                </div>
                <div class="col-3">
                    <img class="sponsorlogo" src="<?php echo $sponsorLogo['url']; ?>"/>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
