# Custom API Endpoint — API Documentation

**Version:** 1.0.0 | **Base URL:** `https://your-site.com/wp-api-proxy.php`

---

## Overview

Custom API Endpoint provides a RESTful JSON API for WordPress sites hosted on **InfinityFree** or other restricted hosting environments where the standard WordPress REST API (`/wp-json/`) is blocked at the server firewall level.

### How It Works

The plugin generates a standalone PHP file (`wp-api-proxy.php`) at the WordPress root directory. This file loads WordPress via `require_once('wp-load.php')` without routing through the REST API layer. Because the URL path does not contain `/wp-json/`, it is invisible to InfinityFree's firewall rules.

### Key Features

| Feature | Description |
|---------|-------------|
| RESTful routing | Path-based URLs: `GET /posts/1`, `GET /seo/1` |
| Authentication | API keys with scoped permissions |
| Response caching | 60s cache with bypass (`?nocache=1`) |
| Rate limiting | 120 req/min per key (configurable) |
| CORS | Configurable cross-origin headers |
| SEO support | Auto-detects Yoast, Rank Math, AIOSEO |
| Access logging | SQL-free request audit trail |

---

## Authentication

All endpoints except `GET /status` require a valid API key. Three auth methods are supported:

### Method 1: Query Parameter

Used by the Postman collection by default.

```
GET /wp-api-proxy.php/posts?api_key=cap_xxxxxxxxxxxxxxxx
```

### Method 2: X-API-Key Header

Recommended for server-to-server integrations.

```
GET /wp-api-proxy.php/posts
X-API-Key: cap_xxxxxxxxxxxxxxxx
```

### Method 3: Bearer Token

Best for OAuth2-style client libraries.

```
GET /wp-api-proxy.php/posts
Authorization: Bearer cap_xxxxxxxxxxxxxxxx
```

### Managing API Keys

1. Navigate to **Settings → Custom API Endpoint** in WordPress Admin
2. Click **Generate API Key** with a descriptive label (e.g. "Mobile App", "CRM Integration")
3. Select permission scopes for the key
4. Copy the generated key immediately — **it cannot be retrieved later**

**Permission Scopes:**

| Scope | Grants Access To |
|-------|-----------------|
| `posts` | `/posts`, `/post_types` |
| `taxonomies` | `/taxonomies`, `/terms` |
| `users` | `/users` |
| `seo` | `/seo/{id}` |
| `metadata` | Post meta via `?include_meta=1` |
| `custom` | Reserved for future use |

---

## Endpoints

### GET /status

Health check endpoint. **No authentication required.**

```
GET /wp-api-proxy.php/status
```

**Response (200):**
```json
{
  "status": "ok",
  "wordpress": "7.0",
  "php": "8.4.21",
  "endpoint": "wp-api-proxy.php",
  "time": "2026-06-04T13:38:41+00:00"
}
```

---

### GET /posts

List posts, pages, or any public custom post type. Supports filtering, pagination, search, and sorting.

```
GET /wp-api-proxy.php/posts
```

**Query Parameters:**

| Parameter | Type | Default | Description |
|-----------|------|---------|-------------|
| `api_key` | string | — | **Required.** API authentication key |
| `type` | string | `post` | Post type slug. Use `page` for pages, or any CPT |
| `per_page` | integer | `10` | Items per page. **Maximum: 100** |
| `page` | integer | `1` | Page number |
| `status` | string | `publish` | Post status: `publish`, `draft`, `pending`, `private`, `future`, `any` |
| `search` | string | — | Search term (searches title + content) |
| `category` | integer | — | Category term ID |
| `tag` | integer | — | Tag term ID |
| `author` | integer | — | Author user ID |
| `orderby` | string | `date` | Sort field: `date`, `title`, `ID`, `modified`, `comment_count` |
| `order` | string | `DESC` | Sort direction: `ASC`, `DESC` |
| `taxonomy` | string | — | Taxonomy slug for term filtering |
| `term` | string | — | Term slug for taxonomy filtering |
| `include_meta` | integer | `0` | Set to `1` to include post metadata |
| `include_taxonomies` | integer | `0` | Set to `1` to include taxonomy data per post |
| `content_type` | string | `rendered` | `raw` returns unprocessed content (skips `the_content` filter) |
| `nocache` | integer | `0` | Set to `1` to bypass response cache |

