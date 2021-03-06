<?php
/**
 * Widgets Area implementations
 *
 * @link https://developer.wordpress.org/themes/functionality/widgets/
 *
 * @package yawp
 * @since 1.0.0
 */

/**
 * Register Widgets Area
 */
function yawp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'yawp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'yawp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'yawp_widgets_init' );
