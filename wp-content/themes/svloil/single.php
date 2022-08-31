<?php

get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>
        <div class="container main-container">
            <div class="row news single-news">
                <div class="col-12 news-image news-image__mobile">
                    <img src="<?php
                    echo get_field('afbeeldingsgroep')['afbeelding']; ?>"/>
                    <i><?php
                        echo get_field('afbeeldingsgroep')['bijschrift']; ?></i>
                </div>
                <div class="col-12 col-sm-8 news-content">
                    <?php
                    the_content(); ?>
                </div>
                <div class="col-4 news-image news-image__desktop">
                    <img src="<?php
                    echo get_field('afbeeldingsgroep')['afbeelding']; ?>"/>
                    <i><?php
                        echo get_field('afbeeldingsgroep')['bijschrift']; ?></i>
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
