<?php
/**
 * Template Name: About
 */
get_header() ?>

<section class="about-page">
    <div class="container about-page-banner">
        <img src="<?php t() ?>/images/efosa-working.jpg" alt="project image">
        <!--<div class="image-overlay"></div>-->

        <div class="about-page-banner-title">
            <!--<div class="before-title"></div>-->
            <h1>About Me</h1>
        </div>

        <div class="about-page-banner-content">
            <h4>Designer. Thinker. Coder.</h4>
            <p>
                Everyday, I strive for perfection and high quality. <br>
                I do the work I do because I love it. I like the industry. I like the people I meet. I like to talk tech & stuff. I embrace the nerd. I love jazz. I like to make the web a better place.
                Hopefully, we cross paths in the real world someday and we can make it a better place, together.
            </p>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="featured-builds-title">
            <div class="before-title"></div>
            <h2>What I do</h2>
        </div>
        <br>
        <div class="columns">
            <div class="column services-single">
                <i class="fab fa-sketch"></i>
                <div class="services-content">
                    <h3>UX Design</h3>
                    <p>The look and feel of a website or webapp. The experiences the app provides from initial load, through navigation, all the way down to how a button/text looks and feels.</p>
                </div>
            </div>
            <div class="column services-single">
                <i class="fas fa-terminal"></i>
                <div class="services-content">
                    <h3>Custom Builds</h3>
                    <p>End-to-end build of custom web applications using both frontend and backend technologies. Think taking concepts from ideation phase to a production ready prototype.</p>
                </div>
            </div>
            <div class="column services-single">
                <i class="fas fa-layer-group"></i>
                <div class="services-content">
                    <h3>PWA</h3>
                    <p>Progressive Web Apps(PWA) - web apps with a completely native feel as far as experience, layout and functionality, regardless of device. They can be installed on any device.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>