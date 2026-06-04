=== Custom API Endpoint ===
Contributors: wordpress-pro
Tags: api, rest, endpoint, firewall, infinityfree, proxy, json, headless
Requires at least: 5.8
Tested up to: 7.0
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Alternative API endpoint that bypasses /wp-json/ REST API firewall blocks on restricted hosting environments.

== Description ==

Custom API Endpoint creates a standalone PHP endpoint (`wp-api-proxy.php`) at the WordPress root that bypasses server-level firewall blocks on the standard WordPress REST API (`/wp-json/` directory). Designed for InfinityFree and similar restricted hosting.

**Features:**

* RESTful path-based URLs: `GET /wp-api-proxy.php/posts`, `/posts/1`, `/users`, `/seo/1`
* API key authentication with per-key permission scopes
* Three auth methods: query param, X-API-Key header, Bearer token
* Supports posts, pages, custom post types, taxonomies, terms, users, metadata
* SEO data extraction from Yoast SEO, Rank Math, and All in One SEO
* Response caching via WordPress transients
* Per-key rate limiting
* Access logging with request metrics
* CORS headers for cross-origin integration
* Admin settings page for key management

**How It Works:**

The plugin generates a standalone `wp-api-proxy.php` file at the WordPress root directory. This file uses `require_once('wp-load.php')` to bootstrap WordPress directly, bypassing the REST API routing layer entirely. Since the URL doesn't contain `/wp-json/`, InfinityFree's firewall doesn't intercept it.

== Installation ==

1. Upload the `custom-api-endpoint` folder to `/wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu
3. Go to Settings > Custom API Endpoint to generate API keys
4. Start making API requests to `https://yoursite.com/wp-api-proxy.php`

== Configuration ==

**Rate Limiting** (add to wp-config.php):
`define('CUSTOM_API_RATE_LIMIT', 120);` — max requests per window
`define('CUSTOM_API_RATE_WINDOW', 60);` — window in seconds

**CORS Origins** (add to wp-config.php):
`define('CUSTOM_API_ALLOWED_ORIGINS', 'app.example.com,admin.example.com');`

Use `*` to allow all origins.

== API Reference ==

**Authentication:**
All endpoints except `/status` require an API key passed via one of:
* Query parameter: `?api_key=YOUR_KEY`
* HTTP header: `X-API-Key: YOUR_KEY`
* Bearer token: `Authorization: Bearer YOUR_KEY`

**Endpoints:**

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/status` | Health check (no auth) |
| GET | `/posts` | List posts with filtering |
| GET | `/posts/{id}` | Single post by ID |
| GET | `/posts/{slug}` | Single post by slug |
| GET | `/post_types` | Available post types |
| GET | `/taxonomies[/post_type]` | Taxonomies |
| GET | `/terms?taxonomy=xxx` | Terms in taxonomy |
| GET | `/users` | User listing |
| GET | `/seo/{id}` | SEO metadata |

**Query Parameters for /posts:**
`type`, `per_page` (max 100), `page`, `status`, `search`, `category`, `tag`, `author`, `orderby`, `order`, `taxonomy`+`term`, `include_meta=1`, `include_taxonomies=1`, `content_type=raw`

**Bypass cache:** Add `nocache=1` to any GET request.

== Frequently Asked Questions ==

= Does this work on InfinityFree? =

Yes. The endpoint file is at the WordPress root, not under `/wp-json/`, so InfinityFree's firewall doesn't block it.

= Is authentication required? =

Yes. All endpoints except `/status` require a valid API key. You manage keys in Settings > Custom API Endpoint.

= What SEO plugins are supported? =

Yoast SEO, Rank Math, and All in One SEO (AIOSEO). The endpoint auto-detects which one is active.

== Screenshots ==

1. Settings page with API key management
2. Access log monitoring
3. API key generation with permission scopes

== Changelog ==

= 1.0.0 =
* Initial release
* RESTful path-based API routing
* API key authentication with scoped permissions
* Post, page, CPT, taxonomy, term, user, SEO endpoints
* Response caching, rate limiting, access logging
* CORS support
