<?php

/**
 * Initialize ACF Blocks.
 */
add_action('acf/init', 'esotericism_acf_blocks_init');
function esotericism_acf_blocks_init() {

	// Check if the ACF register block function exists.
	if( function_exists('acf_register_block_type') ) {

		/**
		 * Register the Reviews Carousel block.
		 * Displays a carousel of reviews using Owl Carousel.
		 */
		acf_register_block_type(array(
			'name'              => 'block-reviews-carousel',
			'title'             => __('Carousel of reviews', 'esotericism'),
			'description'       => __('The block displays a carousel of reviews.', 'esotericism'),
			'render_template'   => 'template-parts/blocks/block-reviews-carousel.php',
			'category'          => 'theme',
			'icon'              => 'admin-comments',
			'keywords'          => 'theme',
			'supports'          => array(
				'anchor' => true
			),
			'enqueue_assets' => function(){
				// Enqueue Owl Carousel library and custom block styles/scripts.
				wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/libraries/owl-carousel/css/owl.carousel.min.css' );
				wp_enqueue_style( 'owl-carousel-theme-default', get_template_directory_uri() . '/assets/libraries/owl-carousel/css/owl.theme.default.css' );
				wp_enqueue_style( 'block-reviews-carousel', get_template_directory_uri() . '/assets/css/blocks/block-reviews-carousel.min.css', array(), time() );
				wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/libraries/owl-carousel/js/owl.carousel.min.js', array('jquery'), time(), false );
			},
		));

		/**
		 * Register the WooCommerce Category Image block.
		 * Displays the main image for a WooCommerce category.
		 */
		acf_register_block_type(array(
			'name'              => 'block-woocommerce-category-image',
			'title'             => __('Category main image', 'esotericism'),
			'description'       => __('The block displays the main image of the category', 'esotericism'),
			'render_template'   => 'template-parts/blocks/block-woocommerce-category-image.php',
			'category'          => 'theme',
			'icon'              => 'admin-comments',
			'keywords'          => 'theme',
			'supports'          => array(
				'anchor' => true
			)
		));

		/**
		 * Register the WooCommerce Product Excerpt block.
		 * Displays a brief description of a WooCommerce product.
		 */
		acf_register_block_type(array(
			'name'              => 'block-woocommerce-product-excerpt',
			'title'             => __('Brief description of the product', 'esotericism'),
			'description'       => __('The block displays a brief description of the product', 'esotericism'),
			'render_template'   => 'template-parts/blocks/block-woocommerce-product-excerpt.php',
			'category'          => 'theme',
			'icon'              => 'admin-comments',
			'keywords'          => 'theme',
			'supports'          => array(
				'anchor' => true
			)
		));

		/**
		 * Register the Products Carousel block.
		 * Displays a carousel of WooCommerce products using Owl Carousel.
		 */
		acf_register_block_type(array(
			'name'              => 'block-products-carousel',
			'title'             => __('Product carousel', 'esotericism'),
			'description'       => __('The block displays a carousel of products.', 'esotericism'),
			'render_template'   => 'template-parts/blocks/block-products-carousel.php',
			'category'          => 'theme',
			'icon'              => 'admin-comments',
			'keywords'          => 'theme',
			'supports'          => array(
				'anchor' => true
			),
			'enqueue_assets' => function(){
				// Enqueue Owl Carousel library and custom block styles/scripts.
				wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/libraries/owl-carousel/css/owl.carousel.min.css' );
				wp_enqueue_style( 'owl-carousel-theme-default', get_template_directory_uri() . '/assets/libraries/owl-carousel/css/owl.theme.default.css' );
				wp_enqueue_style( 'block-products-carousel', get_template_directory_uri() . '/assets/css/blocks/block-products-carousel.min.css', array(), time() );
				wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/libraries/owl-carousel/js/owl.carousel.min.js', array('jquery'), time(), false );
			},
		));

		/**
		 * Register the WooCommerce Product Stock block.
		 * Displays stock availability for a WooCommerce product.
		 */
		acf_register_block_type(array(
			'name'              => 'block-woocommerce-product-stock',
			'title'             => __('Product availability', 'esotericism'),
			'description'       => __('Block showing product availability', 'esotericism'),
			'render_template'   => 'template-parts/blocks/block-woocommerce-product-stock.php',
			'category'          => 'theme',
			'icon'              => 'admin-comments',
			'keywords'          => 'theme',
			'supports'          => array(
				'anchor' => true
			),
			'enqueue_assets' => function(){
				// Enqueue custom styles for the block.
				wp_enqueue_style( 'block-woocommerce-product-stock', get_template_directory_uri() . '/assets/css/blocks/block-woocommerce-product-stock.min.css', array(), time() );
			},
		));

		/**
		 * Register the Review block.
		 * Displays the current review.
		 */
		acf_register_block_type(array(
			'name'              => 'block-review',
			'title'             => __('Review', 'esotericism'),
			'description'       => __('The block displays the current review', 'esotericism'),
			'render_template'   => 'template-parts/blocks/block-review.php',
			'category'          => 'theme',
			'icon'              => 'admin-comments',
			'keywords'          => 'theme',
			'supports'          => array(
				'anchor' => true
			)
		));

		/**
		 * Register the Product by Review block.
		 * Displays the product that corresponds to the current review.
		 */
		acf_register_block_type(array(
			'name'              => 'block-product-by-review',
			'title'             => __('Product according to the review', 'esotericism'),
			'description'       => __('The block outputs the product that matches the current review', 'esotericism'),
			'render_template'   => 'template-parts/blocks/block-product-by-review.php',
			'category'          => 'theme',
			'icon'              => 'admin-comments',
			'keywords'          => 'theme',
			'supports'          => array(
				'anchor' => true
			),
			'enqueue_assets' => function(){
				// Enqueue custom styles for the block.
				wp_enqueue_style( 'block-product-by-review', get_template_directory_uri() . '/assets/css/blocks/block-product-by-review.min.css', array(), time() );
			},
		));

		/**
		 * Register the Review Content block.
		 * Displays content related to the current review.
		 */
		acf_register_block_type(array(
			'name'              => 'block-review-content',
			'title'             => __('Review content', 'esotericism'),
			'description'       => __('The block displays content that matches the current review', 'esotericism'),
			'render_template'   => 'template-parts/blocks/block-review-content.php',
			'category'          => 'theme',
			'icon'              => 'admin-comments',
			'keywords'          => 'theme',
			'supports'          => array(
				'anchor' => true
			),
			'enqueue_assets' => function(){
				// Enqueue custom styles for the block.
				wp_enqueue_style( 'block-review-content', get_template_directory_uri() . '/assets/css/blocks/block-review-content.min.css', array(), time() );
			},
		));

		/**
		 * Register the Review Author block.
		 * Displays information about the author of the current review.
		 */
		acf_register_block_type(array(
			'name'              => 'block-review-author',
			'title'             => __('The author of the review', 'esotericism'),
			'description'       => __('The block displays information about the author corresponding to the current review', 'esotericism'),
			'render_template'   => 'template-parts/blocks/block-review-author.php',
			'category'          => 'theme',
			'icon'              => 'admin-comments',
			'keywords'          => 'theme',
			'supports'          => array(
				'anchor' => true
			),
			'enqueue_assets' => function(){
				// Enqueue custom styles for the block.
				wp_enqueue_style( 'block-review-author', get_template_directory_uri() . '/assets/css/blocks/block-review-author.min.css', array(), time() );
			},
		));

        acf_register_block_type(array(
            'name'            => 'no-products-found',
            'title'           => __('No Products Found', 'esotericism'),
            'description'     => __('A custom block for displaying a "No products found" message.', 'esotericism'),
            'render_template' => 'template-parts/blocks/block-woocommece-no-products-found.php',
            'category'        => 'theme',
            'icon'            => 'warning',
            'keywords'        => array( 'no products', 'woocommerce', 'empty' ),
            'supports'          => array(
                'anchor' => true
            ),
            'enqueue_assets' => function(){
                // Enqueue custom styles for the block.
                wp_enqueue_style( 'block-woocommece-no-products-found', get_template_directory_uri() . '/assets/css/blocks/block-woocommerce-no-products-found.min.css', array(), time() );
            },
        ));
	}
}
