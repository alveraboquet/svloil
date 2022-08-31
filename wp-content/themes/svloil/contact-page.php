<?php
/*
Template Name: Contactpagina
*/
get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <div class="container content-container">
            <div class="row">
                <div class="col-sm-10 col-12">
                    <h1>
                        <?php echo get_the_title(); ?>
                    </h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
<?php
    endwhile;

    require 'template-parts/contact.php';
else :
    _e('Sorry, no  posts matched your criteria.', 'textdomain');
endif;

get_footer();
?>
