<?php

/********* SUPORTE WOOCOMMERCE *********/
function s3_configs_loja()
{
	add_theme_support('woocommerce', array(
		'thumbnail_image_width'		=> 400,
		'single_image_width'		=> 400,
		'product_grid'				=> array(
			'default_rows'    => 10,
			'min_rows'        => 6,
			'max_rows'        => 10,
			'default_columns' => 1,
			'min_columns'     => 1,
			'max_columns'     => 4,
		)
	));
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 's3_configs_loja', 0);
/********* SUPORTE WOOCOMMERCE - FIM *********/

function s3_wc_modify()
{
	add_action('woocommerce_before_main_content', 's3_open_container_row', 5);
	function s3_open_container_row()
	{
		echo '
		<section class="shop-template">
			<div class="container pb-5">
				<div class="row">
		';
	}

	add_action('woocommerce_after_main_content', 's3_close_container_row', 5);
	function s3_close_container_row()
	{
		echo '
					</div>
				</div>
		</section>
		';
	}
	/********* ESTRUTURA *********/

	if (is_shop() || is_product_category() || is_product_tag()) {
		/********* BREADCRUMB *********/
		remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
		add_action('woocommerce_before_main_content', 's3_open_breadcrumb', 2);
		function s3_open_breadcrumb()
		{
			echo '
				<section class="shop-template">
					<div class="container">
			';
		}
		add_action('woocommerce_after_main_content', 's3_close_breadcrumb', 4);
		function s3_close_breadcrumb()
		{
			echo '
					</div>
				</section>
			';
		}
		add_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 3);
		/********* BREADCRUMB - FIM *********/

		/********* SIDEBAR *********/
		add_action('woocommerce_before_main_content', 's3_add_sidebar_tags', 6);
		function s3_add_sidebar_tags()
		{
			echo '
				<div class="col-md-4 col-lg-3 order-2 order-md-1">
			';
		}
		//adiciona sidebar
		add_action('woocommerce_before_main_content', 'woocommerce_get_sidebar', 7);

		add_action('woocommerce_before_main_content', 's3_close_sidebar_tags', 8);
		function s3_close_sidebar_tags()
		{
			echo '
				</div>
			';
		}
		/********* SIDEBAR - FIM *********/

		add_filter('woocommerce_show_page_title', 's3_remove_shop_title');
		function s3_remove_shop_title()
		{
			return false;
		}
	}
	//remove sidebar e adiciona na posição certa
	remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');

	/********* ORDENAÇÃO *********/
	remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
	remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
	add_action('woocommerce_before_shop_loop', 's3_add_count_ordering', 20);
	function s3_add_count_ordering()
	{
		echo '
			<div class="row d-flex align-items-center">
				<div class="col-lg-6">
		';
	}
	add_action('woocommerce_before_shop_loop', 's3_meio_count_ordering', 25);
	function s3_meio_count_ordering()
	{
		echo '
			</div>
			<div class="col-lg-6">
		';
	}
	add_action('woocommerce_before_shop_loop', 's3_close_count_ordering', 30);
	function s3_close_count_ordering()
	{
		echo '
				</div>
			</div>
		';
	}
	add_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 22);
	add_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 27);
	/********* ORDENAÇÃO - FIM *********/

	/********* PRIMARY *********/
	add_action('woocommerce_before_main_content', 's3_add_shop_tags', 9);
	function s3_add_shop_tags()
	{
		if (is_shop() || is_product_category() || is_product_tag()) {
			echo '
			<div class="col-lg-9 col-md-8 order-1 order-md-2">
		';
		} else {
			echo '
			<div class="col">
		';
		}
	}

	add_action('woocommerce_before_main_content', 's3_close_shop_tags', 4);
	function s3_close_shop_tags()
	{
		echo '
			</div>
		';
	}
	/********* PRIMARY - FIM *********/


	/********* CARRINHO *********/
	add_action('woocommerce_before_cart', 's3_add_to_cart', 5);
	function s3_add_to_cart()
	{
		echo '
			<div class="row">
				<div class="col-lg-8">
		';
	}
	add_action('woocommerce_before_cart_collaterals', 's3_meio_to_cart', 5);
	function s3_meio_to_cart()
	{
		echo '
			</div>
			<div class="col-lg-4">
		';
	}
	add_action('woocommerce_after_cart', 's3_close_to_cart', 20);
	function s3_close_to_cart()
	{
		echo '
				</div>
			</div>
		';
	}
	/********* CARRINHO - FIM *********/

	/********* PAGAMENTO *********/
	add_action('woocommerce_checkout_before_customer_details', 's3_add_to_checkout', 5);
	function s3_add_to_checkout()
	{
		echo '
			<div class="row">
				<div class="col-lg-8">
		';
	}
	add_action('woocommerce_checkout_before_order_review_heading', 's3_meio_to_checkout', 5);
	function s3_meio_to_checkout()
	{
		echo '
			</div>
			<div class="col-lg-4">
		';
	}
	add_action('woocommerce_after_checkout_form', 's3_close_to_checkout', 20);
	function s3_close_to_checkout()
	{
		echo '
				</div>
			</div>
		';
	}
	/********* PAGAMENTO - FIM *********/

	/********* ESTRUTURA - FIM *********/
}

add_action('wp', 's3_wc_modify');

/**
 * Show cart contents / total Ajax
 */
add_filter('woocommerce_add_to_cart_fragments', 's3_woocommerce_header_add_to_cart_fragment');

function s3_woocommerce_header_add_to_cart_fragment($fragments)
{
	global $woocommerce;

	ob_start();

?>
	<a class="carrinhoTopo bg-white rounded d-table p-1 position-relative" href="<?php echo wc_get_cart_url(); ?>" title="Carrinho de compras">
		<div class="contadorCarrinho position-absolute bg-secondary left-0 font-10 text-white"><?php echo WC()->cart->get_cart_contents_count(); ?></div>
		<i class="fa-solid fa-basket-shopping font-22 text-primary"></i>
	</a>
<?php
	$fragments['.carrinhoTopo'] = ob_get_clean();
	return $fragments;
}
