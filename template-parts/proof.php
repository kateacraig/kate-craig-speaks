<?php
/**
 * Proof section: event photos + testimonials.
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$kcs_img          = get_template_directory_uri() . '/assets/images';
$kcs_testimonials = kcs_get_testimonials();
?>
<!-- PROOF -->
<section id="proof" style="scroll-margin-top:84px;background:var(--bg);padding:84px 24px;transition:background .45s;border-top:1px solid rgba(255,255,255,0.5)">
	<div style="max-width:1180px;margin:0 auto">
		<div class="kc-3img" style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px">
			<div style="border-radius:var(--radius);overflow:hidden;border:1px solid var(--line);aspect-ratio:4/5"><img src="<?php echo esc_url( $kcs_img . '/kate-craig-drag-event.jpg' ); ?>" alt="Kate Craig speaking on stage at a community event holding a microphone" style="width:100%;height:100%;object-fit:cover"></div>
			<div style="border-radius:var(--radius);overflow:hidden;border:1px solid var(--line);aspect-ratio:4/5"><img src="<?php echo esc_url( $kcs_img . '/kate-craig-campaign-launch.jpg' ); ?>" alt="Kate Craig speaking at an outdoor pavilion event" style="width:100%;height:100%;object-fit:cover"></div>
			<div style="border-radius:var(--radius);overflow:hidden;border:1px solid var(--line);aspect-ratio:4/5"><img src="<?php echo esc_url( $kcs_img . '/campaign-event-2018.jpg' ); ?>" alt="Kate Craig speaking outdoors at a 2018 campaign event" style="width:100%;height:100%;object-fit:cover"></div>
		</div>

		<div style="text-align:center;margin:64px auto 0;max-width:760px">
			<div style="font-size:12.5px;letter-spacing:var(--eyebrow-spacing);text-transform:uppercase;font-weight:700;color:var(--gold)">What audiences say</div>
			<div style="display:flex;flex-wrap:wrap;justify-content:center;gap:14px;margin-top:18px">
				<span style="font-family:var(--font-display);font-weight:700;font-size:clamp(26px,4vw,42px);color:var(--blue);letter-spacing:-0.01em">Engaging.</span>
				<span style="font-family:var(--font-display);font-weight:700;font-size:clamp(26px,4vw,42px);color:var(--green);letter-spacing:-0.01em">Knowledgeable.</span>
				<span style="font-family:var(--font-display);font-weight:700;font-size:clamp(26px,4vw,42px);color:var(--accent);letter-spacing:-0.01em">Insightful.</span>
			</div>
		</div>

		<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:40px" class="kc-quotes">
			<?php foreach ( $kcs_testimonials as $q ) : ?>
			<figure style="margin:0;background:var(--card);border:1px solid var(--line);border-radius:var(--radius);padding:26px 24px;box-shadow:var(--shadow);display:flex;flex-direction:column">
				<div style="font-family:var(--font-display);font-size:40px;line-height:0.5;color:var(--blue);height:22px" aria-hidden="true">&ldquo;</div>
				<blockquote style="margin:0;font-size:16px;line-height:1.6;color:var(--fg);flex:1"><?php echo esc_html( $q['quote'] ); ?></blockquote>
				<figcaption style="margin-top:18px;font-size:13.5px;color:var(--muted)"><strong style="color:var(--fg);display:block;font-size:14.5px"><?php echo esc_html( $q['name'] ); ?></strong><?php echo esc_html( $q['role'] ); ?></figcaption>
			</figure>
			<?php endforeach; ?>
		</div>
	</div>
</section>
