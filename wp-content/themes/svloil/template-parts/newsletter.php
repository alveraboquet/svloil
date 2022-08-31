<div class="container content-container main-container">
    <div class="row">
        <div class="col">
            <h1>
                <?php
                echo get_the_title(); ?>
            </h1>
            <?php
            echo the_content();
            echo do_shortcode('[contact-form-7 id="864" title="Inschrijven nieuwsbrief"]'); ?>
        </div>
    </div>
</div>
