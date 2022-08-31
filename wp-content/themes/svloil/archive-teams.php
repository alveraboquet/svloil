<?php
get_header();

?>
<div class="container">
    <?php

    if (have_posts()) :
        while (have_posts()) :
            the_post();
            $teamPhoto = get_field('elftalfoto');
    ?>
            <div class="row">
                <div class="col-3">
                    <img class="team-photo" src="<?php echo $teamPhoto['url']; ?>" />
                </div>
                <div class="col">
                    <a href="<?php echo get_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </div>
            </div>
    <?php
        endwhile;

    endif;
    ?>
</div>
<?php
get_footer();
