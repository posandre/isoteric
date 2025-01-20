<?php
function esotericism_replace_active_nav_link_with_paragraph( $block_content, $block ) {
	// Check if this is a navigation link block
	if ( isset( $block['blockName'] ) && $block['blockName'] === 'core/navigation-link' ) {
		$current_url = home_url( add_query_arg( null, null ) ); // Get the current URL
		$link_url = isset( $block['attrs']['url'] ) ? $block['attrs']['url'] : '';

		// If the URL matches, replace <a> with <p>
		if ( rtrim( $current_url, '/' ) === rtrim( $link_url, '/' ) ) {
			// Find the <a> HTML tag and replace it with <p>
			$block_content = preg_replace( '/<a\s+(.*?)>(.*?)<\/a>/', '<p>$2</p>', $block_content );
		}
	}
	return $block_content;
}
add_filter( 'render_block', 'esotericism_replace_active_nav_link_with_paragraph', 10, 2 );

function esotericism_remove_site_logo_link_on_homepage( $block_content, $block ) {
	// Check if this is a site logo block
	if ( isset( $block['blockName'] ) && $block['blockName'] === 'core/site-logo' ) {
		// If it's the homepage, remove the link
		if ( is_front_page() ) {
			// Remove <a> and keep only <img>
			$block_content = preg_replace( '/<a\s[^>]*>(.*?)<\/a>/', '$1', $block_content );
		}
	}
	return $block_content;
}
add_filter( 'render_block', 'esotericism_remove_site_logo_link_on_homepage', 10, 2 );
