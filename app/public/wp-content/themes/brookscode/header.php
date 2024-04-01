<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <div class="container">
        <header class="site-header">
            <section class="top-bar">
                <div class="container">
                    <div class="logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="contact">
                        <button class="contact-button">
                            Hit Me Up!
                        </button>
                    </div>
                </div>
            </section>
            <section class="menu-area">
                <div class="container">
                    <nav class="menu-items">
                        <?php wp_nav_menu( array (
                            'theme_location' => 'brookscode_main_menu',
                            'depth' => 2
                        )); ?>
                        <button class="burger-menu">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </button>
                    </nav>
                </div>
            </section>
        </header>