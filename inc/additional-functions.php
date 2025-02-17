<?php
/**
 * Check if the current product has any reviews.
 *
 * @return bool True if there are reviews for the current product, false otherwise.
 */
function esotericism_have_reviews() {
	// Get the ID of the current post/product.
	$current_post_id = get_the_id();

	// Prepare a meta query to check if reviews are related to the current product.
	$meta_query = array();

	// If the current post ID is valid, set up a meta query to filter reviews by product.
	if ($current_post_id) {
		$meta_query = array(
			array(
				'key'     => 'product',    // Custom field key for the product associated with the review.
				'value'   => $current_post_id,
				'compare' => '=',
			)
		);
	}

	// Query to check if there are any reviews for the current product.
	$args = array(
		'post_type'      => 'review',     // Custom post type for reviews.
		'posts_per_page' => 1,            // Only need one review to confirm existence.
		'meta_query'     => $meta_query   // Filter reviews by the current product.
	);

	// Return true if at least one review exists, otherwise false.
	return !empty(get_posts($args));
}

/**
 * Retrieve an array of review IDs for a specific product.
 *
 * @param int $count Number of review IDs to retrieve. Defaults to -1 (all reviews).
 * @param int $current_post_id The post ID of the product. Defaults to the current post ID.
 * @return array List of review IDs.
 */
function esotericism_get_reviews_ids($count = -1, $current_post_id = 0) {
	// If no post ID is provided, get the ID of the current product.
	if ( empty($current_post_id) ) {
		$current_post_id = get_the_id();
	}

	// Prepare a meta query to filter reviews by the current product.
	$meta_query = array();

	// If the current post ID is valid, set up a meta query.
	if ($current_post_id) {
		$meta_query = array(
			array(
				'key'     => 'product',    // Custom field key for the product associated with the review.
				'value'   => $current_post_id,
				'compare' => '=',
			)
		);
	}

	// Query to get the IDs of the reviews related to the current product.
	$args = array(
		'post_type'      => 'review',     // Custom post type for reviews.
		'fields'         => 'ids',        // Only return the post IDs.
		'posts_per_page' => $count,       // Limit the number of reviews returned.
		'meta_query'     => $meta_query   // Filter reviews by the current product.
	);

	// Return an array of review IDs.
	return get_posts($args);
}

/**
 * Retrieve and format the content of a specific review for display.
 *
 * @param int $review_id The ID of the review.
 * @return string The HTML output for the review.
 */
function esotericism_get_review($review_id) {
	// Get review fields using ACF (Advanced Custom Fields).
	$review_author          = get_field( 'review_author', $review_id );           // Author of the review.
	$review_author_role     = get_field( 'review_author_role', $review_id );      // Role or position of the author.
	$review_author_photo_id = get_field( 'review_author_photo', $review_id );     // Photo ID of the review author.
	$review_type            = get_field( 'review_type', $review_id );             // Type of the review (text or video).

	// Begin output for the review item.
	$output  = '<div class="section-reviews__item">
	                <div class="section-reviews__item-container section-reviews__item-container--' . esc_attr($review_type) . '">
	                    <div class="section-reviews__header">';

	// If a photo of the review author is available, include it in the output.
	if ( ! empty( $review_author_photo_id ) ) {
		$photo_alt = get_post_meta( $review_author_photo_id, '_wp_attachment_image_alt', true );

		$output .= '<div class="section-reviews__photo">' . wp_get_attachment_image( $review_author_photo_id, 'reviews-author-img', false, array( 'alt' => $photo_alt ) ) . '</div>';
	}

	// Add the author's name and role (if available) to the output.
	$output .= '<div class="section-reviews__author">
                                            <h4 class="section-reviews__author-name">' . $review_author . '</h4>';
	if ( ! empty( $review_author_role ) ) {
		$output .= '<p class="section-reviews__author-role">' . $review_author_role . '</p>';
	}
	$output .= '</div>
	                    </div>
	                    <div class="section-reviews__content">';

	// Display the review content based on the review type (text or video).
	switch ( $review_type ) {
		case 'text':
			$output .= '<p class="cut-text">' . get_field( 'review_text', $review_id ) . '</p>';
			break;
		case 'video':
            $video_embed = get_field('review_video', $review_id);
            $video_embed = str_replace('https://www.youtube.com/embed/', 'https://www.youtube-nocookie.com/embed/', $video_embed);

            $output .= $video_embed;

			break;

		default:
			$output .= __( 'Unknown review type', 'esotericism' );
	}

	// Add a 'More details' button linking to the full review.
	$output .= '
						</div>
	                    <div class="section-reviews__buttons">
	                        <a href="' . get_the_permalink( $review_id ) . '" class="section-reviews__link" >' . __( 'More details', 'esotericism' ) . '</a>
	                    </div>
	                </div>
	            </div>';

	// Return the HTML output for the review.
	return $output;
}