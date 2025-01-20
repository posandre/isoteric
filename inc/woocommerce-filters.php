<?php
// Add WooCommerce support to the theme.
add_action( 'after_setup_theme', 'esotericism_add_woocommerce_support' );
function esotericism_add_woocommerce_support() {
	// Enable WooCommerce support with custom settings for images and product grid.
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 572, // Width for product thumbnails.
		'single_image_width'    => 800,  // Width for single product images.

		// Settings for the product grid.
		'product_grid'          => array(
			'default_rows'    => 2,
			'min_rows'        => 1,
			'max_rows'        => 3,
			'default_columns' => 3,
			'min_columns'     => 1,
			'max_columns'     => 5,
		),
	) );
}

// Set the number of products displayed per page.
function esotericism_products_per_page( $products_per_page ) {
	return get_option('posts_per_page'); // Get the number of posts per page from the settings.
}
add_filter( 'loop_shop_per_page', 'esotericism_products_per_page', 20 );

// Customize the button in the Gutenberg product block.
add_filter( 'woocommerce_blocks_product_grid_item_html', 'customize_gutenberg_product_block_button', 10, 3 );
function customize_gutenberg_product_block_button( $html, $data, $product ) {
	$product_link = $product->get_permalink(); // Get the product permalink.
	$button_text = __('Детальніше про товар', 'your-textdomain'); // Define button text.

	// Create HTML for the new button.
	$new_button = '<a href="' . esc_url( $product_link ) . '" class="wp-block-button__link">' . $button_text . '</a>';

	// Replace the existing button with the new button.
	$html = str_replace( 'wp-block-button__link', 'wp-block-button__link button product-details-button', $html );
	$html = preg_replace( '/<a href="[^"]+"[^>]*>(.*?)<\/a>/', $new_button, $html );

	return $html; // Return the modified HTML.
}

// Customize the thumbnail image size for WooCommerce.
add_filter('woocommerce_get_image_size_thumbnail', 'esotericism_custom_woocommerce_image_size');
function esotericism_custom_woocommerce_image_size($size) {
	return array(
		'width'  => 572, // Set custom width.
		'height' => 323, // Set custom height.
		'crop'   => 1,   // Enable cropping.
	);
}

// Customize the single product image size.
add_filter('woocommerce_get_image_size_single', 'esotericism_custom_single_product_image_size');
function esotericism_custom_single_product_image_size($size) {
	return array(
		'width'  => 800, // Set custom width for single product image.
		'height' => 800, // Set custom height.
		'crop'   => 1,   // Enable cropping.
	);
}

// Customize the gallery thumbnail size.
add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'esotericism_custom_gallery_thumbnail_size' );
function esotericism_custom_gallery_thumbnail_size( $size ) {
	return array(
		'width'  => 50,  // Set custom width for gallery thumbnails.
		'height' => 50,  // Set custom height.
		'crop'   => 1,   // Enable cropping.
	);
}

// Set the number of columns for product thumbnails in the gallery.
add_filter( 'woocommerce_product_thumbnails_columns', 'esotericism_custom_woocommerce_thumbnail_columns', 10 );
function esotericism_custom_woocommerce_thumbnail_columns() {
	return 5; // Set the number of columns for thumbnails.
}

// Customize the HTML structure for products displayed in the Gutenberg product block.
add_filter('woocommerce_blocks_product_grid_item_html', 'esotericism_custom_products_by_category_template', 10, 3);
function esotericism_custom_products_by_category_template($html, $data, $product) {
	$short_description = wp_trim_words( $product->get_short_description(), 30, '...' ); // Get and trim short description.

	// Build the custom HTML structure for the product card.
	$html = '
<li class="wc-block-grid__product product-card__container">
    <div class="product-card">
      ' . $data->badge . $data->image . '
      <div class="product-card__content">
        <div class="product-card__content-container">' . $data->title;

	// Add short description if available.
	if ($short_description) {
		$html .= '<div class="product-card__description">' . $short_description . '</div>';
	}

	$html .= $data->rating;

	$html .=            '<div class="product-card__buttons">
                            <div class="product-card__details">
                                <a href="' . $data->permalink . '" class="wc-block-grid__product-link">' . __('More details', 'esotericism') . '</a>
                            </div>
                            ' .$data->button. '
                         </div>
                      </div>
      </div> 
       ' . $data->price .'
    </div>
</li>';

	return $html; // Return the customized HTML.
}

// Add a wrapper before the product title in the shop loop.
add_action('woocommerce_before_shop_loop_item_title', 'esotericism_before_shop_loop_item_title');
function esotericism_before_shop_loop_item_title() {
	echo '<div>'; // Open a div before the product title.
}

