<?php
get_header();
?>
<div class="container content-container main-container">
    <div class="row">
        <div class="col-12 content">
            <div class="col-10">
                <h1><?php echo get_the_title(); ?></h1>
                <?php echo get_the_content(); ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>
