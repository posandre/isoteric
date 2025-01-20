<?php
/**
 * Title: Page header template
 * Slug: esotericism/page-header
 * Categories: header
 */
?>
<!-- wp:group {"align":"full","className":"header-woocommerce-category","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull header-woocommerce-category">
    <!-- wp:acf/block-woocommerce-category-image {"name":"acf/block-woocommerce-category-image","align":"full","mode":"preview"} /-->

    <!-- wp:group {"className":"page-title__container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group page-title__container"><!-- wp:query-title {"type":"archive","showPrefix":false,"align":"wide"} /-->

        <!-- wp:term-description {"align":"wide"} /-->

        <!-- wp:woocommerce/breadcrumbs {"className":"breadcrumbs"} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->