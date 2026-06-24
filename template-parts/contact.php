<?php
/**
 * Contact / booking section.
 *
 * Shows the inquiry form, or a success / error state based on the
 * `inquiry` query flag set by the admin-post handler.
 *
 * @package KateCraigSpeaks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$kcs_email   = kcs_contact_email();
$kcs_status  = isset( $_GET['inquiry'] ) ? sanitize_key( wp_unslash( $_GET['inquiry'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
$kcs_success = ( 'success' === $kcs_status );
$kcs_error   = ( 'error' === $kcs_status );
?>
<!-- CONTACT -->
<section id="contact" style="scroll-margin-top:84px;background:var(--bg2);padding:84px 24px;transition:background .45s;border-top:1px solid rgba(255,255,255,0.5)">
	<div style="max-width:900px;margin:0 auto">
		<div style="text-align:center;max-width:600px;margin:0 auto">
			<div style="display:inline-flex;align-items:center;gap:8px;font-size:12.5px;letter-spacing:var(--eyebrow-spacing);text-transform:uppercase;font-weight:700;color:var(--blue)">Book Kate</div>
			<h2 style="font-family:var(--font-display);font-weight:700;font-size:clamp(30px,4vw,46px);line-height:1.05;letter-spacing:-0.015em;margin:14px 0 0;color:var(--fg)">Invite Kate to your stage</h2>
			<p style="font-size:17px;line-height:1.6;color:var(--fg-soft);margin:16px 0 0">Tell Kate a little about your event, audience, and goals. She'll follow up with availability, fit, and pricing for your keynote, workshop, training, or panel.</p>
		</div>

		<?php if ( $kcs_success ) : ?>
		<div style="margin-top:38px;background:var(--grad);color:#fff;border-radius:var(--radius-lg);padding:48px 32px;text-align:center;box-shadow:var(--shadow);animation:kc-rise .4s ease" role="status">
			<div style="font-family:var(--font-display);font-weight:700;font-size:30px">Thank you. It's on its way to Kate.</div>
			<p style="font-size:17px;line-height:1.6;margin:14px auto 0;max-width:480px;color:rgba(255,255,255,0.92)">She'll follow up with availability, fit, and pricing. Want to reach out directly in the meantime?</p>
			<a href="mailto:<?php echo esc_attr( $kcs_email ); ?>" style="display:inline-block;margin-top:22px;background:#fff;color:#0a1830;text-decoration:none;padding:14px 26px;border-radius:999px;font-weight:700">Email <?php echo esc_html( $kcs_email ); ?></a>
		</div>
		<?php else : ?>

		<?php if ( $kcs_error ) : ?>
		<div role="alert" style="margin-top:28px;background:rgba(232,78,47,0.12);border:1px solid var(--accent);color:var(--fg);border-radius:var(--radius);padding:16px 18px;font-size:15px">
			Something went wrong sending your inquiry. Please check the required fields and try again, or email <a href="mailto:<?php echo esc_attr( $kcs_email ); ?>" style="color:var(--blue);font-weight:700;text-decoration:none"><?php echo esc_html( $kcs_email ); ?></a>.
		</div>
		<?php endif; ?>

		<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" style="margin-top:38px;background:var(--bg);border:1px solid var(--line);border-radius:var(--radius-lg);padding:32px;box-shadow:var(--shadow)">
			<input type="hidden" name="action" value="kcs_inquiry">
			<?php wp_nonce_field( 'kcs_inquiry', 'kcs_inquiry_nonce' ); ?>
			<!-- Honeypot: hidden from humans, catches bots. -->
			<div style="position:absolute;left:-9999px" aria-hidden="true">
				<label>Website<input type="text" name="kcs_website" tabindex="-1" autocomplete="off"></label>
			</div>

			<div style="display:grid;grid-template-columns:1fr 1fr;gap:18px" class="kc-form">
				<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Name *<input required name="name" placeholder="Your name" style="padding:12px 14px;border:1px solid var(--line);border-radius:var(--radius);background:var(--bg2);font-weight:400;font-size:15px"></label>
				<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Organization *<input required name="org" placeholder="Where you're booking for" style="padding:12px 14px;border:1px solid var(--line);border-radius:var(--radius);background:var(--bg2);font-weight:400;font-size:15px"></label>
				<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Email *<input required type="email" name="email" placeholder="you@org.com" style="padding:12px 14px;border:1px solid var(--line);border-radius:var(--radius);background:var(--bg2);font-weight:400;font-size:15px"></label>
				<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Phone *<input required type="tel" name="phone" placeholder="(000) 000-0000" style="padding:12px 14px;border:1px solid var(--line);border-radius:var(--radius);background:var(--bg2);font-weight:400;font-size:15px"></label>
				<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Event type<select name="eventtype" style="padding:12px 14px;border:1px solid var(--line);border-radius:var(--radius);background:var(--bg2);font-weight:400;font-size:15px"><option>Conference</option><option>University / College</option><option>Nonprofit</option><option>Corporate / Leadership</option><option>Civic / Community</option><option>Other</option></select></label>
				<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Format *<select required name="format" style="padding:12px 14px;border:1px solid var(--line);border-radius:var(--radius);background:var(--bg2);font-weight:400;font-size:15px"><option value="" disabled selected>Select a format</option><option>Keynote</option><option>Workshop</option><option>Training</option><option>Panel</option></select></label>
				<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Date or timeframe *<input required name="date" placeholder="e.g. Fall 2026" style="padding:12px 14px;border:1px solid var(--line);border-radius:var(--radius);background:var(--bg2);font-weight:400;font-size:15px"></label>
				<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Location or virtual *<input required name="location" placeholder="City, or Virtual" style="padding:12px 14px;border:1px solid var(--line);border-radius:var(--radius);background:var(--bg2);font-weight:400;font-size:15px"></label>
				<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Audience size<input name="audience" placeholder="e.g. 150" style="padding:12px 14px;border:1px solid var(--line);border-radius:var(--radius);background:var(--bg2);font-weight:400;font-size:15px"></label>
				<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Topic interest<input name="topic" placeholder="What would you like Kate to speak about?" style="padding:12px 14px;border:1px solid var(--line);border-radius:var(--radius);background:var(--bg2);font-weight:400;font-size:15px"></label>
			</div>
			<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft);margin-top:18px">Message<textarea name="message" rows="4" placeholder="Tell Kate about your audience and what you're hoping for." style="padding:12px 14px;border:1px solid var(--line);border-radius:var(--radius);background:var(--bg2);font-weight:400;font-size:15px;resize:vertical"></textarea></label>
			<div style="display:flex;flex-wrap:wrap;align-items:center;gap:18px;margin-top:24px">
				<button type="submit" style="background:var(--btn-bg);color:var(--btn-fg);padding:16px 30px;border-radius:var(--btn-radius);font-weight:700;font-size:16px;box-shadow:var(--shadow)">Invite Kate to Speak</button>
				<span style="font-size:14px;color:var(--muted)">Prefer email? <a href="mailto:<?php echo esc_attr( $kcs_email ); ?>" style="color:var(--blue);font-weight:700;text-decoration:none"><?php echo esc_html( $kcs_email ); ?></a></span>
			</div>
		</form>
		<?php endif; ?>
	</div>
</section>
