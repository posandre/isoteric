<?php
/**
 * Review author block template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
} else {
	$id = 'block-review-author-' . $block['id'];
}

$review_id = get_the_ID();

$classes= array('block-review-author');

if( !empty($block['className']) ) {
	$classes[] = $block['className'];
}

if( !empty($block['align']) ) {
	$classes[] = 'align-' . $block['align'];
}

$review_author = get_field('review_author', $review_id);
$review_author_role = get_field('review_author_role', $review_id);
$review_author_photo_id = get_field('review_author_photo', $review_id);
?>

<div id="<?php echo $id; ?>" class="<?php echo esc_attr(implode(' ', $classes)); ?>">
    <?php if (!empty($review_id )) : ?>
        <?php if (!empty($review_author_photo_id)) :
            $photo_alt = get_post_meta($review_author_photo_id, '_wp_attachment_image_alt', true);
            ?>
            <div class="block-review-author__photo">
                <?php echo wp_get_attachment_image($review_author_photo_id, 'thumbnail', false, array('alt' => $photo_alt)); ?>
            </div>
        <?php endif; ?>
        <div class="block-review-author__info">
            <h4 class="block-review-author__name"><?php echo $review_author  ?></h4>
            <?php if (!empty($review_author_role)) : ?>
                <p class="block-review-author__role"><?php echo $review_author_role;?></p>
            <?php endif; ?>
	    <?php else: ?>
            <p><?php _e('Unknown author', 'esotericism'); ?></p>
        <?php endif; ?>
    </div>
</div>

