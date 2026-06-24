<?php
/**
 * Footer: site footer, closing .kc-root, wp_footer.
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$kcs_email      = kcs_contact_email();
$kcs_ticket_url = kcs_ticket_url();
?>

	<!-- FOOTER -->
	<footer style="background:var(--bg);border-top:1px solid rgba(255,255,255,0.5);padding:54px 24px 40px;transition:background .45s">
		<div class="kc-foot" style="max-width:1180px;margin:0 auto;display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:36px;align-items:start">
			<div>
				<div style="display:flex;align-items:center;gap:10px;font-family:var(--font-display);font-weight:700;font-size:19px"><span style="width:30px;height:30px;border-radius:9px;background:var(--grad);display:inline-flex;align-items:center;justify-content:center;color:#fff;font-size:15px">K</span>Kate Craig</div>
				<p style="font-size:15px;line-height:1.6;color:var(--fg-soft);margin:14px 0 0;max-width:340px">Public speaking for leaders, organizers, and communities ready to move.</p>
				<a href="mailto:<?php echo esc_attr( $kcs_email ); ?>" style="display:inline-block;margin-top:16px;font-family:var(--font-display);font-weight:700;font-size:19px;color:var(--blue);text-decoration:none"><?php echo esc_html( $kcs_email ); ?></a>
			</div>
			<div>
				<div style="font-size:12px;letter-spacing:0.14em;text-transform:uppercase;color:var(--muted);font-weight:700">Explore</div>
				<div style="display:flex;flex-direction:column;gap:9px;margin-top:14px;font-size:15px">
					<a href="#tedx" style="text-decoration:none;color:var(--fg-soft)">TEDx talk</a>
					<a href="#topics" style="text-decoration:none;color:var(--fg-soft)">Speaking topics</a>
					<a href="#about" style="text-decoration:none;color:var(--fg-soft)">About Kate</a>
					<a href="#proof" style="text-decoration:none;color:var(--fg-soft)">Proof &amp; praise</a>
				</div>
			</div>
			<div>
				<div style="font-size:12px;letter-spacing:0.14em;text-transform:uppercase;color:var(--muted);font-weight:700">Book</div>
				<div style="display:flex;flex-direction:column;gap:9px;margin-top:14px;font-size:15px">
					<a href="#contact" style="text-decoration:none;color:var(--fg-soft)">Invite Kate to speak</a>
					<a href="<?php echo esc_url( $kcs_ticket_url ); ?>" target="_blank" rel="noopener" style="text-decoration:none;color:var(--fg-soft)">Get TEDx tickets</a>
				</div>
			</div>
		</div>
		<div style="max-width:1180px;margin:72px auto 0;font-size:13px;color:var(--muted);text-align:center">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Kate Craig. Helping leaders build stronger communities.</div>
	</footer>

</div><!-- .kc-root -->

<?php wp_footer(); ?>
</body>
</html>
