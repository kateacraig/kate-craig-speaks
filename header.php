<?php
/**
 * Header: document head, opening body, and the sticky navigation.
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<a class="skip-link" href="#top"><?php esc_html_e( 'Skip to content', 'kate-craig-speaks' ); ?></a>

<div class="kc-root" style="--bg:#0d1117;--bg2:#141923;--surface:#171d28;--fg:#eaeef5;--fg-soft:#aeb8c6;--muted:#7d8794;--line:#28303d;--blue:#5b9fff;--green:#2fd47a;--accent:#ff7559;--gold:#ffc24d;--violet:#9b86ff;--grad:linear-gradient(135deg,#1c5fcf 0%,#1893c4 48%,#16b06a 100%);--on-grad:#ffffff;--btn-bg:linear-gradient(135deg,#1c5fcf,#16b06a);--btn-fg:#ffffff;--shadow:0 22px 50px -22px rgba(0,0,0,.7);--card:#171d28;--font-display:'Space Grotesk',sans-serif;--font-body:'Public Sans',sans-serif;--eyebrow-spacing:0.16em;--radius:14px;--radius-lg:26px;--btn-radius:999px">

	<!-- NAV -->
	<header class="kc-header" style="position:sticky;top:0;z-index:50;background:var(--bg2);border-bottom:1px solid var(--line);transition:background .45s,border-color .45s">
		<nav style="max-width:1180px;margin:0 auto;padding:16px 24px;display:flex;align-items:center;gap:20px" aria-label="<?php esc_attr_e( 'Primary', 'kate-craig-speaks' ); ?>">
			<div style="flex:1">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="kc-logo" aria-label="<?php esc_attr_e( 'Kate Craig Speaks — home', 'kate-craig-speaks' ); ?>" style="display:inline-flex;align-items:center;gap:12px;text-decoration:none">
					<span aria-hidden="true" style="width:42px;height:42px;border-radius:50%;padding:2px;background:var(--grad);flex:none;display:block">
						<span style="width:100%;height:100%;border-radius:50%;background:var(--bg);display:flex;align-items:center;justify-content:center">
							<span style="font-family:var(--font-display);font-size:17px;font-weight:700;letter-spacing:-0.04em;color:var(--fg)">K<span style="background:linear-gradient(135deg,var(--blue),var(--green));-webkit-background-clip:text;background-clip:text;color:transparent">C</span></span>
						</span>
					</span>
					<span class="kc-logo-text" style="display:inline-flex;align-items:center;gap:12px">
						<span aria-hidden="true" style="width:1px;height:30px;background:var(--line);flex:none"></span>
						<span style="line-height:1">
							<span style="display:block;font-family:var(--font-display);font-weight:700;font-size:17px;letter-spacing:-0.01em;color:var(--fg)">Kate Craig</span>
							<span style="display:block;font-family:var(--font-display);font-weight:600;font-size:9px;letter-spacing:0.34em;text-transform:uppercase;margin-top:5px;padding-left:0.34em;color:var(--green)">Speaks</span>
						</span>
					</span>
				</a>
			</div>
			<div style="display:none;gap:26px;align-items:center;font-size:14.5px;font-weight:500" class="kc-navlinks">
				<a href="#tedx" style="text-decoration:none;color:var(--fg-soft)">TEDx</a>
				<a href="#topics" style="text-decoration:none;color:var(--fg-soft)">Topics</a>
				<a href="#about" style="text-decoration:none;color:var(--fg-soft)">About</a>
				<a href="#proof" style="text-decoration:none;color:var(--fg-soft)">Proof</a>
			</div>
			<a href="#contact" style="text-decoration:none;background:var(--btn-bg);color:var(--btn-fg);padding:11px 20px;border-radius:var(--btn-radius);font-weight:700;font-size:14.5px;box-shadow:var(--shadow)">Invite Kate to Speak</a>
		</nav>
	</header>

	<span id="top"></span>
