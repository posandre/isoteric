<?php
/**
 * Title: "Reviews carousel" section template
 * Slug: esotericism/section-reviews-carousel
 * Categories: media
 */
?>
<!-- wp:group {"align":"full","className":"section-group sections-reviews-carousel","backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section-group sections-reviews-carousel has-base-2-background-color has-background"><!-- wp:group {"metadata":{"categories":["header"],"patternName":"esotericism/section-header","name":"Section header"},"className":"section-group__header animated fadeIn","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group section-group__header animated fadeIn"><!-- wp:heading {"textAlign":"center","level":3,"fontFamily":"body"} -->
        <h3 class="wp-block-heading has-text-align-center has-body-font-family"><?php esc_html_e('Reviews', 'esotericism');?></h3>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","className":"has-bottom-line"} -->
        <h2 class="wp-block-heading has-text-align-center has-bottom-line"><?php esc_html_e('What do our customers say about us?', 'esotericism');?></h2>
        <!-- /wp:heading --></div>
    <!-- /wp:group -->

    <!-- wp:acf/block-reviews-carousel {"name":"acf/block-reviews-carousel","data":{"reviews_count":"5","_reviews_count":"field_66d1f0ef4c9dd"},"mode":"preview"} /-->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button -->
        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo get_site_url();?>/reviews/"><?php esc_html_e('More details', 'esotericism');?></a></div>
        <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
<!-- /wp:group -->