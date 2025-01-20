<?php
/**
 * Title: 404
 * Slug: esotericism/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","className":"page__wrapper","layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group page__wrapper"><!-- wp:group {"align":"full","className":"header-woocommerce-category","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull header-woocommerce-category"><!-- wp:acf/block-woocommerce-category-image {"name":"acf/block-woocommerce-category-image","align":"full","mode":"preview"} /-->

<!-- wp:group {"className":"page-title__container","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-title__container"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e('Page not found', 'esotericism');?></h1>
<!-- /wp:heading -->

<!-- wp:woocommerce/breadcrumbs {"className":"breadcrumbs"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-404__container","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-404__container"><!-- wp:heading {"textAlign":"center","level":4} -->
<h4 class="wp-block-heading has-text-align-center"><?php esc_html_e('The address is entered incorrectly or such a page no longer exists on the site.', 'esotericism');?></h4>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Home page', 'esotericism');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"page__container","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull page__container"><!-- wp:group {"align":"full","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group  alignfull"><!-- wp:group {"align":"full","className":"section-group sections-reviews-carousel","backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section-group sections-reviews-carousel has-base-2-background-color has-background"><!-- wp:group {"metadata":{"categories":["header"],"patternName":"esotericism/section-header","name":"Section header"},"className":"section-group__header animated fadeIn","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group section-group__header animated fadeIn"><!-- wp:heading {"textAlign":"center","className":"has-bottom-line"} -->
<h2 class="wp-block-heading has-text-align-center has-bottom-line"><?php esc_html_e('New arrivals', 'esotericism');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:acf/block-products-carousel {"name":"acf/block-products-carousel","mode":"preview"} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="http://quantumezoterik.loc/shop/"><?php esc_html_e('View all', 'esotericism');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->