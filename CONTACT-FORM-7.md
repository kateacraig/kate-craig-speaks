# Booking form via Contact Form 7

This theme can render the booking form through **Contact Form 7 (CF7)** so every
submission is stored in the database, while looking identical to the built-in
form. Until you paste a CF7 shortcode into the Customizer, the built-in form is
used automatically.

## 1. Install plugins

- **Contact Form 7** — the form itself.
- **Contact Form CFDB7** — stores every submission in the database
  (Dashboard → *CFDB7* menu, exportable to CSV/Excel).
- **Spam protection: Cloudflare Turnstile** (CF7's recommended option — free, no
  reCAPTCHA Enterprise billing). Get free keys at Cloudflare → Turnstile, then add
  them under Contact → Integration → Cloudflare Turnstile. Add hostnames
  `katecraigspeaks.com` and `kate-craig-speaks.local`. (Avoid reCAPTCHA: Google is
  migrating it to Enterprise, which blocked CF7 submissions and can incur charges.)
- **WP Mail SMTP** — for Mailgun delivery (see step 5).

## 2. Create the form

Contact → Add New. Name it "Booking". In the **Form** tab, replace everything
with the block below (it reuses the theme's classes/inline styles, so it matches
the design exactly). CF7 auto-formatting is already disabled by the theme.

```html
<div style="display:grid;grid-template-columns:1fr 1fr;gap:18px" class="kc-form">
<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Name *[text* your-name placeholder "Your name"]</label>
<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Organization *[text* org placeholder "Where you're booking for"]</label>
<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Email *[email* email placeholder "you@org.com"]</label>
<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Phone *[tel* phone placeholder "(000) 000-0000"]</label>
<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Event type[select eventtype "Conference" "University / College" "Nonprofit" "Corporate / Leadership" "Civic / Community" "Other"]</label>
<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Format *[select* format first_as_label "Select a format" "Keynote" "Workshop" "Training" "Panel"]</label>
<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Date or timeframe *[text* date placeholder "e.g. Fall 2026"]</label>
<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Location or virtual *[text* location placeholder "City, or Virtual"]</label>
<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Audience size[text audience placeholder "e.g. 150"]</label>
<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft)">Topic interest[text topic placeholder "What would you like Kate to speak about?"]</label>
</div>
<label style="display:flex;flex-direction:column;gap:7px;font-size:13px;font-weight:700;color:var(--fg-soft);margin-top:18px">Message[textarea message 40x4 placeholder "Tell Kate about your audience and what you're hoping for."]</label>
<div style="margin-top:24px">[submit "Invite Kate to Speak"]</div>
```

(The "Prefer email?" line is added by the theme, just under the form.)

## 3. Mail tab

| Field | Value |
|-------|-------|
| **To** | `kate@katecraigconsulting.com` |
| **From** | `Kate Craig Speaks <noreply@katecraigspeaks.com>` |
| **Subject** | `[Speaking inquiry] [your-name] — [org]` |
| **Additional headers** | `Reply-To: [email]` |

**Message body:**

```
New speaking inquiry from katecraigspeaks.com

Name: [your-name]
Organization: [org]
Email: [email]
Phone: [phone]
Event type: [eventtype]
Format: [format]
Date or timeframe: [date]
Location: [location]
Audience size: [audience]
Topic interest: [topic]

Message:
[message]
```

Save. CFDB7 stores every submission automatically — no Mail-tab changes needed
for that.

### Mail (2) — autoresponder to the person who submitted

In the Mail tab, check **"Use Mail (2)"** to send a friendly confirmation back
to the sender.

| Field | Value |
|-------|-------|
| **To** | `[email]` |
| **From** | `Kate Craig Speaks <noreply@katecraigspeaks.com>` |
| **Subject** | `Thanks for reaching out to Kate Craig Speaks` |
| **Additional headers** | `Reply-To: kate@katecraigconsulting.com` |

Check **"Exclude lines with blank mail-tags from output"**.

**Message body:**

```
Hi [your-name],

Thank you so much for reaching out! I'm genuinely excited about the opportunity to be part of your event, and I appreciate you taking the time to share the details.

I've received your request and will get back to you shortly with availability, fit, and next steps. In the meantime, if anything comes up or you'd like to add to your request, just reply to this email or reach me directly at kate@katecraigconsulting.com.

For your records, here's what you sent:

Organization: [org]
Event type: [eventtype]
Format: [format]
Date or timeframe: [date]
Location: [location]
Audience size: [audience]
Topic interest: [topic]

Message:
[message]

Talk soon,
Kate Craig
Kate Craig Speaks
katecraigspeaks.com
```

## 4. Point the theme at the form

Copy the form's shortcode (top of the CF7 form list), e.g.
`[contact-form-7 id="abc123" title="Booking"]`, then paste it into:

**Appearance → Customize → Kate Craig Speaking → "Contact Form 7 shortcode"** and
Publish. The site swaps the built-in form for CF7 immediately. Clear it to revert.

On success the theme hides the form and shows the gradient "Thank you" panel
(via the `wpcf7mailsent` event) — same as before, without a page reload.

## 5. Mailgun delivery

Configure **WP Mail SMTP → Mailgun** (API, not SMTP — Cloudways blocks SMTP
ports). Verify the **sending** domain `katecraigspeaks.com` in Mailgun and set
the From address there. See the project notes on Mailgun for the DNS details.
