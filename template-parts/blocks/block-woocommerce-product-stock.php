<?php
/**
 * Woocommerce product stock Block Template.
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

$classes= array('product-stock__container');

if( !empty($block['className']) ) {
	$classes[] = $block['className'];
}

if( !empty($block['align']) ) {
	$classes[] = 'align-' . $block['align'];
}
$message = '';

$product = wc_get_product( get_the_ID());

if (is_product() && !empty($product)) {
	if ($product->is_in_stock()) {
		$message = '<span class="in-stock">' . __('In stock', 'esotericism') . '</span>';
	} else {
		$message = '<span class="out-stock">' . __('Not available', 'esotericism') . '</span>';
	}
} else {
	$message = '<span class="unknown-stock">' . __('Check availability', 'esotericism') . '</span>';
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr(implode(' ', $classes)); ?>">
	<?php echo $message; ?>
</div>