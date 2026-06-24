<?php
/**
 * TEDx feature section.
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$kcs_img        = get_template_directory_uri() . '/assets/images';
$kcs_ticket_url = kcs_ticket_url();
?>
<!-- TEDX FEATURE -->
<section id="tedx" style="scroll-margin-top:84px;background:var(--bg2);padding:80px 24px;transition:background .45s;border-top:1px solid rgba(255,255,255,0.5)">
	<div class="kc-2col" style="max-width:1180px;margin:0 auto;display:grid;grid-template-columns:0.95fr 1.05fr;gap:50px;align-items:center">
		<div style="position:relative;border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow);border:1px solid var(--line)">
			<img src="<?php echo esc_url( $kcs_img . '/tedx.jpg' ); ?>" alt="TEDx Johnson City speaker lineup graphic, Friday June 26, 6 to 8pm" style="width:100%;display:block">
		</div>
		<div>
			<div style="display:inline-flex;align-items:center;font-size:12.5px;letter-spacing:var(--eyebrow-spacing);text-transform:uppercase;font-weight:700;color:var(--accent)">The Launch Moment</div>
			<h2 style="font-family:var(--font-display);font-weight:700;font-size:clamp(30px,4vw,46px);line-height:1.05;letter-spacing:-0.015em;margin:14px 0 0;color:var(--fg)">The Courage to Call In</h2>
			<p style="font-size:17.5px;line-height:1.65;color:var(--fg-soft);margin:18px 0 0;max-width:560px">Kate's first TEDx talk is about finding the courage to build relationships outside our echo chambers, and to invest in the slow, durable work of long-term progress.</p>
			<p style="font-size:15.5px;line-height:1.65;color:var(--muted);margin:14px 0 0;max-width:560px">&ldquo;Calling in&rdquo; comes from Loretta Ross's book <em>Calling In: How to Start Making Change with Those You'd Rather Cancel</em>. Ross names it as one of her five C's and the most effective way to create lasting change. Kate's talk carries that idea into the practical work of community building and organizing.</p>
			<div style="display:flex;flex-wrap:wrap;gap:18px;margin:26px 0 0;padding:18px 0;border-top:1px solid var(--line);border-bottom:1px solid var(--line)">
				<div><div style="font-size:11px;letter-spacing:0.14em;text-transform:uppercase;color:var(--muted);font-weight:700">When</div><div style="font-weight:700;color:var(--fg);margin-top:3px">Fri, June 26, 2026 &middot; 6-8pm</div></div>
				<div><div style="font-size:11px;letter-spacing:0.14em;text-transform:uppercase;color:var(--muted);font-weight:700">Where</div><div style="font-weight:700;color:var(--fg);margin-top:3px">TEDx Johnson City</div></div>
				<div><div style="font-size:11px;letter-spacing:0.14em;text-transform:uppercase;color:var(--muted);font-weight:700">Presented by</div><div style="font-weight:700;color:var(--fg);margin-top:3px">Brightspeed Fiber</div></div>
			</div>
			<a href="<?php echo esc_url( $kcs_ticket_url ); ?>" target="_blank" rel="noopener" style="display:inline-block;margin-top:24px;text-decoration:none;background:var(--btn-bg);color:var(--btn-fg);padding:15px 28px;border-radius:var(--btn-radius);font-weight:700;font-size:15.5px;box-shadow:var(--shadow)">Get TEDx Tickets &rarr;</a>
		</div>
	</div>
</section>
