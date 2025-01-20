<?php
/**
 * Enqueue the main stylesheet for the theme.
 */
function esotericism_include_main_styles() {
	// Enqueue the main CSS file with a dynamic version number based on the current time to prevent caching issues.
	wp_enqueue_style('esotericism-include-main-styles', get_template_directory_uri() . '/assets/css/main-styles.min.css', array(), time());
}
add_action('wp_enqueue_scripts', 'esotericism_include_main_styles');

/**
 * Enqueue the main JavaScript file for the theme.
 */
function esotericism_include_main_scripts() {
	// Enqueue the main JS file, set it to load in the footer (last parameter: true), and dynamically generate the version to avoid caching issues.
	wp_enqueue_script('esotericism-include-main-scripts', get_template_directory_uri() . '/assets/js/main-scripts.min.js', array(), time(), true);
}
add_action('wp_enqueue_scripts', 'esotericism_include_main_scripts');

/**
 * Enqueue styles for the WordPress block editor.
 */
//function esotericism_add_admin_editor_styles() {
//	// Enqueue the CSS file for the block editor, dynamically generating a version number.
//	wp_enqueue_style('esotericism-editor-styles', get_template_directory_uri() . '/assets/css/editor-styles.min.css', array(), time());
//}
//add_action('enqueue_block_editor_assets', 'esotericism_add_admin_editor_styles');

function quantumezoterik_enqueue_block_assets() {
	if (is_admin()) {
		wp_enqueue_style(
			'quantumezoterik-editor-style',
			get_template_directory_uri() . '/assets/css/editor-styles.min.css',
			array(),
			time()
		);
	}
}
add_action('enqueue_block_assets', 'quantumezoterik_enqueue_block_assets');

/**
 * Start output buffering to collect inline styles before they are printed to the page.
 */
function esotericism_start_buffering() {
	ob_start(); // Start the output buffer.
}
add_action('wp_head', 'esotericism_start_buffering', 1); // Start buffering early, before other content is output.

/**
 * Collect and save Gutenberg block inline styles, and replace them with a single minified CSS file.
 */
function esotericism_collect_and_save_styles() {
	$content = ob_get_clean(); // Get the entire output buffer content.

	// Use a regular expression to extract all inline styles wrapped in <style> tags.
	preg_match_all('/<style[^>]*>(.*?)<\/style>/is', $content, $matches);

	$styles = '';
	if (!empty($matches[1])) {
		// Collect all inline styles into a single string.
		foreach ($matches[1] as $style_content) {
			$styles .= $style_content . "\n";
		}
	}

	// Minify the collected styles.
	$minified_styles = esotericism_minify_css($styles);

	// Define the file path to save the minified styles.
	$file_path = get_stylesheet_directory() . '/assets/css/gutenberg-styles.min.css';

	// Save the minified styles to the specified file.
	file_put_contents($file_path, $minified_styles);

	// Remove the inline styles from the original content.
	$cleaned_content = preg_replace('/<style[^>]*>(.*?)<\/style>/is', '', $content);

	// Output the cleaned content without inline styles.
	echo $cleaned_content;

	// Output a <link> tag to include the saved minified styles file in the page head.
	echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/assets/css/gutenberg-styles.min.css?' . time() . '">';
}
add_action('wp_head', 'esotericism_collect_and_save_styles', 100); // Call after most of the styles are output.

/**
 * Minify CSS by removing comments, spaces, and unnecessary characters.
 *
 * @param string $css The original CSS code to be minified.
 * @return string The minified CSS.
 */
function esotericism_minify_css($css) {
	// Remove CSS comments.
	$css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
	// Remove unnecessary spaces and newlines.
	$css = preg_replace('/\s+/', ' ', $css);
	// Remove spaces before closing braces.
	$css = preg_replace('/;}/', '}', $css);

	return $css;
}
