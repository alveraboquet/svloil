<?php

get_header(); ?>
    <div class="container main-container content-container overview-container">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1">
                <h1>Kader</h1>
                <h2>Bestuur</h2>
                <?php
                $get_board_president = [
                    'post_type' => 'kaderlid',
                    'posts_per_page' => -1,
                    'meta_query' => [
                        [
                            'key' => 'bestuur',
                            'value' => '1',
                        ],
                        [
                            'key' => 'bestuursfunctie',
                            'value' => 'voorzitter',
                            'compare' => '=',
                        ],
                    ],
                ];

                $get_board = [
                    'post_type' => 'kaderlid',
                    'posts_per_page' => -1,
                    'meta_query' => [
                        [
                            'key' => 'bestuur',
                            'value' => '1',
                        ],
                        [
                            'key' => 'bestuursfunctie',
                            'value' => 'voorzitter',
                            'compare' => '!=',
                        ],
                    ],
                ];

                $query_board_president = new WP_Query($get_board_president);
                $query_board = new WP_Query($get_board);

                if ($query_board_president->have_posts()) :
                ?>
                <div class="table-responsive">
                    <table class='table commissies'>
                        <?php
                        while ($query_board_president->have_posts()) :
                            $query_board_president->the_post();
                            ?>
                            <tr>
                                <td>
                                    <?php
                                    echo get_the_title(); ?>
                                </td>
                                <td>
                                    <?php
                                    echo get_field('bestuursfunctie'); ?>
                                </td>
                                <td>
                                    <?php
                                    echo get_field('email'); ?>
                                </td>
                            </tr>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        endif;
                        if ($query_board->have_posts()) :
                        while ($query_board->have_posts()) :
                            $query_board->the_post();
                            ?>
                            <tr>
                                <td>
                                    <?php
                                    echo get_field('naam'); ?>
                                </td>
                                <td>
                                    <?php
                                    echo get_field('bestuursfunctie'); ?>
                                </td>
                                <td>
                                    <?php
                                    echo get_field('email'); ?>
                                </td>
                            </tr>
                        <?php
                        endwhile; ?>
                    </table>
                </div>
            <?php
            wp_reset_postdata();
            endif;

            get_template_part(
                'template-parts/archive-parts/kaderlid-team',
                null,
                ['team' => 'Seniorencommissie'],
            );
            get_template_part(
                'template-parts/archive-parts/kaderlid-team',
                null,
                ['team' => 'Jeugdcommissie'],
            );
            get_template_part(
                'template-parts/archive-parts/kaderlid-team',
                null,
                ['team' => 'Sponsorcommissie'],
            );
            ?>
            </div>
        </div>
    </div>

<?php
get_footer();
