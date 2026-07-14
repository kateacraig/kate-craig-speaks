<?php
/**
 * Theme Customizer settings.
 *
 * Surfaces the most frequently edited fields (hero copy, TEDx video,
 * contact email, CF7 shortcode) in
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

	// TEDx talk video URL (YouTube).
	$wp_customize->add_setting(
		'kcs_video_url',
		array(
			'default'           => 'https://www.youtube.com/watch?v=BMOp7yQCyWg',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'kcs_video_url',
		array(
			'label'       => __( 'TEDx video URL (YouTube)', 'kate-craig-speaks' ),
			'description' => __( 'The talk embedded in the TEDx section. Paste a YouTube watch or share link.', 'kate-craig-speaks' ),
			'section'     => 'kcs_speaking',
			'type'        => 'url',
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

	// Contact Form 7 shortcode (paste the form's shortcode here to switch the
	// booking form over to CF7; leave blank to use the built-in form).
	$wp_customize->add_setting(
		'kcs_cf7_shortcode',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'kcs_cf7_shortcode',
		array(
			'label'       => __( 'Contact Form 7 shortcode', 'kate-craig-speaks' ),
			'description' => __( 'Paste the CF7 shortcode (e.g. [contact-form-7 id="abc123" title="Booking"]) to use Contact Form 7 for the booking form. Leave blank to keep the built-in form.', 'kate-craig-speaks' ),
			'section'     => 'kcs_speaking',
			'type'        => 'text',
		)
	);

}
add_action( 'customize_register', 'kcs_customize_register' );
