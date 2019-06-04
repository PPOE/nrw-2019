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
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '3.4.1', true); 
    wp_enqueue_script('main', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ppat_scripts');