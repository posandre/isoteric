<?php
/**
 * Title: Quote section template
 * Slug: esotericism/section-quote
 * Categories: media
 */
?>
<!-- wp:cover {"url":"<?php echo get_site_url();?>/wp-content/uploads/2024/09/author-img-4.jpg","id":1264,"dimRatio":30,"overlayColor":"base","isUserOverlayColor":true,"align":"full","className":"section-group section-quote","style":{"color":{"duotone":"unset"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull section-group section-quote" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1264" alt="" src="<?php echo get_site_url();?>/wp-content/uploads/2024/09/author-img-4.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"categories":["header"],"patternName":"esotericism/section-header","name":"Section header"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"metadata":{"categories":["header"],"patternName":"esotericism/section-header","name":"Section header"},"className":"section-group__header animated fadeIn slower","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group section-group__header animated fadeIn slower"><!-- wp:heading {"textAlign":"center","className":"has-bottom-line"} -->
                <h2 class="wp-block-heading has-text-align-center has-bottom-line"><?php esc_html_e('What is quantum esotericism?', 'esotericism');?></h2>
                <!-- /wp:heading --></div>
            <!-- /wp:group -->

            <!-- wp:group {"className":".section-quote__container","style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
            <div class="wp-block-group .section-quote__container"><!-- wp:quote {"textAlign":"left","className":"animated jackInTheBox delay-100ms","style":{"spacing":{"blockGap":"0"},"layout":{"selfStretch":"fixed","flexSize":"650px"}},"backgroundColor":"contrast-10"} -->
                <blockquote class="wp-block-quote has-text-align-left animated jackInTheBox delay-100ms has-contrast-10-background-color has-background"><!-- wp:paragraph {"align":"left","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                    <p class="has-text-align-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('This is not just a theory, but a practical guide to creating the desired reality. The founder of our direction, Tatyana Rodzhapova, offers an innovative approach that allows each person to reveal their potential and achieve harmony with themselves and the world around them.', 'esotericism');?></p>
                    <!-- /wp:paragraph --></blockquote>
                <!-- /wp:quote -->

                <!-- wp:image {"id":1255,"sizeSlug":"full","linkDestination":"none","align":"center","className":"animated jackInTheBox delay-100ms","style":{"border":{"width":"0.6rem"}},"borderColor":"base-2"} -->
                <figure class="wp-block-image aligncenter size-full has-custom-border animated jackInTheBox delay-100ms"><img src="<?php echo get_site_url();?>/wp-content/uploads/2024/09/consult.jpg" alt="" class="has-border-color has-base-2-border-color wp-image-1255" style="border-width:0.6rem"/></figure>
                <!-- /wp:image --></div>
            <!-- /wp:group --></div>
        <!-- /wp:group --></div></div>
<!-- /wp:cover -->