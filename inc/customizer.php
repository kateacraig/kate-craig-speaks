<?php
/**
 * Theme Customizer settings.
 *
 * Surfaces the most frequently edited fields (hero copy, ticket link,
 * contact email, TEDx event date/time for the countdown) in
 * Appearance → Customize → "Kate Craig Speaking".
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Customizer panel, section, settings and controls.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function kcs_customize_register( $wp_customize ) {

	$wp_customize->add_section(
		'kcs_speaking',
		array(
			'title'       => __( 'Kate Craig Speaking', 'kate-craig-speaks' ),
			'priority'    => 30,
			'description' => __( 'Core editable content for the speaking site.', 'kate-craig-speaks' ),
		)
	);

	// Hero heading (H1).
	$wp_customize->add_setting(
		'kcs_hero_heading',
		array(
			'default'           => 'Helping Leaders Build Stronger Communities',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'kcs_hero_heading',
		array(
			'label'   => __( 'Hero headline (H1)', 'kate-craig-speaks' ),
			'section' => 'kcs_speaking',
			'type'    => 'text',
		)
	);

	// Hero subheading.
	$wp_customize->add_setting(
		'kcs_hero_subheading',
		array(
			'default'           => 'Kate Craig is a speaker, author, and movement-builder whose talks empower audiences to organize, lead, and build something better.',
			'sanitize_callback' => 'sanitize_textarea_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'kcs_hero_subheading',
		array(
			'label'   => __( 'Hero subheadline', 'kate-craig-speaks' ),
			'section' => 'kcs_speaking',
			'type'    => 'textarea',
		)
	);

	// TEDx ticket URL.
	$wp_customize->add_setting(
		'kcs_ticket_url',
		array(
			'default'           => 'https://www.ted.com/tedx/events/67032',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'kcs_ticket_url',
		array(
			'label'   => __( 'TEDx ticket URL', 'kate-craig-speaks' ),
			'section' => 'kcs_speaking',
			'type'    => 'url',
		)
	);

	// Contact email.
	$wp_customize->add_setting(
		'kcs_contact_email',
		array(
			'default'           => 'kate@katecraigconsulting.com',
			'sanitize_callback' => 'sanitize_email',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'kcs_contact_email',
		array(
			'label'       => __( 'Contact / booking email', 'kate-craig-speaks' ),
			'description' => __( 'Where inquiry-form submissions are emailed, and the address shown on the site.', 'kate-craig-speaks' ),
			'section'     => 'kcs_speaking',
			'type'        => 'email',
		)
	);

	// Event date/time for the countdown (local time, ISO-ish).
	$wp_customize->add_setting(
		'kcs_event_datetime',
		array(
			'default'           => '2026-06-26T18:00:00',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'kcs_event_datetime',
		array(
			'label'       => __( 'TEDx event date & time', 'kate-craig-speaks' ),
			'description' => __( 'Used by the countdown. Format: YYYY-MM-DDTHH:MM:SS (e.g. 2026-06-26T18:00:00).', 'kate-craig-speaks' ),
			'section'     => 'kcs_speaking',
			'type'        => 'text',
		)
	);
}
add_action( 'customize_register', 'kcs_customize_register' );
