<?php namespace <%= wpttenv.name %>;
/**
 * Twenty Fifteen back compat functionality
 *
 * Prevents Twenty Fifteen from running on WordPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * @package WordPress
 * @subpackage <%= wpttenv.name %>
 * @since wptt 1.0
 */

/**
 * Prevent switching to wptt on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since wptt 1.0
 */
function switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_ns_action( 'admin_notices', 'upgrade_notice' );
}
add_ns_action( 'after_switch_theme', 'switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Twenty Fifteen on WordPress versions prior to 4.1.
 *
 * @since wptt 1.0
 */
function upgrade_notice() {
	$message = sprintf( __( 'wptt requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', ns_("") ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.1.
 *
 * @since wptt 1.0
 */
function customize() {
	wp_die( sprintf( __( 'wptt requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', ns_("") ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_ns_action( 'load-customize.php', 'customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.1.
 *
 * @since wptt 1.0
 */
function preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'wptt requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', ns_("") ), $GLOBALS['wp_version'] ) );
	}
}
add_ns_action( 'template_redirect', 'preview' );
