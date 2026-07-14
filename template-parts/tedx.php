<?php
/**
 * TEDx feature section — the now-live talk (embedded video + blurb).
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$kcs_video_url = kcs_video_url();
$kcs_video_id  = kcs_youtube_id();
?>
<!-- TEDX FEATURE -->
<section id="tedx" style="scroll-margin-top:84px;background:var(--bg2);padding:80px 24px;transition:background .45s;border-top:1px solid rgba(255,255,255,0.5)">
	<div class="kc-2col" style="max-width:1180px;margin:0 auto;display:grid;grid-template-columns:0.95fr 1.05fr;gap:50px;align-items:center">
		<div style="position:relative;width:100%;aspect-ratio:16/9;border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow);border:1px solid var(--line)">
			<iframe src="https://www.youtube-nocookie.com/embed/<?php echo esc_attr( $kcs_video_id ); ?>?rel=0" title="Kate Craig — &ldquo;The Courage to Call In&rdquo; · TEDx Johnson City" loading="lazy" style="position:absolute;inset:0;width:100%;height:100%;border:0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		</div>
		<div>
			<div style="display:inline-flex;align-items:center;font-size:12.5px;letter-spacing:var(--eyebrow-spacing);text-transform:uppercase;font-weight:700;color:var(--accent)">Now Live</div>
			<h2 style="font-family:var(--font-display);font-weight:700;font-size:clamp(30px,4vw,46px);line-height:1.05;letter-spacing:-0.015em;margin:14px 0 0;color:var(--fg)">The Courage to Call In</h2>
			<p style="font-size:17.5px;line-height:1.65;color:var(--fg-soft);margin:18px 0 0;max-width:560px">We're always being told who to hate. In her first TEDx talk, Kate makes the case that the way out of our echo chambers isn't a louder argument &mdash; it's a relationship. Drawing on Loretta Ross's idea of &ldquo;calling in,&rdquo; she shows how inviting people into conversation, starting from what we share, is the most powerful tool we have for lasting change.</p>
			<p style="font-size:16px;line-height:1.65;color:var(--fg-soft);margin:14px 0 0;max-width:560px">Through stories from nearly two decades of organizing &mdash; and from her own life as a wife, neighbor, and community-builder in rural Tennessee &mdash; she lands on one stubborn truth: progress moves at the speed of relationships. Her challenge to the room is small and enormous at once: introduce yourself to a neighbor, and stop letting anyone tell you who to hate.</p>
			<p style="font-size:15px;line-height:1.65;color:var(--muted);margin:14px 0 0;max-width:560px">&ldquo;Calling in&rdquo; comes from Loretta Ross's book <em>Calling In: How to Start Making Change with Those You'd Rather Cancel</em> &mdash; one of her five C's, and, she argues, the most effective way to create lasting change.</p>
			<div style="font-size:13px;color:var(--muted);margin:22px 0 0;font-weight:600">TEDx Johnson City &middot; June 26, 2026 &middot; Presented by Brightspeed Fiber</div>
			<a href="<?php echo esc_url( $kcs_video_url ); ?>" target="_blank" rel="noopener" style="display:inline-block;margin-top:22px;text-decoration:none;background:var(--btn-bg);color:var(--btn-fg);padding:15px 28px;border-radius:var(--btn-radius);font-weight:700;font-size:15.5px;box-shadow:var(--shadow)">Watch on YouTube &#8599;</a>
		</div>
	</div>
</section>
