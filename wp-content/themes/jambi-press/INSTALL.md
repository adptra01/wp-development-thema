# Jambi Press — Theme Installation

## How to Install

1. **Appearance → Themes → Add New → Upload Theme**
2. Click **Choose File**, select `jambi-press.zip`
3. Click **Install Now**, then **Activate**

## Post-Activation

### Auto-Created Pages
The following 13 footer pages are created automatically on activation:

| Column | Pages |
|--------|-------|
| **Redaksi** | Tentang Kami, Profil Redaksi, Pedoman Media Siber, Kebijakan Editorial, Kode Etik |
| **Kontak** | Kontak Redaksi, Iklan & Kerja Sama, Press Release |
| **Kebijakan** | Kebijakan Privasi, Disclaimer, Syarat & Ketentuan, Hak Cipta |
| **Lain** | E-Paper |

### Seed Sample Data
Visit this endpoint (logged in as admin) to create 11 categories + 10 sample posts:

```
https://yourdomain.id/wp-json/jpseed/v1/run
```

### Ad Inserter Setup
1. Install **Ad Inserter** plugin via **Plugins → Add New**
2. Configure blocks 2, 4, 5, 6 with your Adsterra/ads scripts
3. Theme uses responsive classes: `.jp-ad-desktop` and `.jp-ad-mobile`

## Requirements

| Requirement | Minimum |
|-------------|---------|
| WordPress | 6.4+ |
| PHP | 8.0+ |
