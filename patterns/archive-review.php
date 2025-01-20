<?php
/**
 * Title: Reviews archive template
 * Slug: esotericism/archive-review
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:query {"queryId":6,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:group {"tagName":"main","className":"page__wrapper","layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group page__wrapper"><!-- wp:group {"align":"full","className":"header-woocommerce-category","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull header-woocommerce-category"><!-- wp:acf/block-woocommerce-category-image {"name":"acf/block-woocommerce-category-image","align":"full","mode":"preview"} /-->

<!-- wp:group {"className":"page-title__container","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-title__container"><!-- wp:query-title {"type":"archive"} /-->

<!-- wp:woocommerce/breadcrumbs {"className":"breadcrumbs"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"page__container","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull page__container"><!-- wp:query {"queryId":54,"query":{"perPage":"8","pages":0,"offset":0,"postType":"review","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"section-reviews__container","layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"16rem"}} -->
<!-- wp:acf/block-review {"name":"acf/block-review","mode":"preview"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":"\u003c"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"\u003e"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"<?php esc_html_e('Add text or blocks to be displayed when the query returns no results.', 'esotericism');?>"} -->
<p><?php esc_html_e('No reviews found', 'esotericism');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:group {"align":"full","className":"section-group sections-reviews-carousel animated fadeIn","backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section-group sections-reviews-carousel animated fadeIn has-base-2-background-color has-background"><!-- wp:group {"align":"full","className":"section-group__header animated fadeIn","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section-group__header animated fadeIn"><!-- wp:heading {"textAlign":"center","className":"has-bottom-line"} -->
<h2 class="wp-block-heading has-text-align-center has-bottom-line"><?php esc_html_e('Latest reviews', 'esotericism');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:acf/block-reviews-carousel {"name":"acf/block-reviews-carousel","data":{"reviews_count":"5","_reviews_count":"field_66d1f0ef4c9dd","reviews_display_count":"4","_reviews_display_count":"field_66e330022ffe9","products_collection_color_schema":"dark","_products_collection_color_schema":"field_66e330502kkpp"},"mode":"preview"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /--></div>
<!-- /wp:query -->