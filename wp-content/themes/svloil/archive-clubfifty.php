<?php

get_header(); ?>
    <div class="container main-container content-container overview-container">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1">
                <h1>Club van 50</h1>
                <?php
                $get_clubFifty = ['post_type' => 'clubfifty'];
                $query_clubFifty = new WP_Query($get_clubFifty);
                ?>
                <div class="table-responsive">
                    <table class='table commissies'>
                        <?php
                        if ($query_clubFifty->have_posts()) :
                            while ($query_clubFifty->have_posts()) :
                                $query_clubFifty->the_post();
                                ?>
                                <tr>
                                    <td>
                                        <?php
                                        echo get_the_title(); ?>
                                    </td>
                                </tr>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
