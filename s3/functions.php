<?php

/**
 * S3 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package S3
 */
require get_template_directory() . '/inc/theme_setup.php';
require get_template_directory() . '/inc/custom_image_sizes.php';
require get_template_directory() . '/inc/assets.php';
require get_template_directory() . '/inc/pagination.php';
include get_template_directory() . '/inc/custom_register.php';
require get_template_directory() . '/inc/custom_post_types.php';
require get_template_directory() . '/inc/custom_functions.php';
//require get_template_directory() . '/acf/campos.php';
//require get_template_directory() . '/acf/custom_ajax.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/woocommerce.php';
}