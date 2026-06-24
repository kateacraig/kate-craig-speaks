<?php
/**
 * Speaking topics section.
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$kcs_topics = kcs_get_topics();
?>
<!-- TOPICS -->
<section id="topics" style="scroll-margin-top:84px;background:var(--bg);padding:84px 24px;transition:background .45s;border-top:1px solid rgba(255,255,255,0.5)">
	<div style="max-width:1180px;margin:0 auto">
		<div style="max-width:640px">
			<div style="display:inline-flex;align-items:center;gap:8px;font-size:12.5px;letter-spacing:var(--eyebrow-spacing);text-transform:uppercase;font-weight:700;color:var(--green)"><span style="width:22px;height:2px;background:var(--green)"></span>What Kate Speaks About</div>
			<h2 style="font-family:var(--font-display);font-weight:700;font-size:clamp(30px,4vw,46px);line-height:1.05;letter-spacing:-0.015em;margin:14px 0 0;color:var(--fg);text-wrap:balance">Talks and workshops that turn ideas into community action</h2>
			<p style="font-size:17px;line-height:1.6;color:var(--fg-soft);margin:16px 0 0">Each is available as a keynote, workshop, training, or panel, and tailored to your audience. People leave able to apply what they learned where they live and work.</p>
		</div>
		<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:44px" class="kc-topics">
			<?php foreach ( $kcs_topics as $t ) : ?>
			<div style="background:var(--card);border:1px solid var(--line);border-radius:var(--radius);padding:26px 24px 28px;box-shadow:var(--shadow);display:flex;flex-direction:column;min-height:230px">
				<div style="display:flex;align-items:center;justify-content:space-between">
					<span style="font-family:var(--font-display);font-weight:700;font-size:15px;color:var(--blue)"><?php echo esc_html( $t['num'] ); ?></span>
					<span style="height:6px;width:44px;border-radius:99px;background:var(--grad)"></span>
				</div>
				<h3 style="font-family:var(--font-display);font-weight:700;font-size:21px;line-height:1.15;letter-spacing:-0.01em;margin:18px 0 0;color:var(--fg)"><?php echo esc_html( $t['title'] ); ?></h3>
				<p style="font-size:15px;line-height:1.55;color:var(--fg-soft);margin:11px 0 0;flex:1"><?php echo esc_html( $t['body'] ); ?></p>
				<div style="font-size:12px;letter-spacing:0.06em;text-transform:uppercase;font-weight:700;color:var(--muted);margin-top:16px"><?php echo esc_html( $t['tag'] ); ?></div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
