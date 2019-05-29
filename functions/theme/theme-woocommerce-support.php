<?php
/**
 * Declaration of WooCommerce support
 *
 * @author Julian Seidl <julian.seidl@piratenpartei.at>
 */

function ppat_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'ppat_woocommerce_support');