<?php
/**
 * Reviews carousel Block Template.
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

$classes= array(
            'reviews-carousel__container',
            'reviews-carousel__container--' . get_field('products_collection_color_schema'
	    )
);

if( !empty($block['className']) ) {
    $classes[] = $block['className'];
}

if( !empty($block['align']) ) {
    $classes[] = 'align-' . $block['align'];
}

$reviews_count = get_field('reviews_count') ? get_field('reviews_count') : 5;
$reviews_display_count = get_field('reviews_display_count') ? get_field('reviews_display_count') : 4;

$args = array (
    'post_type'      => 'review',
    'numberposts'    => $reviews_count,
    'orderby'        => 'date',
    'order'          => 'DESC',
);

if (is_single() && get_post_type() == 'review' ) {
	$args['exclude'] = array(get_the_ID());
}

if (is_page()) {
    $review_ids = esotericism_get_reviews_ids($reviews_count, get_the_ID());

    if (!empty($review_ids)) {
        $args['include'] = $review_ids;
    }
}

$reviews = get_posts($args);
?>

<div class="<?php echo esc_attr(implode(' ', $classes)); ?>">
    <?php if (!empty($reviews)) : ?>
        <div id="<?php echo esc_attr($id); ?>" class="owl-carousel owl-theme reviews-carousel">
            <?php foreach ($reviews as $review) :
                $review_author = get_field('review_author', $review->ID);
                $review_author_role = get_field('review_author_role', $review->ID);
                $review_author_photo_id = get_field('review_author_photo', $review->ID);
                $review_type = get_field('review_type', $review->ID);
                ?>
            <div class="reviews-carousel__item">
                <div class="reviews-carousel__item-container reviews-carousel__item-container--<?php echo esc_attr($review_type); ?>">
                    <div class="reviews-carousel__header">
                        <?php if (!empty($review_author_photo_id)) :
                            $photo_alt = get_post_meta($review_author_photo_id, '_wp_attachment_image_alt', true);
                            ?>
                            <div class="reviews-carousel__photo">
                                <?php echo wp_get_attachment_image($review_author_photo_id, 'reviews-author-img', false, array('alt' => $photo_alt)); ?>
                            </div>
                        <?php endif; ?>
                        <div class="reviews-carousel__author">
                            <h4 class="reviews-carousel__author-name"><?php echo $review_author  ?></h4>
                            <?php if (!empty($review_author_role)) : ?>
                                <p class="reviews-carousel__author-role"><?php echo $review_author_role;?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="reviews-carousel__content">
                        <?php
                        switch($review_type) {
                            case 'text':
                                echo '<p data-cut-height="264" class="cut-text">' . get_field('review_text', $review->ID) .'</p>';
                                break;
                            case 'video':
                                echo get_field('review_video', $review->ID);
                                break;

                            default:
                                _e('Unknown review type', 'esotericism');
                        }
                        ?>
                    </div>
                    <div class="reviews-carousel__buttons">
                        <a href="<?php the_permalink($review->ID); ?>" class="reviews-carousel__link" ><?php _e('More details', 'esotericism'); ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    <?php
    if (esotericism_is_site_editor_page()) {
	    echo '<script src="' .includes_url('/js/jquery/jquery.js'). '"></script>';
	    echo '<link rel="stylesheet" href="' .get_template_directory_uri(). '/assets/libraries/owl-carousel/css/owl.carousel.min.css?ver=6.6.1" media="all" />';
	    echo '<link rel="stylesheet" href="' .get_template_directory_uri(). '/assets/libraries/owl-carousel/css/owl.theme.default.css?ver=6.6.1" media="all" />';
	    echo '<script src="' .get_template_directory_uri(). '/assets/libraries/owl-carousel/js/owl.carousel.min.js"></script>';
    }
    ?>
        <script>
            jQuery( document ).ready(function($) {
                $('#<?php echo esc_attr($id); ?>').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: <?php echo $reviews_display_count < 2 ? $reviews_display_count : 2; ?>
                        },
                        1145: {
                            items: <?php echo $reviews_display_count < 3 ? $reviews_display_count : 3; ?>
                        },
                        1460: {
                            items: <?php echo $reviews_display_count; ?>
                        }
                    }
                });
            });
        </script>
    <?php else:; ?>
        <?php _e('No reviews found', 'esotericism'); ?>
    <?php endif; ?>
</div>