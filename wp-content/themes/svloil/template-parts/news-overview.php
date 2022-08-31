<div class="row home-row">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();

            $item_image = get_the_post_thumbnail_url(get_the_ID()) ?: get_theme_mod('main_image_setting'); ?>
            <div class="col-sm-5 col-11 news-overview__item post-item">
                <a href="<?php
                echo get_permalink(get_the_ID()); ?>">
                    <div class="home-news__item-image post-item__image">
                        <div style="background-image: url('<?php
                        echo $item_image; ?>') "></div>
                    </div>
                    <div class="home-news__item-content">
                        <p class="home-news__item-title">
                            <?php
                            echo get_the_title(); ?>
                        </p>
                        <p class="home-news__item-text">
                            <?php
                            echo getExcerpt(get_the_ID()); ?>
                        </p>
                    </div>
                </a>
            </div>
        <?php
        endwhile;
        ?>
        <div class="pagination-element">
            <?php
            svLoil_pagination(); ?>
        </div>
    <?php
    endif; ?>
</div>