**Response (200):**
```json
{
  "total": 11,
  "page": 1,
  "per_page": 5,
  "total_pages": 3,
  "results": [
    {
      "id": 1,
      "title": "Hello World — WP Themes",
      "slug": "hello-world",
      "type": "post",
      "status": "publish",
      "date": "2026-06-04T13:03:13+00:00",
      "modified": "2026-06-04T13:03:13+00:00",
      "excerpt": "Welcome to WordPress...",
      "content": "<p>Rendered HTML content...</p>",
      "link": "https://your-site.com/hello-world/",
      "featured_image": {
        "id": 42,
        "alt": "Featured image description",
        "full": "https://your-site.com/wp-content/uploads/image.jpg",
        "thumbnail": "https://your-site.com/wp-content/uploads/image-150x150.jpg",
        "medium": "https://your-site.com/wp-content/uploads/image-300x300.jpg"
      },
      "author": {
        "id": 1,
        "display_name": "Admin",
        "login": "admin",
        "avatar": "https://secure.gravatar.com/avatar/...?s=96&d=mm&r=g",
        "link": "https://your-site.com/author/admin/"
      },
      "comment_count": 3,
      "meta": {},
      "taxonomies": {}
    }
  ]
}
```

**Error (404):** Invalid post type
```json
{ "error": "Invalid post type: invalid_cpt", "status": 404 }
```

**Example Requests:**

```bash
# All posts with metadata and taxonomies
curl "https://your-site.com/wp-api-proxy.php/posts?api_key=KEY&include_meta=1&include_taxonomies=1"

# Pages only
curl "https://your-site.com/wp-api-proxy.php/posts?api_key=KEY&type=page"

# Search posts
curl "https://your-site.com/wp-api-proxy.php/posts?api_key=KEY&search=wordpress"

# Filter by category + taxonomy term
curl "https://your-site.com/wp-api-proxy.php/posts?api_key=KEY&taxonomy=category&term=news"

# Raw content (no the_content filter)
curl "https://your-site.com/wp-api-proxy.php/posts?api_key=KEY&per_page=1&content_type=raw"

# Bypass cache
curl "https://your-site.com/wp-api-proxy.php/posts?api_key=KEY&nocache=1"
```

---

### GET /posts/{id}` → `GET /posts/{slug}

Retrieve a single post by its numeric ID or slug.

```
GET /wp-api-proxy.php/posts/1
GET /wp-api-proxy.php/posts/hello-world
```

The endpoint auto-detects whether the path segment is a numeric ID or slug string.

**Response (200):** Same structure as list, wrapped in a `post` key.

```json
{
  "post": {
    "id": 1,
    "title": "Hello World",
    "slug": "hello-world",
    ...
  }
}
```

**Error (404):**
```json
{ "error": "Post not found.", "status": 404 }
```

---

### GET /post_types

List all publicly registered post types.

```
GET /wp-api-proxy.php/post_types
```

**Response (200):**
```json
{
  "results": [
    {
      "name": "post",
      "label": "Posts",
      "description": "",
      "hierarchical": false,
      "rest_base": "posts",
      "has_archive": false
    },
    {
      "name": "page",
      "label": "Pages",
      "description": "",
      "hierarchical": true,
      "rest_base": "pages",
      "has_archive": false
    }
  ]
}
```

---

### GET /taxonomies` → `GET /taxonomies/{post_type}

List registered taxonomies. Optionally filter by post type.

```
GET /wp-api-proxy.php/taxonomies
GET /wp-api-proxy.php/taxonomies/post
```

**Response (200):**
```json
{
  "results": [
    {
      "name": "category",
      "label": "Categories",
      "description": "",
      "hierarchical": true,
      "public": true,
      "rewrite_slug": "category"
    },
    {
      "name": "post_tag",
      "label": "Tags",
      "description": "",
      "hierarchical": false,
      "public": true,
      "rewrite_slug": "tag"
    }
  ]
}
```

---

### GET /terms

List terms in a taxonomy.

```
GET /wp-api-proxy.php/terms?taxonomy=category
```

**Query Parameters:**

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| `taxonomy` | string | **Yes** | Taxonomy slug |
| `search` | string | No | Search term name |
| `parent` | integer | No | Parent term ID |
| `slug` | string | No | Filter by term slug |
| `hide_empty` | bool | No | Hide terms with no posts (default: false) |
| `orderby` | string | No | `name` (default), `id`, `slug`, `count` |
| `order` | string | No | `ASC` (default), `DESC` |

