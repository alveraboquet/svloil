<?php

get_header();

if (have_posts()) :

    while (have_posts()) :
        the_post();
        ?>
        <div class="container main-container">
            <div class="row activity">
                <div class="col-11 col-sm-10 activity_content">
                    <?php
                    echo getContent(get_the_ID()); ?>
                </div>
            </div>
        </div>
    <?php
    endwhile;

else :
    _e('Sorry, no  posts matched your criteria.', 'textdomain');
endif;

get_footer();
?>
