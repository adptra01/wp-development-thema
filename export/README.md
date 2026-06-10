# Akar Solution — Deployment Guide

## Overview

WordPress child theme + API plugin for Akar Solution website.

| File | Size | Description |
|------|------|-------------|
| `akar-theme.zip` | ~430KB | Child theme (templates, CSS, JS, illustrations) |
| `akar-plugins.zip` | ~25KB | Custom API endpoint plugin (read + CRUD) |
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

### 3. Upload Plugin

1. Navigate to `htdocs/wp-content/plugins/`
2. Upload `akar-plugins.zip`
3. Extract → verify `custom-api-endpoint/` folder exists

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
6. Go to **Settings** → **Custom API Endpoint** → Generate API key
7. Go to **Appearance** → **Customize** → **Akar Solution** panel
8. Update WhatsApp number, email, address, colors

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
- [ ] Generate new API key
- [ ] Configure WhatsApp number in Customizer
- [ ] Configure email address in Customizer
- [ ] Test all pages load correctly
- [ ] Test API read: `GET /wp-api-proxy.php/status`
- [ ] Test API CRUD: `POST /wp-api-proxy.php/posts`
- [ ] Enable SSL in Control Panel → SSL Certificates
- [ ] Set PHP 8.0+ in Control Panel → PHP Configuration

---

## Notes

- **Redis Object Cache**: Not supported on InfinityFree (skipped)
- **Multisite**: Not supported on InfinityFree (skipped)
- **Fonts**: Loaded from FontShare CDN (Clash Display + Satoshi)
- **Illustrations**: Streamline (CC BY 4.0)
