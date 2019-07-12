<?php
/**
 * Includes required configuration files
 *
 * @author Julian Seidl <julian.seidl@piratenpartei.at>
 */

/**
 * General theme configuration
 */
require_once 'functions/theme/theme-setup.php';
require_once 'functions/theme/theme-menus.php';
require_once 'functions/theme/theme-enqueues.php';
require_once 'functions/theme/theme-allow-svg.php';
require_once 'functions/theme/theme-image-sizes.php';
require_once 'functions/theme/theme-tinymce.php';
require_once 'functions/theme/theme-lightbox.php';
require_once 'functions/theme/theme-helpers.php';
require_once 'functions/theme/theme-woocommerce-support.php';

require_once ABSPATH . 'wp-admin/includes/plugin.php';

/**
 * ACF - Option Pages
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}
