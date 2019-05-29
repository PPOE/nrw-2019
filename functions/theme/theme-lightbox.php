<?php
/**
 * Lightbox configuration
 *
 * @author Julian Seidl <julian.seidl@piratenpartei.at>
 */

/**
 * Configuration for single images
 */
function ppat_add_lightbox_rel($content) {
    global $post;
    $pattern = '/<a(.*?)href=("|")(.*?).(bmp|gif|jpeg|jpg|png)("|")(.*?)>/i';
    $replacement = '<a$1href=$2$3.$4$5 rel="lightbox" $6>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}
add_filter('the_content', 'ppat_add_lightbox_rel');

/**
 * Configuration for galleries
 */
function ppat_add_gallery_lightbox_rel($attachment_link) {
    global $post;
    $attachment_link = str_replace('<a', '<a rel="lightbox"', $attachment_link);
    return $attachment_link;
}
add_filter('wp_get_attachment_link', 'ppat_add_gallery_lightbox_rel');