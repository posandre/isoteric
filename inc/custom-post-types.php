<?php
/**
 * Function to register a custom post type for Reviews.
 */
function register_custom_post_type() {
	// Labels for various sections of the custom post type in the WordPress admin.
	$labels = array(
		'name'               => __('Reviews', 'esotericism'),              // Plural name for the Reviews post type.
		'singular_name'      => __('Review', 'esotericism'),               // Singular name for a single review.
		'menu_name'          => __('Reviews', 'esotericism'),              // Label for the Reviews menu item.
		'name_admin_bar'     => __('Review', 'esotericism'),               // Name displayed in the WordPress admin bar.
		'add_new'            => __('Add new', 'esotericism'),              // Label for adding a new review.
		'add_new_item'       => __('Add new Review', 'esotericism'),       // Text for the Add New Review page.
		'new_item'           => __('New Review', 'esotericism'),           // Label for a newly created review.
		'edit_item'          => __('Edit Review', 'esotericism'),          // Label for editing an existing review.
		'view_item'          => __('View Review', 'esotericism'),          // Label for viewing a single review.
		'all_items'          => __('All Reviews', 'esotericism'),          // Label for the All Reviews menu.
		'search_items'       => __('Search Reviews', 'esotericism'),       // Label for searching reviews.
		'parent_item_colon'  => __('Parent Review:', 'esotericism'),       // Label for parent reviews (if hierarchical).
		'not_found'          => __('Reviews not found.', 'esotericism'),   // Message when no reviews are found.
		'not_found_in_trash' => __('No reviews were found in the trash.', 'esotericism') // Message when no reviews in trash.
	);

	// Arguments for the review custom post type registration.
	$args = array(
		'labels'             => $labels,                                  // Associating labels defined above.
		'public'             => true,                                     // Make the post type public (available on front end).
		'has_archive'        => true,                                     // Enable archiving for reviews.
		'rewrite'            => array('slug' => 'review'),                // Set the URL slug for reviews.
		'show_in_rest'       => true,                                     // Enable Gutenberg/REST API support.
		'supports'           => array('title'),                           // Enable only the title field for reviews.
		'show_ui'            => true,                                     // Show the custom post type in the WordPress admin UI.
		'show_in_menu'       => true,                                     // Display the post type in the WordPress admin menu.
		'capability_type'    => 'post',                                   // Define the capability type as a standard post.
		'menu_position'      => 20,                                       // Position in the admin menu.
		'menu_icon'          => 'dashicons-buddicons-buddypress-logo',    // Icon for the custom post type in the admin menu.
	);

	// Register the custom post type 'review' with the specified arguments.
	register_post_type('review', $args);
}

// Hook the function into the 'init' action to register the post type when WordPress initializes.
add_action('init', 'register_custom_post_type');


