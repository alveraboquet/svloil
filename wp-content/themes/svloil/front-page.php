<?php

get_header();
$upload = wp_upload_dir();
?>
<div class="container main-container front-page">
    <div class="row main-home">
        <div class="col-12 col-lg-8">
            <div class="row home-row">
                <?php
                get_template_part('template-parts/homepage/last-news'); ?>
            </div>
            <div class="row home-row">
                <?php
                get_template_part('template-parts/homepage/club-matches'); ?>
            </div>
            <div class="row home-row">
                <?php
                get_template_part('template-parts/homepage/activities'); ?>
            </div>
        </div>
        <div class="col-12 col-lg-4 home-sidebar">
            <?php
            get_template_part('template-parts/homepage/last-match', null, ['upload' => $upload]);
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>
