<?php
/**
 * Hero (split-screen).
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$kcs_img = get_template_directory_uri() . '/assets/images';
?>
<!-- HERO : MOMENTUM (split screen) -->
<section style="position:relative;overflow:hidden">
	<div class="kc-split" style="display:grid;grid-template-columns:44% 1fr;align-items:stretch;min-height:clamp(560px,calc(100vh - 69px),840px);background:var(--grad)">
		<div style="position:relative;display:flex;align-items:flex-end;justify-content:center;padding:28px 16px 0"><img src="<?php echo esc_url( $kcs_img . '/kate-craig-1-bg.png' ); ?>" alt="Kate Craig, in a grey suit and glasses, smiling" style="max-width:100%;max-height:100%;filter:drop-shadow(2px 0 0 #fff) drop-shadow(-2px 0 0 #fff) drop-shadow(0 2px 0 #fff) drop-shadow(0 -2px 0 #fff) drop-shadow(0 20px 26px rgba(0,0,0,.4))"></div>
		<div style="position:relative;color:var(--on-grad);overflow:hidden;display:flex;flex-direction:column;justify-content:center;padding:84px max(24px,calc((100vw - 1180px) / 2 + 24px)) 84px 3vw">
			<div style="position:absolute;width:420px;height:420px;border-radius:50%;background:rgba(255,255,255,0.10);top:-150px;right:-130px;filter:blur(2px);animation:kc-float 10s ease-in-out infinite"></div>
			<div style="position:relative">
				<span style="display:inline-flex;align-items:center;gap:9px;background:rgba(255,255,255,0.16);border:1px solid rgba(255,255,255,0.3);padding:8px 15px;border-radius:999px;font-size:13px;font-weight:700;letter-spacing:0.06em;text-transform:uppercase;backdrop-filter:blur(6px)">
					<span style="width:8px;height:8px;border-radius:50%;background:#fff;animation:kc-pulse 1.6s infinite"></span>
					TEDx Johnson City Speaker &middot; June 26, 2026
				</span>
				<h1 style="font-family:var(--font-display);font-weight:700;font-size:clamp(40px,5vw,64px);line-height:1.02;letter-spacing:-0.02em;margin:22px 0 0;text-wrap:balance"><?php echo esc_html( kcs_hero_heading() ); ?></h1>
				<p style="font-size:clamp(17px,1.7vw,20px);line-height:1.55;max-width:520px;margin:22px 0 0;color:rgba(255,255,255,0.92)"><?php echo esc_html( kcs_hero_subheading() ); ?></p>
				<div style="display:flex;flex-wrap:wrap;gap:14px;margin-top:32px">
					<a href="#contact" style="text-decoration:none;background:#fff;color:#0a1830;padding:15px 26px;border-radius:999px;font-weight:700;font-size:15.5px;box-shadow:0 14px 30px -12px rgba(0,0,0,0.4)">Invite Kate to Speak</a>
					<a href="#tedx" style="text-decoration:none;background:rgba(255,255,255,0.12);border:1.5px solid rgba(255,255,255,0.55);color:#fff;padding:15px 26px;border-radius:999px;font-weight:700;font-size:15.5px;backdrop-filter:blur(6px)">Watch the TEDx Talk &rarr;</a>
				</div>
			</div>
		</div>
	</div>
</section>
