<?php
/**
 * Footer Template
 * @package Jambi_Press
 */
?>

<!-- ============================================================
     SECTION B: STICKY MOBILE SMARTLINK
     ============================================================ -->
<div class="jp-sticky-mobile">
    <span class="jp-ad-label" style="display:block; text-align:center; margin-bottom:2px;">Iklan</span>
    <script src="https://www.effectivecpmnetwork.com/tat55r36?key=4259da98dece6aa02e99d74bb47fc311"></script>
</div>

<!-- ============================================================
     SECTION 12: NEWSLETTER
     ============================================================ -->
<section id="newsletter" style="background: var(--jp-dark); padding: 64px 0;">
    <div class="jp-container">
        <div style="max-width: 720px; margin: 0 auto; text-align: center;">
            <span class="jp-eyebrow" style="color: var(--jp-red);">Newsletter Harian</span>
            <h2 class="jp-display-2" style="color: var(--jp-white); margin: 12px 0 16px; text-wrap: balance;">
                Kabar Jambi Pagi, Langsung ke Inbox
            </h2>
            <p style="color: var(--jp-grey-300); margin: 0 0 32px; font-size: 1.0625rem;">
                Ringkasan berita terpenting setiap pukul 07.00 WIB. Tanpa spam. Berhenti kapan saja.
            </p>
            <form style="display:flex; flex-direction:column; gap: 12px; max-width: 440px; margin: 0 auto;" onsubmit="event.preventDefault(); this.querySelector('button').textContent='Terima kasih!'; this.querySelector('button').disabled=true;">
                <div style="display:flex; gap: 12px;">
                    <input type="email" required placeholder="Alamat email Anda" style="flex:1; padding: 14px 18px; background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.18); border-radius: 6px; color: var(--jp-white); font-size: .875rem; outline: 0;">
                    <button type="submit" class="jp-btn jp-btn-primary" style="padding: 14px 22px; white-space: nowrap; flex-shrink: 0;">Langganan</button>
                </div>
                <p style="color: var(--jp-grey-400); font-size: .6875rem; margin: 0; text-align: center;">
                    Kami menghormati privasi Anda. Baca <a href="<?php echo esc_url( home_url( '/kebijakan-privasi' ) ); ?>" style="color: var(--jp-red); text-decoration: underline;">Kebijakan Privasi</a>.
                </p>
            </form>
        </div>
    </div>
</section>

<!-- ============================================================
     SECTION 13: FOOTER
     ============================================================ -->
