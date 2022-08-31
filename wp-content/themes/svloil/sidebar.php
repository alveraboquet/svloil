<div class="col-lg-2 col-3 sidebar">
    <div class="side_sponsors">
        <?php
        $get_main_sponsor = array(
            'post_type' => 'sponsors',
            'meta_key' => 'hoofdsponsor',
            'meta_value' => 'Ja'
        );
        $query_main_sponsor = new WP_Query($get_main_sponsor);
        ?>
        <h4>Hoofdsponsor</h4>
        <?php
        if ($query_main_sponsor->have_posts()) :

            while ($query_main_sponsor->have_posts()) :
                $query_main_sponsor->the_post();
                $post_name = str_replace(' ', '_', get_the_title());
                $post_name = str_replace('-', '_', $post_name);

                $meta_values[] = get_post_meta($post->ID);
                ?>
                <div class="side_sponsor main_sponsor">
                    <?php
                    $logo_field = get_field('logo', get_the_id());
                    if ($logo_field) {
                        echo "<img src='" . esc_url($logo_field['url']) . "' alt='" . esc_attr($logo_field['alt']) . "' class='" . $post_name . "' />";
                    }
                    ?>
                </div>
                <?php
            endwhile;

            wp_reset_postdata();
        endif;

        $get_sponsors = array(
            'post_type' => 'sponsors',
        );
        $query_sponsors = new WP_Query($get_sponsors);
        ?>
        <hr />
        <h5>Overige sponsoren</h5>
        <?php
        if ($query_sponsors->have_posts()) :
            
            while ($query_sponsors->have_posts()) :
                $query_sponsors->the_post();
                $post_name = str_replace(' ', '_', get_the_title());
                $post_name = str_replace('-', '_', $post_name);

                $isSponsor = get_field('hoofdsponsor');
                $meta_values[] = get_post_meta($post->ID);

                if (!$isSponsor) {
                    ?>
                    <div class="side_sponsor">
                        <?php
                        $logo_field = get_field('logo', get_the_id());
                        if ($logo_field) {
                            echo "<img src='" . esc_url($logo_field['url']) . "' alt='" . esc_attr($logo_field['alt']) . "' class='" . $post_name . "' />";
                        }
                        ?>
                    </div>
                    <?php
                }
            endwhile;

            wp_reset_postdata();
        endif;
        ?>
    </div>
</div>
