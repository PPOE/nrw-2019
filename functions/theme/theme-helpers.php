<?php
/**
 * Various helper functions for usage in the templates
 *
 * @author Julian Seidl <julian.seidl@piratenpartei.at>
 */

/**
 * General theme configuration
 */
function ppat_custom_excerpt($length = 140, $append = '&hellip;') {
    $length = (int) $length;
    $text = get_the_excerpt();
    $text = trim(strip_tags($text));
    if (strlen($text) > $length) {
        $text = substr($text, 0, $length + 1);
        $words = preg_split('/[\s]|&nbsp;/', $text, -1, PREG_SPLIT_NO_EMPTY);
        preg_match('/[\s]|&nbsp;/', $text, $lastchar, 0, $length);
        if (empty($lastchar)) {
            array_pop($words);
        }
        $text = implode(' ', $words) . $append;
    }
    return $text;
}