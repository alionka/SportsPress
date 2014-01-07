<?php
function sportspress_enqueue_scripts() {
	// Styles
	wp_register_style( 'sportspress', SPORTSPRESS_PLUGIN_URL . 'assets/css/sportspress.css', array(), time() );
	wp_enqueue_style( 'sportspress');
	wp_register_style( 'jquery-datatables', SPORTSPRESS_PLUGIN_URL . 'assets/css/jquery.dataTables.css', array(), '1.9.4' );
	wp_enqueue_style( 'jquery-datatables');

	// Scripts
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-datatables', SPORTSPRESS_PLUGIN_URL .'/assets/js/jquery.dataTables.min.js', array( 'jquery' ), '1.9.4', true );
	wp_enqueue_script( 'sportspress', SPORTSPRESS_PLUGIN_URL .'/assets/js/sportspress.js', array( 'jquery' ), time(), true );
}
add_action( 'wp_enqueue_scripts', 'sportspress_enqueue_scripts' );