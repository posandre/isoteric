<?php
/**
 * Product excerpt Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$review_id = get_the_ID();

echo esotericism_get_review($review_id);



