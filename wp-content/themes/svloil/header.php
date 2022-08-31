<?php

include('head.php'); ?>
<body>
<div class="header">
    <div class="container">
        <div class="col-12">
            <div class="header-top row">
                <div class="header-col brand-col col-4 col-sm-3 col-lg-2">
                    <a href="<?php
                    echo get_bloginfo('wpurl'); ?>" class="brand">
                        <img class="brand-logo" alt="logo" src="<?php
                        echo getLogo('/2022/02/logo_2022.png'); ?>"/>
                    </a>
                </div>
                <div class="header-col header-logo__split col">
                </div>
                <div class="header-col header-sponsors col-7 col-md-4 col-lg-6">
                    <?php
                    get_template_part('template-parts/header/sponsors'); ?>
                </div>
                <div class="socials col">
                    <div class="social-item">
                        <div class="social-bar">
                            <a href="https://www.facebook.com/SVLoil-543851518975050/" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com/loilvoetbal" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/s.v.loil/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu">
                <nav class="navbar navbar-expand-md navbar-light" role="navigation">
                    <?php
                    wp_nav_menu(
                        [
                            'theme_location' => 'primary',
                            'depth' => 3,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse col-md col-9',
                            'container_id' => 'bs-example-navbar-collapse-1',
                            'menu_class' => 'nav navbar-nav main-menu',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker(),
                        ],
                    );
                    ?>
                    <div class="col header-text__col">
                        <img class="header-text__image" alt="Hier wil ik blieven"
                             src="http://svloil.nl/wp-content/uploads/2022/03/tekst-002-1.png"/>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php
if (is_single()) {
    if (get_post_type() === 'post' || get_post_type() === 'activity') {
        ?>
        <div class="header-image">
            <div class="container">
                <div class="header-image-text">
                    <h1>
                        <?php
                        echo get_the_title(); ?>
                    </h1>
                    <br/>
                    <?php
                    if (get_post_type() === 'post') {
                        echo '<i>' . get_the_date() . '</i>';
                    }
                    if (get_post_type() === 'activity') {
                        echo '<i>' . date('d-m-Y', strtotime(get_field('date'))) . '</i>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
} else { ?>
    <div class="header-slider">
        <?php
        echo do_shortcode('[sp_wpcarousel id="785"]'); ?>
    </div>
    <?php
}
?>
