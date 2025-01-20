<?php
/**
 * Title: Product Catalog Template
 * Slug: esotericism/taxonomy-product_cat
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","className":"page__wrapper","layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group page__wrapper"><!-- wp:group {"align":"full","className":"header-woocommerce-category","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull header-woocommerce-category"><!-- wp:acf/block-woocommerce-category-image {"name":"acf/block-woocommerce-category-image","align":"full","mode":"preview"} /-->

		<!-- wp:group {"className":"page-title__container","layout":{"type":"constrained"}} -->
		<div class="wp-block-group page-title__container"><!-- wp:post-title {"level":1,"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

			<!-- wp:woocommerce/breadcrumbs {"className":"breadcrumbs"} /--></div>
		<!-- /wp:group --></div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","className":"products__cols"} -->
	<div class="wp-block-columns alignwide products__cols"><!-- wp:column {"width":"","className":"products__col products__col\u002d\u002dfilter"} -->
		<div class="wp-block-column products__col products__col--filter"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"filter-sections__close-button"} -->
			<figure class="wp-block-image size-large filter-sections__close-button"><img src="<?php echo get_site_url();?>/wp-content/themes/esotericism/assets/images/close-button.svg" alt=""/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"className":"filter-sections__container","layout":{"type":"constrained"}} -->
			<div class="wp-block-group filter-sections__container"><!-- wp:group {"className":"filter-sections filter-sections\u002d\u002dcategories filter-sections\u002d\u002ddark-panel animated backInUp","layout":{"type":"constrained"}} -->
				<div class="wp-block-group filter-sections filter-sections--categories filter-sections--dark-panel animated backInUp"><!-- wp:heading {"level":6} -->
					<h6 class="wp-block-heading"><?php esc_html_e('Subcategories', 'esotericism');?></h6>
					<!-- /wp:heading -->

					<!-- wp:woocommerce/product-categories {"hasEmpty":true} /--></div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"filter-sections filter-sections\u002d\u002dcategories filter-sections\u002d\u002ddark-panel animated backInUp","layout":{"type":"constrained"}} -->
				<div class="wp-block-group filter-sections filter-sections--categories filter-sections--dark-panel animated backInUp"><!-- wp:heading {"level":6} -->
					<h6 class="wp-block-heading"><?php esc_html_e('Related products', 'esotericism');?></h6>
					<!-- /wp:heading -->

					<!-- wp:acf/block-products-carousel {"name":"acf/block-products-carousel","data":{"products_count":"5","_products_count":"field_66e330022dde9","products_display_count":"1","_products_display_count":"field_66e330022ffe9","products_collection_type":"upsell","_products_collection_type":"field_66e330502ddea","products_collection_color_schema":"light","_products_collection_color_schema":"field_66e330502ddpp"},"mode":"preview"} /--></div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"filter-sections filter-sections\u002d\u002dcategories filter-sections\u002d\u002ddark-panel animated backInUp","layout":{"type":"constrained"}} -->
				<div class="wp-block-group filter-sections filter-sections--categories filter-sections--dark-panel animated backInUp"><!-- wp:heading {"level":6} -->
					<h6 class="wp-block-heading"><?php esc_html_e('Latest reviews', 'esotericism');?></h6>
					<!-- /wp:heading -->

					<!-- wp:acf/block-reviews-carousel {"name":"acf/block-reviews-carousel","data":{"reviews_count":"3","_reviews_count":"field_66d1f0ef4c9dd","reviews_display_count":"1","_reviews_display_count":"field_66e330022ffe9","products_collection_color_schema":"light","_products_collection_color_schema":"field_66e330502kkpp"},"mode":"preview"} /--></div>
				<!-- /wp:group --></div>
			<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:woocommerce/store-notices /-->

			<!-- wp:columns {"align":"wide","className":"product-cols"} -->
			<div class="wp-block-columns alignwide product-cols"><!-- wp:column {"width":"562px","className":"product-col product-col\u002d\u002dimage"} -->
				<div class="wp-block-column product-col product-col--image" style="flex-basis:562px"><!-- wp:woocommerce/product-image-gallery {"className":"dark-panel animated fadeIn"} /--></div>
				<!-- /wp:column -->

				<!-- wp:column {"className":"product-col product-col\u002d\u002dcontent"} -->
				<div class="wp-block-column product-col product-col--content"><!-- wp:group {"className":"dark-panel animated bounceInRight","layout":{"type":"constrained"}} -->
					<div class="wp-block-group dark-panel animated bounceInRight"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group"><!-- wp:group {"className":"product-links__container","layout":{"type":"flex","orientation":"vertical"}} -->
							<div class="wp-block-group product-links__container"><!-- wp:post-terms {"term":"product_cat","prefix":"Категории: "} /-->

								<!-- wp:post-terms {"term":"product_tag","prefix":"Теги: "} /--></div>
							<!-- /wp:group -->

							<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
							<div class="wp-block-group"><!-- wp:woocommerce/product-sku {"isDescendentOfSingleProductTemplate":true} /-->

								<!-- wp:acf/block-woocommerce-product-stock {"name":"acf/block-woocommerce-product-stock","data":[],"mode":"preview"} /--></div>
							<!-- /wp:group --></div>
						<!-- /wp:group -->

						<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"fontSize":"x-large"} /--></div>
					<!-- /wp:group -->

					<!-- wp:post-excerpt {"excerptLength":100,"className":"dark-panel animated bounceInRight delay-100ms","__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->

					<!-- wp:woocommerce/add-to-cart-form {"className":"dark-panel animated bounceInRight delay-200ms"} /--></div>
				<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:woocommerce/related-products {"align":"wide","className":"animated fadeIn "} -->
			<div class="wp-block-woocommerce-related-products alignwide animated fadeIn"><!-- wp:query {"queryId":3,"query":{"perPage":5,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"woocommerce/related-products","lock":{"remove":true,"move":true}} -->
				<div class="wp-block-query"><!-- wp:heading {"textAlign":"center","level":3,"className":"has-bottom-line","style":{"spacing":{"margin":{"top":"1rem","bottom":"1rem"}}}} -->
					<h3 class="wp-block-heading has-text-align-center has-bottom-line" style="margin-top:1rem;margin-bottom:1rem"><?php esc_html_e('Similar products', 'esotericism');?></h3>
					<!-- /wp:heading -->

					<!-- wp:acf/block-products-carousel {"name":"acf/block-products-carousel","data":{"products_count":"5","_products_count":"field_66e330022dde9","products_collection_type":"related","_products_collection_type":"field_66e330502ddea","products_collection_color_schema":"light","_products_collection_color_schema":"field_66e330502ddpp"},"mode":"preview"} /--></div>
				<!-- /wp:query --></div>
			<!-- /wp:woocommerce/related-products --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:woocommerce/product-details {"align":"wide","className":"is-style-minimal animated fadeIn"} /-->

	<!-- wp:group {"align":"full","className":"section-group section-products-carousel animated fadeIn","backgroundColor":"base-2","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull section-group section-products-carousel animated fadeIn has-base-2-background-color has-background"><!-- wp:group {"className":"section-group__header","layout":{"type":"constrained"}} -->
		<div class="wp-block-group section-group__header"><!-- wp:heading {"textAlign":"center","className":"has-bottom-line"} -->
			<h2 class="wp-block-heading has-text-align-center has-bottom-line"><?php esc_html_e('New arrivals', 'esotericism');?></h2>
			<!-- /wp:heading --></div>
		<!-- /wp:group -->

		<!-- wp:acf/block-products-carousel {"name":"acf/block-products-carousel","data":{"products_count":"","_products_count":"field_66e330022dde9","products_collection_type":"last","_products_collection_type":"field_66e330502ddea"},"mode":"preview"} /--></div>
	<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->