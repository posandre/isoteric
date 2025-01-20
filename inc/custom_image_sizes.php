<?php

/**
 * Function to register custom image sizes for the theme.
 * These image sizes will be available for cropping and used throughout the theme.
 */
function esotericism_register_custom_image_sizes() {
	// Add a custom image size for author images in reviews (69x69 pixels, hard crop).
	add_image_size('reviews-author-img', 69, 69, true);

	// Add a custom image size for offer images (405x405 pixels, hard crop).
	add_image_size('offer-img', 405, 405, true);

	// Add a custom image size for principle images (1000x88 pixels, no crop).
	add_image_size('principles-img', 1000, 88, false);

	// Add a custom image size for course images (572x323 pixels, hard crop).
	add_image_size('courses-img', 572, 323, true);

	// Add a custom image size for large images (509x732 pixels, hard crop).
	add_image_size('big-img', 509, 732, true);

	// Add a custom image size for WooCommerce category images (unlimited width, 297px height, hard crop).
	add_image_size('block-woocommerce-category-img', 10000, 297, true);

	// Add a custom image size for the filter panel images (265x149 pixels, hard crop).
	add_image_size('filter-panel-img', 265, 149, true);
}

// Hook the function to the 'after_setup_theme' action to register the custom image sizes when the theme is set up.
add_action('after_setup_theme', 'esotericism_register_custom_image_sizes');
