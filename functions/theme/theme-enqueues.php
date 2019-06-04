<?php
/**
 * Theme enqueues for styles and scripts
 *
 * @author Julian Seidl <julian.seidl@piratenpartei.at>
 */

/**
 * Style enqueues
 */
function ppat_styles() {
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'ppat_styles');

/**
 * Script enqueues
 */
function ppat_scripts() {
    wp_enqueue_script('main', get_template_directory_uri() . '/js/script.min.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'ppat_scripts');