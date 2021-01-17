<?php get_header() ?>
<?php get_template_part('/components/socials') ?>

<section class="contact">
    <div class="container">
        <div class="columns">
            <div class="column is-half-desktop is-12-mobile is-offset-one-quarter-desktop">
                <h1>Get in touch</h1>
                <p>Ready to get started on a new project, need a fresh new look for your website, or just want to say hello? Feel free to drop me a line on WhatsApp, send a quick email, or use the form below.</p>
                <a href="mailto:me@iefosa.me" class="email" target="_blank"><i class="fad fa-envelope"></i> me@iefosa.me</a>
                <a href="https://api.whatsapp.com/send?phone=447388165778" class="whatsapp" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                <!--<a href="" class="telegram" target="_blank"><i class="fab fa-telegram"></i> Telegram</a>-->
                <br>
                <?php echo do_shortcode( '[wpforms id="153" title="false"]' ) ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>