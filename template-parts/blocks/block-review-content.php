<?php
/**
 * Review content block template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
} else {
	$id = 'block-product-by-review-' . $block['id'];
}

$review_id = get_the_ID();

$classes= array('block-review-content');

if( !empty($block['className']) ) {
	$classes[] = $block['className'];
}

if( !empty($block['align']) ) {
	$classes[] = 'align-' . $block['align'];
}

$review_type = get_field('review_type', $review_id);
?>

<div id="<?php echo $id; ?>" class="<?php echo esc_attr(implode(' ', $classes)); ?>">
	<?php
	switch($review_type) {
		case 'text':
			echo '<blockquote>' . get_field('review_text', $review_id) .'</blockquote>';
			break;
		case 'video':
			echo get_field('review_video', $review_id);
			break;

		default:
			echo '<p>' . __('Unknown review type', 'esotericism') .'</p>';;
	}
	?>
</div>

