<?php
/**
 * Basic theme configuration
 *
 * @author Julian Seidl <julian.seidl@piratenpartei.at>
 */

/**
 * Render WordPress AJAX URL
 */
function ppat_load_ajaxurl() {
    ?>
    <script>
        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    </script>
    <?php
}
add_action('wp_head', 'ppat_load_ajaxurl');

/**
 * Language file setup
 */
function ppat_language_setup() {
    load_theme_textdomain('ppatnrw', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'ppat_language_setup');

/**
 * Remove unnecessary clutter
 */
function ppat_remove_clutter() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'generator');

    if (class_exists('Vc_Manager')) {
        remove_action('wp_head', array(visual_composer(), 'addMetaData'));
    }
}
add_action('init', 'ppat_remove_clutter');