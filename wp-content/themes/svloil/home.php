<?php

get_header();
?>
<div class="content-container container main-container">
    <div class="row news-row">
        <div class="col-12 news-overview">
            <h1>
                <?php
                single_post_title(); ?>
            </h1>
            <?php
            get_template_part('template-parts/news-overview'); ?>
        </div>
    </div>
</div>

<?php
get_footer(); ?>
