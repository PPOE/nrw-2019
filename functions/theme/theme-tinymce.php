<?php
/**
 * TinyMCE custom styles
 *
 * @author Julian Seidl <julian.seidl@piratenpartei.at>
 */

/**
 * Add custom styles to TinyMCE
 */
function ppat_add_editor_styles() {
    add_editor_style('css/editor.min.css');
}
add_action('init', 'ppat_add_editor_styles');

/**
 * Remove buttons from TinyMCE
 */
function ppat_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'ppat_buttons_2');

/**
 * Add theme specific formats to TinyMCE
 */
function ppat_before_init_insert_formats($init_array) {
    $style_formats = array(
        array(
            'title' => __('Uppercase text', 'ppatnrw'),
            'inline' => 'span',
            'classes' => 'text-uppercase',
            'wrapper' => false
        ),
        array(
            'title' => __('Intro text', 'ppatnrw'),
            'block' => 'div',
            'classes' => 'intro',
            'wrapper' => true
        )
    );

    $init_array['style_formats'] = json_encode($style_formats);  
    return $init_array;
}
add_filter('tiny_mce_before_init', 'ppat_before_init_insert_formats');