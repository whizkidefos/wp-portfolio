<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efosa Igbinehi</title>
    <!--<link rel="stylesheet" href="https://use.typekit.net/ngv0zbh.css">-->
    <?php wp_head() ?>
</head>
<body>

    <!-- <header class="">
        <nav class="navbar is-fixed-top py-3 px-3" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item logo" href="/">
                efosa.
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>

            <div class="navbar-menu" id="navMenu">
                <div class="navbar-end">
                    <a class="navbar-item  link-item-home" href="/">home</a>
                    <a class="navbar-item  link-item-about" href="/about">about</a>
                    <a class="navbar-item  link-item-portfolio" href="/portfolio">portfolio</a>
                    <a class="navbar-item  link-item-contact" href="/contact">contact</a>
                </div>
            </div>
        </nav>
    </header> -->

    <header class="top-bar">
        <nav class="">
            <div class="brand-logo">
                <a href="/" class="logo">i am efosa</a>
            </div>
            <div class="right-nav">
                <div class="main-menu">
                    <?php
                    $args = array(
                        'theme_location'     =>  'main-menu',
                        'container'          =>  'div',
                        'container_class'    =>  'main-navigation'
                    );
                    wp_nav_menu( $args );
                    ?>
                </div>

                <a class="burger">
                    <span class="burger-bar"></span>
                </a>

            </div>
        </nav>
    </header>