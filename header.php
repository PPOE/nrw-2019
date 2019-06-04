<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
        <title><?php wp_title(); ?></title>
        <link href="<?php bloginfo('template_url'); ?>/img/favicon.ico" rel="icon" type="image/x-icon">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">NRW-Piratenparte</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Startseite</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Spenden</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Transparenz</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>