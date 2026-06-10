# Akar Solution — Deployment Guide

## Overview

WordPress child theme + plugins for Akar Solution website.

| File | Size | Description |
|------|------|-------------|
| `akar-theme.zip` | ~430KB | Child theme (templates, CSS, JS, illustrations) |
| `akar-plugins.zip` | ~27KB | 2 plugins: Custom API Endpoint (CRUD) + Akar llms.txt |
| `akar-mu-plugins.zip` | ~1.3KB | 2 mu-plugins (disable header/footer, hide admin bar) |
| `akar-database.sql` | 1.4MB | WordPress database dump |

---

## Features

- CSS/JS extracted to external files (browser-cached)
- Fonts enqueued via `wp_enqueue_style()` (FontShare CDN)
- Customizer settings: WhatsApp, email, Instagram, address, hours, brand name, colors
- All hardcoded values replaced with Customizer helpers
- i18n-ready with `akar-solution` textdomain
- API: full CRUD (create/update/delete posts) + read endpoints
- Proper escaping: `esc_url()`, `esc_html()`, `esc_attr()`, `wp_kses_post()`, `absint()`
- Schema.org structured data on service detail pages
- **llms.txt**: Dynamic `/llms.txt` endpoint for AI tool visibility (ChatGPT, Gemini, Claude)

---

## Step-by-Step Deployment (InfinityFree)

### 1. Install WordPress

1. Login to InfinityFree Control Panel
2. Go to **Software** → **Softaculous Apps Installer**
3. Search **WordPress** → Install
4. Set domain/subdomain → click Install
5. Note down: **Database Name**, **Database User**, **Database Password**

### 2. Upload Theme

1. Go to **Files** → **File Manager**
2. Navigate to `htdocs/wp-content/themes/`
3. Upload `akar-theme.zip`
4. Extract the zip
5. Verify `akar-solution/` folder exists in `themes/`

### 3. Upload Plugins

1. Navigate to `htdocs/wp-content/plugins/`
2. Upload `akar-plugins.zip`
3. Extract → verify **2 folders** exist:
   - `custom-api-endpoint/`
   - `akar-llms-txt/`

### 4. Upload Mu-Plugins

1. Navigate to `htdocs/wp-content/`
2. If `mu-plugins/` doesn't exist, create it
3. Upload `akar-mu-plugins.zip`
4. Extract → verify 2 `.php` files in `mu-plugins/`

### 5. Import Database

1. Go to Control Panel → **phpMyAdmin**
2. Select your WordPress database
3. Click **Import** tab
4. Choose `akar-database.sql`
5. Click **Go**

### 6. Edit wp-config.php

Open `wp-config.php` and update:

```php
define( 'DB_NAME', 'your_infinityfree_db_name' );
define( 'DB_USER', 'your_infinityfree_db_user' );
define( 'DB_PASSWORD', 'your_infinityfree_db_password' );
define( 'DB_HOST', 'sql.infinityfree.com' );
```

Also update:

```php
define( 'WP_SITEURL', 'https://yourdomain.com' );
define( 'WP_HOME', 'https://yourdomain.com' );
```

### 7. Activate & Configure

1. Login to `https://yourdomain.com/wp-admin/`
2. Go to **Appearance** → **Themes**
3. Activate **Akar Solution** child theme
4. Go to **Plugins** → **Installed Plugins**
5. Activate **Custom API Endpoint**
6. Activate **Akar llms.txt**
7. Go to **Settings** → **Permalinks** → click **Save Changes** (flushes rewrite rules)
8. Go to **Settings** → **Custom API Endpoint** → Generate API key
9. Go to **Appearance** → **Customize** → **Akar Solution** panel
10. Update WhatsApp number, email, address, colors

### 8. Verify llms.txt

After activating **Akar llms.txt** and flushing permalinks:

1. Visit `https://yourdomain.com/llms.txt`
2. You should see a markdown file listing your services, pages, and contact info
3. If you get a 404, go to **Settings** → **Permalinks** → **Save Changes** again

---

## How llms.txt Works

The **Akar llms.txt** plugin creates a virtual `/llms.txt` endpoint using WordPress rewrite rules. No `.htaccess` edits needed.

