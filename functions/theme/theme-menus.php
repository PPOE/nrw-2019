<?php
/**
 * Theme menu configuration
 *
 * @author Julian Seidl <julian.seidl@piratenpartei.at>
 */

/**
 * Register menus
 */
function ppat_register_menus() {
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'ppatnrw'),
            'footer-menu' => __('Footer Menu', 'ppatnrw'),
        )
    );
}
add_action('init', 'ppat_register_menus');