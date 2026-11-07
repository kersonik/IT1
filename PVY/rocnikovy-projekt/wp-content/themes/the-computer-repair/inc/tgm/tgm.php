<?php

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function the_computer_repair_register_recommended_plugins() {
	$plugins = array(
		
		array(
			'name'             => __( 'Woocommerce', 'the-computer-repair' ),
			'slug'             => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'the_computer_repair_register_recommended_plugins' );