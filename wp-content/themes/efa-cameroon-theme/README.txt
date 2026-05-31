=== EFA Cameroon WordPress Theme ===

Theme Name: EFA Cameroon
Version: 1.0.0
Requires WordPress: 6.0+
Requires PHP: 8.0+
Text Domain: efa-cameroon

== INSTALLATION ==

1. Upload the `efa-cameroon-theme` folder to /wp-content/themes/
2. Activate the theme from Appearance > Themes
3. Go to "Options EFA" in the admin menu to set phone, email, addresses, and social links
4. Set a static front page: Settings > Reading > "A static page" → set Homepage to your front page
5. Assign the "Page À propos" page template to your About page via the Page Attributes panel

== THEME STRUCTURE ==

efa-cameroon-theme/
├── style.css              ← Theme identification (required by WordPress)
├── functions.php          ← Enqueues, CPTs, meta boxes, ajax, theme options
├── header.php             ← Top bar + sticky main navbar
├── footer.php             ← Newsletter, footer columns, footer bottom
├── front-page.php         ← Homepage: hero carousel, about, partners, domaines, projects, blog
├── index.php              ← Blog archive with sidebar
├── page.php               ← Generic page template
├── page-about.php         ← "Page À propos" custom template
├── single.php             ← Single blog post
├── archive-efa_project.php← Projects archive
├── inc/
│   └── nav-walker.php     ← Bootstrap 5 nav walker + fallback menu
└── assets/
    ├── css/custom.css     ← All custom styles from original project
    ├── js/main.js         ← Sticky navbar + newsletter AJAX
    └── img/               ← Bundled images (5.jpg, g.png)

== CUSTOM POST TYPES ==

- efa_project   → Projets (with Partner, Period, Beneficiaries meta)
- efa_team      → Équipe (with Role meta)
- efa_partner   → Partenaires (logo images)

== CUSTOM TAXONOMY ==

- efa_domaine   → Domains d'intervention (used on projects and posts)

== MENUS ==

Register two menus in Appearance > Menus:
- "Menu principal" (primary)
- "Menu pied de page" (footer)

The nav walker auto-converts items with children into Bootstrap dropdowns.
Add a menu item titled exactly "divider" to insert a dropdown divider.

== THEME OPTIONS ==

Appearance > Options EFA:
- Phone number
- Email address
- Office address 1 & 2
- Social media URLs (Facebook, Twitter, Instagram, LinkedIn)

== NEWSLETTER ==

Subscriber emails are stored in wp_options under `efa_newsletter_subscribers`.
To integrate Mailchimp/Brevo/etc., edit the `efa_newsletter_subscribe()` function in functions.php.
