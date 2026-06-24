<?php
/**
 * Kate Craig Speaks — theme functions.
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access.
}

define( 'KCS_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function kcs_setup() {
	// Let WordPress manage the document <title>.
	add_theme_support( 'title-tag' );

	// Featured images, in case Kate later adds posts/pages with thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Modern HTML5 markup for core features (incl. search/comment forms).
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	// Responsive embeds + automatic feed links.
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );

	// A single primary nav menu (the in-page anchor links).
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'kate-craig-speaks' ),
		)
	);
}
add_action( 'after_setup_theme', 'kcs_setup' );

/**
 * Enqueue styles and scripts.
 */
function kcs_assets() {
	// Google Fonts used by the canonical design ("direction A").
	wp_enqueue_style(
		'kcs-fonts',
		'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Public+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap',
		array(),
		null
	);

	// Main stylesheet (theme header + tokens + responsive rules).
	wp_enqueue_style( 'kcs-style', get_stylesheet_uri(), array( 'kcs-fonts' ), KCS_VERSION );

	// Countdown + small UX behaviours.
	wp_enqueue_script( 'kcs-countdown', get_template_directory_uri() . '/assets/js/countdown.js', array(), KCS_VERSION, true );
	wp_localize_script(
		'kcs-countdown',
		'KCS_DATA',
		array(
			// ISO-ish local datetime used by the countdown target.
			'eventDateTime' => kcs_get_option( 'kcs_event_datetime', '2026-06-26T18:00:00' ),
		)
	);

	// Contact Form 7 success-panel handling (no-ops when CF7 isn't present).
	wp_enqueue_script( 'kcs-contact-cf7', get_template_directory_uri() . '/assets/js/contact-cf7.js', array(), KCS_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'kcs_assets' );

/**
 * Preconnect to Google Fonts hosts (matches the design's <head>).
 */
function kcs_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array( 'href' => 'https://fonts.googleapis.com' );
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'kcs_resource_hints', 10, 2 );

/**
 * Small helper: read a Customizer/theme-mod value with a default.
 *
 * @param string $key     Option / theme-mod key.
 * @param mixed  $default Fallback value.
 * @return mixed
 */
function kcs_get_option( $key, $default = '' ) {
	$value = get_theme_mod( $key, $default );
	return ( '' === $value || null === $value ) ? $default : $value;
}

/**
 * Convenience accessors for the most-edited fields (with sane defaults).
 */
function kcs_ticket_url() {
	return esc_url( kcs_get_option( 'kcs_ticket_url', 'https://www.ted.com/tedx/events/67032' ) );
}
function kcs_contact_email() {
	return sanitize_email( kcs_get_option( 'kcs_contact_email', 'kate@katecraigconsulting.com' ) );
}
function kcs_hero_heading() {
	return kcs_get_option( 'kcs_hero_heading', 'Helping Leaders Build Stronger Communities' );
}
function kcs_hero_subheading() {
	return kcs_get_option( 'kcs_hero_subheading', 'Kate Craig is a speaker, author, and movement-builder whose talks empower audiences to organize, lead, and build something better.' );
}

/**
 * Open Graph / Twitter Card tags so social shares use the brand logo card
 * (instead of whatever image a platform scrapes off the page, e.g. the TEDx
 * graphic). Skipped when a dedicated SEO plugin is managing these tags.
 */
function kcs_social_meta() {
	if ( defined( 'WPSEO_VERSION' ) || class_exists( 'RankMath' ) || function_exists( 'aioseo' ) ) {
		return;
	}

	$image = get_template_directory_uri() . '/assets/images/og-image.png';
	$name  = get_bloginfo( 'name' );
	$title = wp_get_document_title();
	$desc  = get_bloginfo( 'description', 'display' );
	if ( '' === trim( (string) $desc ) ) {
		$desc = 'Public speaking for leaders, organizers, and communities ready to move.';
	}

	echo "\n";
	echo '<meta property="og:type" content="website">' . "\n";
	printf( '<meta property="og:site_name" content="%s">' . "\n", esc_attr( $name ) );
	printf( '<meta property="og:title" content="%s">' . "\n", esc_attr( $title ) );
	printf( '<meta property="og:description" content="%s">' . "\n", esc_attr( $desc ) );
	printf( '<meta property="og:url" content="%s">' . "\n", esc_url( home_url( '/' ) ) );
	printf( '<meta property="og:image" content="%s">' . "\n", esc_url( $image ) );
	echo '<meta property="og:image:width" content="1200">' . "\n";
	echo '<meta property="og:image:height" content="630">' . "\n";
	printf( '<meta property="og:image:alt" content="%s">' . "\n", esc_attr( $name ) );
	echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
	printf( '<meta name="twitter:title" content="%s">' . "\n", esc_attr( $title ) );
	printf( '<meta name="twitter:description" content="%s">' . "\n", esc_attr( $desc ) );
	printf( '<meta name="twitter:image" content="%s">' . "\n", esc_url( $image ) );
}
add_action( 'wp_head', 'kcs_social_meta', 5 );

require_once get_template_directory() . '/inc/content-data.php';
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/form-handler.php';
require_once get_template_directory() . '/inc/cf7.php';
