<?php
/**
 * Editable content data: speaking topics and testimonials.
 *
 * These mirror the design export. They are exposed through filters
 * ('kcs_topics' / 'kcs_testimonials') so the copy can be adjusted from a
 * child theme or a small plugin without editing templates.
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Speaking topics (6 modules).
 *
 * @return array
 */
function kcs_get_topics() {
	$topics = array(
		array(
			'num'   => '01',
			'title' => 'The Courage to Call In',
			'body'  => 'Build relationships outside your echo chamber and turn division into durable progress. Audiences leave with a practical way to disagree without giving up on each other.',
			'tag'   => 'Keynote · TEDx talk',
		),
		array(
			'num'   => '02',
			'title' => 'Leadership in a Fractured Civic Moment',
			'body'  => 'How to lead with clarity and steadiness when trust is thin. Frameworks for showing up, making hard calls, and keeping people together.',
			'tag'   => 'Keynote · Workshop',
		),
		array(
			'num'   => '03',
			'title' => 'Building Movements People Want to Join',
			'body'  => 'What makes people opt in and stay. Turn a cause into a community with momentum, clear roles, and joy that lasts past the launch.',
			'tag'   => 'Keynote · Training',
		),
		array(
			'num'   => '04',
			'title' => 'Digital Strategy for Real-World Change',
			'body'  => 'From an organizer who has run real campaigns: use digital tools to organize, message, and actually move people offline.',
			'tag'   => 'Workshop · Training',
		),
		array(
			'num'   => '05',
			'title' => 'From Campaigns to Communities',
			'body'  => 'What electoral organizing teaches us about building anything that lasts after the rally ends, and how to keep going.',
			'tag'   => 'Keynote · Panel',
		),
		array(
			'num'   => '06',
			'title' => 'Organizing with Joy, Discipline, & Courage',
			'body'  => 'The three habits that keep volunteers showing up. A workshop-ready playbook for organizing that is sustainable, ready for every campaign.',
			'tag'   => 'Workshop · Training',
		),
	);

	return apply_filters( 'kcs_topics', $topics );
}

/**
 * Testimonials (3 quotes).
 *
 * @return array
 */
function kcs_get_testimonials() {
	$testimonials = array(
		array(
			'quote' => 'Kate took a room full of nervous first-time organizers and had them leave with an actual plan. Clear, warm, and impossible not to trust.',
			'name'  => 'Leadership cohort facilitator',
			'role'  => 'Regional training program',
		),
		array(
			'quote' => 'The most useful session of our conference. She makes strategy feel doable instead of overwhelming, and people were still talking about it weeks later.',
			'name'  => 'Nonprofit executive director',
			'role'  => 'Civic engagement org',
		),
		array(
			'quote' => 'Funny, sharp, and genuinely insightful. Kate met our students where they were and sent them off ready to build something.',
			'name'  => 'University program organizer',
			'role'  => 'Student leadership series',
		),
	);

	return apply_filters( 'kcs_testimonials', $testimonials );
}
