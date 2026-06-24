<?php
/**
 * About Kate section.
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$kcs_img = get_template_directory_uri() . '/assets/images';
?>
<!-- ABOUT -->
<section id="about" style="scroll-margin-top:84px;background:var(--bg2);padding:84px 24px;transition:background .45s;border-top:1px solid rgba(255,255,255,0.5)">
	<div class="kc-about" style="max-width:1180px;margin:0 auto;display:grid;grid-template-columns:0.85fr 1.15fr;gap:54px;align-items:start">
		<div class="kc-sticky" style="position:sticky;top:96px">
			<div style="border-radius:var(--radius-lg);overflow:hidden;border:1px solid var(--line);box-shadow:var(--shadow)">
				<img src="<?php echo esc_url( $kcs_img . '/kate-craig-casual.jpg' ); ?>" alt="Kate Craig outdoors in sunglasses and a denim shirt, smiling" style="width:100%;display:block">
			</div>
			<div style="display:flex;gap:12px;margin-top:18px">
				<div style="flex:1;text-align:center;background:var(--bg);border:1px solid var(--line);border-radius:var(--radius);padding:14px"><div style="font-family:var(--font-display);font-weight:700;font-size:26px;color:var(--blue)">8</div><div style="font-size:12px;color:var(--muted);margin-top:2px">books written</div></div>
				<div style="flex:1;text-align:center;background:var(--bg);border:1px solid var(--line);border-radius:var(--radius);padding:14px"><div style="font-family:var(--font-display);font-weight:700;font-size:26px;color:var(--green)">2017</div><div style="font-size:12px;color:var(--muted);margin-top:2px">speaking since</div></div>
			</div>
		</div>
		<div>
			<div style="display:inline-flex;align-items:center;gap:8px;font-size:12.5px;letter-spacing:var(--eyebrow-spacing);text-transform:uppercase;font-weight:700;color:var(--violet)">About Kate</div>
			<h2 style="font-family:var(--font-display);font-weight:700;font-size:clamp(30px,4vw,46px);line-height:1.05;letter-spacing:-0.015em;margin:14px 0 0;color:var(--fg);text-wrap:balance">She builds things: software, campaigns, and communities that last</h2>
			<div style="font-size:17.5px;line-height:1.7;color:var(--fg-soft);margin-top:22px;max-width:620px">
				<p style="margin:0 0 16px">Kate Craig is a speaker, author, and movement-builder who has spent the last decade in the practical work of organizing: running campaigns, training candidates, and founding Harvesting Democracy PAC. In 2022 she ran for Tennessee State Senate, District 3.</p>
				<p style="margin:0 0 16px">She founded the Washington, D.C. chapter of Dykes on Bikes, has written eight books, completed the NaNoWriMo challenge four times, and published a poem in <em>Poets Reading the News</em> in 2017, the same year she started speaking.</p>
				<p style="margin:0">Across all of it runs one thread: the belief that ordinary people, working together, can change what feels possible, and that the work starts with the courage to build relationships outside our echo chambers.</p>
			</div>
		</div>
	</div>
</section>
