<?php
/**
 * Title: Reviews template
 * Slug: esotericism/reviews-query
 * Categories: query
 *  Block Types: core/query
 * Description: Template for displaying reviews on the page.
 */
?>
<!-- wp:query {"queryId":54,"query":{"perPage":"8","pages":0,"offset":0,"postType":"review","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":"4","minimumColumnWidth":null}} -->
    <!-- wp:acf/block-review {"name":"acf/block-review","data":{},"mode":"preview","className":"section-reviews__item"} /-->
    <!-- /wp:post-template -->

    <!-- wp:query-pagination -->
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