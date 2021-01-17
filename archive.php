<?php
get_header()
?>

<?php get_template_part('/components/socials') ?>

<section class="portfolio">
    <div class="portfolio-banner">
        <div class="container">
            <h1>Portfolio</h1>
            <article>
                <p>
                    If you build it, they will come. <br>
                    Due to the nature of my clients, I am unable to display the majority of my work.
                </p>
            </article>
        </div>
        <div class="portfolio-scroll">Scroll down</div>
    </div>
</section>

<section class="portfolio-all">
    <div class="container">
        <div class="columns is-multiline">
            <?php if(have_posts()): while(have_posts()): the_post() ?>
            <div class="column is-3-desktop is-6-tablet is-12-mobile">
                <a href="<?php the_permalink() ?>">
                    <div class="card">
                        <?php the_post_thumbnail(); ?>
                        <h3><?php the_title() ?></h3>
                        <p><strong>Built with: </strong><?php the_field('expertise'); ?></p>
                    </div>
                </a>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="portfolio-pagination has-text-centered">
            <?php echo paginate_links() ?>
        </div>
    </div>
</section>

<?php get_footer() ?>