// Add a wrapper after the product title in the shop loop.
add_action('woocommerce_after_shop_loop_item_title', 'esotericism_after_shop_loop_item_title');
function esotericism_after_shop_loop_item_title() {
	echo '</div>'; // Close the div after the product title.
}

// Remove up-sell products display on the single product page.
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );

// Customize the display of product attributes.
add_filter( 'woocommerce_display_product_attributes', 'custom_wrap_product_attributes', 10, 2 );
function custom_wrap_product_attributes( $product_attributes, $product ) {
	foreach ( $product_attributes as $key => $attribute ) {
		// Add a custom dash after each attribute label.
		$product_attributes[ $key ]['label'] = $attribute['label'] . '<div class="attribute-dash"></div>';
	}

	return $product_attributes; // Return the modified attributes.
}

// Add custom product tabs to the single product page.
function esotericism_add_custom_product_tabs( $tabs ) {
	// Check if reviews exist and add a reviews tab.
	if (esotericism_have_reviews()) {
		$tabs['reviews_tab'] = array(
			'title'    => __( 'Reviews', 'esotericism' ),
			'priority' => 50,
			'callback' => 'esotericism_custom_reviews_product_tab_content',
		);
	}

	// Check if a video field exists and add a video tab.
	if (get_field('video')) {
		$tabs['video_tab'] = array(
			'title'    => __( 'Video', 'esotericism' ),
			'priority' => 50,
			'callback' => 'esotericism_custom_video_product_tab_content',
		);
	}

	return $tabs; // Return the modified tabs.
}
add_filter( 'woocommerce_product_tabs', 'esotericism_add_custom_product_tabs' );

// Disable the additional information and product description headings.
add_filter( 'woocommerce_product_additional_information_heading', '__return_false' );
add_filter( 'woocommerce_product_description_heading', '__return_false' );

// Display the custom reviews in the product reviews tab.
function esotericism_custom_reviews_product_tab_content() {
	$review_ids = esotericism_get_reviews_ids(); // Get the review IDs.

	$classes= array('section-reviews__container', 'section-reviews__container--product');

	$output = '<div class="' . esc_attr(implode(' ', $classes)). '">'; // Start output with custom classes.
	if (!empty($review_ids)) {
		foreach ( $review_ids as $review_id ) {
			$output .= esotericism_get_review($review_id); // Get and display each review.
		}

	} else {
		$output .=  __('no reviews found', 'esotericism'); // Display message if no reviews found.
	}
	$output .= '</div>'; // Close the reviews' container.

	echo $output; // Output the reviews' container.
}

// Display the video in the product video tab.
function esotericism_custom_video_product_tab_content() {
	echo '<div class="post-video__container">' . get_field('video') . '</div>'; // Output the video field.
}

add_filter('render_block', 'esotericism_custom_change_sku_text', 10, 2);

function esotericism_custom_change_sku_text($block_content, $block) {
    // Check if this is the WooCommerce SKU block
    if ($block['blockName'] === 'woocommerce/product-sku') {
        // Replace "SKU:" with your custom text
        $block_content = str_replace('SKU:', __('SKU:', 'esotericism'), $block_content);
    }
    return $block_content;
}


add_filter('woocommerce_blocks_product_grid_query_args', function($query_args, $attributes) {
    // Check if this is a product category page
    if (is_product_category()) {
        $current_category = get_queried_object();

        // Verify that the current category and its ID are set
        if ($current_category && isset($current_category->term_id)) {
            $query_args['tax_query'][] = [
                'taxonomy' => 'product_cat',
                'field'    => 'term_id',
                'terms'    => $current_category->term_id,
                'include_children' => false, // Excludes subcategories
            ];
        }
    }

    return $query_args;
}, 10, 2);

function esotericism_exclude_subcategory_products( $query ) {
    // Check if this is the main WooCommerce query on a product category archive page
    if ( ! is_admin() && $query->is_main_query() && is_product_category() ) {
        // Get the current category term
        $current_category = get_queried_object();

        if ( $current_category && is_a( $current_category, 'WP_Term' ) ) {
            // Apply the 'include_children' => false parameter to exclude subcategories
            $query->set( 'tax_query', array(
                array(
                    'taxonomy'         => 'product_cat',
                    'field'            => 'term_id',
                    'terms'            => $current_category->term_id,
                    'include_children' => false,
                ),
            ));
        }
    }
}
add_action( 'pre_get_posts', 'esotericism_exclude_subcategory_products' );