<?php
/**
 * 404 — Page Not Found.
 *
 * Reuses the theme header/footer (and design tokens) so the not-found page
 * matches the rest of the site in both light and dark contexts.
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<!-- 404 -->
<section style="min-height:clamp(440px,calc(100vh - 200px),760px);display:flex;align-items:center;justify-content:center;background:var(--grad);padding:80px 24px;position:relative;overflow:hidden">
	<div style="position:absolute;width:420px;height:420px;border-radius:50%;background:rgba(255,255,255,0.10);top:-150px;right:-120px;filter:blur(2px);animation:kc-float 10s ease-in-out infinite"></div>
	<div style="position:relative;text-align:center;color:var(--on-grad);max-width:620px">
		<div style="font-family:var(--font-display);font-weight:700;font-size:clamp(80px,16vw,150px);line-height:1;letter-spacing:-0.03em">404</div>
		<h1 style="font-family:var(--font-display);font-weight:700;font-size:clamp(26px,4vw,40px);line-height:1.1;letter-spacing:-0.015em;margin:10px 0 0">This page wandered off the stage</h1>
		<p style="font-size:clamp(16px,1.7vw,19px);line-height:1.55;margin:18px auto 0;max-width:480px;color:rgba(255,255,255,0.92)">The page you're looking for can't be found, but Kate's still here, ready to speak. Let's get you back on track.</p>
		<div style="display:flex;flex-wrap:wrap;gap:14px;justify-content:center;margin-top:32px">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration:none;background:#fff;color:#0a1830;padding:15px 26px;border-radius:999px;font-weight:700;font-size:15.5px;box-shadow:0 14px 30px -12px rgba(0,0,0,0.4)">Back to home</a>
			<a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" style="text-decoration:none;background:rgba(255,255,255,0.12);border:1.5px solid rgba(255,255,255,0.55);color:#fff;padding:15px 26px;border-radius:999px;font-weight:700;font-size:15.5px;backdrop-filter:blur(6px)">Invite Kate to Speak</a>
		</div>
	</div>
</section>
<?php
get_footer();
