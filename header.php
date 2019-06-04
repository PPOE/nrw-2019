<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php wp_title(); ?></title>
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php bloginfo('template_url'); ?>/img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="mobile-menu-wrapper" id="mobile-menu-container">
            <div class="mobile-menu">
                <nav>
                    <ul>
                        <?php 
                            wp_nav_menu(array( 
                                'theme_location' => 'main-menu', 
                                'container'  => '',
                                'items_wrap' => '%3$s'
                                ) 
                            );
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
        <header class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-7">
                        <a href="<?php echo get_option("siteurl"); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/img/PIRATENsignet.svg" alt="Piratenpartei" class="page-logo">
                        </a>
                    </div>
                    <div class="col-5 d-lg-none text-right">
                        <div class="display-table">
                            <div class="display-table-cell right">
                                <button class="hamburger hamburger--collapse" type="button">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="display-table">
                            <div class="display-table-cell right">
                                <nav class="main-navigation">
                                    <ul>
                                        <?php 
                                            wp_nav_menu(array( 
                                                'theme_location' => 'main-menu', 
                                                'container'  => '',
                                                'items_wrap' => '%3$s'
                                                ) 
                                            );
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>