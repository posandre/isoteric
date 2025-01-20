<?php
/**
 * Product by review block template.
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

$classes= array('block-product-by-review');

if( !empty($block['className']) ) {
	$classes[] = $block['className'];
}

if( !empty($block['align']) ) {
	$classes[] = 'align-' . $block['align'];
}

$review_id = get_the_ID();
$post_id_by_review = get_field('product', $review_id );

$product_object = wc_get_product($post_id_by_review);
$product = get_post($post_id_by_review);
$title = get_the_title($post_id_by_review);

if ( $product_object ) {
    $image = $product_object->get_image('filter-panel-img', array('alt'=> $title, 'class'=>'block-product-by-review__img'));
    $text = $product_object->get_price_html();
} else {
    $image = get_the_post_thumbnail($post_id_by_review,'filter-panel-img', array('alt'=> $title, 'class'=>'block-product-by-review__img'));
    $text = false;
}



?>

<div class="<?php echo esc_attr(implode(' ', $classes)); ?>">
    <div class="block-product-by-review__container">
        <a href="<?php echo get_the_permalink($post_id_by_review);?>" class="block-product-by-review__header">
            <?php echo $image; ?>
            <h3 class="block-product-by-review__title"><?php echo $title ?></h3>
        </a>
        <?php if ($text) : ?>
        <div class="block-product-by-review__price">
            <?php echo $text ?>
        </div>
        <?php endif; ?>
    </div>
</div>

