<?php
/**
 * "More from Kate" — links to other businesses / organizations.
 *
 * Logos sit in a white "logo well" so dark-on-transparent marks stay legible
 * in both light and dark themes. Missing logos fall back to an on-brand
 * placeholder; items flagged 'coming_soon' render as non-clickable cards.
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$kcs_businesses = kcs_get_businesses();
$kcs_img_dir    = get_template_directory() . '/assets/images/';
$kcs_img_uri    = get_template_directory_uri() . '/assets/images/';
?>
<!-- MORE FROM KATE -->
<section id="more" style="scroll-margin-top:84px;background:var(--bg);padding:84px 24px;transition:background .45s;border-top:1px solid rgba(255,255,255,0.5)">
	<div style="max-width:1180px;margin:0 auto">
		<div style="max-width:640px">
			<div style="display:inline-flex;align-items:center;font-size:12.5px;letter-spacing:var(--eyebrow-spacing);text-transform:uppercase;font-weight:700;color:var(--violet)">More From Kate</div>
			<h2 style="font-family:var(--font-display);font-weight:700;font-size:clamp(30px,4vw,46px);line-height:1.05;letter-spacing:-0.015em;margin:14px 0 0;color:var(--fg);text-wrap:balance">Other projects &amp; organizations</h2>
			<p style="font-size:17px;line-height:1.6;color:var(--fg-soft);margin:16px 0 0">Beyond the stage, Kate builds in a few other corners: consulting, writing, and the work of growing democracy.</p>
		</div>

		<div class="kc-biz">
			<?php foreach ( $kcs_businesses as $i => $b ) : ?>
				<?php
				$has_logo  = ! empty( $b['logo'] ) && file_exists( $kcs_img_dir . $b['logo'] );
				$is_link   = ! empty( $b['url'] ) && empty( $b['coming_soon'] );
				$tag       = $is_link ? 'a' : 'div';
				$scale     = isset( $b['logo_scale'] ) ? (float) $b['logo_scale'] : 0;
				$img_style = ( $scale > 1 ) ? ' style="transform:scale(' . esc_attr( sprintf( '%.2f', $scale ) ) . ')"' : '';
				?>
			<<?php echo esc_html( $tag ); ?> class="kc-biz-card<?php echo ! empty( $b['coming_soon'] ) ? ' kc-biz-soon' : ''; ?>"<?php if ( $is_link ) : ?> href="<?php echo esc_url( $b['url'] ); ?>" target="_blank" rel="noopener" aria-label="<?php echo esc_attr( $b['name'] . ' — visit site (opens in a new tab)' ); ?>"<?php endif; ?>>
				<div class="kc-logo-well">
					<?php if ( $has_logo ) : ?>
						<img src="<?php echo esc_url( $kcs_img_uri . $b['logo'] ); ?>" alt="<?php echo esc_attr( $b['name'] . ' logo' ); ?>" loading="lazy"<?php echo $img_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- value built with esc_attr above. ?>>
					<?php else : ?>
						<div style="text-align:center">
							<svg viewBox="0 0 24 24" width="46" height="46" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
								<defs>
									<linearGradient id="kcWrites<?php echo (int) $i; ?>" x1="0" y1="0" x2="24" y2="24" gradientUnits="userSpaceOnUse">
										<stop stop-color="#1c5fcf"></stop>
										<stop offset="0.5" stop-color="#1893c4"></stop>
										<stop offset="1" stop-color="#16b06a"></stop>
									</linearGradient>
								</defs>
								<g stroke="url(#kcWrites<?php echo (int) $i; ?>)">
									<path d="M12 6c-1.6-1.1-4.2-2-7-2v13c2.8 0 5.4.9 7 2 1.6-1.1 4.2-2 7-2V4c-2.8 0-5.4.9-7 2z"></path>
									<path d="M12 6v13"></path>
								</g>
							</svg>
							<div style="font-family:var(--font-display);font-weight:700;font-style:italic;font-size:18px;letter-spacing:-0.01em;color:#143f9e;margin-top:8px"><?php echo esc_html( $b['name'] ); ?></div>
						</div>
					<?php endif; ?>
				</div>
				<h3 style="font-family:var(--font-display);font-weight:700;font-size:19px;line-height:1.15;letter-spacing:-0.01em;margin:18px 0 0;color:var(--fg)"><?php echo esc_html( $b['name'] ); ?></h3>
				<p style="font-size:14.5px;line-height:1.55;color:var(--fg-soft);margin:9px 0 0;flex:1"><?php echo esc_html( $b['desc'] ); ?></p>
				<?php if ( ! empty( $b['coming_soon'] ) ) : ?>
					<span style="align-self:flex-start;display:inline-flex;align-items:center;gap:6px;margin-top:16px;font-size:12px;font-weight:700;letter-spacing:0.06em;text-transform:uppercase;color:var(--muted);border:1px solid var(--line);padding:5px 11px;border-radius:999px">Coming soon</span>
				<?php else : ?>
					<span style="margin-top:16px;font-size:14px;font-weight:700;color:var(--blue)">Visit site &rarr;</span>
				<?php endif; ?>
			</<?php echo esc_html( $tag ); ?>>
			<?php endforeach; ?>
		</div>
	</div>
</section>