When activated, it:
1. Adds a rewrite rule: `/llms.txt` → `index.php?akar_llms=1`
2. Intercepts the request via `template_redirect` hook
3. Outputs dynamic markdown with your Customizer settings
4. Sets `Content-Type: text/markdown; charset=utf-8`
5. Cache-Control: `public, max-age=3600` (1 hour)

The content automatically updates when you change Customizer settings (WhatsApp, email, etc.).

### What appears in /llms.txt

- Site name and tagline
- Links to all main pages (Beranda, Layanan, Harga, etc.)
- Service list with prices
- Contact info (WhatsApp, email, hours, address)
- Industry focus areas

---

## Customizer Settings

Access via **Appearance** → **Customize** → **Akar Solution**:

| Setting | Default | Description |
|---------|---------|-------------|
| WhatsApp Number | 6285951572182 | With country code, no + or spaces |
| Email | halo@akarsolution.id | Contact email |
| Instagram | akarsolution | Without @ |
| Address | Jambi, Indonesia | Physical address |
| Working Hours | Sen—Jum, 09:00–17:00 | Business hours |
| Brand Name | Akar Solution | Displayed in nav & footer |
| Primary Color | #111111 | Dark text, buttons |
| Background Color | #f2f2f2 | Page background |
| Accent Color | #6b7280 | Muted text |

---

## API Endpoints

After deployment:

```
# Read
GET /wp-api-proxy.php/status
GET /wp-api-proxy.php/posts
GET /wp-api-proxy.php/posts/{id}
GET /wp-api-proxy.php/posts/{slug}
GET /wp-api-proxy.php/post_types
GET /wp-api-proxy.php/taxonomies
GET /wp-api-proxy.php/terms?taxonomy=category
GET /wp-api-proxy.php/users
GET /wp-api-proxy.php/seo/{id}

# Write (requires API key with permissions)
POST   /wp-api-proxy.php/posts        { title, content, status, type, categories, tags }
PUT    /wp-api-proxy.php/posts/{id}   { title, content, status, slug }
DELETE /wp-api-proxy.php/posts/{id}
```

Authentication: `?api_key=`, `X-API-Key:` header, or `Authorization: Bearer`.

See `API-DOCUMENTATION.md` in the plugin folder for full reference.

---

## Post-Deployment Checklist

- [ ] Activate Akar Solution child theme
- [ ] Activate Custom API Endpoint plugin
- [ ] Activate Akar llms.txt plugin
- [ ] Flush permalinks: **Settings** → **Permalinks** → **Save Changes**
- [ ] Generate new API key
- [ ] Configure WhatsApp number in Customizer
- [ ] Configure email address in Customizer
- [ ] Test `https://yourdomain.com/llms.txt` returns markdown
- [ ] Test all pages load correctly
- [ ] Test API read: `GET /wp-api-proxy.php/status`
- [ ] Test API CRUD: `POST /wp-api-proxy.php/posts`
- [ ] Enable SSL in Control Panel → SSL Certificates
- [ ] Set PHP 8.0+ in Control Panel → PHP Configuration

---

## Troubleshooting

### /llms.txt returns 404

1. Go to **Settings** → **Permalinks** → **Save Changes** (flushes rewrite rules)
2. If still 404, deactivate and reactivate the **Akar llms.txt** plugin
3. Check that the plugin is activated (should appear in Plugins list)

### Customizer values not appearing in /llms.txt

1. Go to **Appearance** → **Customize** → **Akar Solution**
2. Verify the WhatsApp, email, and other fields have values
3. Click **Save & Publish**
4. Refresh `/llms.txt`

### API returns 403 or "Invalid API key"

1. Go to **Settings** → **Custom API Endpoint**
2. Click **Generate New Key** or copy the existing key
3. Use the key in your request: `?api_key=YOUR_KEY`

---

## Notes

- **Redis Object Cache**: Not supported on InfinityFree (skipped)
- **Multisite**: Not supported on InfinityFree (skipped)
- **Fonts**: Loaded from FontShare CDN (Clash Display + Satoshi)
- **Illustrations**: Streamline (CC BY 4.0)
- **llms.txt**: Dynamic plugin — no `.htaccess` edits needed, just activate and flush permalinks