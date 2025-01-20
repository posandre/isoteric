<?php
/**
 * Product excerpt Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$short_description = wp_trim_words( get_the_excerpt(), 30, '...' );
?>

<div class="product-card__description"><?php echo $short_description; ?></div>