**Response (200):**
```json
{
  "results": [
    {
      "id": 1,
      "name": "Uncategorized",
      "slug": "uncategorized",
      "description": "",
      "taxonomy": "category",
      "parent": 0,
      "count": 8,
      "link": "https://your-site.com/category/uncategorized/"
    }
  ]
}
```

**Error (404):**
```json
{ "error": "Invalid taxonomy: invalid_tax", "status": 404 }
```

---

### GET /users

List WordPress users with roles and capabilities. **Requires `users` permission.**

```
GET /wp-api-proxy.php/users
```

**Query Parameters:**

| Parameter | Type | Default | Description |
|-----------|------|---------|-------------|
| `per_page` | integer | `10` | Max 100 |
| `page` | integer | `1` | Page number |
| `role` | string | — | Filter by role: `administrator`, `editor`, `author`, `subscriber` |
| `search` | string | — | Search by login, email, display name, or ID |
| `orderby` | string | `ID` | Sort field |
| `order` | string | `DESC` | Sort direction |

**Response (200):**
```json
{
  "total": 1,
  "page": 1,
  "per_page": 10,
  "total_pages": 1,
  "results": [
    {
      "id": 1,
      "login": "admin",
      "display_name": "admin",
      "email": "admin@example.com",
      "roles": ["administrator"],
      "allcaps": ["administrator", "manage_options", "edit_posts", "..."],
      "registered": "2026-06-04 13:03:13",
      "avatar": "https://secure.gravatar.com/avatar/...?s=96&d=mm&r=g",
      "link": "https://your-site.com/author/admin/"
    }
  ]
}
```

---

### GET /seo/{id}

Retrieve SEO metadata for a specific post. Auto-detects active SEO plugin.

```
GET /wp-api-proxy.php/seo/1
```

**Supported SEO Plugins:**

| Plugin | Prefix | Fields Exposed |
|--------|--------|----------------|
| Yoast SEO | `yoast` | title, description, focus_keyword, canonical, robots (noindex/nofollow), og_title, og_description, og_image, twitter_title, twitter_description, twitter_image, readability_score |
| Rank Math | `rank_math` | title, description, focus_keyword, robots, og_title, og_description, og_image |
| All in One SEO | `aioseo` | title, description, keywords, og_title, og_description |

**Response (200) — with Yoast SEO:**
```json
{
  "data": {
    "yoast": {
      "title": "Hello World — WP Themes",
      "description": "Meta description text...",
      "focus_keyword": "wordpress themes",
      "canonical": "https://your-site.com/hello-world/",
      "robots_noindex": "0",
      "robots_nofollow": "0",
      "og_title": "Hello World — WP Themes",
      "og_description": "Open Graph description...",
      "og_image": "",
      "twitter_title": "Hello World — WP Themes",
      "twitter_description": "",
      "twitter_image": "",
      "readability_score": "90"
    }
  }
}
```

**Response (200) — no SEO plugin:**
```json
{
  "message": "No SEO plugins detected.",
  "data": {}
}
```

**Error (400):** Missing post ID
```json
{ "error": "Missing id parameter.", "status": 400 }
```

---

## CORS Configuration

CORS headers are sent on every response. By default, the `Access-Control-Allow-Origin` matches the requesting origin.

To restrict CORS to specific domains, add this constant to `wp-config.php`:

```php
define( 'CUSTOM_API_ALLOWED_ORIGINS', 'app.example.com,admin.example.com' );
```

Use `'*'` to allow all origins (less secure).

**Preflight Request:**
```
OPTIONS /wp-api-proxy.php/posts
Origin: https://app.example.com
Access-Control-Request-Method: GET

HTTP 204 No Content
Access-Control-Allow-Origin: https://app.example.com
Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS
Access-Control-Allow-Headers: Content-Type, Authorization, X-API-Key
Access-Control-Max-Age: 3600
```

---

## Rate Limiting

Rate limiting is enforced per API key. Default limits:

| Setting | Default | Config Constant |
|---------|---------|-----------------|
| Requests per window | 120 | `CUSTOM_API_RATE_LIMIT` |
| Window duration (seconds) | 60 | `CUSTOM_API_RATE_WINDOW` |

