# Kate Craig Speaks — WordPress Theme

A custom, single-page WordPress theme for Kate Craig's public speaking site
(**katecraigspeaks.com**). Bright, bold, and civic, with a TEDx Johnson City
launch moment and a speaking-inquiry booking form.

## Overview

- **Type:** Custom classic (PHP) theme — follows standard WordPress theme conventions.
- **Layout:** One page with anchored sections — Hero → TEDx feature → Topics → About → Proof → Contact → Footer.
- **Design:** Implements the Claude Design export (dark palette by default; light palette via `prefers-color-scheme`).
- **Fonts:** Space Grotesk (display) + Public Sans (body), via Google Fonts.

## Structure

```
kate-craig-speaks/
├── style.css              Theme header + tokens + responsive rules
├── functions.php          Setup, asset enqueue, helpers
├── header.php / footer.php
├── front-page.php         Homepage (assembles the sections)
├── index.php              Fallback template
├── 404.php                Themed "page not found"
├── inc/
│   ├── customizer.php      Editable fields (hero copy, ticket URL, email, event date)
│   ├── form-handler.php    Inquiry form → admin-post.php → wp_mail()
│   └── content-data.php    Topics & testimonials (filterable)
├── template-parts/        hero, tedx, topics, about, proof, contact
└── assets/
    ├── images/            Theme images
    └── js/countdown.js    TEDx countdown
```

## Editable content (no code needed)

**Appearance → Customize → "Kate Craig Speaking"**: hero headline, hero
subheadline, TEDx ticket URL, contact/booking email, and TEDx event date/time
(drives the countdown).

Topics and testimonials live in `inc/content-data.php` and are exposed via the
`kcs_topics` / `kcs_testimonials` filters.

## Contact form / email

The booking form posts to `admin-post.php` (nonce + honeypot protected),
emails the configured contact address via `wp_mail()`, and shows a
success/error state. **Reply-To** is set to the visitor so replies go to the
event organizer.

For reliable delivery in production, configure an SMTP/API mailer (e.g.
Mailgun via WP Mail SMTP). Verify the **sending** domain (`katecraigspeaks.com`)
in the mailer; the recipient address can be on any domain.

## Install

1. Place this folder in `wp-content/themes/`.
2. **Appearance → Themes → activate "Kate Craig Speaks."**
3. The homepage renders automatically via `front-page.php`.
