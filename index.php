<?php
/**
 * Main template (fallback).
 *
 * This is a single-page brochure theme, so the fallback simply renders the
 * same one-page layout the front page uses. WordPress falls back here when
 * front-page.php is not used (e.g. a fresh install before a static front
 * page is assigned).
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

get_template_part( 'template-parts/hero' );
get_template_part( 'template-parts/tedx' );
get_template_part( 'template-parts/topics' );
get_template_part( 'template-parts/about' );
get_template_part( 'template-parts/proof' );
get_template_part( 'template-parts/contact' );

get_footer();
