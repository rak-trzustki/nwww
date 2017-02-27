<?php /**
 * Template name: Main
 */ ?>
<?php get_header(); ?>
<?php global $app; ?>
<?php $big_lead = $app->big_lead(); ?>

<?php get_template_part('inc/intro'); ?>
<div class="section page__content  " id="content" role="main">

    <div class="container">
        <div class="row flex_row">
            <div class="col-sm-12 col-xs-12 col-md-8">

                <?php get_template_part('promo-campaign'); ?>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4">
                <?php get_template_part('last-actions'); ?>


            </div>
        </div>
    </div>

</div>


<?php
if ($big_lead[0]) :

    $app->render('big-lead', [
        'classes' => 'c__b t__w',
        'text' => $big_lead[0]['content']
    ]);

endif; ?>
<section class="section section__posts">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 text-center">
                <h1>Aktualności</h1>

            </div>

            <?php global $app;
            $args = [
                'post_type' => 'post',
                'posts_per_page' => 6,
                'post_status' => 'publish'
            ];

            $posts = get_posts($args);

            foreach ($posts as $post) {
                setup_postdata($post);
                $app->render('post', [
                    'categories' => $app->cats($post->ID),
                    'img' => (has_post_thumbnail($post->ID)) ? get_the_post_thumbnail($post->ID, 'mid') : $app->get_placeholder(),
                    'title' => get_the_title($post->ID),
                    'content' => get_the_content(),
                    'link' => get_post_permalink($post->ID),
                    'time' => human_time_diff(get_post_time('U', $post->ID), current_time('timestamp')) . ' temu'

                ]);
                wp_reset_postdata();
            }

            ?>
            <div class="col-xs-12 text-left">

                <?php
                $app->render('link', [
                    'link' => get_post_type_archive_link('post'),
                    'text' => 'pokaż więcej',
                    'classes' => 'h1 line__over',
                ]);
                ?>
            </div>
        </div>
    </div>
</section>


<?php
if ($big_lead[1]) :

    $app->render('big-lead', [
        'classes' => 'c__y ',
        'text' => $big_lead[1]['content']
    ]);

endif; ?>

<?php get_footer(); ?>
