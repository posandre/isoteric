<?php
/**
 * Woocommerce no products found Block template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
} else {
    $id = 'reviews-carousel-' . $block['id'];
}

$classes= array('no-products-found');

if( !empty($block['className']) ) {
    $classes[] = $block['className'];
}

if( !empty($block['align']) ) {
    $classes[] = 'align-' . $block['align'];
}

// Retrieve the custom message from ACF (Advanced Custom Fields)
$message = get_field('no_found_message');

// If no custom message is set, define a default message
if (!$message) {
    $message = '
        <p class="has-medium-font-size"><strong>' . __('Nothing found', 'esotericism') . '</strong></p>
        <p>' . __('You can try', 'esotericism') . '
            <a class="wc-link-clear-any-filters" href="#"> ' . __('clearing all filters', 'esotericism') . '</a> ' .
        __('or visit the ', 'esotericism') .
        '<a class="wc-link-stores-home" href="#"> ' . __('home page', 'esotericism') . '</a>
        </p>   
    ';
}

// Wrap the message in a div with dynamic ID and classes
$message = '<div id="' . $id . '" class="' . implode(' ', $classes) . '">' . $message . '</div>';

// Display the message if in the admin area
if (is_admin()) {
    echo $message;
}

// Check if the current page is a product category page
if (is_product_category()) {
    $term = get_queried_object();
    $children = get_term_children($term->term_id, 'product_cat');

    // Check if there are no subcategories
    if (empty($children)) {
        // Check if there are no products in the category
        if (!have_posts()) {
            echo $message;
        }
    }
}
