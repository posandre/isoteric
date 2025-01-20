<?php
/**
 * Reviews carousel Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$category = get_queried_object();

$image_id = get_field('header_image', $category);

if ( !empty($image_id) ) {
    $image = wp_get_attachment_image( $image_id, 'block-woocommerce-category-img' );
} elseif ((is_page() ) && has_post_thumbnail(get_the_ID()) ) {
	$image = get_the_post_thumbnail(get_the_ID(), 'block-woocommerce-category-img');
} else {
    $image = '<img src="' . get_template_directory_uri(). '/assets/images/category-default-background.jpg" alt="' . __('Category main image', 'esotericism') . '" />';
}
?>


<div class="block-woocommerce-category-image"><?php echo $image; ?></div>
