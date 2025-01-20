<?php
/**
 * Title: Single Review template
 * Slug: esotericism/single-review
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","className":"page__wrapper","layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group page__wrapper"><!-- wp:group {"align":"full","className":"header-woocommerce-category","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull header-woocommerce-category"><!-- wp:acf/block-woocommerce-category-image {"name":"acf/block-woocommerce-category-image","align":"full","mode":"preview"} /-->

<!-- wp:group {"className":"page-title__container","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-title__container"><!-- wp:post-title /-->

<!-- wp:woocommerce/breadcrumbs {"className":"breadcrumbs"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"products__cols"} -->
<div class="wp-block-columns alignwide products__cols"><!-- wp:column {"width":"","className":"products__col products__col\u002d\u002dfilter"} -->
<div class="wp-block-column products__col products__col--filter"><!-- wp:group {"className":"filter-sections__container","layout":{"type":"constrained"}} -->
<div class="wp-block-group filter-sections__container"><!-- wp:group {"className":"filter-sections filter-sections\u002d\u002ddark-panel","layout":{"type":"constrained"}} -->
<div class="wp-block-group filter-sections filter-sections--dark-panel"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e('Selected product', 'esotericism');?></h6>
<!-- /wp:heading -->

<!-- wp:acf/block-product-by-review {"name":"acf/block-product-by-review","mode":"preview"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"filter-sections filter-sections\u002d\u002ddark-panel","layout":{"type":"constrained"}} -->
<div class="wp-block-group filter-sections filter-sections--dark-panel"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e('Latest reviews', 'esotericism');?></h6>
<!-- /wp:heading -->

<!-- wp:acf/block-reviews-carousel {"name":"acf/block-reviews-carousel","data":{"reviews_count":"5","_reviews_count":"field_66d1f0ef4c9dd","reviews_display_count":"1","_reviews_display_count":"field_66e330022ffe9","products_collection_color_schema":"light","_products_collection_color_schema":"field_66e330502kkpp"},"mode":"preview"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","className":"products-col products__col\u002d\u002dproducts-container"} -->
<div class="wp-block-column products-col products__col--products-container"><!-- wp:acf/block-review-author {"name":"acf/block-review-author","mode":"preview","className":"animated flip"} /-->

<!-- wp:acf/block-review-content {"name":"acf/block-review-content","mode":"preview","className":"animated fadeIn"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

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