Add to `wp-config.php` to customize:
```php
define( 'CUSTOM_API_RATE_LIMIT', 300 );  // 300 requests
define( 'CUSTOM_API_RATE_WINDOW', 120 ); // per 2 minutes
```

**Rate limit exceeded (429):**
```json
{ "error": "rate limit exceeded", "status": 429 }
```

---

## Response Caching

Successful GET requests are cached via WordPress transients for **60 seconds** to reduce database load. Cache keys are derived from the full URL path and query string.

To bypass the cache for fresh data, add `?nocache=1` to any request.

---

## Error Codes

| HTTP Status | Meaning | Common Causes |
|-------------|---------|---------------|
| `200 OK` | Success | Valid request |
| `204 No Content` | Preflight success | CORS OPTIONS request |
| `400 Bad Request` | Client error | Missing required parameter (e.g., SEO without id) |
| `401 Unauthorized` | Invalid or missing API key | Wrong key, no key provided |
| `403 Forbidden` | Key disabled | Key exists but was disabled by admin |
| `404 Not Found` | Resource not found | Invalid post type, taxonomy, or post ID |
| `429 Too Many Requests` | Rate limit exceeded | Too many requests from one key |

All error responses follow this format:
```json
{
  "error": "Human-readable error message",
  "status": 404
}
```

---

## Response Headers

All responses include:

| Header | Value |
|--------|-------|
| `Content-Type` | `application/json; charset=utf-8` |
| `Access-Control-Allow-Origin` | Requesting origin or configured value |
| `Access-Control-Allow-Methods` | `GET, POST, PUT, DELETE, OPTIONS` |
| `Access-Control-Allow-Headers` | `Content-Type, Authorization, X-API-Key` |
| `Cache-Control` | `no-cache, no-store, must-revalidate` |

---

## Integration Examples

### PHP (cURL)
```php
$response = wp_remote_get( 'https://your-site.com/wp-api-proxy.php/posts', [
    'headers' => [ 'X-API-Key' => 'YOUR_API_KEY' ],
    'body'    => [ 'per_page' => 10, 'include_meta' => 1 ],
] );
$data = json_decode( wp_remote_retrieve_body( $response ), true );
```

### JavaScript (fetch)
```javascript
fetch('https://your-site.com/wp-api-proxy.php/posts?api_key=YOUR_KEY&per_page=10')
  .then(res => res.json())
  .then(data => console.log(data.results));
```

### Python
```python
import requests
resp = requests.get(
    'https://your-site.com/wp-api-proxy.php/posts',
    headers={'X-API-Key': 'YOUR_KEY'},
    params={'per_page': 10, 'include_taxonomies': 1}
)
data = resp.json()
```

### Postman Collection

Import `Custom-API-Endpoint.postman_collection.json` from the plugin directory. The collection includes:
- Pre-configured environment variables (`base_url`, `api_key`)
- All endpoints with test scripts
- All three authentication methods
- Error case requests (404, 400, 401)

---

## Installation & Setup

### New Installation

1. Upload the `custom-api-endpoint` folder to `/wp-content/plugins/`
2. Activate the plugin via **Plugins** menu
3. The plugin creates `wp-api-proxy.php` at the WordPress root
4. Go to **Settings → Custom API Endpoint**
5. Generate an API key
6. Test: `curl https://your-site.com/wp-api-proxy.php/status`

### Deactivation

Deactivating the plugin removes the `wp-api-proxy.php` file.

### Uninstall

Deleting the plugin removes all API keys, access logs, cached responses, and the endpoint file.

---

## Quick Reference

```bash
# Health check
curl https://your-site.com/wp-api-proxy.php/status

# Posts with filters
curl "https://your-site.com/wp-api-proxy.php/posts?api_key=KEY&type=page&per_page=20&include_taxonomies=1"

# Single post
curl "https://your-site.com/wp-api-proxy.php/posts/42?api_key=KEY"

# Search
curl "https://your-site.com/wp-api-proxy.php/posts?api_key=KEY&search=your+keyword"

# Users
curl "https://your-site.com/wp-api-proxy.php/users?api_key=KEY&role=editor"

# SEO metadata
curl "https://your-site.com/wp-api-proxy.php/seo/42?api_key=KEY"

# Header auth
curl -H "X-API-Key: KEY" "https://your-site.com/wp-api-proxy.php/posts"

# Bypass cache
curl "https://your-site.com/wp-api-proxy.php/posts?api_key=KEY&nocache=1"
```
