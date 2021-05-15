<?php
/*archive style*/
function mytheme_add_woocommerce_support() {
    add_theme_support('woocommerce', array(
        "thumbnail_image_width" => 560,
        "single_image_width" => 500,
        "product_grid" => array(
            "default_columns" => 20,
            "min_columns" => 2,
            "max_columns" => 4
        )
        ));
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

/* Change number or products per row to 3*/
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 4; // 3 products per row
	}
}

/*remove add to cart btn in shop page*/
add_action( 'woocommerce_after_shop_loop_item', 'remove_add_to_cart_buttons', 1 );

function remove_add_to_cart_buttons() {
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
}

//remove sku
add_filter( 'wc_product_sku_enabled', '__return_false' );


//change display number of single product info
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 6 );


//gallery feature
function gallery_setup() {
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'gallery_setup' );