<footer style="background: var(--jp-dark); color: var(--jp-grey-300);">
    <div class="jp-container" style="padding: 64px 16px 32px;">

        <!-- Top: Brand + 4 columns -->
        <div style="display:grid; gap: 40px; grid-template-columns: 1fr;">
            <style>
                @media (min-width: 768px) { .jp-footer-grid { grid-template-columns: 2fr 1fr 1fr 1fr 1fr !important; gap: 48px !important; } }
            </style>
            <div class="jp-footer-grid" style="display:grid; gap: 32px;">

                <!-- Brand Column -->
                <div>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="display:flex; align-items:center; margin-bottom: 16px;" aria-label="Jambi Press">
                        <svg width="140" height="28" viewBox="0 0 180 40" fill="none" role="img" aria-label="Jambi Press">
                            <text x="0" y="32" font-family="'Cabinet Grotesk','Inter',system-ui,sans-serif" font-weight="900" font-size="32" letter-spacing="-0.02" fill="var(--jp-red)">JAMBI</text>
                            <text x="104" y="32" font-family="'Cabinet Grotesk','Inter',system-ui,sans-serif" font-weight="900" font-size="32" letter-spacing="-0.02" fill="var(--jp-white)">PRESS</text>
                        </svg>
                    </a>
                    <p style="color: var(--jp-grey-300); font-size: .875rem; line-height: 1.65; margin: 0 0 20px; max-width: 32ch;">
                        Portal media digital resmi untuk Provinsi Jambi. Berita kredibel, cepat, dan independen sejak 2024.
                    </p>
                    <div style="display:flex; gap: 8px;">
                        <a href="#" aria-label="Facebook" style="width: 36px; height: 36px; border-radius: 9999px; background: rgba(255,255,255,.08); display:flex; align-items:center; justify-content:center; color: var(--jp-grey-300); transition: all .2s ease;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" aria-label="Instagram" style="width: 36px; height: 36px; border-radius: 9999px; background: rgba(255,255,255,.08); display:flex; align-items:center; justify-content:center; color: var(--jp-grey-300); transition: all .2s ease;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="#" aria-label="X" style="width: 36px; height: 36px; border-radius: 9999px; background: rgba(255,255,255,.08); display:flex; align-items:center; justify-content:center; color: var(--jp-grey-300); transition: all .2s ease;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="#" aria-label="YouTube" style="width: 36px; height: 36px; border-radius: 9999px; background: rgba(255,255,255,.08); display:flex; align-items:center; justify-content:center; color: var(--jp-grey-300); transition: all .2s ease;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <a href="#" aria-label="TikTok" style="width: 36px; height: 36px; border-radius: 9999px; background: rgba(255,255,255,.08); display:flex; align-items:center; justify-content:center; color: var(--jp-grey-300); transition: all .2s ease;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5.8 20.1a6.34 6.34 0 0 0 10.86-4.43V8.69a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.13z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Redaksi -->
                <div>
                    <h4 style="color: var(--jp-white); font-size: .8125rem; font-weight: 800; text-transform: uppercase; letter-spacing: .14em; margin: 0 0 16px;">Redaksi</h4>
                    <ul style="list-style: none; padding: 0; margin: 0; display:flex; flex-direction:column; gap: 10px;">
                        <li><a href="<?php echo esc_url( home_url( '/tentang-kami' ) ); ?>" style="font-size: .875rem;">Tentang Kami</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/pedoman-media-siber' ) ); ?>" style="font-size: .875rem;">Pedoman Media Siber</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 style="color: var(--jp-white); font-size: .8125rem; font-weight: 800; text-transform: uppercase; letter-spacing: .14em; margin: 0 0 16px;">Kontak</h4>
                    <ul style="list-style: none; padding: 0; margin: 0; display:flex; flex-direction:column; gap: 10px;">
                        <li><a href="<?php echo esc_url( home_url( '/hubungi-redaksi' ) ); ?>" style="font-size: .875rem;">Hubungi Redaksi</a></li>
                    </ul>
                </div>

                <!-- Kebijakan -->
                <div>
                    <h4 style="color: var(--jp-white); font-size: .8125rem; font-weight: 800; text-transform: uppercase; letter-spacing: .14em; margin: 0 0 16px;">Kebijakan</h4>
                    <ul style="list-style: none; padding: 0; margin: 0; display:flex; flex-direction:column; gap: 10px;">
                        <li><a href="<?php echo esc_url( home_url( '/kebijakan-privasi' ) ); ?>" style="font-size: .875rem;">Kebijakan Privasi</a></li>
                    </ul>
                </div>

                <!-- Kategori Cepat -->
                <div>
                    <h4 style="color: var(--jp-white); font-size: .8125rem; font-weight: 800; text-transform: uppercase; letter-spacing: .14em; margin: 0 0 16px;">Kategori</h4>
                    <ul style="list-style: none; padding: 0; margin: 0; display:flex; flex-direction:column; gap: 10px;">
                        <?php
                        $footer_cats = [ 'politik', 'ekonomi', 'kriminal', 'olahraga', 'wisata' ];
                        foreach ( $footer_cats as $fc ) :
                            $fc_obj = get_category_by_slug( $fc );
                            if ( ! $fc_obj ) continue;
                        ?>
                        <li><a href="<?php echo esc_url( get_category_link( $fc_obj->term_id ) ); ?>" style="font-size: .875rem;"><?php echo esc_html( $fc_obj->name ); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom -->
    <div style="border-top: 1px solid rgba(255,255,255,.08);">
        <div class="jp-container" style="padding: 20px 16px; display:flex; flex-direction:column; gap: 12px; align-items:center; justify-content: space-between;">
            <style>
                @media (min-width: 768px) { .jp-footer-bottom { flex-direction: row !important; } }
            </style>
            <div class="jp-footer-bottom" style="display:flex; flex-direction:column; gap: 12px; align-items:center; justify-content: space-between; width: 100%;">
                <p style="margin: 0; font-size: .75rem; color: var(--jp-grey-400);">
                    &copy; <?php echo date( 'Y' ); ?> Jambi Press. Hak cipta dilindungi.
                </p>
                <div style="display:flex; align-items:center; gap: 16px; font-size: .75rem;">
                    <a href="<?php echo esc_url( home_url( '/kebijakan-privasi' ) ); ?>" style="color: var(--jp-grey-400);">Kebijakan Privasi</a>
                    <span style="color: var(--jp-grey-600);">|</span>
                    <a href="<?php echo esc_url( home_url( '/pedoman-media-siber' ) ); ?>" style="color: var(--jp-grey-400);">Pedoman Media Siber</a>
                </div>
            </div>
        </div>
    </div>
    </footer>

<style>
    .jp-footer-grid a { color: var(--jp-grey-300); }
    .jp-footer-grid a:hover { color: var(--jp-white); }
    .jp-footer-bottom a { color: var(--jp-grey-400); }
    .jp-footer-bottom a:hover { color: var(--jp-white); }
    footer > div > div > div > div > div > a:hover { background: var(--jp-red); color: var(--jp-white); }
</style>

<?php wp_footer(); ?>
</body>
</html>
