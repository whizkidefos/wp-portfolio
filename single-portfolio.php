<?php get_header() ?>

<section class="single-portfolio">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="columns">
            <div class="column">
                <div class="blurb-title">
                    <i class="far fa-dot-circle"></i>
                    <h4>Objective</h4>
                </div>
                <?php the_field('objective'); ?>
            </div>
            <div class="column">
                <div class="blurb-title">
                    <i class="far fa-calendar-check"></i>
                    <h4>Launch Date</h4>
                </div>
                <?php the_field('launch_date'); ?>
            </div>
            <div class="column">
                 <div class="blurb-title">
                    <i class="fad fa-code-merge"></i>
                    <h4>Built with: </h4>
                </div>
                <?php the_field('expertise'); ?>
            </div>
        </div>
        
        <div class="columns">
            <div class="column is-8">
                <?php the_post_thumbnail(); ?>
                <br>
                <a href="<?php echo get_site_url(); ?>/portfolio" class="btn"><i class="fas fa-arrow-left"></i> Go back</a>
            </div>
            <article class="column is-4 portfolio-content">
                <p><?php the_content(); ?></p>
                <a href="<?php the_field('link'); ?>" class="btn" target="_blank">Visit site <i class="fas fa-arrow-right"></i></a>
            </article>
        </div>
        
    </div>

    <!--<aside class="project-tags">
        </?php the_tags(''); ?>
    </aside>-->
</section>

<?php get_footer() ?>