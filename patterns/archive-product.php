<?php
/**
 * Title: Product archive template
 * Slug: esotericism/archive-product
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","className":"page__wrapper","layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group page__wrapper"><!-- wp:group {"align":"full","className":"header-woocommerce-category","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull header-woocommerce-category"><!-- wp:acf/block-woocommerce-category-image {"name":"acf/block-woocommerce-category-image","align":"full","mode":"preview"} /-->

<!-- wp:group {"className":"page-title__container","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-title__container"><!-- wp:query-title {"type":"archive","showPrefix":false,"align":"wide"} /-->

<!-- wp:woocommerce/breadcrumbs {"className":"breadcrumbs"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"products__cols"} -->
<div class="wp-block-columns alignwide products__cols"><!-- wp:column {"width":"","className":"products__col products__col\u002d\u002dfilter"} -->
<div class="wp-block-column products__col products__col--filter"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"filter-sections__close-button"} -->
<figure class="wp-block-image size-large filter-sections__close-button"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/close-button.svg" alt="<?php esc_html_e('', 'esotericism');?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"filter-sections__container","layout":{"type":"constrained"}} -->
<div class="wp-block-group filter-sections__container"><!-- wp:group {"className":"filter-sections filter-sections\u002d\u002dcategories","layout":{"type":"constrained"}} -->
<div class="wp-block-group filter-sections filter-sections--categories"><!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading"><?php esc_html_e('Subcategories', 'esotericism');?></h5>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-categories {"hasEmpty":true} /-->

<!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"<?php esc_html_e('Filter by attribute', 'esotericism');?>"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Size', 'esotericism');?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/attribute-filter {"attributeId":2,"showCounts":true,"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-attribute-filter is-loading"></div>
<!-- /wp:woocommerce/attribute-filter --></div>
<!-- /wp:woocommerce/filter-wrapper -->

<!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"<?php esc_html_e('Filter by attribute', 'esotericism');?>"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Appointment', 'esotericism');?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/attribute-filter {"attributeId":1,"showCounts":true,"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-attribute-filter is-loading"></div>
<!-- /wp:woocommerce/attribute-filter --></div>
<!-- /wp:woocommerce/filter-wrapper -->

<!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Фільтрувати за ціною"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Price', 'esotericism');?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/price-filter {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-price-filter is-loading"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
<!-- /wp:woocommerce/price-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","className":"products-col products__col\u002d\u002dproducts-container"} -->
<div class="wp-block-column products-col products__col--products-container"><!-- wp:woocommerce/store-notices /-->

<!-- wp:group {"className":"top-section","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group top-section"><!-- wp:group {"className":"sort-section","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group sort-section"><!-- wp:woocommerce/product-results-count /-->

<!-- wp:woocommerce/catalog-sorting /--></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"buttons-section"} -->
<div class="wp-block-buttons buttons-section"><!-- wp:button {"className":"filters__button"} -->
<div class="wp-block-button filters__button"><a class="wp-block-button__link wp-element-button" rel="#"><?php esc_html_e('Filters', 'esotericism');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/filter-wrapper {"filterType":"active-filters","heading":"<?php esc_html_e('Active filters', 'esotericism');?>"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:woocommerce/active-filters {"displayStyle":"chips","heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-active-filters is-loading"><span aria-hidden="true" class="wc-block-active-filters__placeholder"></span></div>
<!-- /wp:woocommerce/active-filters --></div>
<!-- /wp:woocommerce/filter-wrapper -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"woocommerceAttributes":[],"woocommerceStockStatus":["instock","outofstock","onbackorder"],"taxQuery":[],"isProductCollectionBlock":true,"perPage":10,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":true,"previewMessage":"Фактичні товари можуть відрізнятися в залежності від сторінки, яку ви переглядаєте."},"align":"wide"} -->
<div class="wp-block-woocommerce-product-collection alignwide"><!-- wp:woocommerce/product-template -->
<!-- wp:group {"className":"product-card animated backInRight","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-card animated backInRight"><!-- wp:woocommerce/product-image {"showProductLink":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"","height":"","className":"wc-block-grid__product-image"} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"className":"wc-block-grid__product-title wc-block-grid__product-title\u002d\u002dtop","fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","className":"wc-block-grid__product-price"} /-->

<!-- wp:group {"className":"product-card__content","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-card__content"><!-- wp:group {"className":"product-card__content-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-card__content-container"><!-- wp:acf/block-woocommerce-product-excerpt {"name":"acf/block-woocommerce-product-excerpt","mode":"preview"} /-->

<!-- wp:group {"className":"product-card__buttons","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group product-card__buttons"><!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"ee-small"} /-->

<!-- wp:read-more {"content":"Детальніше"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":"\u003c"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"\u003e"} /-->
<!-- /wp:query-pagination -->

<!-- wp:woocommerce/product-collection-no-results -->
<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><strong><?php esc_html_e('Nothing found', 'esotericism');?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('You can try', 'esotericism'); ?> <a class="wc-link-clear-any-filters" href="#"><?php esc_html_e('cleaning all filters', 'esotericism'); ?></a> <?php esc_html_e('or visit ours', 'esotericism'); ?> <a class="wc-link-stores-home" href="#"><?php esc_html_e('the main page of the store', 'esotericism'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-collection-no-results --></div>
<!-- /wp:woocommerce/product-collection --></div>
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