<?php
/**
 * Additional image sizes
 *
 * @author Julian Seidl <julian.seidl@piratenpartei.at>
 */

function ppat_image_sizes() {
    add_image_size('boilerplate-slider', 1920, 1080);
    add_image_size('boilerplate-thumbnail', 300, 300);
    add_image_size('header-image', 1080, 9999);
}
add_action('after_setup_theme', 'ppat_image_sizes');