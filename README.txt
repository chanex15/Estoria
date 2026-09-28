=== Estoria ===
Contributors: Estoria Studio
Requires at least: 6.0
Tested up to: 6.7
Requires PHP: 7.4
Version: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: custom-menu, custom-logo, featured-images, threaded-comments, translation-ready

Premium real-estate investment theme reverse-engineered from a professional agency reference.

== Description ==
Estoria is a standalone WordPress theme for real-estate investment businesses:
topbar with contact details, sticky header, display hero with phone capture,
arched tower photography, apartments with building filter, services, how-it-works,
prices, about, testimonial slider, FAQ accordion, CTA band, contact section and
a callback modal. No page builder, no framework, no build step.

== Installation ==
1. WordPress Dashboard → Appearance → Themes → Add New → Upload Theme.
2. Choose estoria.zip (or wordpress-theme.zip) → Install Now → Activate.
3. Appearance → Menus: create a menu and assign it to "Primary Menu".
4. Appearance → Customize → Estoria Contact: set phone, address, email, hours.
5. Appearance → Customize → Estoria Hero: adjust headline, payout and occupancy.
6. Settings → Reading: set "Your homepage displays" to "A static page" and
   choose any page using the Front Page template (or leave posts page for blog).

== Menus ==
* Primary Menu — header + mobile drawer (recommend: Home, Apartments, Services, Prices, About Us).
* Footer Menu — reserved for future use.

== Customizer ==
* Estoria Contact: phone, address, email, hours (used in topbar, header, footer, contact).
* Estoria Hero: headline parts, subtitle, payout figure, occupancy figure.
* Site Identity: supports custom logo.

== Forms ==
* Callback + contact forms submit via admin-ajax (estoria_callback / estoria_contact),
  are stored as private posts and emailed to the admin address. Nonce-protected.

== Editing apartments ==
Default listings live in functions.php → estoria_default_apartments() and can be
overridden with the `estoria_apartments` filter in a child theme. Replace images
in assets/images/ with your own photography.

== Files ==
style.css, functions.php, header.php, footer.php, front-page.php, index.php,
page.php, single.php, archive.php, search.php, 404.php, screenshot.png,
assets/css/main.css, assets/js/main.js, template-parts/*.php.

== Credits ==
* Fonts: Inter + Archivo (Google Fonts, OFL).
* Photography: Pexels (Max Vakhtbovych, Francesco Ungaro, Roman Verton) + generated hero.
* Icons: inline SVG, original.
