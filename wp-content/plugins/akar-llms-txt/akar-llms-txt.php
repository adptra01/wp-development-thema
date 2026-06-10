<?php
/**
 * Plugin Name: Akar llms.txt
 * Plugin URI:  https://akarsolution.id
 * Description: Serves a dynamic /llms.txt file for AI tool visibility (ChatGPT, Gemini, Claude).
 * Version:     1.0.0
 * Author:      Akar Solution
 * License:     MIT
 *
 * Based on the llmstxt.org specification.
 *
 * @package AkarLLMsTxt
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'AKAR_LLMS_VERSION', '1.0.0' );

add_action( 'init', 'akar_llms_add_rewrite', 10 );
function akar_llms_add_rewrite(): void {
    add_rewrite_rule( '^llms\.txt$', 'index.php?akar_llms=1', 'top' );
}

add_filter( 'query_vars', 'akar_llms_query_var' );
function akar_llms_query_var( array $vars ): array {
    $vars[] = 'akar_llms';
    return $vars;
}

add_action( 'template_redirect', 'akar_llms_handle_request', 1 );
function akar_llms_handle_request(): void {
    if ( ! get_query_var( 'akar_llms' ) ) {
        return;
    }

    global $wp_query;
    $wp_query->is_404  = false;
    $wp_query->is_page  = true;
    status_header( 200 );

    $brand    = function_exists( 'akar_brand' ) ? akar_brand() : get_bloginfo( 'name' );
    $email    = function_exists( 'akar_email' ) ? akar_email() : get_bloginfo( 'admin_email' );
    $whatsapp = function_exists( 'akar_whatsapp_number' ) ? akar_whatsapp_number() : '';
    $address  = function_exists( 'akar_address' ) ? akar_address() : '';
    $hours    = function_exists( 'akar_hours' ) ? akar_hours() : '';
    $base_url = home_url( '/' );

    $services = array(
        array(
            'slug'  => 'website-umkm',
            'name'  => 'Website UMKM',
            'desc'  => 'Company profile profesional 5–10 halaman, mobile responsive, SEO dasar',
            'price' => 'Mulai dari Rp 1,5 jt',
        ),
        array(
            'slug'  => 'aplikasi-custom',
            'name'  => 'Aplikasi Custom',
            'desc'  => 'Web app sesuai kebutuhan bisnis: inventory, booking, CRM, dashboard',
            'price' => 'Mulai dari Rp 2,5 jt',
        ),
        array(
            'slug'  => 'maintenance',
            'name'  => 'Maintenance',
            'desc'  => 'Update konten, backup rutin, monitoring uptime, perbaikan bug',
            'price' => 'Mulai dari Rp 150K/bulan',
        ),
        array(
            'slug'  => 'mentoring-skripsi',
            'name'  => 'Mentoring Skripsi',
            'desc'  => 'Pendampingan 1-on-1 skripsi informatika: arsitektur, code review, sidang',
            'price' => 'Rp 150K/sesi',
        ),
        array(
            'slug'  => 'konsultasi-proyek',
            'name'  => 'Konsultasi Proyek',
            'desc'  => 'Bantu pilih stack, desain database, struktur kode untuk proyek akhir',
            'price' => 'Mulai dari Rp 200K',
        ),
        array(
            'slug'  => 'code-review',
            'name'  => 'Code Review',
            'desc'  => 'Review kode: refactoring, performance, security, dokumentasi',
            'price' => 'Mulai dari Rp 100K',
        ),
    );

    $md  = "# {$brand}\n\n";
    $md .= "> Mitra digital lokal Jambi — website profesional, aplikasi custom, dan pendampingan IT untuk UMKM & mahasiswa.\n\n";

    $md .= "## Halaman Utama\n\n";
    $md .= "- [Beranda]({$base_url})\n";
    $md .= "- [Layanan]({$base_url}services)\n";
    $md .= "- [Harga]({$base_url}pricing)\n";
    $md .= "- [Portfolio]({$base_url}portfolio)\n";
    $md .= "- [Tentang]({$base_url}about)\n";
    $md .= "- [Blog]({$base_url}blog)\n";
    $md .= "- [Kontak]({$base_url}contact)\n\n";

    $md .= "## Layanan\n\n";
    foreach ( $services as $sv ) {
        $url = $base_url . 'services/' . $sv['slug'];
        $md .= "- [{$sv['name']}]({$url}): {$sv['desc']}. Harga: {$sv['price']}.\n";
    }

    $md .= "\n## Kontak\n\n";
    if ( $whatsapp ) {
        $md .= "- WhatsApp: {$whatsapp}\n";
    }
    if ( $email ) {
        $md .= "- Email: {$email}\n";
    }
    if ( $hours ) {
        $md .= "- Jam kerja: {$hours}\n";
    }
    if ( $address ) {
        $md .= "- Lokasi: {$address}\n";
    }

    $md .= "\n## Fokus Industri\n\n";
    $md .= "- Travel & Tour\n";
    $md .= "- Pelatihan & Kursus\n";
    $md .= "- Kesehatan\n";

    nocache_headers();
    header( 'Content-Type: text/markdown; charset=utf-8' );
    header( 'Cache-Control: public, max-age=3600' );
    // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Markdown, not HTML
    echo $md;
    exit;
}

register_activation_hook( __FILE__, 'akar_llms_activate' );
function akar_llms_activate(): void {
    akar_llms_add_rewrite();
    flush_rewrite_rules( false );
}

register_deactivation_hook( __FILE__, 'akar_llms_deactivate' );
function akar_llms_deactivate(): void {
    flush_rewrite_rules( false );
}