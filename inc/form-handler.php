<?php
/**
 * Speaking-inquiry form handler.
 *
 * Processes the booking form via admin-post.php, emails Kate, and
 * redirects back to the #contact section with a status flag so the
 * template can show the success / error state.
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Handle a speaking-inquiry submission.
 */
function kcs_handle_inquiry() {
	$redirect = home_url( '/' );

	// Verify nonce.
	if ( ! isset( $_POST['kcs_inquiry_nonce'] ) || ! wp_verify_nonce( wp_unslash( $_POST['kcs_inquiry_nonce'] ), 'kcs_inquiry' ) ) {
		wp_safe_redirect( add_query_arg( 'inquiry', 'error', $redirect ) . '#contact' );
		exit;
	}

	// Honeypot: real users leave this empty.
	if ( ! empty( $_POST['kcs_website'] ) ) {
		// Silently treat as success to avoid tipping off bots.
		wp_safe_redirect( add_query_arg( 'inquiry', 'success', $redirect ) . '#contact' );
		exit;
	}

	// Collect + sanitize fields.
	$fields = array(
		'Name'              => sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) ),
		'Organization'      => sanitize_text_field( wp_unslash( $_POST['org'] ?? '' ) ),
		'Email'             => sanitize_email( wp_unslash( $_POST['email'] ?? '' ) ),
		'Phone'             => sanitize_text_field( wp_unslash( $_POST['phone'] ?? '' ) ),
		'Event type'        => sanitize_text_field( wp_unslash( $_POST['eventtype'] ?? '' ) ),
		'Format'            => sanitize_text_field( wp_unslash( $_POST['format'] ?? '' ) ),
		'Date or timeframe' => sanitize_text_field( wp_unslash( $_POST['date'] ?? '' ) ),
		'Location'          => sanitize_text_field( wp_unslash( $_POST['location'] ?? '' ) ),
		'Audience size'     => sanitize_text_field( wp_unslash( $_POST['audience'] ?? '' ) ),
		'Topic interest'    => sanitize_text_field( wp_unslash( $_POST['topic'] ?? '' ) ),
		'Message'           => sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) ),
	);

	// Required: name, org, email, phone, format, date, location.
	$required = array( 'Name', 'Organization', 'Email', 'Phone', 'Format', 'Date or timeframe', 'Location' );
	foreach ( $required as $key ) {
		if ( empty( $fields[ $key ] ) ) {
			wp_safe_redirect( add_query_arg( 'inquiry', 'error', $redirect ) . '#contact' );
			exit;
		}
	}
	if ( ! is_email( $fields['Email'] ) ) {
		wp_safe_redirect( add_query_arg( 'inquiry', 'error', $redirect ) . '#contact' );
		exit;
	}

	// Build the email.
	$to      = kcs_contact_email();
	$subject = sprintf( '[Speaking inquiry] %s — %s', $fields['Name'], $fields['Organization'] );

	$lines = array( 'New speaking inquiry from katecraigconsulting.com', '' );
	foreach ( $fields as $label => $value ) {
		if ( '' !== $value ) {
			$lines[] = $label . ': ' . $value;
		}
	}
	$body = implode( "\n", $lines );

	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		'Reply-To: ' . $fields['Name'] . ' <' . $fields['Email'] . '>',
	);

	$sent = wp_mail( $to, $subject, $body, $headers );

	wp_safe_redirect( add_query_arg( 'inquiry', $sent ? 'success' : 'error', $redirect ) . '#contact' );
	exit;
}
add_action( 'admin_post_nopriv_kcs_inquiry', 'kcs_handle_inquiry' );
add_action( 'admin_post_kcs_inquiry', 'kcs_handle_inquiry' );
