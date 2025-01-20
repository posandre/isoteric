<?php
/**
 * esotericism functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package esotericism
 * @since esotericism 1.0
 */

/**
 * Registered custom image sizes.
 */
require_once get_template_directory() . '/inc/custom_image_sizes.php';

/**
 * Included Assets.
 */
require_once get_template_directory() . '/inc/include-assets.php';

/**
 * Included Additional functions.
 */
require_once get_template_directory() . '/inc/additional-functions.php';

/**
 * Included file with shortcodes.
 */
require_once get_template_directory() . '/inc/shortcodes.php';

/**
 * Included Woocommerce filters.
 */
require_once get_template_directory() . '/inc/woocommerce-filters.php';

/**
 * Included ACF filters.
 */
require_once get_template_directory() . '/inc/acf-filters.php';

/**
 * Included SEO filters.
 */
require_once get_template_directory() . '/inc/seo-filters.php';



/**
 * Included Custom Post types.
 */
require_once get_template_directory() . '/inc/custom-post-types.php';

/**
 * Included Block parser class.
 */
require_once get_template_directory() . '/inc/esotericism-class-wp-block-parser.php';

/**
 * Remove WooCommerce reviews menu from the admin panel.
 */
add_action('admin_menu', 'esotericism_remove_woocommerce_reviews_from_admin', 99);
function esotericism_remove_woocommerce_reviews_from_admin() {
	remove_menu_page('edit-comments.php');
	remove_submenu_page('edit.php?post_type=product', 'product-reviews');
}

/**
 * Remove the Reviews tab in product settings.
 */
add_filter('woocommerce_product_data_tabs', 'esotericism_remove_woocommerce_reviews_tab', 98);
function esotericism_remove_woocommerce_reviews_tab($tabs) {
	unset($tabs['reviews']);
	return $tabs;
}

/**
 * Modify the display of price when the price is not set.
 */
add_filter('woocommerce_get_price_html', 'esotericism_custom_no_price_message', 10, 2);
function esotericism_custom_no_price_message($price, $product) {
	if ('' === $product->get_price() || 0 == $product->get_price()) {
		return '<span class="no-price-message">' .__('Specify the price','esotericism'). '</span>';
	}

	return $price;
}

/**
 * Register pattern categories for block templates.
 */

add_action( 'init', 'esotericism_pattern_categories' );

/**
 * Register custom block pattern categories.
 *
 * @return void
 * @since esotericism 1.0
 */
function esotericism_pattern_categories() {

	register_block_pattern_category(
		'esotericism_page',
		array(
			'label' => _x('Pages', 'Category block template', 'esotericism'),
			'description' => __('A collection of full-size layouts.', 'esotericism'),
		)
	);
}

/**
 * Register custom block categories.
 *
 * @return void
 * @since esotericism 1.0
 */
function esotericism_custom_block_category( $categories ) {
	// Check if the 'gutena' category already exists
	foreach ( $categories as $category ) {
		if ( isset( $category['slug'] ) && $category['slug'] === 'gutena' ) {
			return $categories; // If the category exists, return the categories as-is
		}
	}

	// Define a new custom block category 'gutena'
	$new_category = array(
		'slug'  => 'gutena', // Unique identifier for the 'gutena' category
		'title' => __( 'Gutena', 'text-domain' ), // The title displayed in the editor
		'icon'  => 'star-filled', // Optional icon for the category
	);

	// Add the new category to the beginning of the categories list
	return array_merge( array( $new_category ), $categories );
}
// Hook into 'block_categories_all' to register the 'gutena' category
add_filter( 'block_categories_all', 'esotericism_custom_block_category', 10, 1 );


/**
 * Check if WP Multilang plugin is active and modify block parser class.
 */
if ( function_exists( 'wpm_translate_string' ) ) {
	add_filter('block_parser_class', 'esotericism_change_block_parser_class', 99);

	/**
	 * Change the block parser class if the WP Multilang plugin is active.
	 */
	function esotericism_change_block_parser_class($class) {
		return 'Esotericism_WP_Block_Parser';
	}
}

/**
 * Check if the current page is the Site Editor page.
 */
function esotericism_is_site_editor_page() {
	if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'site-editor.php') !== false) {
		return true;
	}
	return false;
}

/**
 * Customize archive title display based on the type of archive.
 */
function esotericism_custom_archive_title($title) {
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_author()) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	} elseif (is_tax()) {
		$title = single_term_title('', false);
	} elseif (is_date()) {
		if (is_day()) {
			$title = get_the_date();
		} elseif (is_month()) {
			$title = get_the_date('F Y');
		} elseif (is_year()) {
			$title = get_the_date('Y');
		}
	}

	return $title;
}
add_filter('get_the_archive_title', 'esotericism_custom_archive_title');

/**
 * Load the theme's text domain for translations.
 */
function esotericism__theme_load_textdomain() {
	load_theme_textdomain( 'esotericism', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'esotericism__theme_load_textdomain' );

function esotericism_add_content_before_body_close() {
	if ( !get_field('call_to_action_enabled') )  return;

	$call_to_action_title = get_field('call_to_action_title');
	$call_to_action_description = get_field('call_to_action_description');
	$call_to_action_link = get_field('call_to_action_link');
	$call_to_action_image = get_field('call_to_action_image');
	$call_to_action_delay = get_field('call_to_action_delay')*1000;

	$output = '
	<div data-delay="' .$call_to_action_delay. '" class="window-call-to-action__container">
		<div class="window-call-to-action__overlay"></div>
		<div class="window-call-to-action">
			<a class="window-call-to-action__close-button close-button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path fill="white" d="M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"></path></svg></a>';

	$output .=	    '<div class="window-call-to-action__title"><h3>' .$call_to_action_title. '</h3></div>';

	if ( $call_to_action_image ) {
		$output .=	'<div class="window-call-to-action__image">' .wp_get_attachment_image($call_to_action_image, 'medium', array('alt' => $call_to_action_title)). '</div>';
	}

	$output .=	    '<div class="window-call-to-action__description">' .$call_to_action_description. '</div>
					 <div class="window-call-to-action__buttons wp-block-button">
					 	 <a class="window-call-to-action__link wp-block-button__link wp-element-button" href="' .$call_to_action_link. '">' .__('More details','esotericism'). '</a>
					 </div>
		</div>
	</div>';

	echo $output;
}
add_action( 'wp_footer', 'esotericism_add_content_before_body_close' );

function esotericism_add_body_class($classes) {
    if (is_product_category() || (is_tax() && isset(get_queried_object()->taxonomy) && strpos(get_queried_object()->taxonomy, 'pa_') === 0)) {
        if (!have_posts()) {
            $classes[] = 'woocommerce-hide-filters';
        }
    }

    return $classes;
}
add_filter('body_class', 'esotericism_add_body_class');
