<?php
/*
Template Name: Vrijwilliger worden
*/
get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>
        <div class="container content-container">
            <div class="row">
                <div class="col">
                    <h1>
                        <?php echo get_the_title(); ?>
                    </h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php
    endwhile;

    include('template-parts/vrijwilliger.php');
endif;

get_footer();
?>
