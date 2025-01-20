<?php
/**
 * Title: Home page template
 * Slug: esotericism/page-home
 * Categories: esotericism_page
 * Keywords: page, starter
 * Post Types: page, wp_template
 */
?>

<!-- wp:group {"metadata":{"categories":["posts","featured"],"patternName":"esotericism/section-about-us","name":"Hero"},"align":"full","style":{"background":{"backgroundSize":"cover"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:image {"id":602,"sizeSlug":"large","linkDestination":"none","align":"full","className":"front-background front-background\u002d\u002dtop"} -->
    <figure class="wp-block-image alignfull size-large front-background front-background--top"><img src="<?php echo get_site_url();?>/wp-content/uploads/2024/09/front-background-top-1024x714.png" alt="" class="wp-image-602"/></figure>
    <!-- /wp:image -->

    <!-- wp:pattern {"slug":"esotericism/section-about-us"}	/-->

    <!-- wp:gutena/tabs {"uniqueId":"22817f-46","tabCount":2,"titleTabs":[{"text":"Інструменти","icon":"wordpress-mapMarker","iconSize":22,"iconPosition":"left"},{"text":"Наші курси","icon":"wordpress-captureVideo","iconSize":22,"iconPosition":"left"}],"tabPadding":{"desktop":{}},"tabBorder":{"normal":{"border":{"style":"solid"},"radius":{}},"hover":{"radius":{}},"active":{"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-3,#D39856)","style":"solid","width":"1px"},"left":{"style":"none","width":"0px"}},"radius":{}}},"tabSpacing":"15px","tabAfterGap":"15px","tabColors":{"normal":{},"active":{"icon":"#ffffff"},"hover":{}},"tabTitleFontSize":"1.0rem","tabIcon":false,"tabIconPosition":"top","tabIconSize":32,"tabContainerBorder":{"normal":{"border":{"style":"solid"}}},"tabContainerPadding":{"desktop":{}},"tabContainerColors":{"normal":{}},"blockStyles":{"\u002d\u002dgutena\u002d\u002dtabs-tab-min-width":"40px","\u002d\u002dgutena\u002d\u002dtabs-tab-spacing":"15px","\u002d\u002dgutena\u002d\u002dtabs-tab-after-gap":"15px","\u002d\u002dgutena\u002d\u002dtabs-tab-font-size":"1.0rem","\u002d\u002dgutena\u002d\u002dtabs-tab-active-border-bottom":"1px solid var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-3,#D39856)","\u002d\u002dgutena\u002d\u002dtabs-tab-active-icon-color":"#ffffff","\u002d\u002dgutena\u002d\u002dtabs-tab-icon-spacing":5},"align":"wide","className":"section- group section-courses","layout":{"type":"default"}} -->
    <div class="wp-block-gutena-tabs alignwide gutena-tabs-block gutena-tabs-block-22817f-46 section- group section-courses"><ul class="gutena-tabs-tab tab-left"><li class="gutena-tab-title active" data-tab="1"><div class="gutena-tab-title-content icon-top"><div class="gutena-tab-title-text"><div>Інструменти</div></div></div></li><li class="gutena-tab-title inactive" data-tab="2"><div class="gutena-tab-title-content icon-top"><div class="gutena-tab-title-text"><div>Наші курси</div></div></div></li></ul><div class="gutena-tabs-content"><!-- wp:gutena/tab {"uniqueId":"397920-8d","tabId":1,"parentUniqueId":"22817f-46","blockStyles":{}} -->
            <div class="wp-block-gutena-tab gutena-tab-block gutena-tab-block-397920-8d active" data-tab="1"><!-- wp:woocommerce/product-category {"categories":[22],"className":"animated fadeIn"} /-->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('View all ', 'esotericism');?></a></div>
                    <!-- /wp:button --></div>
                <!-- /wp:buttons --></div>
            <!-- /wp:gutena/tab -->

            <!-- wp:gutena/tab {"uniqueId":"c1c41e-55","tabId":2,"parentUniqueId":"22817f-46","blockStyles":{}} -->
            <div class="wp-block-gutena-tab gutena-tab-block gutena-tab-block-c1c41e-55 inactive" data-tab="2"><!-- wp:woocommerce/product-category {"categories":[21],"className":"animated fadeIn"} /-->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/product-category/nashi-kursy/"><?php esc_html_e('View all ', 'esotericism');?></a></div>
                    <!-- /wp:button --></div>
                <!-- /wp:buttons --></div>
            <!-- /wp:gutena/tab --></div></div>
    <!-- /wp:gutena/tabs -->

    <!-- wp:pattern {"slug":"section-our-community"}	/-->

    <!-- wp:image {"id":606,"sizeSlug":"large","linkDestination":"none","align":"full","className":"front-background front-background\u002d\u002dbottom"} -->
    <figure class="wp-block-image alignfull size-large front-background front-background--bottom"><img src="<?php echo get_site_url();?>/wp-content/uploads/2024/09/front-background-bottom-1024x579.png" alt="" class="wp-image-606"/></figure>
    <!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"section-our-community"}	/-->
<!-- wp:pattern {"slug":"esotericism/section-ether"}	/-->
<!-- wp:pattern {"slug":"esotericism/section-our-preferences"}	/-->
<!-- wp:pattern {"slug":"esotericism/section-we-offer"}	/-->
<!-- wp:pattern {"slug":"esotericism/section-our-principles"}	/-->
<!-- wp:pattern {"slug":"esotericism/section-reviews-carousel"}	/-->
<!-- wp:pattern {"slug":"esotericism/section-call-to-action"}	/-->

