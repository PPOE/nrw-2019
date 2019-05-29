<?php
/**
 * Configuration to allow the upload of .svg files
 *
 * @author Julian Seidl <julian.seidl@piratenpartei.at>
 */

function ppat_svg_mime_type($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'ppat_svg_mime_type');