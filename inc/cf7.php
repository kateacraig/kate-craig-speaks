<?php
/**
 * Contact Form 7 integration.
 *
 * Disables CF7's automatic paragraph/line-break formatting so the
 * hand-authored, inline-styled form markup renders exactly as written
 * (otherwise CF7 injects stray <p>/<br> that break the grid layout).
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'wpcf7_autop_or_not', '__return_false' );
