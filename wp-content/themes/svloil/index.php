<?php
/*
Template Name: Index
*/

?>
<html>
<?php
get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>
        <div class="container content-container main-container index">
            <div class="row">
                <div class="col-11">
                    <h1>
                        <?php
                        echo get_the_title(); ?>
                    </h1>
                    <?php
                    the_content(); ?>
                </div>
            </div>
        </div>
    <?php
    endwhile;
endif;

get_footer();
?>
</html>
