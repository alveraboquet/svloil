<div class="col-11 col-sm-12 home-component">
    <div class="row">
        <?php
        $getActivities = [
            'post_type' => 'activity',
            'meta_query' => [
                [
                    'key' => 'date',
                    'value' => date('Y-m-d H:i:s'),
                    'compare' => '>=',
                ],
            ],
            'meta_key' => 'date',
            'orderby' => 'meta_value',
            'order' => 'ASC',
            'posts_per_page' => '3',
        ];
        $queryActivities = new WP_Query($getActivities);
        $numberOfActivities = count($queryActivities->posts);

        foreach ($queryActivities->posts as $activity) {
            $date = get_field('date', $activity->ID);
            $dateDay_num = strftime('%e', strtotime($date));
            $dateMonth = strftime('%B', strtotime($date));
            ?>
            <div class="<?php
            if ($numberOfActivities < 2) {
                echo 'col-sm-4';
            } else {
                echo 'col-sm';
            } ?> col-11 activity-item home-component">
                <a href="<?php
                echo get_permalink($activity->ID); ?>">
                    <p class="activity-item__date">
                        <?php
                        echo $dateDay_num . ' ' . $dateMonth; ?>
                    </p>
                    <p class="activity-item__name">
                        <?php
                        echo $activity->post_title; ?>
                    </p>
                    <p class="activity-item__description">
                        <?php
                        echo wp_trim_words($activity->post_content, 12, '..'); ?>
                    </p>
                </a>
            </div>
            <?php
        }

        wp_reset_postdata();
        ?>
    </div>
</div>
