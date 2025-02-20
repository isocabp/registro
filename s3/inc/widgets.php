<?php

add_action( 'widgets_init', 's3_sidebars' );
function s3_sidebars(){
	register_sidebar( 
		array(
			'name'			=> esc_html__( 'S3 Main Sidebar', 's3' ),
			'id'			=> 's3-sidebar-1',
			'description'	=> esc_html__( 'Drag and drop your widgets here', 's3' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		)
	);

	register_sidebar( 
		array(
			'name'			=> esc_html__( 'Sidebar Shop', 's3' ),
			'id'			=> 's3-sidebar-shop',
			'description'	=> esc_html__( 'Drag and drop your WooCommerce widgets here', 's3' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		)
	);			
}