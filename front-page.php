<?php get_header() ?>

<?php get_template_part('/components/home-banner') ?>
<!--</?php get_template_part('/components/socials') ?>-->

<section class="featured-builds">
    <div class="container">
        <div class="featured-builds-title">
            <div class="before-title"></div>
            <h2>Featured Builds</h2>
        </div>
        <br>
        <div class="columns is-multiline">
            <?php $homepagePosts = new WP_Query(array(
                'post_type'         => 'portfolio',
                'posts_per_page'    => 6,
                'meta_key'          =>  'meta-checkbox',
                'meta_value'        =>  'yes'
            ));
            while ($homepagePosts->have_posts()): $homepagePosts->the_post(); ?>
            <div class="column is-one-third-desktop is-half-tablet">
                <a href="<?php the_permalink(); ?>">
                    <div class="card">
                        <?php the_post_thumbnail(); ?>
                        <h3><?php the_title(); ?></h3>
                        <p><strong>Built with: </strong><?php the_field('expertise'); ?></p>
                    </div>
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>
</section>

<?php get_footer() ?>