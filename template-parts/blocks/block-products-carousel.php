<?php
/**
 * Products carousel Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
} else {
    $id = 'products-carousel-' . $block['id'];
}

$classes= array(
            'block-products-carousel__container',
            'block-products-carousel__container--' . get_field('products_collection_color_schema'
        )
);

if( !empty($block['className']) ) {
    $classes[] = $block['className'];
}

if( !empty($block['align']) ) {
    $classes[] = 'align-' . $block['align'];
}

$products_count = get_field('products_count') ? get_field('products_count') : 5;
$products_display_count = get_field('products_display_count') ? get_field('products_display_count') : 4;
$products_collection_type = get_field('products_collection_type') ? get_field('products_collection_type') : 'last';

$current_category = get_queried_object();

$args = array (
	'post_type'      => 'product',
	'numberposts'    => $products_count,
	'orderby'        => 'date',
	'order'          => 'DESC',
);



if (is_product() && $products_collection_type == 'related') {
	$current_product_id = get_the_ID();

	$related_product_ids = wc_get_related_products( $current_product_id, $products_count );

    if ( !empty( $related_product_ids ) ) {
        $args['include'] = implode(',', $related_product_ids);
    }
} elseif (is_product() && $products_collection_type == 'upsell') {
	$product = wc_get_product( get_the_ID());

	if ( !empty( $product ) ) {
		$upsel_product_ids = $product->get_upsell_ids();

        if ( !empty( $upsel_product_ids ) ) {
	        $args['include'] = implode( ',', $upsel_product_ids );
        }
	}
} else {
	if (is_product()) {
		$args['exclude'] = array(get_the_ID());
	}

	if ( $current_category && is_a( $current_category, 'WP_Term' ) && $current_category->taxonomy === 'product_cat' ) {
		$current_category_id = $current_category->term_id;

		$term_ids = [ $current_category_id ];

		$child_terms = get_term_children( $current_category_id, 'product_cat' );
		if ( ! empty( $child_terms ) ) {
			$term_ids = array_merge( $term_ids, $child_terms );
		}

		$args['tax_query'] = array(
			'taxonomy' => 'product_cat',
			'field'    => 'term_id',
			'terms'    => $term_ids,
			'operator' => 'IN'
		);

	}
}

$products = get_posts($args);
?>

<div class="<?php echo esc_attr(implode(' ', $classes)); ?>">
    <?php if (!empty($products)) : ?>
        <div id="<?php echo esc_attr($id); ?>" class="owl-carousel owl-theme block-products-carousel">
		    <?php foreach ($products as $product) :
			    $product_object = wc_get_product($product->ID);
                $title = get_the_title($product->ID);
            ?>
                <div class="products-carousel__item">
                    <div class="products-carousel__item-container">
                        <a href="<?php echo get_the_permalink($product->ID);?>" class="products-carousel__item-header">
                            <?php echo $product_object->get_image('woocommerce_thumbnail', array('alt'=> $title, 'class'=>'products-carousel__item-img')); ?>
                            <h3 class="products-carousel__item-title"><?php echo $title ?></h3>
                        </a>
                        <div class="products-carousel__item-price">
		                    <?php echo $product_object->get_price_html(); ?>
                        </div>
                    </div>
                </div>
		    <?php endforeach; ?>
        </div>
        <?php
        if (esotericism_is_site_editor_page()) {
            echo '<script src="' .includes_url('/js/jquery/jquery.js'). '"></script>';
	        echo '<link rel="stylesheet" href="' .get_template_directory_uri(). '/assets/libraries/owl-carousel/css/owl.carousel.min.css?ver=6.6.1" media="all" />';
	        echo '<link rel="stylesheet" href="' .get_template_directory_uri(). '/assets/libraries/owl-carousel/css/owl.theme.default.css?ver=6.6.1" media="all" />';
	        echo '<script src="' .get_template_directory_uri(). '/assets/libraries/owl-carousel/js/owl.carousel.min.js"></script>';
        }
        ?>
        <script>
            jQuery( document ).ready(function($) {
                jQuery('#<?php echo esc_attr($id); ?>').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: <?php echo $products_display_count < 2 ? $products_display_count : 2; ?>
                        },
                        1145: {
                            items: <?php echo $products_display_count < 3 ? $products_display_count : 3; ?>
                        },
                        1460: {
                            items: <?php echo $products_display_count; ?>
                        }
                    },
                    onInitialized: function () {
                        fixOwlNavButtons();
                    }
                })
            });

            function fixOwlNavButtons() {
                jQuery('#<?php echo esc_attr($id); ?>').find('.owl-prev, .owl-next').each(function () {
                    let $btn = jQuery(this);
                    $btn.removeAttr('role');

                    if ($btn.hasClass('owl-prev')) {
                        $btn.attr('aria-label', '<?php _e('Попередній слайд','esotericism'); ?>');
                    } else if ($btn.hasClass('owl-next')) {
                        $btn.attr('aria-label', '<?php _e('Наступний слайд','esotericism'); ?>');
                    }
                });
            }
        </script>
    <?php else:; ?>
        <?php _e('No products found', 'esotericism'); ?>
    <?php endif; ?>
</div>