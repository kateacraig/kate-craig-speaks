<?php
/**
 * Front page: the single-page speaking site.
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
